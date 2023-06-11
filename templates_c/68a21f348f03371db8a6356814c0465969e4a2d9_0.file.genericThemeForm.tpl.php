<?php
/* Smarty version 4.3.1, created on 2023-06-11 17:53:38
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\genericThemeForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6485ee02577c70_41554881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68a21f348f03371db8a6356814c0465969e4a2d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\genericThemeForm.tpl',
      1 => 1686498115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6485ee02577c70_41554881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="centrado"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="container">
        <form method='<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
' action='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
'>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" aria-labelledby="HelpBlockNombre"  value="<?php echo $_smarty_tpl->tpl_vars['nombrePrevio']->value;?>
">
            <div id="HelpBlockNombre" class="form-text">
                Máximo 200 caracteres
            </div>

            <label for="clasificacion" class="form-label">Clasificación</label>
            <input type="text" id="clasificacion" name="clasificacion" class="form-control" aria-labelledby="HelpBlockClasificacion"  value="<?php echo $_smarty_tpl->tpl_vars['clasificacionPrevia']->value;?>
">
            <div id="HelpBlockClasificacion" class="form-text">
                Público al que está destinada la temática en formato: Todo Público o +18, +16...
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
            </div>
        </form>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
