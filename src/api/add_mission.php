<?php
include 'config.php';

// Récupérer les données du formulaire POST
$titre = $_POST['titre'];
$description = $_POST['description'];
$type_de_mission = $_POST['type de mission'];
$pays = $_POST['pays'];
$statut = $_POST['statut'];
$date_de_debut = $_POST['date de debut'];
$date_de_fin = $_POST['date de fin'];

// Requête SQL pour ajouter une nouvelle mission
$sql = "INSERT INTO mission (titre, description) VALUES ('$titre', '$description','$type_de_mission','$pays','$statut','$date_de_debut','$date_de_fin')";
if ($conn->query($sql) === TRUE) {
    echo "Nouvelle mission ajoutée avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>