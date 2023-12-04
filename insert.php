<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>insert</title>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;900&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .hero {
      font-family: Poppins;
      width: 100vw;
      height: 100vh;
      background: #EFF6FF;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .card {
      background: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 30vw;
      height: 550px;
      border-radius: 30px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.322);
    }

    .judul {
      text-align: center;
      font-weight: 800;
      font-size: 2em;
      color: #87BBFF;
      margin-bottom: 80px;
    }

    .berhasil {
      font-weight: bold;

    }

    h6 {
      font-size: 0.8em;
      margin-top: 20px;
      color: #87BBFF
    }

    button {
      margin-top: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-decoration: none;
      width: 22vw;
      height: 50px;
      border: none;
      background: #87BBFF;
      color: white;
      font-weight: bold;
      border-radius: 40px;
      transition: 0.5s;
      cursor: pointer
    }

    button:hover{
      background: none;
      border: 3px solid #87BBFF;
      color: #87BBFF;
    }

    @media screen and (max-width: 767px) {
      .card{
        width: 60vw;
      }
      button{
        width: 50vw;
      }
    }
  </style>
</head>


<body>
  <div class="hero">
    <div class="card">
      <p class="judul">Data Trash</p>
      <img src="correct.png" width="140px" alt="">

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

// Get data from form
$tanggal = $_POST['tanggal'];
$organik = $_POST['organik'];
$anorganik = $_POST['anorganik'];

// Insert data into table
$sql = "INSERT INTO data_sampah (tanggal, sampah_organik, sampah_anorganik)
VALUES ('$tanggal', '$organik', '$anorganik')";

if ($conn->query($sql) === TRUE) {
  echo "<h6>Data berhasil disimpan</h6>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
      <button onclick="location.href='index.html'">Kembali</button>
    </div>
  </div>
</body>

</html>