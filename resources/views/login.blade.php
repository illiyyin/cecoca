<?php 
session_start();
if (isset($_POST['submit'])) {
//    disini anda menangkap variabel form, melakukan validasi dan menginsert ke database
//    dalam contoh ini saya tidak akan melakukan aksi tersebut dan aksi akan saya anggap berhasil
    
//    sebelum redirect ke tabel user, daftarkan session pesan
    $_SESSION['pesan'] = 'penambahan data berhasil';
    echo '<script>window.location="user.php"</script>';
}
?>
<html>
<link rel="stylesheet" type="text/css" href="/css/css.css">
<div class="login-page">
  <div class="form">
    <p ><font size="5">CECOCA  Login</font></p>
    @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password"/>
      <button ><a href="/home" name="login">login</a></button>
      <p class="message">Not registered? <a href="/register">Create an account</a></p>
    </form>
  </div>
</div>
</html>