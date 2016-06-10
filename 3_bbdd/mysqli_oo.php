<?php
include 'plantillas/cabecera.php';
?>

<h1>echo vs print_r vs var_dump</h1>

<?php
// mysqli orientado a objetos //
// ========================== //

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//Ejecutar SQL
$sql = "INSERT INTO lista (nombre)
VALUES ('Nombre de la lista')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

//Ejecutar SQL para obtener datos (SELECT)
$sql = "SELECT * FROM lista";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $nombre = $row["nombre"];
    }
} else {
    echo "0 results";
}


$conn->close();
?>

<?php
include 'plantillas/pie.php';
?>