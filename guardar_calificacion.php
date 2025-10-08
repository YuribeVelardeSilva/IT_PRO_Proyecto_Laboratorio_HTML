<?php
// Conexión a MySQL
$conexion = new mysqli("localhost", "root", "", "escuela"); // usuario root, sin contraseña por defecto

// Verifica si hay error de conexión
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

// Obtiene los datos del formulario
$numeroCuenta = $_POST['numeroCuentaCALI'];
$claveAsignatura = $_POST['claveAsignaturaCALI'];
$grupoInscrito = $_POST['grupoInscritoCALI'];
$idSemestre = $_POST['idNumSemestreCALI'];

// Inserta en la base de datos
$sql = "INSERT INTO Calificaciones 
        (NumeroCuentaCALI, ClaveAsignaturaCALI, GrupoInscritoCALI, IDNumSemestreCALI)
        VALUES ('$numeroCuenta', '$claveAsignatura', '$grupoInscrito', '$idSemestre')";

if ($conexion->query($sql) === TRUE) {
  echo "✅ Calificación registrada correctamente.";
} else {
  echo "❌ Error: " . $conexion->error;
}

$conexion->close();
?>
