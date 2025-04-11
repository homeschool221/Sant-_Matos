<?php
// filepath: c:\xampp\htdocs\Santé_Matos\produits.php

require_once 'db_connection.php';

// Ajouter un produit
function ajouterProduit($nom, $description, $prix, $quantite_stock, $image_url, $categorie_id) {
    global $pdo;
    $sql = "INSERT INTO produits (nom, description, prix, quantite_stock, image_url, categorie_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $description, $prix, $quantite_stock, $image_url, $categorie_id]);
}

// Récupérer tous les produits
function recupererProduits() {
    global $pdo;
    $sql = "SELECT * FROM produits";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}
?>