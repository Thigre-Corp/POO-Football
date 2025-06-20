<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Poo-Football</title>
</head>
<body>
    <div class="container-fluid bg-dark">
        <h1 style='color: white;' class='text-center'>Exercice Football</h1>

<?php
// includes
    require 'Pays.php';
    require 'Equipe.php';
    require 'Joueur.php';
    require 'Transfert.php';

//creation des Pays
    $france = new Pays('France');
    $espagne = new Pays('Espagne');
    $angleterre = new Pays('Angleterre');
    $italie = new Pays('Italie');
    $portugal = new Pays('Portugal');
    $argentine = new Pays('Argentine');
    $bresil = new Pays('Bresil');
//Creation des Equipes
    $psg = new Equipe('PSG', $france, '1970');
    $rcs = new Equipe('RC Strasbourg', $france, '1906');
    $fcb = new Equipe('FC Barcelone', $espagne, '1899');
    $juv = new Equipe('Juventus', $italie, '1897');
    $man = new Equipe('Mancherster United', $angleterre, '1878');
    $rea = new Equipe('Real Madrid', $espagne, '1902');
//Création des joueurs
    $mbappe = new Joueur('Mbappe', 'Killian', '01/01/1998', $france);
    $ronaldo = new Joueur('Ronaldo', 'Christiano', '01/01/1980', $portugal);
    $messi = new Joueur('Messi', 'Mainon', '01/01/1983', $argentine);
    $neymar= new Joueur('Neymar', 'Jean', '01/01/1990', $bresil);
//création des objet transfert...
    $transfert1 = new Transfert($psg, $mbappe, '2017');
    $transfert2 = new Transfert($psg, $messi, '2021');
    $transfert3 = new Transfert($psg, $neymar, '2017');
    $transfert4 = new Transfert($fcb, $messi, '2004');
    $transfert5 = new Transfert($fcb, $neymar, '2013');
    $transfert6 = new Transfert($juv, $ronaldo, '2018');
    $transfert7 = new Transfert($rea, $ronaldo, '2009');
    $transfert8 = new Transfert($man, $ronaldo, '2021');
//fonction pour afficher les équipes d'un pays
    function afficherCartePays( Pays $pays){
        echo "<div class='pays card bg-danger m-1' style='height:16em; width:16em;'><h3 class='card-title card-header text-truncate p-0'>".$pays."</h3>";
        echo "<div class='card-body position-absolute bottom-0'>
                <ul class='list-group-flush  card-text'>";
        foreach($pays->getEquipes() as $equipe){
            echo "<li class='list-group-item bg-danger'>".$equipe."</li>";
        }
        echo "</ul></div></div>";
    }
//fonction pour afficher les transferts d'une équippe
    function afficherEquipes( Equipe $equipe){
        echo "<div class='equipe card bg-warning m-1' style='height:16em; width:16em;'><div class='m-1'><h3 class='card-title card-header text-truncate p-0'>".$equipe."</h3>";
        echo "<h4 class='text-body-secondary fs-6'>".$equipe->getPays()." - ".$equipe->getAnneeCreation()."</h4>"; 
        echo "<div class='card-body position-absolute bottom-0'>";
        echo "<ul class='list-group-flush card-text'>";
        foreach($equipe->gettransferts() as $transfert){
            echo "<li class='list-group-item bg-warning'>".$transfert."</li>";
        }
        echo "</ul></div></div></div>";
    }
//fonction pour afficher les carrières
    function afficherJoueur( Joueur $joueur){
        echo "<div class='joueur card bg-success m-1' style='height:16em; width:16em;'><div class='m-1'><h3 class='card-title card-header text-truncate p-0'>".$joueur."</h3>";
        echo "<h4 class='text-body-secondary fs-6'>".$joueur->getPays()." - ".$joueur->getAge()." ans</h4>";
        echo "<div class='card-body position-absolute bottom-0'>
                <ul class='list-group-flush bg-success  card-text'>";
        foreach($joueur->gettransferts() as $transfert){
            echo "<li class='list-group-item bg-success'>".$transfert->getEquipe()." (".$transfert->getDateString().")</li>";
        }
        echo "</ul></div></div></div>";
    }
//appel cartes pays
    echo "<h2 class='text-danger text-center'>Pays</h2><div id='carte_pays' class='d-flex m-2 mb-4 flex-wrap justify-content-center'>";
    afficherCartePays($france);
    afficherCartePays($espagne);
    afficherCartePays($angleterre);
    afficherCartePays($italie);
    echo "</div>";
//appel cartes équipes
    echo "<h2 class='text-warning text-center'>Equipes</h2><div id='carte_equipes' class='d-flex m-2 mb-4 flex-wrap justify-content-center'>";
    afficherEquipes($psg);
    afficherEquipes($rcs);
    afficherEquipes($fcb);
    afficherEquipes($juv);
    afficherEquipes($man);
    afficherEquipes($rea);
    echo "</div>";
//appel cartes Joueurs
    echo "<h2 class='text-success text-center'>Joueurs</h2><div id='carte_joueurs' class='d-flex m-2 mb-4 flex-wrap justify-content-center'>";
    afficherJoueur($mbappe);
    afficherJoueur($ronaldo);
    afficherJoueur($messi);
    afficherJoueur($neymar);
    echo "</div>";

?>
        </div>
    </body>
</html>