<?php

namespace App\Controller;

//use App\Entity\UE
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UEPageController extends AbstractController
{
    #[Route('/uepage/{UE}', name: 'app_uepage')]
    public function index(EntityManagerInterface $entityManager,string $UEcode): Response
    {
        $uedetails = $entityManager->getRepository(Nom_class::class)->find($UEcode);
        $post = $entityManager->getRepository(Nom_class::class)->find($UEcode);



        return $this->render('ue_page/index.html.twig', [
            'postlist' => $post,
            'ueinfo' => $uedetails,
        ]);
    }
}
