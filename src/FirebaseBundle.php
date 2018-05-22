<?php

// src/Acme/TestBundle/AcmeTestBundle.php
namespace Maalls\FirebaseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Maalls\SocialMediaContentBundle\DependencyInjection\MaallsSocialMediaContentExtension;

class FirebaseBundle extends Bundle
{


    public function getContainerExtension()
    {
        return new MaallsFirebaseExtension();
    }
}