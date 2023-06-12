<?php
/* Smarty version 4.3.1, created on 2023-06-12 07:31:28
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\msg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6486adb05ef8b0_82032407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6e6fa3de23b6a529557c96dd839343f15f32a24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\msg.tpl',
      1 => 1686547876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6486adb05ef8b0_82032407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="container mt-5">
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoAlerta']->value;?>
" role="alert" style="margin-bottom:0">
  <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

</div>
<a class="btn btn-rooms btn-primary" href="http://localhost/TPE_Web2_TUDAI_UNICEN">Regresar</a>
</main>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
