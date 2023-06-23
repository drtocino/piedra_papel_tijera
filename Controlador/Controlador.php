<?php
require("Modelo/Juego.php");
$juego=new Juego();
$PuntosP;
$PuntosC;
/*

session_start();
$_SESSION['puntosP']=0;
$_SESSION['puntosC']=0;
*/
$comp=$juego->iniciarJuego($_REQUEST['valor']);
    switch($_REQUEST['valor']){
        case 1:
    ?>  
        <div class="box-header">
            <h3><?php $juego->verificacion($_REQUEST['valor'],$comp);?></h3>
        </div>
        <img src="http://localhost/PiedraPapelTijera/CSS/img/piedra-slide.png" alt="piedra">
    <?php
            switch($comp){
                case 1:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/piedra-slide.png" alt="piedra">
    <?php
                break;
                case 2:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/papel-slide.png" alt="piedra">
    <?php
                break;
                case 3:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/tijera-slide.png" alt="piedra">
    <?php
                break;
            }
        break;
        case 2:
    ?>
        <div class="box-header">
            <h3><?php $juego->verificacion($_REQUEST['valor'],$comp);?></h3>
        </div>
        <img src="http://localhost/PiedraPapelTijera/CSS/img/papel-slide.png" alt="papel">
    
    <?php
            switch($comp){
                case 1:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/piedra-slide.png" alt="piedra">
    <?php
                break;
                case 2:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/papel-slide.png" alt="piedra">
    <?php
                break;
                case 3:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/tijera-slide.png" alt="piedra">
    <?php
                break;
            }
        break;
        case 3:
    ?>
        <div class="box-header">
            <h3><?php $juego->verificacion($_REQUEST['valor'],$comp);?></h3>
        </div>
        <img src="http://localhost/PiedraPapelTijera/CSS/img/tijera-slide.png" alt="tijera">
    <?php
            switch($comp){
                case 1:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/piedra-slide.png" alt="piedra">
    <?php
                break;
                case 2:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/papel-slide.png" alt="piedra">
    <?php
                break;
                case 3:
    ?>
                    <img src="http://localhost/PiedraPapelTijera/CSS/img/tijera-slide.png" alt="piedra">
    <?php
                break;
            }
        break;
    }
    ?>
    </div>

