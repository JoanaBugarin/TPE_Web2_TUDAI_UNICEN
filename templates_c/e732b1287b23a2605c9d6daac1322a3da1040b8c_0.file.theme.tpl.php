<?php
/* Smarty version 4.3.1, created on 2023-06-05 20:37:05
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e2b51ecc901_08845603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e732b1287b23a2605c9d6daac1322a3da1040b8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\theme.tpl',
      1 => 1685990206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e2b51ecc901_08845603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="container mt-5 margen-footer">
    <section class="centrado">
        <h1><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</h1>
        <p>Clasificación: <?php echo $_smarty_tpl->tpl_vars['theme']->value->classification;?>
</p>
    </section>
</main>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
