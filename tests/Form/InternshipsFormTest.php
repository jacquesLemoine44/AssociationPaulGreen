<?php

namespace App\Test\Form;

use Datetime;
use App\Entity\Internships;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class InternshipsFormTest extends KernelTestCase{

 public function testInternships(){

$date=new Datetime();

 $interships=(new Internships())

 ->setOfferinternship('77')
 ->setPlaceintership('77')
 ->setStartinternship($date)
 ->setEndinternship($date)
 ->setLinkinternship('77');

 self::bootKernel();
 $error = self::$container->get('validator')->validate($interships);
 $this->assertCount(0,$error);
 }
}
<?php
//tests/Controller/ThemeControllerTest.php
namespace App\Tests\Controller;
 
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
 
class ThemeControllerTest extends WebTestCase 
{ 
    public function testNewTheme() 
    { 
        $client=static::createClient();