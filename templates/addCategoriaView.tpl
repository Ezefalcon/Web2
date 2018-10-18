<div class="col-lg-5">
<div class="container-fluid">
  <h1 class="text-white">Categorias</h1>
  <p class="text-white">Eliminar una categoria, eliminara todos los productos de tal</p>
    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">Clase</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$Categoria item=fila}
        <tr>
          <td>{$fila['clase']}</td>
          {if (isset($smarty.session.User))}

          <td><a class="float-right" href="borrarCategoria/{$fila['id_categoria']}">Borrar</a></td>
          <td><a class="float-right" href="modificarCategoria/{$fila['id_categoria']}">Modificar</a></td>
        </tr>
        {/if}
        {/foreach}
      </tbody>
  </div>
</div>
</div>
