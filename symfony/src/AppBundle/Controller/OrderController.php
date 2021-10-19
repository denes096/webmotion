<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invoice;
use AppBundle\Entity\Orders;
use AppBundle\Form\InvoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;

class OrderController extends Controller
{
    /**
     * @Route("/order", name="order")
     */
    public function indexAction(Request $request)
    {
        $invoice = new Invoice();
        $invoiceForm = $this->createForm(InvoiceType::class, $invoice);

        $invoiceForm->handleRequest($request);
        $hasFormErrors = false;
        $em = $this->getDoctrine()->getManager();

        if ($invoiceForm->isSubmitted()) {
            $invoice_id = $request->get('order_invoice');

            // new order
            if ($invoiceForm->isValid()) {
                $em->persist($invoice);

                // empty form
                $invoiceForm = $this->createForm(InvoiceType::class, new Invoice());
            } else if ($invoice_id == 'new') {
                $hasFormErrors = true;
            }

            // save order
            $netto = $request->get('order_netto');
            $tax = $request->get('order_tax');
            $summary = $request->get('order_summary');

            $order = new Orders();
            $order->setNetto($netto);
            $order->setTax($tax);
            $order->setSummary($summary);

            // new row
            if ($invoice->getId() == null) {
                $this->addFlash("success", "Sikeres mentés");

                $order->setInvoice($invoice);

                $em->persist($order);
                $em->flush();
            } else {
                $inv = $em->getRepository(Invoice::class)->find(intval($invoice->getId()));

                if (!$inv) {
                    $this->addFlash("error", "Nem létezik ilyen számlázási cím");
                } else {

                    $validator = Validation::createValidatorBuilder()
                        ->enableAnnotationMapping()
                        ->getValidator();

                    if (count($validator->validate($order)) == 0) {
                        $em->persist($order);
                        $em->flush();

                        $this->addFlash("success", "Sikeres mentés");
                    }
                }
            }
        }

        $repository = $this->getDoctrine()->getRepository(Invoice::class);
        $invoices = $repository->findAll();

        return $this->render('AppBundle:Order:index.html.twig', [
            'form' => $invoiceForm->createView(),
            'invoices' => $invoices,
            'hasFormErrors' => $hasFormErrors
        ]);
    }

    /**
     * @Route("order/list", name="order/list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em
            ->createQueryBuilder('o')
            ->from('AppBundle:Orders','o')
            ->join('o.invoice','i')
            ->select(['o', 'i'])
            ->getQuery()
            ->getResult();

        // TODO pager
        return $this->render('AppBundle:Order:list.html.twig', [
            'orders' => $query,
            'types' => Invoice::TYPES
        ]);
    }

}
