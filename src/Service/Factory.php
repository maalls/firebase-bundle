<?php


namespace Maalls\SocialMediaContentBundle\Lib\Firebase;


class Factory {

    private $url;
    private $key;

    public function __construct($url, $key)
    {

        $this->url = $url;
        $this->key = $key;

    }


    public function create()
    {

        if(!$this->url) throw new \Exception("URL required.");

        if(!$this->key) throw new \Exception("Key required.");

        $firebase = new Firebase($this->url, $this->key);

        return $firebase;

    }

}
