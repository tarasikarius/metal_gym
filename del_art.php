<?php
session_start();
require"lib.inc.php";
if(isset($_GET["num"])){
	if(isset($_SESSION['name'])){
		if($_SESSION['role']=="admin"){
			$id=$_GET['num'];
			del_art($connect,$id);
			header("Location:index.php?id=articles");
		}
	}
}
else
	header("Location:{$_SERVER['HTTP_REFERER']}");
?>