<?php


class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        //cek controller
        if (file_exists('../app/controllers/'. $url[0]. '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/'. $this->controller . '.php';
        $this->controller = new $this->controller;

        //cek apakah ada method itu di class
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url[2])) {
            $this->params = array_values($url);
        }

        //jalankan controller dan method, serta mengirim parameter jika ada
        
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL(){
       if(isset($_GET['url'])){
        //fungsi rtrim untuk remove karakter sebalah kanan dari sebuah string dalam contoh ini adalah /
        $url = rtrim($_GET['url'], '/');
        // fungsi FILTER_SANITIZE_URL digunakan untuk membersihkan url dari karakter haram
        $url = filter_var($url, FILTER_SANITIZE_URL);
        //fungsi explode digunakan untuk memisahkan string dengan delimiter sesuatu, untuk hal ini adalah /
        $url = explode('/', $url);
        return $url;
       }
    }

}