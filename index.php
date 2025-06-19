<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"></link>
    <title>Poo-Football</title>
</head>
<body>

    <h1>Exercice Football</h1>

<?php
// includes
    require 'Pays.php';
    require 'Equipe.php';
    require 'Joueur.php';
    require 'Jouer.php';

//creation des Pays
    $france = new Pays('France');
    $espagne = new Pays('Espagne');
    $angleterre = new Pays('Angleterre');
    $italie = new Pays('Italie');
    $portugal = new Pays('Portugal');
    $argentine = new Pays('Argentine');
    $bresil = new Pays('Bresil');
//Creation des Equipes
    $psg = new Equipe('PSG', $france);
    $rcs = new Equipe('RC Strasbourg', $france);
    $fcb = new Equipe('FC Barcelone', $espagne);
    $juv = new Equipe('Juventus', $italie);
    $man = new Equipe('Mancherster United', $angleterre);
    $rea = new Equipe('Real Madrir', $espagne);
//Création des joueurs
    $mbappe = new Joueur('Mbappe', 'Killian', '01/01/1998', $france);
    $ronaldo = new Joueur('Ronaldo', 'Christiano', '01/01/1980', $portugal);
    $messi = new Joueur('Messi', 'Mainon', '01/01/1983', $argentine);
    $neymar= new Joueur('Neymar', 'Jean', '01/01/1990', $bresil);
//création des objet Jouer...
    $jouer1 = new Jouer($psg, $mbappe, '2017');
    $jouer2 = new Jouer($psg, $messi, '2021');
    $jouer3 = new Jouer($psg, $neymar, '2017');
    $jouer4 = new Jouer($fcb, $messi, '2004');
    $jouer5 = new Jouer($fcb, $neymar, '2013');
    $jouer6 = new Jouer($juv, $ronaldo, '2018');
    $jouer7 = new Jouer($rea, $ronaldo, '2009');
    $jouer8 = new Jouer($man, $ronaldo, '2021');
//fonction pour afficher les équipes d'un pays
    function afficherCartePays( Pays $pays){
        echo "<div class='pays'><h3>".$pays."</h3>";
        foreach($pays->getEquipes() as $equipe){
            echo "<p>".$equipe."</p>";
        }
        echo "</div>";
    }
//fonction pour afficher les jouers d'une équippe
    function afficherEquipes( Equipe $equipe){
        echo "<div class='equipe'><h3>".$equipe."</h3>";
        foreach($equipe->getJouers() as $jouer){
            echo "<p>".$jouer."</p>";
        }
        echo "</div>";
    }
//fonction pour afficher les carrières
    function afficherJoueur( Joueur $joueur){
        echo "<div class='joueur'><h3>".$joueur."</h3>";
        foreach($joueur->getJouers() as $jouer){
            echo "<p>".$jouer->getEquipe()." (".$jouer->getEquipe().")</p>";
        }
        echo "</div>";
    }

//appel cartes pays
    echo "<h2>Pays</h2><div id=carte_pays>";
    afficherCartePays($france);
    afficherCartePays($espagne);
    afficherCartePays($angleterre);
    afficherCartePays($italie);
    echo "</div>";
//appel cartes équipes
    echo "<h2>Equipes</h2><div id=carte_equipes>";
    afficherEquipes($psg);
    afficherEquipes($rcs);
    afficherEquipes($fcb);
    afficherEquipes($juv);
    afficherEquipes($man);
    afficherEquipes($rea);
    echo "</div>";
//appel cartes Joueurs
    echo "<h2>Joueurs</h2><div id=carte_joueurs>";
    afficherJoueur($mbappe);
    afficherJoueur($ronaldo);
    afficherJoueur($messi);
    afficherJoueur($neymar);
    echo "</div>";