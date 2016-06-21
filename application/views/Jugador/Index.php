
<div class="row">
<form Method="POST" action="<?php echo base_url('index.php?/Jugador/guarda'); ?>" >

		<div class= "col-md-6">

			<div class="form-group row">
				<div class ="col-sm-8">

					<div class="input-group">

					<div class="input-group-addon">Id Jugador</div>

					<input type="text" class="form-control" value=<?php echo $Jugador->IdJugador ?> name="IdJugador" readonly/>
					</div>

				</div>


			</div>



			<div class="form-group row">
				<div class ="col-sm-8">

					<div class="input-group">

					<div class="input-group-addon">Equipo</div>


					<select class="form-control" name="equipo">
					<?php foreach ($Equipo as $equipo)
					{
						echo "<option value='{$equipo->IdEquipo}'>{$equipo->Nombre}, {$equipo->Ciudad} </option>";
					}
					?>
					 </select>


					</div>

				</div>


			</div>

			<div class="form-group row">

				<div class="col-sm-8">

					<div class="input-group">
						<div class="input-group-addon">Nombre </div>
						<input type="text"   class="form-control" name="Nombre"/>
					</div>

				</div>

			</div>

			<div class="form-group row">

				<div class="col-sm-8">

					<div class="input-group">
						<div class="input-group-addon">Apodo </div>
						<input type="text" class="form-control" name="Apodo"/>
					</div>

				</div>

			</div>


				<div class="form-group row">

				<div class="col-sm-8">

					<div class="input-group">
						<div class="input-group-addon">Posicion </div>
						<input type="text"  class="form-control" name="Posicion"/>
					</div>

				</div>

			</div>



				<div class="form-group row">

				<div class="col-sm-8">

					<div class="input-group">
						<div class="input-group-addon">Numero </div>
						<input type="number"  class="form-control" name="Numero"/>
					</div>

				</div>

				</div>

<div class="col-md-6"><input type="submit" class="btn btn-primary"/></div>

				</div>

		</form>
</div>
