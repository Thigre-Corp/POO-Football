<?php


class Equipe {
    private string $_nomEquipe;
    private Pays $_pays;
    private array $_jouers = [];
//
    public function __construct(string $nomEquipe, Pays $nomPays){
        $this->_nomEquipe = $nomEquipe;
        $this->_pays = $nomPays;
        $nomPays->addEquipe($this);

    }
    public function __toString(){
        return $this->_nomEquipe;
    }
//
    public function getNomEquipe(){
        return $this->_nomEquipe;
    }
    public function getJouers(){
        return $this->_jouers;
    }
    public function getPays(){
        return $this->_pays;
    }
//
    public function setNomEquipe(string $nomEquipe){
        $this->_nomEquipe = $nomEquipe;
    }
//
    public function addJouer(Jouer $jouer){
        $this->_jouers[] = $jouer;
    }

}