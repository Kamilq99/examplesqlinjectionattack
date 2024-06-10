<?php
$servername = "localhost";
$username = "uzytkownik";
$password = "haslo";
$dbname = "hurtownia_danych";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM produkty WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nazwa: " . $row["nazwa"]. " - Cena: " . $row["cena"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>