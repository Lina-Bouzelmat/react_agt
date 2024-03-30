<?php
include 'config.php'; // Inclure le fichier de configuration de la base de données

// Récupérer les données du formulaire POST
$id = $_POST['id'];
$titre = $_POST['titre'];
$description = $_POST['description'];
// Ajouter les autres champs ici...

// Requête SQL pour mettre à jour une mission existante
$sql = "UPDATE mission SET titre='$titre', description='$description' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Mission mise à jour avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>