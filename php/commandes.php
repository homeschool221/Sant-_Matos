<?php
// filepath: c:\xampp\htdocs\Santé_Matos\commandes.php

require_once 'db_connection.php';

// Ajouter une commande
function ajouterCommande($utilisateur_id, $total, $statut = 'en attente') {
    global $pdo;
    $sql = "INSERT INTO commandes (utilisateur_id, total, statut) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$utilisateur_id, $total, $statut]);
}

// Récupérer toutes les commandes
function recupererCommandes() {
    global $pdo;
    $sql = "SELECT * FROM commandes";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}
?>