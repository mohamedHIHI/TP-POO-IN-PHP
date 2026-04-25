<?php

class Employe {
    public $nom="MOHAMED";
    public $salaire="1000";

    public function __construct($nom,$salaire){
        $this->nom = $nom;
        $this->salaire = 1000;
    }

    public function calculerSalaire(){
        return $this->salaire;
    }
}

class Manager extends Employe {
    public $prime;

    public function __construct($nom,$salaire,$prime){
        parent::__construct($nom,$salaire);
        $this->prime = $prime;
    }
    public function calculerSalaire(){
        return $this->salaire + $this->prime;
    }
}
$m = new Manager("MOHAMED",1000,7000);

echo "Salaire total : ".$m->calculerSalaire();

?>