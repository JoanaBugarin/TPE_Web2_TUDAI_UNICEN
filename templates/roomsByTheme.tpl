{include file="header.tpl"}
    <main class="container mt-5">
        <h1>Salas de escape de {$rooms[0]->theme}</h1>
        <div class="d-flex">
        {foreach from=$rooms  item=$room}
            <div class="card cardsorange" style="width: 18rem;">
                <img src="{$room->image}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$room->name}</h5>
                    <p class="card-text">{$room->description}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Capacidad: {$room->capacity}</li>
                        <li class="list-group-item">Dificultad: {$room->difficulty}</li>
                        <li class="list-group-item">Tiempo: {$room->time}</li>
                    </ul>
                </div>
            </div>
        {/foreach}
        </div>
        <a class="btn btn-rooms btn-primary mt-3" href="http://localhost/TPE_Web2_TUDAI_UNICEN">Regresar</a>
    </main>
</section>
{include file="footer.tpl"}