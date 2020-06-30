<?php
use App\Http\Controllers\InicioController; 
?>
@extends('layout.plantillainicio')

 @section('zonahead')
 @stop
 
 @section('zonamenu')
 @stop
 
 @section('zonabanner')
 @stop
 
 @section('zonacontenido')
 
 <?php 
 $Objeto_InicioController=new InicioController();
 $resultado_vercontenido=$Objeto_InicioController->VerContenidoweb();
 print_r($resultado_vercontenido);echo "<br/>";
 ?>
 
  <a href="/">Inicio</a><br/>
  <a href="/Pagina1">Pagina 1</a><br/>
  <a href="/Pagina2">Pagina 2</a><br/>
 @stop