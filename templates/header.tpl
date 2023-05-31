<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo BASE_URL ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
        <a href="#" class="btn btn-primary">+ Sala</a>
        <a href="#" class="btn btn-primary">+ Temática</a>
    </div>
</div>