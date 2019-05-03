<?php
declare (strict_types=1);

namespace App\Controller;


use App\Model\User\Entity\User\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        //$user=new User('test@app.test','2');
        //
        return $this->render('app/home.html.twig',['email'=>'test@auto.kz']);
        #return new JsonResponse(['test'=>1]);
    }

}