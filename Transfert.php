<?php


class Transfert {
    private Equipe $_equipe;
    private Joueur $_joueur;
    private DateTime $_dateDebut;
    private DateTime $_dateFin;
//
    public function __construct(Equipe $equipe, Joueur $joueur,
     string $dateDebut){
        $this->_equipe = $equipe;
        $this->_joueur = $joueur;
        $this->_dateDebut = DateTime::createFromFormat("Y", $dateDebut);
        $equipe->addtransfert($this);
        $joueur->addtransfert($this);
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
    public function getDateFin(){
        return $this->_dateFin;
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
    public function setDateFin(string $dateFin){
        $this->_dateFin = DateTime::createFromFormat("Y", $dateFin);
    }
    
//
    public function getDateString(){
        return $this->_dateDebut->format("Y");
    }
}