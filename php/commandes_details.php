<?php
// filepath: c:\xampp\htdocs\Santé_Matos\commande_details.php

require_once 'db_connection.php';

// Ajouter un détail de commande
function ajouterCommandeDetail($commande_id, $produit_id, $quantite, $prix_unitaire) {
    global $pdo;
    $sql = "INSERT INTO commande_details (commande_id, produit_id, quantite, prix_unitaire) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$commande_id, $produit_id, $quantite, $prix_unitaire]);
}

// Récupérer les détails d'une commande
function recupererCommandeDetails($commande_id) {
    global $pdo;
    $sql = "SELECT * FROM commande_details WHERE commande_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$commande_id]);
    return $stmt->fetchAll();
}
?>