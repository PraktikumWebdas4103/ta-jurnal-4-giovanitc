<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
 		<td> Nama <input type="text" name="nama"><br></td></tr>
 		<tr>
		<td> Film yang disukai
			 	:<input type="checkbox" name="film1" value="Horror"> Horror
				<input type="checkbox" name="film2" value="Action"> Action
				<input type="checkbox" name="film3" value="Anime"> Anime
				<input type="checkbox" name="film4" value="Thriller"> Thriller
				<input type="checkbox" name="film5" value="Animasi"> Animasi
		</td>
	</tr>
	<tr>
		<td> Tempat Wisata Tujuan Travelling
			:<input type="checkbox" name="tempat1" value="Bali"> Bali
			<input type="checkbox" name="tempat2" value="Raja Ampat"> Raja Ampat
			<input type="checkbox" name="tempat3" value="Pulau Derawan"> Pulau Derawan
			<input type="checkbox" name="tempat4" value="Bangka Belitung"> Bangka Belitung
			<input type="checkbox" name="tempat5" value="Labuan Bajo"> Labuan Bajo
		</td>
	</tr>
	<tr>
 		<td>Gambar <input type="file" name="gambar"><br></td></tr>
	<tr>
 		<td><input type="submit" name="submit" value="Kirim">
 		<input type="submit" name="delete" value="Hapus"></td>
 	</table>
</form>
<?php
 if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $gambar = $_FILES['gambar']['name'];

  
  echo 'Nama 	: ' . $_POST['nama'] . '<br/>';

  echo "<br/>";

  echo "Hobi : <br/>";
 	if (isset($_POST['film1'])){
  echo "-" . $_POST['film1']."<br />";
}
	if (isset($_POST['film2'])){
  echo "-" . $_POST['film2']."<br />";
}
	if (isset($_POST['film3'])){
  echo "-" . $_POST['film3']."<br />";
}
	if (isset($_POST['film4'])){
  echo "-" . $_POST['film4']."<br />";
}
	if (isset($_POST['film5'])){
  echo "-" . $_POST['film5']."<br />";
}
	
	echo "<br/>";

	echo "Tempat wisata tujuan travelling : <br/>";
	if (isset($_POST['tempat1'])){
  echo "-" . $_POST['tempat1']."<br />";
}
	if (isset($_POST['tempat2'])){
  echo "-" . $_POST['tempat2']."<br />";
}
	if (isset($_POST['tempat3'])){
  echo "-" . $_POST['tempat3']."<br />";
}
	if (isset($_POST['tempat4'])){
  echo "-" . $_POST['tempat4']."<br />";
}
	if (isset($_POST['tempat5'])){
  echo "-" . $_POST['tempat5']."<br />";
}
	echo "<img src='$gambar'>";
}

?>