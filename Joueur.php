<?php


class Joueur {
    private string $_nomJoueur;
    private string $_prenomJoueur;
    private DateTime $_dateNaissanceJoueur;
    private Pays $_pays;
    private array $_transfert = [];
//
    public function __construct(string $nomJoueur,string $prenomJoueur,
     string $dateNaissanceJoueur,  Pays $nomPays){
        $this->_nomJoueur = $nomJoueur;
        $this->_prenomJoueur = $prenomJoueur;
        $this->_dateNaissanceJoueur = DateTime::createFromFormat("d/m/Y", $dateNaissanceJoueur);
        $this->_pays = $nomPays;
        $nomPays->addJoueur($this);
    }
    public function __toString(){
        return $this->_prenomJoueur." ".$this->_nomJoueur;
    }
//
    public function getNomJoueur(){
        return $this->_nomJoueur;
    }
    public function getPrenomJoueur(){
        return $this->_prenomJoueur;
    }
    public function getDateNaissance(){
        return $this->_dateNaissance;
    }
    public function getPays(){
        return $this->_pays;
    }
    public function gettransferts(){
        return $this->_transfert;
    }
//
    public function setNomJoueur(string $nomJoueur){
        $this->_nomJoueur = $nomJoueur;
    }
    public function setPrenomJoueur(string $prenomJoueur){
        $this->_prenomJoueur = $prenomJoueur;
    }
    public function setDateNaissance(string $dateNaissanceJoueur){
        $this->_dateNaissanceJoueur = DateTime::createFromFormat("d/m/Y", $dateNaissanceJoueur);
    }
    public function setPays(Pays $nomPays){
        $this->_pays = $nomPays;
    }
//
    public function addtransfert(transfert $transfert){
        $this->_transfert[] = $transfert;
    }
//
    public function getAge(){
        return $this->_dateNaissanceJoueur->diff(new DateTime("now"))->format("%y");
    }
}