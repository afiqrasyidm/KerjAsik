
create database kerjasik;

CREATE TABLE Pencari_Pekerja_Asik (
	id INT(6)  AUTO_INCREMENT PRIMARY KEY,
	fullname VARCHAR(50) NOT NULL,
	no_hp varchar(50),
	email VARCHAR(50),
	instansi varchar(30),
	username varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	foto_ktp varchar(100)
)

INSERT INTO Pencari_Pekerja_Asik (fullname, no_hp, email, instansi, username, password )VALUES('Anto Saja', '08088', 'anto@anto.com', 'anto company', 'anto', 'anto');


CREATE TABLE Pekerjaan_Asik (
	id INT(6)  AUTO_INCREMENT PRIMARY KEY,
	id_pencari_pekerja_asik  INT(6),
	deskripsi VARCHAR(100) NOT NULL,
	tanggal_buka_daftar DATE NOT NULL,
	tanggal_tutup_daftar DATE NOT NULL,
	lokasi varchar(50),
	jumlah_pekerja int(6),
	judul varchar(50),
	foto_iklan varchar(100),

	FOREIGN KEY (id_pencari_pekerja_asik) REFERENCES kerjasik.Pencari_Pekerja_Asik(id)  ON DELETE CASCADE
);

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, tanggal_buka_daftar, tanggal_tutup_daftar, lokasi, jumlah_pekerja, judul  )
VALUES('1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '2016-10-10', '2016-10-11', 'depok', '11', 'GERAK JALAN IS THE BEST');



CREATE TABLE Pekerja_Asik (
	id INT(6)  AUTO_INCREMENT PRIMARY KEY,
	fullname VARCHAR(50) NOT NULL,
	no_hp varchar(50),
	email VARCHAR(50),
	instansi varchar(30),
	username varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	pekerjaan varchar(50) NOT NULL,
	nomor_rekening varchar(50) NOT NULL,
	deskripsi VARCHAR(100) NOT NULL,
	foto_ktp varchar(100) 
);

INSERT INTO Pekerja_Asik (fullname, no_hp, email, instansi, username, password, pekerjaan, nomor_rekening, deskripsi )
VALUES('Anto Saja Tapi Pekerja', '08088', 'anto@anto.com', 'anto university', 'anto', 'anto', 'mahasiswa', '000', 'seorang mahasiswa yang bersemangat!');

INSERT INTO Pekerja_Asik (fullname, no_hp, email, instansi, username, password, pekerjaan, nomor_rekening, deskripsi )
VALUES('Ano Saja Tapi Pekerja', '08088', 'anto@anto.com', 'anto university', 'anto', 'anto', 'mahasiswa', '000', 'seorang mahasiswa yang bersemangat!');


CREATE TABLE Pekerja_Yang_Mendaftar(

	id INT(6)  AUTO_INCREMENT PRIMARY KEY,
	id_pekerjaan_asik INT(6), 
	id_pekerja_asik INT(6) ,
	
	FOREIGN KEY (id_pekerjaan_asik) REFERENCES Pekerjaan_Asik(id),
	FOREIGN KEY (id_pekerja_asik) REFERENCES Pekerja_Asik(id)
);

INSERT INTO Pekerja_Yang_Mendaftar (id_pekerjaan_asik, id_pekerja_asik )VALUES( 1,1 );

INSERT INTO Pekerja_Yang_Mendaftar (id_pekerjaan_asik, id_pekerja_asik )VALUES( 1,2 );

