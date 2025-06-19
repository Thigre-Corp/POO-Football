<?php


class Jouer {
    private Equipe $_equipe;
    private Joueur $_joueur;
    private DateTime $_dateDebut;
//
    public function __construct(Equipe $equipe, Joueur $joueur,
     string $dateDebut){
        $this->_equipe = $equipe;
        $this->_joueur = $joueur;
        $this->_dateDebut = DateTime::createFromFormat("Y", $dateDebut);
        $equipe->addJouer($this);
        $joueur->addJouer($this);
    }

    public function __toString(){
        return $this->_joueur." (".$this->_dateDebut->format("Y").")";
    }
//
    public function getEquipe(){
        return $this->_equipe;
    }
    public function getJoueur(){
        return $this->_joueur;
    }
    public function getDateDebut(){
        return $this->_dateDebut;
    }
//
    public function setEquipe(Equipe $equipe){
        $this->_equipe = $equipe;
    }
    public function setJoueur(Joueur $joueur){
        $this->_Joueur = $joueur;
    }
    public function setDateDebut(string $dateDebut){
        $this->_dateDebut = DateTime::createFromFormat("Y", $dateDebut);
    }
}