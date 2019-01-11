<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    *{
      margin: 0;
      padding: 0;
    }

    @font-face {
      src: url(uol.otf);
      font-family: uol;
    }

    @font-face {
      src: url(tcm.ttf);
      font-family: tcm;
    }

    @font-face {
      src: url(med.ttf);
      font-family: med;
    }

    body{
      background-image:url(1123.jpg);
      background-position: left;
    }

    .kotak{
      width: 300px;
      height: 400px;
      text-align: center;
      margin-top: 200px;
      margin-left: 530px;
      background-color: rgba(59, 145, 158, 55%);
    }

    h1{
      padding-top: 70px;
      margin-bottom: 30px;
      color: white;
      font-size: 50px;
      font-family: uol;
    }

    .inputan{
      width: 200px;
      height: 40px;
      border: none;
      padding-left: 7px;
      font-size: 18px;
      font-family: med;
    }

    .login{
      width: 100px;
      height: 40px;
      border: none;
      font-size: 20px;
      background-color: rgb(52, 92, 98, 80%);
      color: white;
      font-family: med;

    }

    .login:hover{
      background-color: white;
      color: rgb(52, 92, 98, 80%);
      transition: 0.3s;
    }

    .gambar img{
      width: 120px;
      height: 120px;
      position: absolute;
      top: 20%;
      left: 45%;
    }

    a{
      text-decoration: none;
      color: rgb(52, 92, 98);
      transition: 0.3s;
      font-family: med;
    }
    a:hover{
      color: white;
    }

    </style>
  </head>
  <body>

    <div class="gambar">
      <img src="111.png" alt="">
    </div>
    <div class="kotak">
    <h1>l o g i n</h1>
    <form action="login.php" method="post" onsubmit="validasi()">
      <div class="input">
        <input type="text" name="nis" placeholder="nis" class="inputan" id="nis">
      </div>
      <br>
      <div class="input">
          <input type="password" name="password" placeholder="password" class="inputan" id="password">
      </div>
        <br>
        <div>
      <input type="submit" class="login" >
      </div>
  </form>
  <br>
    <a href="form-buatakun.php">Buat akun</a>
</div>

  </body>
  <script type="text/javascript">
    function validasi(){
      var nis = document.getElementById('nis').value;
      var password = document.getElementById('password').value;

      if (nis != "" && password != "") {
        return true;
      }
      else if (nis == "nis" && password == "password") {
        return true;
      }
      else {
        alert("GAGAL LOGIN!!!!!");
      }
    }
  </script>
</html>
