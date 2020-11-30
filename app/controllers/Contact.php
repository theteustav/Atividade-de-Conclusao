<?php

class Contact extends Controller
{


    // Index of the home page (localhost/home(/index))
    public function index($param1 = '', $param2 = '', $param3 = '', $param4 = '', $param5 = '')
    {

        // Initialize Alunos model
        $test = $this->model('Clientes');

        // Call function from the model
        $testData = $test->getClientesFunction();

        $this->view('contact/index', ['clientes' => $testData]);
    }
    public function teste($param1 = '', $param2 = '', $param3 = '', $param4 = '', $param5 = '')
    {
        $test = $this->model('Clientes');
        $clientes = $test->getClientesForName($param2);
        $this->view('contact/index', ['clientes' => $clientes]);
    }
    public function cliente($id)
    {
        $cliente = $this->model('Clientes');
        $valor = $cliente->getClienteForId($id);
        return $valor;
    }
    public function adicionaCliente()
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $mensagem = $_POST["mensagem"];
        $cliente = $this->model('Clientes');
        if ($cliente->createCliente([$nome, $email, $telefone, $mensagem]))
            echo "Cadastro executado com sucesso!!";
    }
    public function alteraCliente()
    {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $mensagem = $_POST["mensagem"];

        $cliente = $this->model('Clientes');
        if ($cliente->alterCliente([$nome, $email, $telefone, $mensagem, $id]))
            echo "Cadastro alterado com sucesso!!";
    }

    public function  formAlter($param1 = '', $param2 = '', $param3 = '', $param4 = '', $param5 = '')
    {
        $cliente = $this->cliente($param2);
        $this->view('contact/form2', ['cliente' => $cliente[0]]);
    }
    public function deleteCliente($param1 = '', $param2 = '', $param3 = '', $param4 = '', $param5 = '')
    {
        $id = $param2;
        $cliente = $this->model('Clientes');
        if ($cliente->deleteCliente([$id]))
            echo "Cadastro excluido com sucesso!!";
    }
}