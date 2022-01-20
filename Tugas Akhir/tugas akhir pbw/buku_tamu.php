<!DOCTYPE >
<html >
<head>
<title>Form Pendaftaran</title>
<script type="text/javascript" src="stscode.js"></script>
<link href="css_ku.php" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="css_container">
    	<div id="css_header_section">
        		<div id="css_topmenu">
	    		
    		</div>
        </div>
        <div id="css_content_section">
        	<div id="css_menu">
            	<ul>
                	
                    <li><a href="#" class="current">SILAHKAN DAFTAR</a></li>
                </ul>
            </div>
        	<div class="css_content_3">
            <div class="uhuy">
                <h1 style="text-align: center">Form Pendaftaran</h1><br>	

                  
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="nama"><br>
                <label>Nama :</label><br>
                <input type="text" name="fnama" >
            </div>
            <div class="email"><br>
                <label>Email :</label><br>
                <input type="email" name="femail">
            </div>
            <div><br>
                <label>No Hp :</label><br>
                <input type="number" name="fnomer">
            </div>
            <div class="alamat"><br>
                <label>Tempat, Tanggal Lahir :</label><br>
                <input type="text" name="falamat">
            </div>
            <div class="pesan"><br>
                <label>Alamat :</label><br>
                <input type="text" name="fpesan">
            </div>
            <div><br><br>
                <input type="submit" value="Kirim">
            </div>
        </form>

        <div>
            <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    $email = $_POST['femail'];
                    $nomer = $_POST['fnomer'];
                    $alamat = $_POST['falamat'];
                    $pesan = $_POST['fpesan'];
                    echo "Nama: $nama |, email: $email |, No.Hp: $nomer |, Tempat,Tanggal Lahir: $alamat |, Alamat: $pesan |";
                }
            ?><br>
            <br> Tolong Simpan Ini Saat Memasuki Gedung Gereja </br>
        </div>
  
          <br><br><br>
                     
        <script type="text/javascript">
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
                thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
         </script>
	
				
            </div><br>
            <div id="css_footer_section">
            	<div class="css_copyright">            	
				<center> Copyright Imanuel Dimas Cahyo Kumoro</center>
            </div>
            </div>
      </div>
</html>