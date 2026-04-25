<?php
class Etudiant
 {
    public $nom="MOHAMED";
    public $notes = [20];

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function ajouterNote($note)
    {
        $this->notes[] = $note;
    }

    public function moyenne()
    {
        return array_sum($this->notes) / count($this->notes);
    }

    public function decision()
    {
        if($this->moyenne() >= 10)
        {
            return "Admis";
        }else
        {
            return "Non admis";
        }
    }

    public function __toString()
    {
        return "Nom : ".$this->nom.
        " | Moyenne : ".$this->moyenne().
        " | Decision : ".$this->decision();
    }
}
$e = new Etudiant("MOHAMED");

$e->ajouterNote(15);
$e->ajouterNote(12);
$e->ajouterNote(9);

echo $e;

?>