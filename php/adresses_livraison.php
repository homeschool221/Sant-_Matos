<?php
// filepath: c:\xampp\htdocs\Santé_Matos\adresses_livraison.php

require_once 'db_connection.php';

// Ajouter une adresse de livraison
function ajouterAdresseLivraison($utilisateur_id, $adresse, $ville, $code_postal, $pays) {
    global $pdo;
    $sql = "INSERT INTO adresses_livraison (utilisateur_id, adresse, ville, code_postal, pays) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$utilisateur_id, $adresse, $ville, $code_postal, $pays]);
}

// Récupérer les adresses d'un utilisateur
function recupererAdressesLivraison($utilisateur_id) {
    global $pdo;
    $sql = "SELECT * FROM adresses_livraison WHERE utilisateur_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$utilisateur_id]);
    return $stmt->fetchAll();
}
?>