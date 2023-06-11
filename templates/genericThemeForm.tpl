{include file="header.tpl"}
    <h1 class="centrado">{$title}</h1>
    <div class="container">
        <form method='{$method}' action='{$action}'>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" aria-labelledby="HelpBlockNombre"  value="{$nombrePrevio}">
            <div id="HelpBlockNombre" class="form-text">
                Máximo 200 caracteres
            </div>

            <label for="clasificacion" class="form-label">Clasificación</label>
            <input type="text" id="clasificacion" name="clasificacion" class="form-control" aria-labelledby="HelpBlockClasificacion"  value="{$clasificacionPrevia}">
            <div id="HelpBlockClasificacion" class="form-text">
                Público al que está destinada la temática en formato: Todo Público o +18, +16...
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
            </div>
        </form>
    </div>
</section>
{include file="footer.tpl"}