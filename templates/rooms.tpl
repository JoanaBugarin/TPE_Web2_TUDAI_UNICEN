{include file="header.tpl"}
<main class="container mt-5">
    <section>
        {foreach from=$rooms  item=$room}
        <div class="card">
            <img src="{$room->image}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{$room->name}</h5>
                <p class="card-text">{$room->description}</p>
                <a class="btn btn-outline-primary" href="./router/{$room->id}">Ver detalle</a>
            </div>
        </div> 
        {/foreach}
    </section>
</main>
{include file="footer.tpl"}