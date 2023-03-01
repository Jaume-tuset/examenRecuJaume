<?php

namespace App\Controller;

use App\Entity\Ciutat;
use App\Service\ServeiComarques;
use Doctrine\ORM\EntityManager;
use App\Repository\CiutatRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ComarquesController extends AbstractController{

    private $ciutats;
    public function __construct($dadesComarques){
        $this->ciutats = $dadesComarques->getCiutats();
    }

    #[Route('/ciutats/inserir', name:'nou_ciutat')]
    public function comarques(ManagerRegistry $doctrine,Request $request){
        $error = null;
        $ciutatNou = new Ciutat();
        $formulari = $this->createForm(CiutatType::class, $ciutatNou);

        $formulari->handleRequest($request);
        if ($formulari->isSubmitted() && $formulari->isValid()) {
            $fitxer = $formulari->get('imatges')->getData();
            if ($fitxer) { 
                $nomFitxer = "imatges/".$fitxer->getClientOriginalName();
                $directori =
                $this->getParameter('kernel.project_dir')."/public/imatges/";
            
                try {
                    $fitxer->move($directori,$nomFitxer);
                } catch (FileException $e) {
                    $error=$e->getMessage();
                    return $this->render('nou_ciutat.html.twig', array(
                    'formulari' => $formulari->createView(), "error"=>$error));
                }
            
                $ciutatNou->setImatges($nomFitxer); 
            
            } 
            
            $ciutatNou->setNom($formulari->get('nom')->getData());
            $ciutatNou->setPoblacio($formulari->getPoblacio('poblacio')->getData());
            $ciutatNou->setCodiPostal($formulari->getCodiPostal('poblacio')->getData());
            
            $ciutatNou->setComarca($formulari->getComarca('poblacio')->getData());
            $ciutatNou->setDades($formulari->getDades('poblacio')->getData());
            
            $entityManager = $doctrine->getManager();
            $entityManager->persist($ciutatNou);
            
            try{
                $entityManager->flush();
                return $this->redirectToRoute('inici');
            } catch (\Exception $e) {
                $error=$e->getMessage();
                return $this->render('nou_ciutat.html.twig', array(
                'formulari' => $formulari->createView(), "error"=>$error));
            }
        }else{
            return $this->render('nou_ciutat.html.twig',
            array('formulari' => $formulari->createView(),"error"=>$error));
        }
    }

    #[Route('/ciutats/eliminar', name:'eliminar_ciutat')]
    public function eliminarCiutat(ManagerRegistry $doctrine){
        $ciutat=$doctrine->getRepository(Ciutat::class)->findAll();
        $entityManager = $doctrine->getManager();
        $entityManager = remove($ciutat);
        $entityManager-> flush();
        return $this->render('inici.html.twig',array('ciutat'=>$ciutat));
    }



}