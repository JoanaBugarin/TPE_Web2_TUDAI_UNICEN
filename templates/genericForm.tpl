{include file="header.tpl"}
    <h1 class="centrado">{$title}</h1>
    <div class="container">
        <form method='{$method}' action='{$action}'>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" aria-labelledby="HelpBlockNombre"  value="{$nombrePrevio}">
            <div id="HelpBlockNombre" class="form-text">
                Máximo 200 caracteres
            </div>

            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" aria-labelledby="HelpBlockDescripcion" value="{$descripcionPrevia}">

            <label for="capacidad" class="form-label">Capacidad</label>
            <input type="number" id="capacidad" name="capacidad" class="form-control" aria-labelledby="HelpBlockCapacidad" value="{$capacidadPrevia}">
            <div id="HelpBlockCapacidad" class="form-text">
                Número de personas para quienes está pensada la sala
            </div>

            {if is_array($idTematicaPrevia)}
                <label for="id_tematica" class="form-label">Nombre de la temática</label>
                <select name="id_tematica" class="form-control" aria-label="Default select example">
                    {foreach from=$idTematicaPrevia  item=$theme}
                        <option value="{$theme->id}">{$theme->name}</option>
                    {/foreach}
                </select>
            {else}
                <label for="theme_id" class="form-label">Id de la temática</label>
                <input type="number" id="theme_id" name="id_tematica" class="form-control" aria-labelledby="HelpBlockThemeId" value="{$idTematicaPrevia}">
                <div id="HelpBlockThemeId" class="form-text">
                    Id (número) que identifica a la temática a la que pertenece la sala
                </div>
            {/if}

            <label for="difficulty" class="form-label">Dificultad</label>
            <input type="text" id="difficulty" name="dificultad" class="form-control" aria-labelledby="HelpBlockDificultad" value="{$dificultadPrevia}">
            <div id="HelpBlockDificultad" class="form-text">
                Máximo 100 caracteres
            </div>

            <label for="time" class="form-label">Tiempo</label>
            <input type="number" id="time" name="tiempo" class="form-control" aria-labelledby="HelpBlockTiempo" value="{$tiempoPrevio}">
            <div id="HelpBlockTiempo" class="form-text">
                Tiempo en minutos que toma completar la sala
            </div>

            <label for="image" class="form-label">Imagen</label>
            <input type="text" id="image" name="imagen" class="form-control" aria-labelledby="HelpBlockImage" value="{$imagenPrevia}">
            <div id="HelpBlockImage" class="form-text">
                Url de la imagen de la sala
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
            </div>
        </form>
    </div>
</section>
{include file="footer.tpl"}