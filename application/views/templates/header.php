<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testko | Snov | Testi | Kontrolke | predstavitve | vse za izobraževanje</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/mdb.css">
</head>
<body>
	


	

    <!--Main Navigation-->
    <header class="pt-5 pb-5">

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="<?php echo base_url(); ?>">
                    <strong class="blue-text">TESTKO</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="<?php echo base_url(); ?>">Domov
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Novice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?php echo base_url(); ?>search">Išči gradivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Spletna učilnica</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <?php if(!$this->session->userdata('logged_in')): ?>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>users/register" class="nav-link waves-effect">
                                    <i class="fa fa-user-plus"></i>Postani član
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>users/login" class="nav-link waves-effect">
                                    <i class="fa fa-user"></i>Prijava
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if($this->session->userdata('logged_in')): ?>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>users/settings" class="nav-link waves-effect">
                                    <?php echo $this->session->userdata('username'); ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>users/logout" class="nav-link waves-effect">
                                    <i class="fa fa-user"></i>Odjava
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link border border-light rounded waves-effect btn-info">
                                <i class="fa fa-diamond mr-2"></i>Kupi Premium
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->
</header>
<!--Main Navigation-->
<div class="container">
    <!--Success and Warning messages-->
    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_fail')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_fail').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_succ')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_succ').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('not_autorized')): ?>
        <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('not_autorized').'</p>'; ?>
    <?php endif; ?>