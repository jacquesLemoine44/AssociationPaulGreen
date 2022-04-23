<?php
//tests/Controllers/ThemesControllerTest.php
namespace App\Tests\Controller;
 
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
 
class ThemesControllerTest extends WebTestCase
{
    public function testNewThemes()
    {
        $client=static::createClient();
 
        $client->request('GET','/themes_new');
 
        $this->assertEquals(200, $client->getResponse()->getStatusCode());    
    }
}
