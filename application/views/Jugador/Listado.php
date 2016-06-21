



<div class="container well">
<table class="table table-bordered">
  <thead>
    <td>Id Jugador</td>
    <td>Equipo</td>
    <td>Nombre</td>
    <td>Apodo</td>
    <td>Posicion</td>
    <td>Numero</td>
  </thead>

  <tbody>
    <?php
    foreach($Jugador as $jugadores)
      {
        $edit = base_url("index.php?/Jugador/editar/?id={$jugadores->IdJugador}");
        $delete =base_url("index.php?/Jugador/eliminar/?id={$jugadores->IdJugador}");
        echo "<tr>
          <td>{$jugadores->IdJugador}</td>
          <td>{$jugadores->Equipo}</td>
            <td>{$jugadores->Nombre}</td>
              <td>{$jugadores->Apodo}</td>
                <td>{$jugadores->Posicion}</td>
                  <td>{$jugadores->Numero}</td>
                  <td><a href='{$edit}' class='btn btn-primary'>Editar </a>
                  <a href='{$delete}' class='btn btn-danger'>Eliminar </a></td>
      </tr>";
    }
    ?>


  </tbody>


</table>
</div>
