<?php

class Movie{
    private $uid;
    private $title;
    private $img;
    private $category;
    private $producer;
    private $price;
    private $url;

    public function __construct($title, $img, $category, $price, $producer, $url)
    {
        $this ->uid = uniqid(956);
        $this ->title = $title;
        $this ->url = $url;
        $this ->img = $img;
        $this ->category = $category;
        $this ->producer = $producer;
        $this ->price = $price;
    }

    public function getUID(){
        return $this ->uid;
    }
    public function getTitle(){
        return $this ->title;
    }
    public function getIMG(){
        return $this ->img;
    }
    public function getURL(){
        return $this ->url;
    }
    public function getPrice(){
        return $this ->price;
    }
    public function getProducer(){
        return $this ->producer;
    }
    public function getCategory(){
        return $this ->category;
    }

}
