<?php 
class AddressService {
    private $conexao;
    private $endereco;

    public function __construct(Conexao $conexao, Address $endereco){
        $this->conexao = $conexao->conectar();
        $this->endereco = $endereco;
    }

    //create

    public function inserir(){
        $query = "insert into tb_address( id_user, endereco, cidade, estado, tipo) values (:id_user, :endereco, :cidade, :estado, :tipo)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_user', $this->endereco->__get('id_user'));
        $stmt->bindValue(':endereco', $this->endereco->__get('endereco'));
        $stmt->bindValue(':cidade', $this->endereco->__get('cidade'));
        $stmt->bindValue(':estado', $this->endereco->__get('estado'));
        $stmt->bindValue(':tipo', $this->endereco->__get('tipo'));
        $stmt->execute();
    }

}


?>