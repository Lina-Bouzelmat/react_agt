<?php
include 'config.php'; // Inclure le fichier de configuration de la base de données

// Récupérer l'ID de la mission à supprimer depuis la requête DELETE
$id = $_GET['id'];

// Requête SQL pour supprimer la mission avec l'ID spécifié
$sql = "DELETE FROM mission WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Mission supprimée avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>