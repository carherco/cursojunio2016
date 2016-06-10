<?php
include 'plantillas/cabecera.php';
?>

<h1>echo vs print_r vs var_dump</h1>

<?php
include 'config.php';
// mysqli orientado a objetos //
// ========================== //

// Create connection
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully</br>";

//Ejecutar SQL
$sql = "INSERT INTO lista (nombre)
VALUES ('Lista creada con mysqli orientado a objetos')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully</br>";
} else {
    echo "Ha ocurrido un error: " . $conn->error;
}

//Ejecutar SQL para obtener datos (SELECT)
$sql = "SELECT * FROM lista";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        echo "<div>Id: $id - Nombre: $nombre</div>";
    }
} else {
    echo "0 results</br>";
}


$conn->close();
?>

<?php
include 'plantillas/pie.php';
?>