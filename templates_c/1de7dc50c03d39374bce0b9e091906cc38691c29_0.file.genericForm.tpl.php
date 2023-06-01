<?php
/* Smarty version 4.3.1, created on 2023-06-01 06:18:24
  from 'C:\xampp\htdocs\TPE_Web2_TUDAI_UNICEN\templates\genericForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64781c102164f7_27275219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1de7dc50c03d39374bce0b9e091906cc38691c29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2_TUDAI_UNICEN\\templates\\genericForm.tpl',
      1 => 1685593067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64781c102164f7_27275219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="centrado"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="container">
        <form method='<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
' action='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
'>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" aria-labelledby="HelpBlockNombre">
            <div id="HelpBlockNombre" class="form-text">
                Máximo 200 caracteres
            </div>

            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" aria-labelledby="HelpBlockDescripcion">

            <label for="capacidad" class="form-label">Capacidad</label>
            <input type="number" id="capacidad" name="capacidad" class="form-control" aria-labelledby="HelpBlockCapacidad">
            <div id="HelpBlockCapacidad" class="form-text">
                Número de personas para quienes está pensada la sala
            </div>

            <label for="theme_id" class="form-label">Id de la temática</label>
            <input type="number" id="theme_id" name="id_tematica" class="form-control" aria-labelledby="HelpBlockThemeId">
            <div id="HelpBlockThemeId" class="form-text">
                Id (número) que identifica a la temática a la que pertenece la sala
            </div>

            <label for="difficulty" class="form-label">Dificultad</label>
            <input type="text" id="difficulty" name="dificultad" class="form-control" aria-labelledby="HelpBlockDificultad">
            <div id="HelpBlockDificultad" class="form-text">
                Máximo 100 caracteres
            </div>

            <label for="time" class="form-label">Tiempo</label>
            <input type="number" id="time" name="tiempo" class="form-control" aria-labelledby="HelpBlockTiempo">
            <div id="HelpBlockTiempo" class="form-text">
                Tiempo en minutos que toma completar la sala
            </div>

            <label for="image" class="form-label">Imagen</label>
            <input type="text" id="image" name="imagen" class="form-control" aria-labelledby="HelpBlockImage">
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
