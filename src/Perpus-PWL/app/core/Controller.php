<?php

class Controller{

    public function view($view, $data = []){
         // ini dia path mutlak, ngarahin ke view/home
        require_once __DIR__ . '/../view/' . $view . '.php';
    }

    public function model($model){
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model;
    }
}