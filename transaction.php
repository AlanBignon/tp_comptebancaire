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

    public function __construct($id_transaction, $id_compte)
    {
        parent::__construct($id_compte);
        $this->id_transaction = $id_transaction;
    }
}