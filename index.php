<!DOCTYPE html>
<html>
<head>
    <title> Daftar aja ya </title>
    <link rel="stylesheet" href="style.css1" />
</head>

<body>
<div class="container">
<h2> Pendaftaran panitia kurban online</h2>
    <form action="simpan.php" method="post">
        <div class="input-box">
        <label>Username:</label>
        <input type="text" name="username" class="form-control" required placeholder="Masukan Username" />
        </div>
	<div class="input-box">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" required placeholder="Masukan Nama" />
    </div>
	<div>
        <label>Alamat:</label>
        <input name="alamat" class="form-control" required placeholder="Masukan Alamat" ></input>
	</div> 
	<div>
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required placeholder="Masukan Email " />
    </div>
	<div>
        <label>No HP:</label>
        <input type="number" name="no_hp" class="form-control"  required placeholder="Masukan No HP" />
        </div>
	<div>
        <label>Password:</label>
        <input type="password" name="password" class="form-control"  required placeholder="Masukan Password" />
    </div>

        <button type="submit" id="btn-kirim">Submit</button>

    </form>
</div>
</body>
</html>