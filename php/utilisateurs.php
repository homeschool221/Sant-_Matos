<?php
// filepath: c:\xampp\htdocs\Santé_Matos\utilisateurs.php

require_once 'db_connection.php';

// Ajouter un utilisateur
function ajouterUtilisateur($nom, $email, $mot_de_passe, $adresse, $telephone, $role = 'client') {
    global $pdo;
    $hashedPassword = password_hash($mot_de_passe, PASSWORD_BCRYPT);
    $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe, adresse, telephone, role) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $email, $hashedPassword, $adresse, $telephone, $role]);
}

// Récupérer tous les utilisateurs
function recupererUtilisateurs() {
    global $pdo;
    $sql = "SELECT * FROM utilisateurs";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}
?>