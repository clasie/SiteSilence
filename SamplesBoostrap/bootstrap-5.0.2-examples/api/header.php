<?php
header('Content-Type: application/json');
/**
 * Connection DB
 * 
 */
//$result = 'Test';
$host = 'cinqjom24.mysql.db';
$dbname = 'cinqjom24';  
$username = 'cinqjom24'; 
$password = 'GEOgeo231094';

try {
    // Création d'une nouvelle connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configuration des options PDO pour afficher les erreurs sous forme d'exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = "Connexion réussie à la base de données. 1.1";

} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    $result = "Erreur de connexion : " . $e->getMessage();

}

