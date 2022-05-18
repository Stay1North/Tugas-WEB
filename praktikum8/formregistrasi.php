<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt2NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		.warning {color: #FF0000;}
	</style>
</head>
<body>

	
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<!-- header -->
		<div class="card-header">
			<h2 align="center">FORMULIR PESERTA DIDIK BARU</h2>
			
			<!-- isi header -->
			<table width="400" cellpadding="2" cellspacing="2">
				<tr>
					<td class="lbl" width="200">
						Tanggal
					</td>
					<td>
						<input type="text" name="tglbaru">
					</td>
				</tr>
			</table>
		</div>	

		<!-- form -->
		<div class="card-body">
			<form method="POST" action="registAct.php">
				
				<!-- registrasi peserta -->
				<div>
					<h3 style="background-color: black; color: white;">REGISTRASI PESERTA DIDIK</h3>
				</div>
				
				<!-- isi registrasi -->
				<table width="400" cellpadding="2" cellspacing="2">
					<tr>
						<td class="lbl" width="200">
							1. Jenis Pendaftaran
						</td>
						<td>
							<select name="daftar">
								<option value="Siswa Baru">Siswa Baru</option>
								<option value="Pindahan">Pindahan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							2. Tanggal Masuk
						</td>
						<td>
							<input type="text" name="tglmasuk">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							3. NIS
						</td>
						<td>
							<input type="text" name="nis">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							4. Nomor Peserta Ujian
						</td>
						<td>
							<input type="text" name="nmrujian">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							5. Pernah PAUD
						</td>
						<td>
							<select name="paud">
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							6. Pernah TK
						</td>
						<td>
							<select name="tk">
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							7. No. Seri SKHUN
						</td>
						<td>
							<input type="text" name="skhu">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							8. No. Seri Ijazah
						</td>
						<td>
							<input type="text" name="ijazah">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							9. Hobi
						</td>
						<td>
							<select name="hobi">
								<option value="Olahraga">Olahraga</option>
								<option value="Kesenian">Kesenian</option>
								<option value="Membaca">Membaca</option>
								<option value="Menulis">Menulis</option>
								<option value="Travelling">Travelling</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							10. Cita-cita
						</td>
						<td>
							<select name="cita">
								<option value="PNS">PNS</option>
								<option value="TNI/POLRI">TNI/POLRI</option>
								<option value="Guru/Dosen">Guru/Dosen</option>
								<option value="Dokter">Dokter</option>
								<option value="Politikus">Politikus</option>
								<option value="Wiraswasta">Wiraswasta</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
				</table>

				<!-- data pribadi -->
				<div>
					<h3 style="background-color: black; color: white;">DATA PRIBADI</h3>
				</div>

				<!-- isi data pribadi -->
				<table width="400" cellpadding="2" cellspacing="2">
					<tr>
						<td class="lbl" width="200">
							11. Nama Lengkap
						</td>
						<td>
							<input type="text" name="nama">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							12. Jenis Kelamin
						</td>
						<td>
							<select name="jkelamin">
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							13. NISN
						</td>
						<td>
							<input type="text" name="nisn">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							14. NIK
						</td>
						<td>
							<input type="text" name="nik">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							15. Tempat Lahir
						</td>
						<td>
							<input type="text" name="tmptlahir">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							16. Tanggal Lahir
						</td>
						<td>
							<input type="text" name="tgllahir">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							17. Agama
						</td>
						<td>
							<select name="agama">
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Katholik">Katholik</option>
								<option value="Hindu">Hindu</option>
								<option value="Buddha">Buddha</option>
								<option value="Khong Hu Chu">Khong Hu Chu</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							18. Berkebutuhan Khusus
						</td>
						<td>
							<select name="kebutuhan">
								<option value="Tidak">Tidak</option>
								<option value="Netra">Netra</option>
								<option value="Rungu">Rungu</option>
								<option value="Wicara">Wicara</option>
								<option value="Narkoba">Narkoba</option>
								<option value="Indigo">Indigo</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							19. Alamat
						</td>
						<td>
							<input type="text" name="alamat">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							20. Kode Pos
						</td>
						<td>
							<input type="text" name="kodepos">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							21. Tempat Tinggal
						</td>
						<td>
							<select name="tinggal">
								<option value="Orang Tua">Orang Tua</option>
								<option value="Wali">Wali</option>
								<option value="Kos">Kos</option>
								<option value="Asrama">Asrama</option>
								<option value="Panti Asuhan">Panti Asuhan</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							22. Moda Transportasi
						</td>
						<td>
							<select name="transportasi">
								<option value="Jalan kaki">Jalan kaki</option>
								<option value="Kendaraan pribadi">Kendaraan pribadi</option>
								<option value="Kendaraan umum">Kendaraan umum</option>
								<option value="Ojek">Ojek</option>
								<option value="Jemputan">Jemputan</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							23. Nomor HP
						</td>
						<td>
							<input type="text" name="hp">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							24. Nomor Telepon
						</td>
						<td>
							<input type="text" name="telepon">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							25. Email Pribadi
						</td>
						<td>
							<input type="text" name="email">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							26. Penerima KPS/PKH/KIP
						</td>
						<td>
							<select name="statuskip">
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							27. Nomor KPS/PKH/KIP
						</td>
						<td>
							<input type="text" name="kip">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							28. Kewarganegaraan
						</td>
						<td>
							<input type="text" name="warga">
						</td>
					</tr>
				</table>

				<!-- data ayah kandung -->
				<div>
					<h3 style="background-color: black; color: white;">DATA AYAH KANDUNG</h3>
				</div>

				<!-- isi data ayah kandung -->
				<table width="400" cellpadding="2" cellspacing="2">
					<tr>
						<td class="lbl" width="200">
							29. Nama Ayah Kandung
						</td>
						<td>
							<input type="text" name="ayah">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							30. Tahun Lahir
						</td>
						<td>
							<input type="text" name="tahun_ayah">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							31. Pendidikan
						</td>
						<td>
							<select name="pendik_ayah">
								<option value="SD Sederajat">SD Sederajat</option>
								<option value="SMP Sederajat">SMP Sederajat</option>
								<option value="SMA Sederajat">SMA Sederajat</option>
								<option value="D1">D1</option>
								<option value="D2">D2</option>
								<option value="D3">D3</option>
								<option value="D4/S1">D4/S1</option>
								<option value="S2">S2</option>
								<option value="S3">S3</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							32. Pekerjaan
						</td>
						<td>
							<select name="pekerjaan_ayah">
								<option value="Tidak Bekerja">Tidak Bekerja</option>
								<option value="Petani">Petani</option>
								<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
								<option value="Karyawan swasta">Karyawan swasta</option>
								<option value="Pedagang">Pedagang</option>
								<option value="Wiraswasta">Wiraswasta</option>
								<option value="Wirausaha">Wirausaha</option>
								<option value="Buruh">Buruh</option>
								<option value="Pensiunan">Pensiunan</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							33. Penghasilan Bulanan
						</td>
						<td>
							<select name="hasil_ayah">
								<option value="< 500rb">< 500rb</option>
								<option value="500rb - 1juta">500rb - 1juta</option>
								<option value="1juta - 2juta">1juta - 2juta</option>
								<option value="2juta - 5juta">2juta - 5juta</option>
								<option value="5juta - 20juta">5juta - 20juta</option>
								<option value="> 20juta">> 20juta</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							34. Berkebutuhan Khusus
						</td>
						<td>
							<select name="kebutuhan_ayah">
								<option value="Tidak">Tidak</option>
								<option value="Netra">Netra</option>
								<option value="Rungu">Rungu</option>
								<option value="Wicara">Wicara</option>
								<option value="Narkoba">Narkoba</option>
								<option value="Indigo">Indigo</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>					
				</table>

				<!-- data ibu kandung -->
				<div>
					<h3 style="background-color: black; color: white;">DATA IBU KANDUNG</h3>
				</div>

				<!-- isi data ibu kandung -->
				<table width="400" cellpadding="2" cellspacing="2">
					<tr>
						<td class="lbl" width="200">
							35. Nama Ibu Kandung
						</td>
						<td>
							<input type="text" name="ibu">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							36. Tahun Lahir
						</td>
						<td>
							<input type="text" name="tahun_ibu">
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							37. Pendidikan
						</td>
						<td>
							<select name="pendik_ibu">
								<option value="SD Sederajat">SD Sederajat</option>
								<option value="SMP Sederajat">SMP Sederajat</option>
								<option value="SMA Sederajat">SMA Sederajat</option>
								<option value="D1">D1</option>
								<option value="D2">D2</option>
								<option value="D3">D3</option>
								<option value="D4/S1">D4/S1</option>
								<option value="S2">S2</option>
								<option value="S3">S3</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							38. Pekerjaan
						</td>
						<td>
							<select name="pekerjaan_ibu">
								<option value="Tidak Bekerja">Tidak Bekerja</option>
								<option value="Petani">Petani</option>
								<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
								<option value="Karyawan swasta">Karyawan swasta</option>
								<option value="Pedagang">Pedagang</option>
								<option value="Wiraswasta">Wiraswasta</option>
								<option value="Wirausaha">Wirausaha</option>
								<option value="Buruh">Buruh</option>
								<option value="Pensiunan">Pensiunan</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							39. Penghasilan Bulanan
						</td>
						<td>
							<select name="hasil_ibu">
								<option value="< 500rb">< 500rb</option>
								<option value="500rb - 1juta">500rb - 1juta</option>
								<option value="1juta - 2juta">1juta - 2juta</option>
								<option value="2juta - 5juta">2juta - 5juta</option>
								<option value="5juta - 20juta">5juta - 20juta</option>
								<option value="> 20juta">> 20juta</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="lbl" width="200">
							40. Berkebutuhan Khusus
						</td>
						<td>
							<select name="kebutuhan_ibu">
								<option value="Tidak">Tidak</option>
								<option value="Netra">Netra</option>
								<option value="Rungu">Rungu</option>
								<option value="Wicara">Wicara</option>
								<option value="Narkoba">Narkoba</option>
								<option value="Indigo">Indigo</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
				</table>
				<br>
				<div align="center">
					<button type="submit" style="font-size: 25px;">Submit</button>
				</div>

			</form>
		</div>
		
	</div>		
	</div>
	</div>
	
	
</body>
</html>