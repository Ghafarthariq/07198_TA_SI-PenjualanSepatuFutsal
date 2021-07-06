<?php
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data Pembeli</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #3385ff;
    border: 1px solid gainsboro;
        }
        nav li {
    float: left;
        }
        nav li a{
    display: inline-block;
    color:#ffffff;
    text-align: center;
    padding: 14px 15px;
    text-decoration: none;
}

nav li a:hover {
    opacity:0.9;
    background-color: #3385ff;
}
      h1 {
        text-transform: uppercase;
        color: #51afff;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #bfe1ff;
        border: solid 1px #DDEEEE;
        color: #ff8d00;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #51afff;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    footer {
    font-family: mistral;
    clear: both;
    width: 98.8%;
    height: auto;
    text-align: center;
    margin: 5px 5px 5px 5px;
    border-radius: 3px;
    border-bottom: 1px solid gainsboro;
    padding-top: 15px;
    padding-bottom: 15px;  
}
    </style>
  </head>
  <body>
    <nav>
            <ul>
                <li><a href="profil.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    <center><h1>Data Pembeli</h1><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Telepon</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
  </body>
</html>