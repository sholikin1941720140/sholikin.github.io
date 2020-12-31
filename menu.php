<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>Cafeyourself</title>
</head>
<body>
	<div class="judul">
		<h2><font color=#FFD700>Selamat Datang di Cafeyourself</font></h2>
	</div>
	<br><br>
	<font color="#FDF5E6">
	<h3 text align="center">Resto ini sudah berdiri sejak 2001. Rasa, Harum dan Kenikmatan sudah menjadi khas tersendiri bagi Cafe ini.</h3>
	<h3 text align="center">Masalah harga? sangat terjangkau dengan kualitas yang tidak dapat dijangkau.</h3>
	<h3 text align="center">Monggo pesan sesuai dengan keinginan dan bayar sesuai kententuan.</h3>
	<h3 text align="center">Semoga anda menikmati menu kami :)</h3>
	</font>

	<br><br>
    
	<h2 text align="center"><font color="#FFDEAD"> ---MENU--- </font></h2>

	<br>

	<table align ="left" border="1" cellpadding="2" cellspacing="0">
        <tr>
        	<td bgcolor="yellow">No</td>
            <td bgcolor="yellow">Minuman</td>
            <td bgcolor="yellow">Harga</td>
        </tr>
        <tr>
        	<td>1</td>
            <td>Kopi Special</td>
            <td>10.000</td>
        </tr>
        <tr>
        	<td>2</td>
            <td>All Variant Milk Shake</td>
            <td>15.000</td>
        </tr>
        <tr>
        	<td>3</td>
            <td>All Variant Milk Tea</td>
            <td>10.000</td>
        </tr>
        <tr>
        	<td>4</td>
            <td>All Variant Chocholatte</td>
            <td>12.000</td>
        </tr>
        <tr>
        	<td>5</td>
            <td>Coffe Beer</td>
            <td>12.000</td>
        </tr>
        <tr>
        	<td>6</td>
            <td>Special Wedang</td>
            <td>10.000</td>
        </tr>
    </table>
    
    <table align ="right" border="1" cellpadding="2" cellspacing="0">
        <tr>
        	<td bgcolor="yellow">No</td>
            <td bgcolor="yellow">Makanan</td>
            <td bgcolor="yellow">Harga</td>
        </tr>
        <tr>
        	<td>1</td>
            <td>Mie Ayam</td>
            <td>10.000</td>
        </tr>
        <tr>
        	<td>2</td>
            <td>Mie Pangsit</td>
            <td>10.000</td>
        </tr>
        <tr>
        	<td>3</td>
            <td>Chicken Box</td>
            <td>13.000</td>
        </tr>
        <tr>
        	<td>4</td>
            <td>Nasi Ayam Geprek Special</td>
            <td>15.000</td>
        </tr>
        <tr>
        	<td>5</td>
            <td>Nasi Krawu</td>
            <td>12.000</td>
        </tr>
        <tr>
        	<td>6</td>
            <td>Nasi Goreng Mantap</td>
            <td>12.000</td>
        </tr>
    </table>

    <table align ="center" border="1" cellpadding="2" cellspacing="0">
        <tr>
        	<td bgcolor="yellow">No</td>
            <td bgcolor="yellow">Camilan</td>
            <td bgcolor="yellow">Harga</td>
        </tr>
        <tr>
        	<td>1</td>
            <td>Jamur Crispy</td>
            <td>8.000</td>
        </tr>
        <tr>
        	<td>2</td>
            <td>Steak Daging Kecil</td>
            <td>25.000</td>
        </tr>
        <tr>
        	<td>3</td>
            <td>Steak Daging Jumbo</td>
            <td>35.000</td>
        </tr>
        <tr>
        	<td>4</td>
            <td>Kentang Goreng</td>
            <td>10.000</td>
        </tr>
        <tr>
        	<td>5</td>
            <td>Sosis Jumbo</td>
            <td>12.000</td>
        </tr>
        <tr>
        	<td>6</td>
            <td>Sushi</td>
            <td>12.000</td>
        </tr>
    </table>
    <br>
    <h2>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>

    <div class="daftarpesanan">
    	<form method="post">
    	<table>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Nama Barang..."></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" placeholder="Harga Barang..."></td>
			</tr>
			<tr>
				<td>Banyaknya</td>
				<td>:</td>
				<td>
					<select name="qty">
						<option value="">- QTY -</option>
						<?php for($x=1;$x<=100;$x++){ ?>
						<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="hitung" value="Hitung">
					<input type="reset" name="batal" value="Batal">
				</td>
			</tr>
		</table>
	</form>
	<hr>
    <font color="#FFDEAD">
	<h2>Hasil :</h2>
        <?php
		if(isset($_POST['hitung'])){
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$qty = $_POST['qty'];
			$total = $harga*$qty;

			echo "
				<table border='1'>
					<tr>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Banyaknya</th>
						<th>Total Harga</th>
					</tr>
					<tr>
						<td>$nama</td>
						<td>$harga</td>
						<td>$qty</td>
						<td>$total</td>
					</tr>
				</table>
			";
		}
?>
    </font>
    </div>

	<marquee><h2><font color="#FFDEAD"> Follow IG kami </font><font color=#FFE4C4> @Cafeyourself </font><font color="#FFDEAD"> ---  Facebook </font><font color=#FFE4C4> CafeYSelf </font></h2></marquee>
</body>
</html>