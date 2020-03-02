<?php
class homeController extends controller {

    public function index(){

        $dados = array(
            'quantidade' => 5,
            'nome' => 'Wagner'
        );

        $this->loadTemplate('home', $dados);
    }

}