<?php

class Clientes
{


    public function getClientesFunction()
    {
        return Database::query("SELECT * FROM clientes");
    }
    public function getClienteForName($nome)
    {
        return Database::query("SELECT * FROM clientes where nome = ?", [$nome]);
    }
    public function getClienteForTelefone($telefone)
    {
        return Database::query("SELECT * FROM clientes where telefone = ?", [$telefone]);
    }
    public function getClientesForId($id)
    {
        return Database::query("SELECT * FROM clientes where idclientes = ?", [$id]);
    }
    public function createCliente($valores)
    {
        return Database::add($sql = "INSERT INTO `turismo`.`clientes` (`nome`, `email`, `telefone`, `mensagem`) VALUES (?, ?)", $valores);
    }
    public function alterCliente($valores)
    {
        $sql = "UPDATE `turismo`.`clientes` SET `nome` = ?, `email` = ?, `telefone` = ?, `mensagem` = ? WHERE (`idclientes` = ?);";
        return Database::add($sql, $valores);
    }

    public function deleteCliente($valores)
    {
        $sql = "DELETE FROM `turismo`.`clientes` WHERE (`idclientes` = ?)";
        return Database::add($sql, $valores);
    }
}