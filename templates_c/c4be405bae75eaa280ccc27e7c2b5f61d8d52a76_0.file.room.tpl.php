<?php
/* Smarty version 4.3.1, created on 2023-05-31 19:37:23
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\room.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647785d3663852_29071981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4be405bae75eaa280ccc27e7c2b5f61d8d52a76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\room.tpl',
      1 => 1685554632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647785d3663852_29071981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="container mt-5 margen-footer">
    <section class="room">
        <h1><?php echo $_smarty_tpl->tpl_vars['room']->value->name;?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['room']->value->description;?>
</p>
        <img src="<?php echo $_smarty_tpl->tpl_vars['room']->value->image;?>
"/>
        <p>Temática: <?php echo $_smarty_tpl->tpl_vars['room']->value->theme;?>
</p>
        <p>Capacidad: <?php echo $_smarty_tpl->tpl_vars['room']->value->capacity;?>
</p>
        <p>Dificultad: <?php echo $_smarty_tpl->tpl_vars['room']->value->difficulty;?>
</p>
        <p>Duración: <?php echo $_smarty_tpl->tpl_vars['room']->value->time;?>
</p>
    </section>
</main>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
