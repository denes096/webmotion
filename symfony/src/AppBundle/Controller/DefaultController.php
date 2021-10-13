<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invoice;
use AppBundle\Form\InvoiceType;
use AppBundle\Repository\InvoiceRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use function Webmozart\Assert\Tests\StaticAnalysis\true;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

	/**
	 * @Route("/invoices-list", name="invoices-list")
	 */
    public function invoicesListAction(Request $request)
	{
		$invoice = new Invoice();
		$invoiceForm = $this->createForm(InvoiceType::class, $invoice);

		$invoiceForm->handleRequest($request);
		if ($invoiceForm->isSubmitted() && $invoiceForm->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($invoice);
			$em->flush();

			return $this->redirect($request->getUri());
		}

		$repository = $this->getDoctrine()->getRepository(Invoice::class);
		$invoices = $repository->findAll();

    	return $this->render('default/invoices_list.html.twig', [
    		'form' => $invoiceForm->createView(),
			'invoices' => $invoices,
			'types' => Invoice::TYPES
		]);
	}

	/**
	 * @Route("/invoice-edit/{id}", name="invoice-edit", requirements={"id": "\d+"})
	 */
	public function invoicesEditAction(Request $request)
	{
		$id = $request->get('id');
		// redirect if no id
		if (!isset($id)) {
			return $this->redirectToRoute('invoices-list');
		}

		$repository = $this->getDoctrine()->getRepository(Invoice::class);
		$invoice = $repository->find($id);

		// no invoice found
		if (!$invoice) {
			return $this->redirectToRoute('invoices-list');
		}

		$invoiceForm = $this->createForm(InvoiceType::class, $invoice);
		$invoiceForm->handleRequest($request);

		if ($invoiceForm->isSubmitted() && $invoiceForm->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($invoice);
			$em->flush();

			return $this->redirectToRoute('invoices-list');
		}

		$invoices = $repository->findAll();

		return $this->render('default/invoices_list.html.twig', [
			'form' => $invoiceForm->createView(),
			'invoices' => $invoices,
			'types' => Invoice::TYPES,
			'editMode' => true
		]);
	}

	/**
	 * @Route("/invoice-delete/{id}", name="invoice-delete", requirements={"id": "\d+"})
	 */
	public function invoicesDeleteAction(Request $request)
	{
		$id = $request->get('id');
		// redirect if no id
		if (!isset($id)) {
			return $this->redirectToRoute('invoices-list');
		}

		$repository = $this->getDoctrine()->getRepository(Invoice::class);
		$invoice = $repository->find($id);

		// no invoice found
		if (!$invoice) {
			return $this->redirectToRoute('invoices-list');
		}

		$em = $this->getDoctrine()->getManager();
		$em->remove($invoice);
		$em->flush();

		return $this->redirectToRoute('invoices-list');
	}
}
