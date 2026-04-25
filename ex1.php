<?php

class Livre
{
    public $titre="boite a merveille";
    public $auteur="ahmed sefrioui";
    public $prix=100;
    public function __construct($titre, $auteur, $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = 99;
    }
    public function afficherLivre()
    {
        echo "Titre : ".$this->titre."<br>";
        echo "Auteur : ".$this->auteur."<br>";
        echo "Prix : ".$this->prix."<br><br>";
    }
}

class Bibliotheque {
    public $livres = [];

    public function ajouterLivre($livre){
        $this->livres[] = $livre;
    }

    public function afficherTousLesLivres(){
        foreach($this->livres as $livre){
            $livre->afficherLivre();
        }
    }
}
$l1 = new Livre("boite a merveille","ahmed",100);
$l2 = new Livre("php","MOHAMED",19);

$biblio = new Bibliotheque();
$biblio->ajouterLivre($l1);
$biblio->ajouterLivre($l2);

$biblio->afficherTousLesLivres();
?>