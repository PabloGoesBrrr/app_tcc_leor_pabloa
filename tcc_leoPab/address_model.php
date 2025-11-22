<?php 
class Address {

    private $id;

    private $id_user;
    private $endereco;
    private $cidade;
    private $estado;
    private $tipo;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

}


?>