<?php
/* Smarty version 4.3.1, created on 2023-06-01 04:55:41
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647808ad4d51c1_10796873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be30b7c34fc179184c97d6448f063224756ceb1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\header.tpl',
      1 => 1685588119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647808ad4d51c1_10796873 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo '<?php'; ?>
 echo BASE_URL <?php echo '?>'; ?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/TPE_Web2_TUDAI_UNICEN/css/style.css">
    <title>Scape Room</title>
</head>
<body>
<section class="first-section">
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <img src="https://i.imgur.com/Ji2Odzw.jpg" alt="Logo Get Out" width="55" height="50" class="d-inline-block align-text-top">
    <a class="navbar-brand text-light" href="http://localhost/TPE_Web2_TUDAI_UNICEN/">Salas de Escape</a>
    <form class="d-flex" role="search">
        Buscar por temática
        <select class="form-select text-light bg-dark border-bottom border-bottom-dark" data-bs-theme="dark" aria-label="Default select example">
            <option selected>Todas</option>
            <option value="1">Terror</option>
            <option value="2">Aventura</option>
            <option value="3">Acción</option>
        </select>
    </form>
  </div>
</nav>
<div class="d-flex flex-row-reverse">
    <div class="btn-group">
        <a href="router/form-nueva-sala" class="btn btn-primary">+ Sala</a>
        <a href="router/form-nueva-tematica" class="btn btn-primary">+ Temática</a>
    </div>
</div><?php }
}
