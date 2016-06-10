<?php
include 'plantillas/cabecera.php';
?>

<h1>echo vs print_r vs var_dump</h1>

<?php
include 'config.php';
// mysqli funcional //
// ================ //

// Create connection
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully</br>";

//Ejecutar SQL
$sql = "INSERT INTO lista (nombre)
VALUES ('Lista creada con mysqli funcional')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully</br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

//Ejecutar SQL para obtener datos (SELECT)
$sql = "SELECT * FROM lista";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        echo "<div>Id: $id - Nombre: $nombre</div>";
    }
} else {
    echo "0 results</br>";
}


mysqli_close($conn);
?>

<?php
include 'plantillas/pie.php';
?>