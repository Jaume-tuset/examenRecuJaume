<?php 

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IniciController extends AbstractController{


    #[Route('/', name:'inici')]
    public function inici(ManagerRegistry $doctrine){
        $repository=$doctrine->getRepository(Ciutats::class);
        $ciutats=$repository->findAll();
        return $this->render('inici.html.twig',array('ciutats'=>$ciutats));

    }

}


?>