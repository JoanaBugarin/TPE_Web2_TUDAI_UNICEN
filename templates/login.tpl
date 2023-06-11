{include file="header.tpl"}
<div class="container">
    <form action="verificar-sesion" method="POST">
        <h1>{$titulo}</h1>
        <label for="username" class="form-label mt-3">Email</label>
        <input type="email" name="username" class="form-control" placeholder="Ingrese email">
        <label for="password class="form-label mt-3">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
        {/if}
        <div class="col-auto mt-3">
            <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
        </div>
    </form>
</div>
{include file="footer.tpl"}
