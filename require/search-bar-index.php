			<div class="row">
				<div class="col-lg-2">
					<div class="options-menu">
						<a onclick="suministragasoil();"><img src="img/add.png"><span>Suministrar gasoil</span></a>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="search-bar">
						<form method="post" action="index.php" accept-charset="utf-8">
						<input type="text" name="Matricula" id="Matricula" placeholder="Matrícula">
						<input type="text" name="Ubicacion" id="Ubicacion" placeholder="Ubicación">
						<input type="text" data-date-format="yyyy-mm-dd" name="Fecha" id="Fecha" placeholder="Fecha">
						<input type="submit" name="Buscar" value="Buscar">
						<input type="reset" name="Borrar" value="Borrar">
						<a href="javascript:location.reload()"><img src="img/refresh.png"></a>
						<input type="hidden" name="token" value="token">
						</form>
					</div>
				</div>
			</div>