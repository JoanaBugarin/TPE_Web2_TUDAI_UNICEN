{include file="header.tpl"}
{if $session}
<div class="d-flex flex-row-reverse">
    <div class="btn-group">
        <a href="router/form-nueva-sala" class="btn btn-primary">+ Sala</a>
        <a href="router/form-nueva-tematica" class="btn btn-primary">+ Temática</a>
    </div>
</div>
{/if}
<div class="d-flex flex-row-reverse">
<form class="d-flex" role="search" method="GET" action="router/mostrar-salas-por-tematica">
  <select name="select-theme" class="form-select text-light bg-dark border-bottom border-bottom-dark form-select-sm buscar" data-bs-theme="dark" aria-label="Default select example">
    <option selected>Todas</option>
    {foreach from=$themes  item=$theme}
    <option value="{$theme->id}">{$theme->name}</option>
    {/foreach}
  </select>
  <button type="submit" class="btn btn-primary mb-3">Buscar</button>
</form>
</div>
{if $session}
  <div class="d-flex flex-row-reverse">
    <a href="router/logout" class="btn btn-primary">Desconectarse</a>
  </div>
{else}
  <div class="d-flex flex-row-reverse">
    <a href="router/login" class="btn btn-primary">Iniciar sesión</a>
  </div>
{/if}
  <main class="container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        {for $ini=1 to {$limit}  }
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{$ini}" aria-label="Slide ".{$ini+1}></button>
        {/for}
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{$limit}" aria-label="Slide 0"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-block w-100">
            <img src="{$roomActive->image}" class="img-carr" alt="...">
            <div>
              <h5 class="card-title">{$roomActive->name}</h5>
              <p class="card-text">{$roomActive->description}</p>
              <a class="btn btn-rooms btn-primary" href="router/mostrar-sala/{$roomActive->id}">Ver más</a>
              {if $session}
                <a class="btn btn-rooms btn-warning" href="router/form-actualizar-sala/{$roomActive->id}">Actualizar</a>
                <a class="btn btn-rooms btn-danger" href="router/eliminar-sala/{$roomActive->id}">Eliminar</a>
              {/if}
            </div>
          </div>
        </div>    
        {foreach from=$rooms  item=$room}
        <div class="carousel-item">
          <div class="d-block w-100">
            <img src="{$room->image}" class="img-carr" alt="...">
            <div>
              <h5 class="card-title">{$room->name}</h5>
              <p class="card-text">{$room->description}</p>
              <a class="btn btn-rooms btn-primary" href="router/mostrar-sala/{$room->id}">Ver más</a>
              {if $session}
                <a class="btn btn-rooms btn-warning" href="router/form-actualizar-sala/{$room->id}">Actualizar</a>
                <a class="btn btn-rooms btn-danger" href="router/eliminar-sala/{$room->id}">Eliminar</a>
              {/if}
            </div>
          </div>
        </div>    
        {/foreach}
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>
</section>
<section class="centrado margen-footer">
  <h2 class="mt-1">Nuestras temáticas</h2>
  <div class="d-flex justify-content-evenly">
    {foreach from=$themes item=$theme}
    <div class="themes">
      <h3>{$theme->name}</h3>
      <a class="btn btn-rooms btn-primary" href="./router/mostrar-tematica/{$theme->id}">Conocer más</a>
      {if $session}
        <a class="btn btn-rooms btn-warning" href="./router/form-actualizar-tematica/{$theme->id}">Actualizar</a>
        <a class="btn btn-rooms btn-danger" href="./router/eliminar-tematica/{$theme->id}">Eliminar</a>
      {/if}
    </div>
    {/foreach}
  </div>
</section>
{include file="footer.tpl"}