<?php 

// tests/Util/CalculatorTest.php
namespace Maalls\FirebaseBundle\Tests\Service;
//include __dir__ . "/../../Service/Firebase.php";
use Maalls\FirebaseBundle\Service\Firebase as Firebase;

class FirebaseTest extends \PHPUnit\Framework\TestCase

{

    public function testSet()
    {


        $url = getenv("FIREBASE_DATABASE_URL");
        $key = getenv("FIREBASE_API_KEY");

        if(!$url) throw new \Exception("FIREBASE_DATABASE_URL needs to be set in .env");
        if(!$key) throw new \Exception("FIREBASE_API_KEY needs to be set in .env");
        
        $firebase = new Firebase($url, $key);

        $time = time();
        $rsp = $firebase->set("test/count", $time);
        $this->assertEquals($time, $rsp);
        $rsp = $firebase->get("test/count");

        $this->assertEquals($time, $rsp);



    }

}