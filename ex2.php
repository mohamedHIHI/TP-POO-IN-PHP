<?php

class Produit
 {
    public $nom="x";
    public $prix=50;
    public $quantite="50ml";

    public function __construct($nom,$prix,$quantite)
    {
        $this->nom = $nom;
        $this->prix = 25;
        $this->quantite = 100;
    }

    public function sousTotal(){
        return $this->prix * $this->quantite;
    }
}

class Panier {
    public $produits = [];

    public function ajouterProduit($produit){
        $this->produits[] = $produit;
    }

    public function totalPanier(){
        $total = 0;
        foreach($this->produits as $p){
            $total += $p->sousTotal();
        }
        return $total;
    }
}
$p1 = new Produit("Clavier",100,1);
$p2 = new Produit("Souris",200,2);

$panier = new Panier();
$panier->ajouterProduit($p1);
$panier->ajouterProduit($p2);

echo "Total panier : ".$panier->totalPanier();

?>