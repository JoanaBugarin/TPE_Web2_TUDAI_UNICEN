{include file="header.tpl"}
  <main class="container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 0"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-block w-100">
            <img src="{$roomActive->image}" class="img-carr" alt="...">
            <div>
              <h5 class="card-title">{$roomActive->name}</h5>
              <p class="card-text">{$roomActive->description}</p>
              <a class="btn btn-primary" href="./router/{$roomActive->id}">Ver más</a>
              <a class="btn btn-warning" href="./router/update/{$roomActive->id}">Actualizar</a>
              <a class="btn btn-danger" href="./router/delete/{$roomActive->id}">Eliminar</a>
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
              <a class="btn btn-primary" href="./router/{$room->id}">Ver más</a>
              <a class="btn btn-warning" href="./router/update/{$room->id}">Actualizar</a>
              <a class="btn btn-danger" href="./router/delete/{$room->id}">Eliminar</a>
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
<section class="second-section">
  <h2 class="mt-1">Nuestras temáticas</h2>
  <div d-flex justify-content-evenly>
    {foreach from=$themes item=$theme}
    <div class="themes">
      <h3>{$theme->name}</h3>
      <a class="btn btn-primary" href="./router/{$theme->id}">Conocer más</a>
    </div>
    {/foreach}
  </div>
</section>
{include file="footer.tpl"}