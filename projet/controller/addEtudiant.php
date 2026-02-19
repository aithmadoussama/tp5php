<?php

// les includes 
include_once '../racine.php';
include_once RACINE . '/service/EtudiantService.php';

// la recuperation des donnees du formulaire 
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("location:../index.php");
    exit;
}

$nom = trim($_POST['nom'] ?? '');
$prenom = trim($_POST['prenom'] ?? '');
$ville = trim($_POST['ville'] ?? '');
$sexe = trim($_POST['sexe'] ?? '');

if ($nom === '' || $prenom === '' || $ville === '' || $sexe === '') {
    header("location:../index.php");
    exit;
}
// creation d'un new etudiant 
$es = new EtudiantService();
$es->create(new Etudiant(null, $nom, $prenom, $ville, $sexe));

header("location:../index.php");
