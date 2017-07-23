<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>IST AKPRIND YOGYAKARTA</title>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">

</head>

<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h4><?php if (!empty($_SESSION['keterangan'])) echo 'Login : '.ucwords($_SESSION['keterangan'].' ( '.$_SESSION['nama'].' )'); else $_SESSION['status'] = ''; ?> </h4>
				<h1>IST AKPRIND YOGYAKARTA</h1>
				<h3>SI Sederhana Mahasiswa Dengan CI</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'Admin/Prodi/Lihat' ?>">Prodi</a></li>
					<li><a href="<?php echo base_url().'universitas/about' ?>">About</a></li>
					<li><a href="<?php echo base_url().'mahasiswa' ?>">Mahasiswa</a></li>
					<li><a href="<?php echo base_url().'Admin/Aksi/Logout' ?>">Logout</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>