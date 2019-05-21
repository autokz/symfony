<?php
declare (strict_types=1);

namespace App\Controller;


use App\Model\User\Entity\User\User;
use App\ReadModel\Oil\OilFetcher;
use App\Repository\Oil\OilRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Paybox\Pay\Facade as Paybox;

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
        $oilReadModel=new OilFetcher(new OilRepository());

        $perRow=3;
        $oils=$oilReadModel->findByOilType('ENGINE');
        $groupCount=intdiv(count($oils),$perRow)+1;
        $totalCount=count($oils);
        $oilEngineGroup=[];
        for($i=0;$i<$groupCount;$i++){
            $oilRow=[];
            for($j=$i*$perRow; $j<$i*$perRow+$perRow; $j++){
              if ($j>$totalCount-1){
                  break;
              }
              $oilRow[]=$oils[$j];
            }
            if (count($oilRow)>0){
                $oilEngineGroup[]=$oilRow;
            }
        }
        $oils=$oilReadModel->findByOilType('GEAR');
        $groupCount=intdiv(count($oils),$perRow)+1;
        $totalCount=count($oils);
        $oilGearGroup=[];
        for($i=0;$i<$groupCount;$i++){
            $oilRow=[];
            for($j=$i*$perRow; $j<$i*$perRow+$perRow; $j++){
                if ($j>$totalCount-1){
                    break;
                }
                $oilRow[]=$oils[$j];
            }
            if (count($oilRow)>0){
                $oilGearGroup[]=$oilRow;
            }
        }
        return $this->render('app/home.html.twig',['oil_engine_group'=>$oilEngineGroup,'oil_gear_group'=>$oilGearGroup]);
        #return new JsonResponse(['test'=>1]);
    }
    /**
     * @Route("/product/{article}", name="product")
     * @return Response
     */
    public function product(string $article): Response
    {
        //$user=new User('test@app.test','2');
        //
        $oilReadModel=new OilFetcher(new OilRepository());
        $oil=$oilReadModel->get($article);
        return $this->render('app/product.html.twig',['oil'=>$oil]);
        #return new JsonResponse(['test'=>1]);
    }
    /**
     * @Route("/ajax/clickbuy/{article}", name="clickbuy")
     * @return Response
     */
    public function clickbuy(string $article): Response
    {
        $oilReadModel=new OilFetcher(new OilRepository());
        $oil=$oilReadModel->get($article);
        return $this->render('app/ajax/clickbuy.html.twig',['oil'=>$oil]);
    }

    /**
     * @Route("/ajax/getpaylink/{article}/{quantity}", name="payurl")
     * @return Response
     */
    public function getPayLink(string $article,string $quantity): JsonResponse
    {
        $oilReadModel=new OilFetcher(new OilRepository());
        $oil=$oilReadModel->get($article);
        $paybox= new Paybox();
        $paybox->config->pg_payment_route='frame';
        $paybox->merchant->id=510694;
        $paybox->merchant->secretKey='gyl7RSgDjWYIS1QC';

        $paybox->order->description = 'Моторное масло PETRO-CANADA '.$oil->getArticle().' '.
            $oil->getViscosity().' в количестве - '.$quantity.
            '. Стоимость - '.$oil->getPrice()*$quantity.' тенге';
        $paybox->order->amount = $oil->getPrice()*$quantity;
        $paybox->order->article=$oil->getArticle();
        $paybox->init();
        return new JsonResponse(['url'=>$paybox->redirectUrl]);
    }

}