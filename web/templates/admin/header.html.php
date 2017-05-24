<!DOCTYPE html>
<html>
<head>
    <title>Ips Home Care</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.min.css">
         <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<header class="main-header">
    <ul class="main-nav">
      <li><a href="<?php echo crearUrl("usuario", "usuario", "pantalla")?>">Inicio</a></li>
      <li class="dropdown">
        <a href="#">medico</a>
        <ul class="drop-nav">
          <li><a href="<?php echo crearUrl("medico", "medico", "crear")?>">Crear</a></li>
          <li><a href="<?php echo crearUrl("medico", "medico", "listar")?>">listar</a></li> 
        </ul>
      </li>
       <li class="dropdown">
        <a href="#">paciente</a>
        <ul class="drop-nav">
          <li><a href="<?php echo crearUrl("paciente", "paciente", "crear")?>">Crear</a></li>
          <li><a href="<?php echo crearUrl("paciente", "paciente", "listar")?>">listar</a></li>  
        </ul>
      </li>
       <li>
        <a href="<?php echo crearUrl("usuario", "usuario", "registrarse")?>">Citas</a>
      </li>
      <li><a href="<?php echo crearUrl("usuario", "usuario", "contacto")?>">Coctato</a></li>
    </ul>
</header>