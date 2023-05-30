<?php
/* Smarty version 4.3.1, created on 2023-05-31 01:01:30
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\rooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6476804ac55217_42340097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605b69063a25d62e9fa296ca632b649d23fd31a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\rooms.tpl',
      1 => 1685487687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6476804ac55217_42340097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <main class="container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 0"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-block w-100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['roomActive']->value->image;?>
" class="img-carr" alt="...">
            <div>
              <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['roomActive']->value->name;?>
</h5>
              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['roomActive']->value->description;?>
</p>
              <a class="btn btn-primary" href="./router/<?php echo $_smarty_tpl->tpl_vars['roomActive']->value->id;?>
">Ver más</a>
              <a class="btn btn-warning" href="./router/update/<?php echo $_smarty_tpl->tpl_vars['roomActive']->value->id;?>
">Actualizar</a>
              <a class="btn btn-danger" href="./router/delete/<?php echo $_smarty_tpl->tpl_vars['roomActive']->value->id;?>
">Eliminar</a>
            </div>
          </div>
        </div>    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
        <div class="carousel-item">
          <div class="d-block w-100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['room']->value->image;?>
" class="img-carr" alt="...">
            <div>
              <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['room']->value->name;?>
</h5>
              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['room']->value->description;?>
</p>
              <a class="btn btn-primary" href="./router/<?php echo $_smarty_tpl->tpl_vars['room']->value->id;?>
">Ver más</a>
              <a class="btn btn-warning" href="./router/update/<?php echo $_smarty_tpl->tpl_vars['room']->value->id;?>
">Actualizar</a>
              <a class="btn btn-danger" href="./router/delete/<?php echo $_smarty_tpl->tpl_vars['room']->value->id;?>
">Eliminar</a>
            </div>
          </div>
        </div>    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>
</section>
<section class="second-section">
  <h2 class="mt-1">Nuestras temáticas</h2>
  <div d-flex justify-content-evenly>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
    <div class="themes">
      <h3><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</h3>
      <a class="btn btn-primary" href="./router/<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
">Conocer más</a>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
