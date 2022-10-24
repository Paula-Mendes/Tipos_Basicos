<?php

function conexao()
{
    $ppm = new PPM("mysql:host=localhost, dbname=books", "root", "");
    return $ppm;
}

function obterDados($table)
{
    $conexao = conexao();
    $consulta = $conexao->consulta("select * from {$table}");
    $consulta->execute();
    return $consulta->fetchAll();
}

var_dump(obterDados("usuarios"));