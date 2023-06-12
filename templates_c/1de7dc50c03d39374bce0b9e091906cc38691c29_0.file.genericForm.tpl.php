<?php
/* Smarty version 4.3.1, created on 2023-06-12 07:13:17
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\genericForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6486a96dc700d1_03835263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1de7dc50c03d39374bce0b9e091906cc38691c29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\genericForm.tpl',
      1 => 1686546790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6486a96dc700d1_03835263 (Smarty_Internal_Template $_smarty_tpl) {
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

            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" aria-labelledby="HelpBlockDescripcion" value="<?php echo $_smarty_tpl->tpl_vars['descripcionPrevia']->value;?>
">

            <label for="capacidad" class="form-label">Capacidad</label>
            <input type="number" id="capacidad" name="capacidad" class="form-control" aria-labelledby="HelpBlockCapacidad" value="<?php echo $_smarty_tpl->tpl_vars['capacidadPrevia']->value;?>
">
            <div id="HelpBlockCapacidad" class="form-text">
                Número de personas para quienes está pensada la sala
            </div>

            <?php if (is_array($_smarty_tpl->tpl_vars['idTematicaPrevia']->value)) {?>
                <label for="id_tematica" class="form-label">Nombre de la temática</label>
                <select name="id_tematica" class="form-control" aria-label="Default select example">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['idTematicaPrevia']->value, 'theme');
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
            <?php } else { ?>
                <label for="theme_id" class="form-label">Id de la temática</label>
                <input type="number" id="theme_id" name="id_tematica" class="form-control" aria-labelledby="HelpBlockThemeId" value="<?php echo $_smarty_tpl->tpl_vars['idTematicaPrevia']->value;?>
">
                <div id="HelpBlockThemeId" class="form-text">
                    Id (número) que identifica a la temática a la que pertenece la sala
                </div>
            <?php }?>

            <label for="difficulty" class="form-label">Dificultad</label>
            <input type="text" id="difficulty" name="dificultad" class="form-control" aria-labelledby="HelpBlockDificultad" value="<?php echo $_smarty_tpl->tpl_vars['dificultadPrevia']->value;?>
">
            <div id="HelpBlockDificultad" class="form-text">
                Máximo 100 caracteres
            </div>

            <label for="time" class="form-label">Tiempo</label>
            <input type="number" id="time" name="tiempo" class="form-control" aria-labelledby="HelpBlockTiempo" value="<?php echo $_smarty_tpl->tpl_vars['tiempoPrevio']->value;?>
">
            <div id="HelpBlockTiempo" class="form-text">
                Tiempo en minutos que toma completar la sala
            </div>

            <label for="image" class="form-label">Imagen</label>
            <input type="text" id="image" name="imagen" class="form-control" aria-labelledby="HelpBlockImage" value="<?php echo $_smarty_tpl->tpl_vars['imagenPrevia']->value;?>
">
            <div id="HelpBlockImage" class="form-text">
                Url de la imagen de la sala
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
