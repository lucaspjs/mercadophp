<?php

function getEnderecos() {
    $endereco = new Endereco();
    $endereco->select(array('id', 'logradouro', 'cidade', 'estado'));
    $endereco->get();
    $enderecos = $endereco->all_to_array();
    $return = array();
    foreach ($enderecos as $temp) {
        $id = $temp['id'];
        $name = $temp['logradouro'] . ", " . $temp['cidade'] . ", " . $temp['estado'];
        $return[] = array('id' => $id, 'name' => $name);
    }
    return $return;
}

function getCargos() {
    $cargo = new Cargo();
    $cargo->select(array('id', 'descricao', 'salario'));
    $cargo->get();
    $cargos = $cargo->all_to_array();
    $return = array();
    foreach ($cargos as $temp) {
        $id = $temp['id'];
        $name = $temp['descricao'] . ", R$ " . $temp['salario'];
        $return[] = array('id' => $id, 'name' => $name);
    }
    return $return;
}

function getFuncionarios() {
    $funcionario = new Funcionario();
    $funcionario->select(array('id', 'nome'));
    $funcionario->get();
    $funcionarios = $funcionario->all_to_array();
    $return = array();
    foreach ($funcionarios as $temp) {
        $id = $temp['id'];
        $name = $temp['nome'];
        $return[] = array('id' => $id, 'nome' => $name);
    }
    return $return;
}

function getClientes() {
    $cliente = new Cliente();
    $cliente->select(array('id', 'nome'));
    $cliente->get();
    $clientes = $cliente->all_to_array();
    $return = array();
    foreach ($clientes as $temp) {
        $id = $temp['id'];
        $name = $temp['nome'];
        $return[] = array('id' => $id, 'nome' => $name);
    }
    return $return;
}

function getFornecedores() {
    $fornecedor = new Fornecedor();
    $fornecedor->select(array('id', 'nome', 'cnpj'));
    $fornecedor->get();
    $fornecedores = $fornecedor->all_to_array();
    $return = array();
    foreach ($fornecedores as $temp) {
        $id = $temp['id'];
        $name = $temp['nome'] . ", " . $temp['cnpj'];
        $return[] = array('id' => $id, 'nome' => $name);
    }
    return $return;
}

function getCategorias() {
    $categoria = new Categoria();
    $categoria->select(array('id', 'nome'));
    $categoria->get();
    $categorias = $categoria->all_to_array();
    $return = array();
    foreach ($categorias as $temp) {
        $id = $temp['id'];
        $name = $temp['nome'];
        $return[] = array('id' => $id, 'nome' => $name);
    }
    return $return;
}

function getProdutos() {
    $produto = new Produto();
    $produto->select(array('id','descricao'));
    $produto->get();
    $produtos = $produto->all_to_array();
    $return = array();
    foreach ($produtos as $temp) {
        $id = $temp['id'];
        $name = $temp['descricao'];
        $return[] = array('id' => $id, 'nome' => $name);
    }
    return $return;
}

function getPedidos() {
    $pedido = new Pedido();
    $pedido->select(array('id'));
    $pedido->get();
    $pedidos = $pedido->all_to_array();
    $return = array();
    foreach ($pedidos as $temp) {
        $id = $temp['id'];
        $name = $temp['id'];
        $return[] = array('id' => $id, 'nome' => $name);
    }
    return $return;
}
