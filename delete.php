<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sampah_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Get id from URL
    $id = $_GET['id'];

    // Delete data from table
$sql = "DELETE FROM data_sampah WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil dihapus";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>