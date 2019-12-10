<?php
// Core class to parse url, verify the controllers and the methods
class Core{

    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];

    /**
     * Core constructor.
     */
    public function __construct()
    {
        // url parsing, get url
        $url = $this -> getURL();


        // verify if controller exist
        if(file_exists('../app/controllers/'.$url[0].'.php')){

            $this ->currentController = $url[0];
            // unset 0 index
            unset($url[0]);
        }
        else{

            $this ->currentController = 'pages';
        }

        // call the controller
        require_once '../app/controllers/'.$this ->currentController.'.php';

        // create the instance of the controller here..
        $this -> currentController = new $this ->currentController;

        // verify if method exist
        if(isset($url[1])){

            if(method_exists($this ->currentController, $url[1])){

                $this ->currentMethod = $url[1];
                unset($url[1]);

            }
            else {
                $this ->currentMethod = '$url[3]';
            }
        }
        // get parameters from url
        $this ->params = $url ? array_values($url) : [];
        // call the callback from array with the parameters
        call_user_func_array([$this ->currentController, $this->currentMethod], $this ->params);

    }
    /**
     * @return array
     */
    public function getURL()
    {

        if(isset($_GET['url'])){

            $url_t = parse_url($_GET['url']);
            $url_path = $url_t["path"];
            $url = explode('/', $url_path);
            //print_r($url);
            return $url;
        }

    }

}
