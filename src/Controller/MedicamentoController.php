<?php

namespace App\Controller;

use App\Entity\Medicamento;
use App\Form\MedicamentoType;
use App\Repository\MedicamentoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/medicamento')]
class MedicamentoController extends AbstractController
{
    #[Route('/', name: 'app_medicamento_index', methods: ['GET'])]
    public function index(MedicamentoRepository $medicamentoRepository): Response
    {
        return $this->render('medicamento/index.html.twig', [
            'medicamentos' => $medicamentoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_medicamento_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MedicamentoRepository $medicamentoRepository): Response
    {
        $medicamento = new Medicamento();
        $form = $this->createForm(MedicamentoType::class, $medicamento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $medicamentoRepository->add($medicamento, true);

            return $this->redirectToRoute('app_medicamento_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('medicamento/new.html.twig', [
            'medicamento' => $medicamento,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_medicamento_show', methods: ['GET'])]
    public function show(Medicamento $medicamento): Response
    {
        return $this->render('medicamento/show.html.twig', [
            'medicamento' => $medicamento,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_medicamento_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Medicamento $medicamento, MedicamentoRepository $medicamentoRepository): Response
    {
        $form = $this->createForm(MedicamentoType::class, $medicamento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $medicamentoRepository->add($medicamento, true);

            return $this->redirectToRoute('app_medicamento_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('medicamento/edit.html.twig', [
            'medicamento' => $medicamento,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_medicamento_delete', methods: ['POST'])]
    public function delete(Request $request, Medicamento $medicamento, MedicamentoRepository $medicamentoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$medicamento->getId(), $request->request->get('_token'))) {
            $medicamentoRepository->remove($medicamento, true);
        }

        return $this->redirectToRoute('app_medicamento_index', [], Response::HTTP_SEE_OTHER);
    }
}
