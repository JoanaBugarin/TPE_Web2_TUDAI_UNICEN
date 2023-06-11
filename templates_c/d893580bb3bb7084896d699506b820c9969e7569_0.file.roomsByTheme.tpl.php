<?php
/* Smarty version 4.3.1, created on 2023-06-05 19:58:13
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\roomsByTheme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e223539b254_28879967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd893580bb3bb7084896d699506b820c9969e7569' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\roomsByTheme.tpl',
      1 => 1685987890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e223539b254_28879967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="container mt-5">
        <h1>Salas de escape de <?php echo $_smarty_tpl->tpl_vars['rooms']->value[0]->theme;?>
</h1>
        <div class="d-flex">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
            <div class="card cardsorange" style="width: 18rem;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['room']->value->image;?>
" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['room']->value->name;?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['room']->value->description;?>
</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Capacidad: <?php echo $_smarty_tpl->tpl_vars['room']->value->capacity;?>
</li>
                        <li class="list-group-item">Dificultad: <?php echo $_smarty_tpl->tpl_vars['room']->value->difficulty;?>
</li>
                        <li class="list-group-item">Tiempo: <?php echo $_smarty_tpl->tpl_vars['room']->value->time;?>
</li>
                    </ul>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </main>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
