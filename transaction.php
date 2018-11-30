<?php

class Compte {
    private $id_compte;

    public function __construct($id_compte)
    {
        $this->id_compte = $id_compte;
    }
}

class Transaction extends Compte{
    private $id_transaction;
    private $id_compte_receveur;
    private $montant;

    public function __construct($id_transaction, $id_compte_envoyeur, $id_compte_receveur, $montant) {
        parent::__construct($id_compte_envoyeur);
        $this->id_transaction = $id_transaction;
        $this->id_compte_receveur = $id_compte_receveur;
        $this->montant = $montant;
    }
}