<?php
/* Smarty version 4.3.1, created on 2023-06-12 06:26:32
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\rooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64869e7844cb86_42953933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605b69063a25d62e9fa296ca632b649d23fd31a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\rooms.tpl',
      1 => 1686543988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64869e7844cb86_42953933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex flex-row-reverse">
<form class="d-flex" role="search" method="GET" action="router/mostrar-salas-por-tematica">
  <select name="select-theme" class="form-select text-light bg-dark border-bottom border-bottom-dark form-select-sm buscar" data-bs-theme="dark" aria-label="Default select example">
    <option selected>Todas</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </select>
  <button type="submit" class="btn btn-primary mb-3">Buscar</button>
</form>
</div>
<?php if ($_smarty_tpl->tpl_vars['session']->value) {?>
  <div class="d-flex flex-row-reverse">
    <a href="router/logout" class="btn btn-primary">Desconectarse</a>
  </div>
<?php }?>
  <main class="container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['limit']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->tpl_vars['ini'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ini']->step = 1;$_smarty_tpl->tpl_vars['ini']->total = (int) ceil(($_smarty_tpl->tpl_vars['ini']->step > 0 ? $_prefixVariable1+1 - (1) : 1-($_prefixVariable1)+1)/abs($_smarty_tpl->tpl_vars['ini']->step));
if ($_smarty_tpl->tpl_vars['ini']->total > 0) {
for ($_smarty_tpl->tpl_vars['ini']->value = 1, $_smarty_tpl->tpl_vars['ini']->iteration = 1;$_smarty_tpl->tpl_vars['ini']->iteration <= $_smarty_tpl->tpl_vars['ini']->total;$_smarty_tpl->tpl_vars['ini']->value += $_smarty_tpl->tpl_vars['ini']->step, $_smarty_tpl->tpl_vars['ini']->iteration++) {
$_smarty_tpl->tpl_vars['ini']->first = $_smarty_tpl->tpl_vars['ini']->iteration === 1;$_smarty_tpl->tpl_vars['ini']->last = $_smarty_tpl->tpl_vars['ini']->iteration === $_smarty_tpl->tpl_vars['ini']->total;?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $_smarty_tpl->tpl_vars['ini']->value;?>
" aria-label="Slide ".<?php echo $_smarty_tpl->tpl_vars['ini']->value+1;?>
></button>
        <?php }
}
?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
" aria-label="Slide 0"></button>
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
              <a class="btn btn-rooms btn-primary" href="router/mostrar-sala/<?php echo $_smarty_tpl->tpl_vars['roomActive']->value->id;?>
">Ver más</a>
              <a class="btn btn-rooms btn-warning" href="router/form-actualizar-sala/<?php echo $_smarty_tpl->tpl_vars['roomActive']->value->id;?>
">Actualizar</a>
              <a class="btn btn-rooms btn-danger" href="router/eliminar-sala/<?php echo $_smarty_tpl->tpl_vars['roomActive']->value->id;?>
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
              <a class="btn btn-rooms btn-primary" href="router/mostrar-sala/<?php echo $_smarty_tpl->tpl_vars['room']->value->id;?>
">Ver más</a>
              <a class="btn btn-rooms btn-warning" href="router/form-actualizar-sala/<?php echo $_smarty_tpl->tpl_vars['room']->value->id;?>
">Actualizar</a>
              <a class="btn btn-rooms btn-danger" href="router/eliminar-sala/<?php echo $_smarty_tpl->tpl_vars['room']->value->id;?>
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
<section class="centrado margen-footer">
  <h2 class="mt-1">Nuestras temáticas</h2>
  <div class="d-flex justify-content-evenly">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
    <div class="themes">
      <h3><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</h3>
      <a class="btn btn-rooms btn-primary" href="./router/mostrar-tematica/<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
">Conocer más</a>
      <a class="btn btn-rooms btn-warning" href="./router/form-actualizar-tematica/<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
">Actualizar</a>
      <a class="btn btn-rooms btn-danger" href="./router/eliminar-tematica/<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
">Eliminar</a>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
