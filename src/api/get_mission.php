<?php
include 'config.php'; // Inclure le fichier de configuration de la base de données

$sql = "SELECT * FROM mission";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $missions = array();
    while ($row = $result->fetch_assoc()) {
        $missions[] = $row;
    }
    echo json_encode($missions); // Retourner les missions sous forme de JSON
} else {
    echo "Aucune mission trouvée.";
}
$conn->close();
?>