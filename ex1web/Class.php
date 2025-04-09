<?php
class Etudiant{
    public string $nom;
    public array $notes;
    public function __construct($nom,$notes){
        $this->nom=$nom;
        $this->notes=$notes;

    }
    public function affichenotes(){
        foreach($this->notes as $note){
            if ($note<10){
                $bgcolor="reddiv";
            }elseif($note==10){
                $bgcolor="orangediv";
            }else{
                $bgcolor="greendiv";
            }
            echo "<div class={$bgcolor}> {$note} </div>";
        }
    }
    public function CalculMoy():float{
        $nbre=count($this->notes);
        if($nbre==0){
            return 0;
        }
        else{
            $som=0;
            $tab=$this->notes;
            foreach ($tab as $note) {
               $som+=$note;
            }
            return($som/$nbre);
        }
        
    }
    public function admis():void {
        if ($this->CalculMoy()<10){
            echo "l'étudiant {$this->nom} est admis avec une moyenne de {$this->calculmoy()} <br>";
        }
        else{
            echo "l'étudiant {$this->nom} est  non admis avec une moyenne de {$this->calculmoy()} <br>";
        }
    }

}
?>