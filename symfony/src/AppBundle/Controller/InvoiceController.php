<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invoice;
use AppBundle\Form\InvoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InvoiceController extends Controller
{
    /**
     * @Route("invoice/list", name="invoice/list")
     */
    public function listAction(Request $request)
    {
        $invoice = new Invoice();
        $invoiceForm = $this->createForm(InvoiceType::class, $invoice);

        $invoiceForm->handleRequest($request);
        if ($invoiceForm->isSubmitted() && $invoiceForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invoice);
            $em->flush();

            $this->addFlash("success", "Sikeres mentés");

            return $this->redirectToRoute('invoice/list');
        }

        $repository = $this->getDoctrine()->getRepository(Invoice::class);
        $invoices = $repository->findAll();

        return $this->render('AppBundle:Invoice:list.html.twig', [
            'form' => $invoiceForm->createView(),
            'invoices' => $invoices,
            'types' => Invoice::TYPES
        ]);
    }

    /**
     * @Route("invoice/edit/{id}", name="invoice/edit", requirements={"id": "\d+"})
     */
    public function editAction(Request $request)
    {
        $id = $request->get('id');
        // redirect if no id
        if (!isset($id)) {
            $this->addFlash("error", "Nincs megadott id");

            return $this->redirectToRoute('invoice/list');
        }

        $repository = $this->getDoctrine()->getRepository(Invoice::class);
        $invoice = $repository->find($id);

        // no invoice found
        if (!$invoice) {
            $this->addFlash("error", "A számla nem létezik");

            return $this->redirectToRoute('invoice/list');
        }

        $invoiceForm = $this->createForm(InvoiceType::class, $invoice);
        $invoiceForm->handleRequest($request);

        if ($invoiceForm->isSubmitted() && $invoiceForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invoice);
            $em->flush();

            $this->addFlash("success", "Sikeres mentés");

            return $this->redirectToRoute('invoice/list');
        }

        $invoices = $repository->findAll();

        return $this->render('AppBundle:Invoice:list.html.twig', [
            'form' => $invoiceForm->createView(),
            'invoices' => $invoices,
            'types' => Invoice::TYPES,
            'editMode' => true
        ]);
    }

    /**
     * @Route("invoice/delete/{id}", name="invoice/delete", requirements={"id": "\d+"})
     */
    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        // redirect if no id
        if (!isset($id)) {
            $this->addFlash("error", "Nincs megadott id");

            return $this->redirectToRoute('invoice/list');
        }

        $repository = $this->getDoctrine()->getRepository(Invoice::class);
        $invoice = $repository->find($id);

        // no invoice found
        if (!$invoice) {
            $this->addFlash("error", "A számla nem létezik");

            return $this->redirectToRoute('invoice/list');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($invoice);
        $em->flush();

        $this->addFlash("success", "Sikeres törlés");

        return $this->redirectToRoute('invoice/list');
    }

}
