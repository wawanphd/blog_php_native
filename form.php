<h1>Tambah Artikel</h1>

	<form method='POST'>
		<div class="form-group">
		    <label for="Judul">Judul</label>
		    <input type="text" class="form-control" name="judul" id="judul" required >    
		</div>

		<div class="form-group">
			<label for="isi">Isi Berita</label>
			<textarea class="form-control" name="isi" rows="10" required id="isi"></textarea>
		</div>

		<div class="form-group">
		    <label for="kategori">Kategori Berita:</label>
		    <input type="text" class="form-control" name="kategori" maxlength="12" required id="kategori">    
		</div>

        <br>
		<button type="submit" class="btn btn-primary">Tambah</button>
	</form>