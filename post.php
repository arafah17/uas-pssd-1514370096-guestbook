<?php
$secret_key = "6LdHT4kUAAAAAAq3crrEdT05140l0lvDSuaq8340";
$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);$response = json_decode($verify);
$response = json_decode($verify);

		if($_POST['go']){
			mysql_connect("localhost", "root", "");
			mysql_select_db("guestbook");
 
			$nama	= htmlentities(mysql_real_escape_string($_POST['nama']));
			$email	= htmlentities(mysql_real_escape_string($_POST['email']));
			$web	= htmlentities(mysql_real_escape_string($_POST['website']));
			$pesan	= htmlentities(mysql_real_escape_string($_POST['pesan']));
			$tgl	= time();
 
			if($response->success)
			{
				if($nama && $email && $pesan){
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					$in = mysql_query("INSERT INTO bukutamu VALUES(NULL, '$tgl', '$nama', '$email', '$web', '$pesan')");
					if($in){
						echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="index.php";</script>';
					}else{
						echo '<div id="error">Uppsss...! Query ke database gagal dilakukan!</div>';
					}
				}else{
					echo '<div id="error">Uppsss...! Email Anda tidak valid!</div>';
				}
			}else{
				echo '<div id="error">Uppsss...! Lengkapi form!</div>';
			}
			}
			else
			{
				
				echo "<center><h2>Captcha Tidak Valid</h2></center>";
				echo "<center><p>Ohh sorry, you're not human (Anda bukan manusia)</p></center>";
				echo "<center><p>Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi</p></center>";
				echo "<center><p><a href='index.php'>back</a></p>";
				
		}
		}
		?>