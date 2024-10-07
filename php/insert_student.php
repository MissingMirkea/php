<?php
// Conectare la baza de date
$servername = "localhost";
$username = "root"; // înlocuiește cu username-ul MySQL-ului tău
$password = ""; // înlocuiește cu parola MySQL-ului tău
$dbname = "scoala";

// Creare conexiune
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificare conexiune
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// Preluăm datele din formular
$nume_prenume = $_POST['nume_prenume'];
$idnp = $_POST['idnp'];
$anul_studiu = $_POST['anul_studiu'];
$anul_nasterii = $_POST['anul_nasterii'];
$grupa = $_POST['grupa'];
$specialitatea = $_POST['specialitatea'];

// Inserare date în tabel
$sql = "INSERT INTO elevi (nume_prenume, idnp, anul_studiu, anul_nasterii, grupa, specialitatea)
        VALUES ('$nume_prenume', '$idnp', '$anul_studiu', '$anul_nasterii', '$grupa', '$specialitatea')";

if ($conn->query($sql) === TRUE) {
    echo "Elev adăugat cu succes!";
} else {
    echo "Eroare: " . $sql . "<br>" . $conn->error;
}

// Închidere conexiune
$conn->close();
?>
