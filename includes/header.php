<?php 
require('./services/conection_db.php');

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iglesia Gilgal</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/headers.css">
        <script src="main.js"></script>
    </head>

<header style="margin-top:0px;">
    
    <img src="./img/logo_iglesia_gilgal.png" alt="logo Iglesia Gilgal" style="width:40px;height:40px;margin-top:5px;margin-left:25px;">
    
    
    <h1 id="title-bar">Iglesia Gilgal</h1>
    
    <ul>
        <li>
            <a href='./index.php'>Inicio</a>
        </li>
        <li>
            <a href='./about.php'>Nosotros</a>
        </li>
        <li>
            <a href="./activities.php">Actividades</a>
        </li>
        <li>
            <a href='./youngsters.php'>Jóvenes</a>
        </li>
        <!--<li>
            <a href='./multimedia.php'>Medios</a>
        </li>-->
    </ul>
    <a href="./login.php">
        <img id="login_icon" src="./img/login.png" alt="Iglesia Gilgal login">
    </a>    
    <a href="./index.php" onclick="<?php session_destroy();?>">
        <img id="logout_icon" src="./img/logout.png" alt="Iglesia Gilgal logout">
    </a>  
</header>
