<?php
/* Smarty version 4.3.1, created on 2023-06-12 00:14:27
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64864743e12135_11056016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f96bc0e3de5fe33eae0c2c6365b339db3aeaa334' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\login.tpl',
      1 => 1686521664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64864743e12135_11056016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form action="verificar-sesion" method="POST">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <label for="username" class="form-label mt-3">Email</label>
        <input type="email" name="username" class="form-control" placeholder="Ingrese email">
        <label for="password class="form-label mt-3">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php }?>
        <div class="col-auto mt-3">
            <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
