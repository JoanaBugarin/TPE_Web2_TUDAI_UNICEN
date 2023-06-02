<?php
/* Smarty version 4.3.1, created on 2023-06-02 12:42:47
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\msg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6479c7a78e4853_96931583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6e6fa3de23b6a529557c96dd839343f15f32a24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\msg.tpl',
      1 => 1685702532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6479c7a78e4853_96931583 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoAlerta']->value;?>
" role="alert" style="margin-bottom:0">
  <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

</div><?php }
}
