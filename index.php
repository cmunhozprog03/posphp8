<?php

require_once "Controllers/ControladorModelo.php";
require_once "Controllers/usuarios.controlador.php";
require_once "Controllers/clientes.controlador.php";
require_once "Controllers/produtos.controlador.php";
require_once "Controllers/vendas.controlador.php";
require_once "Controllers/categorias.controlador.php";

$modelo = new ControladorModelo();

$modelo -> ctrModelo();