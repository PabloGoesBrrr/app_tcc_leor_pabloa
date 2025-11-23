<?php 

    session_start();

    require_once "../../tcc_leoPab/address_model.php";
    require_once "../../tcc_leoPab/address_service.php";
    require_once "../../tcc_leoPab/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == "inserir"){

        $endereco = new Address();
        $endereco->__set('id_user', $_SESSION["id"]);
        $endereco->__set('endereco', $_POST['endereco']);
        $endereco->__set('cidade', $_POST['cidade']);
        $endereco->__set('estado', $_POST['estado']);
        $endereco->__set('tipo', $_POST['tipo']);

        $conexao = new Conexao();

        $addressService = new AddressService($conexao, $endereco);

        $addressService->inserir();

        header('Location: analise.php?inclusao=1');

    }elseif($acao == 'recuperar'){
        $endereco = new Address();
        $conexao = new Conexao();

        $addressService = new AddressService($conexao, $endereco);
        $address = $addressService->recuperar();
    }elseif($acao == 'remover'){
        $endereco = new Address();
        $endereco->__set('id', $_GET['id']);

        $conexao = new Conexao();
        $addressService = new AddressService($conexao, $endereco);
        $addressService->remover();

        if (isset($_GET['pag']) && $_GET['pag'] == 'index'){
            header('location: index.php');
        }else{
            header('location: all_address.php');
        }

    }


?>