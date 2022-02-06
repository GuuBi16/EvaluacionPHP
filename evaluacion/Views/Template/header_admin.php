<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <meta name="description" content="Evaluación Conocimientos">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Agustin Guerrero">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="Assets/images/favicon.png">
    <title><?= $data['page_tag'] ?></title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
    <!-- Font-icon css-->
    
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard">Evaluación</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      
    </header>
    <?php require_once ("nav_admin.php"); ?>