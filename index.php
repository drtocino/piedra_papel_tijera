
<?php
/*
session_start();$_SESSION['puntosP']=0;
$_SESSION['puntosC']=0;
*/?>

<!DOCTYPE html>

<html lang="en">
<head>
    <!-- <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/datalegreya" type="text/css"/> -->
    <link rel="stylesheet" href="CSS/estilos1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra papel o tijera</title>
</head>
<body>

    <div class="main-boxes">
        <div class="main-header">
            <h1>Piedra Papel o Tijera</h1>
        </div>
    </div>

    <div class="player">
        <div class="box-header">
            <h3>Jugador</h3>
        </div>
        
        <a href="?valor=2" name="opcion"><img src="http://localhost/PiedraPapelTijera/CSS/img/papel-slide.png" alt="papel"></a><br>
        <a href="?valor=1" name="opcion"><img src="http://localhost/PiedraPapelTijera/CSS/img/piedra-slide.png" alt="piedra"></a>
        <a href="?valor=3" name="opcion"><img src="http://localhost/PiedraPapelTijera/CSS/img/tijera-slide.png" alt="tijera"></a>
    </div>

    <div class="rob">
        <div class="box-header">
            <h3>Computadora</h3>
        </div>
        <img src="http://localhost/PiedraPapelTijera/CSS/img/papel-slide.png" alt="papel"><br>
        <img src="http://localhost/PiedraPapelTijera/CSS/img/piedra-slide.png" alt="piedra">
        <img src="http://localhost/PiedraPapelTijera/CSS/img/tijera-slide.png" alt="tijera">
    </div><br><br>
    <div class="vs-box">
        <?php
        require("Controlador/Controlador.php");
        ?>
    </div>
    
    <div class="vs-box">
    <?php

    
    
