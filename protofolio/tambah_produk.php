<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar</title>
		<link rel="stylesheet"href="cyberpunk.css">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: hotpink;
      }
    button {
          background-color: CornflowerBlue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah User</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama User</label>
          <input type="text" name="nama_user" autofocus="" required="" />
        </div>
        <div>
          <label>about</label>
         <input type="text" name="about" />
        </div>
        <div>
          <label>Gambar user</label>
         <input type="file" name="gambar_user" required="" />
        </div>
        <div>
         <button type="submit">Simpan User</button>
        </div>
        </section>
      </form>
  </body>
</html>