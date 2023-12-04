<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data</title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;900&display=swap" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;900&display=swap" rel="stylesheet"> -->
	<script src="delete.js"></script>
	<style>
		* {
			overflow-y: hidden;
			overflow-x: hidden;
			margin: 0;
			padding: 0;
			/* font-family: Poppins; */

		}

		.hero {
			width: 100vw;
			height: 100vh;
			background: #EFF6FF;
			display: flex;
			justify-content: center;
			align-items: center;

		}

		.card-hero {
			background: white;
			display: flex;
			justify-content: center;
			flex-direction: column;
			align-items: center;
			width: 30vw;
			height: 550px;
			border-radius: 30px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.322);
			/* padding: 30px 40px 30px 40px; */
		}

		.card-list {
			border-radius: 30px;
			width: 30vw;
			height: 40vh;
			margin-right: 40px;
			margin-left: 40px;
			white-space: nowrap;
			align-items: center;
			/* box-shadow: inset 0px 0px 30px rgba(0, 0, 0, 0.157); */
		}

		.judul {
			font-family: Poppins;
			text-align: center;
			font-weight: 800;
			font-size: 2em;
			color: #87BBFF;
			margin-bottom: 20px;
		}

		.list-card {
			display: flex;
			border-radius: 30px;
			overflow-x: scroll;
			height: 23vw;
			padding-left: 20px;
			padding-right: 20px;
			white-space: nowrap;
			align-items: center;
			padding-top: 20px;
		}


		.card {
			font-family: Poppins;
            width: 8%;
			background: white;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.322);
			padding: 30px 100px 30px 100px;
			height: 230px;
			margin: 10px;
			display: flex;
			border-radius: 30px;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		.judul-kartu {
			color: #87BBFF;
			font-weight: bold;
			font-size: 0.9em;
			height: 40px;
		}

		.tanggal {
			font-size: 1.3em;
			font-weight: bold;
			color: #1E81FF;
			height: 45px;
		}

		.kembali {
			margin-top: 30px;
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
			cursor: pointer;
		}

		.kembali:hover {
			background: none;
			border: 3px solid #87BBFF;
			color: #87BBFF;
		}

		.card-sampah {
			margin-top: 10px;
			height: 280px;
		}
		.card-organik {
			/* border: 2px solid #1E81FF; */
			background: #87BBFF;

			border-radius: 10px;
			/* font-weight: bold; */
			/* text-align: center; */
			padding: 5px;
			color: white;
		}

		.card-anorganik {
			/* border: 2px solid #1E81FF; */
			background: #1E81FF;
			border-radius: 10px;
			/* font-weight: bold; */
			/* text-align: center; */
			padding: 5px;
			margin-top: 10px;
			margin-bottom: 20px;
			color: white;

		}

		.dlt {
			margin-top: 10px;
			border: none;
			background: red;
			color: white;
			font-weight: bold;
			padding: 5px 10px 5px 10px;
			border-radius: 10px;
			height: 40px;
			cursor: pointer;
			transition: 0.5s;
			border: 2px solid red;

		}
		.dlt:hover{
			background: none;
			color: red;
			border: 2px solid red;
		}
		.jumlah{
			font-weight: 600;
			letter-spacing: 2px;
		}

		@media screen and (max-width: 767px) {
			.card-hero{
				width: 60vw;
			}

			.card-list{
				border-radius: 30px;
			width: 50vw;
			/* height: 90vh; */
			margin-right: 40px;
			margin-left: 40px;
			white-space: nowrap;
			align-items: center;
			}
			.list-card{
				height: 45vh;
				/* background: green; */
				padding-top: 0px;
				display: flex;
				align-items: center;
				/* justify-content: center; */
				/* padding-bottom: 60px; */
			}
			.kembali{
				width: 49vw;
			}
			/*  */


		}


	</style>
</head>

<body>
	<div class="hero">
		<div class="card-hero">
			<p class="judul">Data Trash</p>
			<div class="card-list">
				<div class="list-card">
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

	// Get data from table
	$sql = "SELECT * FROM data_sampah";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // Output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "<div class='card'>";
		echo "<p class='judul-kartu'>Data Sampah</p>";
	    echo "<p class='tanggal'>" . $row["tanggal"] . "</p>";
	    echo "<div class='card-sampah'>";
	    echo "<div class='card-organik'>";
	    echo "<p>Sampah Organik:</p>";
		echo "<div class='jumlah'>";
		echo $row["sampah_organik"];
		echo "</div>";
	    echo "</div>";
		echo "<div class='card-anorganik'>";
	    echo "<p>Sampah Anorganik: </p>";
		echo "<div class='jumlah'>";
		echo $row["sampah_anorganik"];
	    echo "</div>";
	    echo "</div>";
	    echo "</div>";
	    echo "<button class='dlt' onclick='deleteData(" . $row["id"] . ")'>Hapus</button>";
	    echo "</div>";
	  }
	} else {
	  echo "Tidak ada data";
	} 
	$conn->close();
	?>
				</div>
			</div>
			<button class="kembali" onclick="location.href='index.html'">Kembali</button>
		</div>
	</div>

	<script>
		function deleteData(id) {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					location.reload();
				}
			};
			xhttp.open("GET", "delete.php?id=" + id, true);
			xhttp.send();
		}
	</script>
</body>

</html>