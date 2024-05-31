<?php 
	require_once('_functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rumah Laundry | Dashboard</title>
	<link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">
	<link rel="shortcut icon" href="<?=url('_assets/img/logo/favicon.png')?>" type="image/x-icon">
</head>
<body>

	<header>
		<nav>
			<div class="logo">
				<a href="<?=url()?>">
					<img src="<?=url('_assets/img/logo/nav-logo.png')?>" alt="Rumah Laundry Logo">
				</a>
			</div>
			<ul class="nav-menu">
				<li>
					<?php if (!empty($_SESSION['master'])) : ?>
					<span id=""><?= ucfirst($_SESSION['master']) ?></span><?php endif; ?>
					<ul class="dropdown-menu">
						<li><a href="<?=url('about.php')?>">Tentang Kami</a></li>
						<li><a href="<?=url('logout.php')?>">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<?php if($_SESSION['master'] == 'admin') :?>
		<div id="nav-mini">
			<a href="<?=url('riwayat_transaksi/riwayat.php')?>" class="link-nav">Riwayat Transaksi</a>
			<a href="<?=url('karyawan/karyawan.php')?>" class="link-nav">Manage User</a>
			<a href="<?=url('paket/paket.php')?>" class="link-nav">Daftar Paket</a>
		</div>
		<?php else : ?>
		<div id="nav-mini">
			<a href="<?=url('paket/paket.php')?>" class="link-nav">Daftar Paket</a>
			<a href="<?=url('riwayat_transaksi/riwayat.php')?>" class="link-nav">Riwayat Transaksi</a>
			<a href="" class="link-nav"></a>
			<a href="" class="link-nav"></a>
		</div>
		<?php endif ?>
	</header>