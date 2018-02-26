<!DOCTYPE html>

 
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>
        Dicky Suryo 
    </title>
</head>

<nav class="navbar navbar-inverse navbar-fixed-top"> 
<div class="container-fluid">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">dickysuryo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
    <li class="active"><a href="#"> HOME </a></li>
        <li><a href="#"> DATA GURU</a></li>
            <li><a href="#"> DATA MURID</a></li>
                <li><a href="#"> JADWAL MENGAJAR</a></li>
</ul>
</div>
</div>
</nav>
<?php
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM guru ORDER BY Id_guru ASC");
$result2 = mysqli_query($mysqli, "SELECT * FROM murid ORDER BY Nim ASC");
?>
<body>



<div class="panggil">
<div class="kotak">
<h1 class="obah">TES PRAKTEK</h1>
</div>
    </div>
<section class="section-about">

<h1>DATA GURU</h1>

<div class="container">
<a href="add.php">Add New Guru</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Id_guru</th> <th>Nama_guru</th> <th>Id_matkul</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Id_guru']."</td>";
        echo "<td>".$user_data['Nama_guru']."</td>";
        echo "<td>".$user_data['Id_matkul']."</td>";    
        echo "<td><a href='edit.php?Id_guru=$user_data[Id_guru]'>Edit</a> | <a href='delete.php?Id_guru=$user_data[Id_guru]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</section>
<section class="section-portfolio">
    <h1>DATA MURID</h1>
    <div class="container">
 <a href="add.php">Add New Murid</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>NIM</th> <th>Nama murid</th> <th>id_kelas</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result2)) {         
        echo "<tr>";
        echo "<td>".$user_data['Nim']."</td>";
        echo "<td>".$user_data['Nama_murid']."</td>";
        echo "<td>".$user_data['id_kelas']."</td>";    
        echo "<td><a href='editsiswa.php?Nim=$user_data[Nim]'>Edit</a> | <a href='delete.php?Nim=$user_data[Nim]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>
</section>
<section>
        <div class="paralax">
        </section>
        </div>
    </div>
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js">

</script>

</html>