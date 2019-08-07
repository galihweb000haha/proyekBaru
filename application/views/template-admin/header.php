<?php
$hari = date('l');


function hari($hari){
	if($hari == 'Monday'){
		return "Senin";
	}elseif($hari == 'Tuesday'){
		return "Selasa";
	}elseif($hari == 'Wednesday'){
		return "Rabu";
	}elseif($hari == 'Thursday'){
		return "Kamis";
	}elseif($hari == 'Friday'){
		return "Jum\'at";
	}elseif($hari == 'Saturday'){
		return "Sabtu";
	}else{
		return "Minggu";
	}
	
}
	
	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?=$title?></title>
		<link rel="shortcut icon" href="<?=base_url('assets/img/favicon.png')?>" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/animate.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/font/fontawesome-free/css/all.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admin-style.css')?>">
	</head>
<body>
<input type="hidden" class="base_url" url="<?=base_url()?>" name="hari" value="<?php echo hari($hari);?>" id="hari">

<div class="containers">
		<!--  -->
	<div class="sidebar">
		<header><i class="fas fa-laptop-code fa-sm animated infinite swing"></i> Saja.id</header>
		<div id="time" c></div>
		<ul class="menu">
			<li onclick="document.location.href=`<?=base_url('admin')?>`"><i class="fas fa-fw fa-tachometer-alt mr-2"></i>Dashboard</li>
			<li><i class="fas fa-fw fa-file mr-2"></i>Pages</li>
			<li onclick="document.location.href=`<?=base_url('admin/tables')?>`"><i class="fas fa-fw fa-book mr-2"></i>Tables</li>				
		</ul>
	</div>
		<!--  -->
	<div class="main">
		<header>		
			<span class="fas fa-stream button-sidemenu"></span>
			<div class="form-group mt-3 search-input">
      			<input class="form-control pr-2 search" type="text" placeholder="Search . . . " >    
				  
			</div>
			<i class="fas fa-fw fa-search ml-4 search-button" style="font-size:25px;color:white;cursor:pointer;position:relative;top:-5px"></i>
			<span class="fas fa-bookmark fa-sm icon-message float-right"></span>
			<span class="fas fa-user fa-sm icon-user float-right" style="cursor:pointer"></span>
			  
		</header>