{include file="header.tpl"}
<main class="container mt-5 margen-footer">
    <section class="centrado">
        <h1>{$room->name}</h1>
        <p>{$room->description}</p>
        <img src="{$room->image}"/>
        <p>Temática: {$room->theme}</p>
        <p>Capacidad: {$room->capacity}</p>
        <p>Dificultad: {$room->difficulty}</p>
        <p>Duración: {$room->time}</p>
        <a class="btn btn-rooms btn-primary" href="http://localhost/TPE_Web2_TUDAI_UNICEN">Regresar</a>
    </section>
</main>
</section>
{include file="footer.tpl"}