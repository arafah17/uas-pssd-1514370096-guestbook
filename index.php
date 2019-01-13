<html>
</head>
	<title>Buku Tamu by arafah</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style type="text/css">
		body { font-family:tahoma; font-size:12px; }
		#container { width:450px; padding:20px 40px; margin:50px auto; border:0px solid #555; box-shadow:0px 0px 2px #555; }
		input[type="text"] { width:200px; }
		input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
		input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
		#error { border:1px solid red; background:#ffc0c0; padding:5px; }
	</style>
</head>
<body>
 
	<div id="container">
		<h1>Buku Tamu</h1>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>
 
		
 
		<form action="post.php" method="post">
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama" placeholder="Nama_Anda" required /></p>
			<p><b>Email :</b><br><input type="text" name="email" placeholder="Alamat_Email@mail.com" required /></p>
			<p><b>Website :</b><br><input type="text" name="website" placeholder="http://www.AlamatDomain.com" /></p>
			<p><b>Pesan :</b><br><textarea name="pesan" rows="5" cols="50" placeholder="Hy, saya sangat senang bisa berkunjung" required></textarea></p>
			<div class="g-recaptcha" data-sitekey="6LdHT4kUAAAAAC5L9I0zw5ZFxkiwM_4yK85EZVa7"></div>
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
		</form>
	</div>
 
</body>
</html>