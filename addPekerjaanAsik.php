<?php include 'headerSelainIndex.php';?>
	
	



		<div class="container createPost">
		  <h2>Buat Pekerjaan Asik</h2>
		  <form action="insertPekerjaanAsik.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <label>Judul</label>
			  <input type="text" name="judul" required></input><br/>
			  <label>Deskripsi</label>
			  <textarea class="form-control" rows="5" id="comment" name="deskripsi"></textarea>
			  <label>Tanggal Dibuka</label>
			  <input type="date" name="buka" placeholder="YYYY-MM-DD" required/><br/>
			  <label>Tanggal Ditutup</label>
			  <input type="date" name="tutup" placeholder="YYYY-MM-DD" required/><br/>
			  <label>Jumlah Pekerja yang Dibutuhkan</label>
			  <input type="text" name="jumlah_pekerja" required></input><br/>
			  <label>Lokasi</label>
			  <input type="text" name="lokasi" required></input><br/>
			  <label>Foto</label>
			  <input type="file" name="file" />
			  
			  
			  <button   type="submit" class="btn btn-default">Submit</button>
			</div>
		  </form>
		</div>

<?php include 'footer.php';?>