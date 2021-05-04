<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Forum</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
// session_start();
//create_cat.php
include 'connect.php';
include 'header.php';

$nama=$_POST['nama'];
$komentar=$_POST['komentar'];

if(!empty($nama) && !empty($komentar)){
$aVar = mysqli_connect('localhost','root','','covid');
$sql = "insert into data values('null','$nama','$komentar')";
$result = mysqli_query($aVar, $sql);

if ($result) {
echo "Data Berhasil Dikirim..<br>";

$aVar = mysqli_connect('localhost','root','','covid');
$sql = "select * from data order by id DESC";
$result=mysqli_query($aVar,$sql);
while($data=mysqli_fetch_row($result))
    {
        echo "<hr/>";
        echo "<b>$data[1]</b><br>";
        echo "$data[2]<br>";
    }
}



}else{

$aVar = mysqli_connect('localhost','root','','covid');
$sql = "select * from data order by id DESC";
$result=mysqli_query($aVar,$sql);
while($data=mysqli_fetch_row($result))
    {
        echo "<hr/>";
        echo "<b>$data[1]</b><br>";
        echo "$data[2]<br>";
    }
}

?>