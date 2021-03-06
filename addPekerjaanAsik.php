<?php include 'header.php';?>
	
	

<section id="single-page" class="section with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header">
					<div class="container">
						<h1>Buat Pekerjaan Asik</h1>
					</div>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						
							
							<div class="container createPost">
							  <h2>Buat Pekerjaan Asik</h2>
							  <form action="insertPekerjaanAsik.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
								  <label>Judul</label>
								  <input type="text" name="judul" class="form-control"  placeholder="Buat judul semenarik mungkin" required></input><br/>
								  <label>Deskripsi</label>
								  <textarea class="form-control" rows="5" id="comment"  placeholder="Deskripsikan pekerjaan dan membutuhkan orang seperti apa" name="deskripsi"></textarea><br/><br/>
								  <label>Jumlah Pekerja yang Dibutuhkan</label>
								  <input type="text" name="jumlah_pekerja" class="form-control"  placeholder="Masukkan jumlah pekerja" required></input><br/>
								  <label>Lokasi</label>
								  <input type="text" name="lokasi" class="form-control" placeholder="Lokasi Pekerjaan"  required></input><br/>
								  <label>Upah Pekerja</label>
								  <input type="text" name="lokasi" class="form-control" placeholder="Masukkan upah pekerja dalam hitungan perhari" required></input><br/>	  
								  <label>Foto</label>
								  <input type="file" name="file" />
								  <br/><br/>
								  <label>Tanggal pekerjaan dilaksanakan</label>
								  <input type="date" name="buka" class="input-sm" placeholder="YYYY-MM-DD" required/><br/><br/>
							      <label>Tanggal Dibuka Pendaftarn</label>
								  <input type="date" name="buka" class="input-sm" placeholder="YYYY-MM-DD" required/><br/><br/>
								  <label>Tanggal Ditutup Pendaftaran</label>
								  <input type="date" name="tutup" class="input-sm" data-provide="datepicker" placeholder="YYYY-MM-DD" required/><br/><br/>
								  
								  <br/>
								  
								  <button   type="submit" class="btn btn-default">Submit</button>
								</div>
							  </form>
							</div>
		
				</div>
			</div>
		</section>	
<?php include 'footer.php';?>