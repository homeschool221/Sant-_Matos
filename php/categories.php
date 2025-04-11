<?php
// filepath: c:\xampp\htdocs\Santé_Matos\categories.php

require_once 'db_connection.php';

// Ajouter une catégorie
function ajouterCategorie($nom, $description) {
    global $pdo;
    $sql = "INSERT INTO categories (nom, description) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $description]);
}

// Récupérer toutes les catégories
function recupererCategories() {
    global $pdo;
    $sql = "SELECT * FROM categories";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}
?>