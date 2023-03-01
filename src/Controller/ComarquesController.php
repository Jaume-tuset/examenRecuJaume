<?php

namespace App\Controller;

use App\Service\ServeiComarques;
use Doctrine\ORM\EntityManager;
use App\Repository\CiutatRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ComarquesController extends AbstractController{

    private $comarques;
    public function __construct($dadesComarques){
        $this->comarques = $dadesComarques->getComarques();
    }

    #[Route('/comarques', name:'comarques')]
    public function comarques(ManagerRegistry $doctrine){
        $repositori = $doctrine->getRepository(Comarca::class);
        $comarca = $repositori->findAll();
        return $this->render('comarca.html.twig',array('comarques'=>$comarca));
    }

  


}