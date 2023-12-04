
<?php 
	$id= $_GET['id_edit'];
	include "koneksi.php";
	$data = $conn->query("select * from tbl_blog where id = '$id'");

	$value= $data->fetch_assoc();
?>
<h1>Edit Artikel Berita</h1>

	<form method='POST' action="edit.php">
		 
		 <div class="form-group">
		    <label for="id">Id Berita</label>
			<input type="text" class="form-control" name="id" value="<?php echo $value['id'] ?>" readonly>
		</div>
		<div class="form-group">
		    <label for="Judul">Judul</label>

		    <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $value['judul'] ?>" required >    
		</div>

		<div class="form-group">
			<label for="isi">Isi Berita</label>
			<textarea class="form-control" name="isi" rows="10" required id="isi"><?php echo $value['isi'] ?></textarea>
		</div>

		<div class="form-group">
		    <label for="kategori">Kategori Berita:</label>
		    <input type="text" class="form-control" name="kategori" maxlength="12" required id="kategori" value="<?php echo $value['judul'] ?>" >    
		</div>

        <br>
		<button type="submit" class="btn btn-primary">Edit</button>
	</form>