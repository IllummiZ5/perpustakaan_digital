<link rel="stylesheet" href="stylesheet.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<body class="login-page" style="height: auto;">
  <div class="container">
    <div class="row mt-5 mb-5 justify-content-center">
      <div class="col-md-6">
      <body>
  <div class="wrapper">
    <form action="index.php?page=postRegist" method="POST">
        <h1>Register</h1>                 
          <form action="index.php?page=postRegist" method="POST" id="logForm">
            <div class="card-body">
              <div class="input-box">
                <input type="text" class="form-control" name="UserID" hidden>
              </div>
              <div class="input-box">
                
                <input type="text" class="form-control" name="NamaLengkap" placeholder="Masukan Nama Lengkap" required>
              </div>
              <div class="input-box">
                
                <input type="text" class="form-control" name="Username" placeholder="Masukan Nama Pengguna" required>
              </div>
              <div class="input-box">
                
                <input type="password" class="form-control" name="Password" placeholder="Masukan Kata Sandi" required>
              </div>
              <div class="input-box">
                
                <input type="email" class="form-control" name="Email" placeholder="Masukan Email" required>
              </div>
              <div class="input-box">
                
                <input type="text" class="form-control" name="telp" placeholder="Masukan No telepon" required>
              </div>
              <div class="input-box">
                
                <input name="Alamat" class="form-control" cols="30" rows="5" placeholder="Masukan Alamat" required></input>
              </div>
          </form>
      <button type="submit" class="btn">Daftar</button>
      <div class="register-link">
        <p>Dont have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
    </div>
  </div><!-- jQuery -->