<?php
declare(strict_types=1);


namespace App\Tests\Test;


use Paybox\Pay\Facade as Paybox;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{

 public function testPay():void
 {
     $paybox= new Paybox();
     $paybox->config->pg_payment_route='frame';
     $paybox->merchant->id=510694;
     $paybox->merchant->secretKey='gyl7RSgDjWYIS1QC';
     $paybox->order->description = 'autokz test';
     $paybox->order->amount = 100;
     $paybox->order->propertynew='test new property';
     self::assertTrue($paybox->init());
     var_dump($paybox->redirectUrl);
 }
}