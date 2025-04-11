<?php
// filepath: c:\xampp\htdocs\Santé_Matos\favoris.php

require_once 'db_connection.php';

// Ajouter un produit aux favoris
function ajouterFavori($utilisateur_id, $produit_id) {
    global $pdo;
    $sql = "INSERT INTO favoris (utilisateur_id, produit_id) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$utilisateur_id, $produit_id]);
}

// Récupérer les favoris d'un utilisateur
function recupererFavoris($utilisateur_id) {
    global $pdo;
    $sql = "SELECT * FROM favoris WHERE utilisateur_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$utilisateur_id]);
    return $stmt->fetchAll();
}
?>