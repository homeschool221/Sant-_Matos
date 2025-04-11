<?php
// filepath: c:\xampp\htdocs\Santé_Matos\paiements.php

require_once 'db_connection.php';

// Ajouter un paiement
function ajouterPaiement($commande_id, $montant, $methode, $statut = 'en attente') {
    global $pdo;
    $sql = "INSERT INTO paiements (commande_id, montant, methode, statut) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$commande_id, $montant, $methode, $statut]);
}

// Récupérer les paiements d'une commande
function recupererPaiements($commande_id) {
    global $pdo;
    $sql = "SELECT * FROM paiements WHERE commande_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$commande_id]);
    return $stmt->fetchAll();
}
?>