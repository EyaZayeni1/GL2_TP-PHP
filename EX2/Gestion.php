<?php
class Gestion 
{  protected int $nbre;

    public function __construct() {
        session_start();
        if (!isset($_SESSION['nbre'])){
            $_SESSION['nbre']=1;
        }
        else{
            $_SESSION['nbre']++;
        }
        $this->nbre=$_SESSION['nbre'];
    }

    public function GetNbre(){
        return $this->nbre;
    }
    
    public function Restart (){
        session_unset();
        session_destroy();
    }

}