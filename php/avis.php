<?php
// filepath: c:\xampp\htdocs\Santé_Matos\avis.php

require_once 'db_connection.php';

// Ajouter un avis
function ajouterAvis($utilisateur_id, $produit_id, $note, $commentaire) {
    global $pdo;
    $sql = "INSERT INTO avis (utilisateur_id, produit_id, note, commentaire) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$utilisateur_id, $produit_id, $note, $commentaire]);
}

// Récupérer les avis d'un produit
function recupererAvis($produit_id) {
    global $pdo;
    $sql = "SELECT * FROM avis WHERE produit_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$produit_id]);
    return $stmt->fetchAll();
}
?>