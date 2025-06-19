<?php


class Equipe {
    private string $_nomEquipe;
    private Pays $_pays;
    private string $_anneeCreation;
    private array $_transferts = [];
//
    public function __construct(string $nomEquipe, Pays $Pays, string $anneeCreation){
        $this->_nomEquipe = $nomEquipe;
        $this->_pays = $Pays;
        $this->_anneeCreation = $anneeCreation;
        $Pays->addEquipe($this);

    }
    public function __toString(){
        return $this->_nomEquipe;
    }
//
    public function getNomEquipe(){
        return $this->_nomEquipe;
    }
    public function gettransferts(){
        return $this->_transferts;
    }
    public function getPays(){
        return $this->_pays;
    }
    public function getAnneeCreation(){
        return $this->_anneeCreation;
    }
//
    public function setNomEquipe(string $nomEquipe){
        $this->_nomEquipe = $nomEquipe;
    }
    public function setAnneeCreation(string $anneeCreation){
        $this->_anneeCreation = $anneeCreation;
    }
//
    public function addtransfert(transfert $transfert){
        $this->_transferts[] = $transfert;
    }
}