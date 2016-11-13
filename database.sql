use kerjasik;
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
	deskripsi VARCHAR(1000) NOT NULL,
	tanggal_buka_daftar DATE NOT NULL,
	tanggal_tutup_daftar DATE NOT NULL,
	lokasi varchar(50),
	jumlah_pekerja int(6),
	judul varchar(50),
	foto_iklan varchar(100),

	FOREIGN KEY (id_pencari_pekerja_asik) REFERENCES kerjasik.Pencari_Pekerja_Asik(id)  ON DELETE CASCADE
);

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Ayo ikut Gerak jalan', 'depok', '11', 'Gerak Jalan Bersama DepokMie', 'uploads/foto1.jpg','2016-10-10','2016-10-10');


INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Ayo ikut Gerak jalan', 'depok', '11', 'Gerak Jalan Santai di Depok', 'uploads/foto2.jpg','2016-10-10','2016-10-10');

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Ayo ikut Gerak jalan', 'depok', '11', 'Gerak Jalan Santai saat Car Free Day', 'uploads/foto3.jpg','2016-10-10','2016-10-10');

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Ayo ikut Pembersihan kali ciliwung', 'depok', '11', 'Pembersihan kali ciliwung', 'uploads/foto4.jpg','2016-10-10','2016-10-10');

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Ayo tanam 1000 pohon dibali', 'depok', '11', 'Aksi Tanam 1000 Pohon di Bali', 'uploads/foto5.jpg','2016-10-10','2016-10-10');

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Ayo ikut penelitan untuk skripsi', 'depok', '11', 'Survey Penelitian Untuk Skripsi', 'uploads/foto6.jpg','2016-10-10','2016-10-10');

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Kamu kreatif? ayo jadi panitia acara ini', 'depok', '11', 'Panitia acara kreatif', 'uploads/foto7.jpg','2016-10-10','2016-10-10');

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Ayo ikut flashmob produk Mie', 'depok', '11', 'Flashmob produk Depok Mie', 'uploads/foto8.jpg','2016-10-10','2016-10-10');

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Sosial tweet day untuk pelarangan merokok', 'depok', '11', 'Sosial Tweet Day', 'uploads/foto9.jpg','2016-10-10','2016-10-10');

INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, lokasi ,jumlah_pekerja, judul, foto_iklan, tanggal_buka_daftar, tanggal_tutup_daftar  )
VALUES('1', 'Ayo Jadi duta kehutanan', 'depok', '11', 'Duta Kehutanan', 'uploads/foto10.jpg','2016-10-10','2016-10-10');


ALTER TABLE Pekerjaan_asik ADD jumlah_yang_daftar int;

ALTER TABLE Pekerjaan_Asik MODIFY  COLUMN deskripsi varchar(2000) NOT NULL;


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
	
	foto_ktp varchar(100) 
);

INSERT INTO Pekerja_Asik (fullname, no_hp, email, instansi, username, password, pekerjaan, nomor_rekening, deskripsi )
VALUES('Anto Saja Tapi Pekerja', '08088', 'anto@anto.com', 'anto university', 'anto', 'anto', 'mahasiswa', '000', 'seorang mahasiswa yang bersemangat!');

INSERT INTO Pekerja_Asik (fullname, no_hp, email, instansi, username, password, pekerjaan, nomor_rekening, deskripsi )
VALUES('Ano Saja Tapi Pekerja', '08088', 'anto@anto.com', 'anto university', 'anto', 'anto', 'mahasiswa', '000', 'seorang mahasiswa yang bersemangat!');


INSERT INTO Pekerja_Asik (fullname, no_hp, email, instansi, username, password, pekerjaan, nomor_rekening, deskripsi )
VALUES('Ano Saja Tapi Pekerja', '08088', 'anto@anto.com', 'anto university', 'andi', 'andi', 'mahasiswa', '000', 'seorang mahasiswa yang bersemangat!');


DELETE FROM Pekerja_Asik WHERE id=1;
DELETE FROM Pekerja_Asik WHERE id=2;
DELETE FROM Pekerja_Asik WHERE id=3;
DELETE FROM Pekerja_Asik WHERE id=4;
DELETE FROM Pekerja_Asik WHERE id=5;
DELETE FROM Pekerja_Asik WHERE id=6;
DELETE FROM Pekerja_Asik WHERE id=7;
DELETE FROM Pekerja_Asik WHERE id=9;

DELETE FROM Pencari_Pekerja_Asik WHERE id=2;


CREATE TABLE Pekerja_Yang_Mendaftar(

	id INT(6)  AUTO_INCREMENT PRIMARY KEY,
	id_pekerjaan_asik INT(6), 
	id_pekerja_asik INT(6) ,
	
	FOREIGN KEY (id_pekerjaan_asik) REFERENCES Pekerjaan_Asik(id),
	FOREIGN KEY (id_pekerja_asik) REFERENCES Pekerja_Asik(id)
);

INSERT INTO Pekerja_Yang_Mendaftar (id_pekerjaan_asik, id_pekerja_asik )VALUES( 1,1 );

INSERT INTO Pekerja_Yang_Mendaftar (id_pekerjaan_asik, id_pekerja_asik )VALUES( 1,2 );

DELETE FROM Pekerja_Yang_Mendaftar WHERE id=1;
DELETE FROM Pekerja_Yang_Mendaftar WHERE id=2;
----yang perlu ditambah 11-12-2016 --

ALTER TABLE Pekerja_Asik DROP COLUMN deskripsi;