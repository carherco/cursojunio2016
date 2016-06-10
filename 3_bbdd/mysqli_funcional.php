<?php
include 'plantillas/cabecera.php';
?>

<h1>echo vs print_r vs var_dump</h1>

<?php
// mysqli funcional //
// ================ //

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//Ejecutar SQL
$sql = "INSERT INTO lista (nombre)
VALUES ('Nombre de la lista')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
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
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>

<?php
include 'plantillas/pie.php';
?>