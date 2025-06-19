<?php


class Pays {
    private string $_nomPays;
    private array $_equipes = [];
    private array $_joueurs = [];
//
    public function __construct(string $nomPays){
        $this->_nomPays = $nomPays;
    }
    public function __toString(){
        return $this->_nomPays;
    }
//
    public function getNomPays(){
        return $this->_nomPays;
    }
    public function getEquipes(){
        return $this->_equipes;
    }
    public function getJoueurs(){
        return $this->_joueurs;
    }
//
    public function setNomPays(string $nomPays){
        $this->_nomPays = $nomPays;
    }
//
    public function addEquipe(Equipe $equipe){
        $this->_equipes[] = $equipe;
    }
    public function addJoueur(Joueur $joueur){
        $this->_joueurs[] = $joueur;
    }

}