<?php
/*$puntosP=0;
$puntosC=0;*/
class Juego{
    private $manoC; //Mano computadora
    private $opcion; //Mano del jugador
    private $puntosP;
    private $puntosC;
    function __construct(){
        $this->puntosP=0;
        $this->puntosC=0;
    }
    public function iniciarJuego($opcion){
        $mano=$this->manoC=$this->randOpcion();
        $estado=$this->compararOpciones($opcion,$this->manoC);
        /*echo $this->manoC." ";
        echo $opcion;
        /*$this->mensaje($estado);
        echo $mano;*/
        return $mano;
    }
    
    private function randOpcion(){
        $ropcion=rand(1,3);
        return $ropcion;
    }
    public function getScoresP(){
        return $this->puntosP;
    }
    public function getScoresC(){
        return $this->puntosC;
    }

    public function scoresP($punto){
        $punto++;
        return $punto;
    }
    public function scoresC($punto){
        $punto++;
        return $punto;
    }
    
    public function verificacion($opcion,$mano){
        $estado=$this->compararOpciones($opcion,$mano);
        //echo $estado;
        $this->mensaje($estado);
    }
    
    /* Logica de Juego
    piedra->1
    papel->2
    tijera->3
    1>3
    2>1
    3>2
    0 -> ganar
    1 -> empate
    2 -> perdida
    */
    private function compararOpciones($opcion,$manoC){
        
        switch($opcion){
            //piedra
            case 1:
                switch($manoC){
                    case 1:
                        //empate
                        $mensaje=1;
                    break;
                    case 2:
                        //perder
                        $mensaje=2;
                        $this->puntosC=$this->scoresC($this->puntosC);
                    break;
                    case 3:
                        //ganar
                        $mensaje=0;
                        $this->puntosP=$this->scoresP($this->puntosP);
                    break;
                }
            break;
            //papel
            case 2:
                switch($manoC){
                    case 1:
                        $mensaje=0;
                        $this->puntosP=$this->scoresP($this->puntosP);
                    break;
                    case 2:
                        $mensaje=1;
                    break;
                    case 3:
                        $mensaje=2;
                        $this->puntosC=$this->scoresC($this->puntosC);
                    break;
                }
            break;
            //tijera
            case 3:
                switch($manoC){
                    case 1:
                        $mensaje=2;
                        $this->puntosC=$this->scoresC($this->puntosC);
                    break;
                    case 2:
                        $mensaje=0;
                        $this->puntosP=$this->scoresP($this->puntosP);
                    break;
                    case 3:
                        $mensaje=1;
                    break;
                }
            break;
        }
        return $mensaje;
    }
    private function comparaciones(){
        
    }
    private function mensaje($estado){
        switch($estado){
            case 1:
                $mensaje="Empate";
            break;
            case 2:
                $mensaje="Perdiste";
            break;
            case 0:
                $mensaje="Ganaste";
            break;
        }
        echo $mensaje;
    }


}

?>