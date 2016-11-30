<div class="table-responsive" id="content">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Placa</th>
				<th>Grupo</th>
				<th>Nome</th>
				<th>Status</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><img class="car-photo" src="/trabalho_web/uploads/7368.jpg"></td>
				<td><p>DF-0808</p></td>
				<td>Esportivo</td>
				<td>Porsche</td>
				<td><span class="label label-success vmiddle"><span class="mright10 glyphicon glyphicon-ok-circle"></span>Disponível</span></td>
				<td class="text-center">
					<a class="mright10" href="#editarVeiculo" rel="modal"><span class="glyphicon glyphicon-pencil"></span></a>
					<a class="remove" href=""><span class="glyphicon glyphicon-remove-sign"></span></a>
				</td>
			</tr>
			<tr>
				<td><img class="car-photo" src="/trabalho_web/uploads/7368.jpg"></td>
				<td><p>DF-0808</p></td>
				<td>Esportivo</td>
				<td>Porsche</td>
				<td><span class="label label-danger vmiddle"><span class="mright10 glyphicon glyphicon-ban-circle"></span>Locado</span></td>
				<td class="text-center">
					<a class="mright10" href="#editarVeiculo" rel="modal"><span class="glyphicon glyphicon-pencil"></span></a>
					<a class="remove" href=""><span class="glyphicon glyphicon-remove-sign"></span></a>
				</td>
			</tr>
			<tr>
				<td><img class="car-photo" src="/trabalho_web/uploads/7368.jpg"></td>
				<td><p>DF-0808</p></td>
				<td>Esportivo</td>
				<td>Porsche</td>
				<td><span class="label label-info vmiddle"><span class="mright10 glyphicon glyphicon-wrench"></span>Oficina</span></td>
				<td class="text-center">
					<a class="mright10" href="#editarVeiculo" rel="modal"><span class="glyphicon glyphicon-pencil"></span></a>
					<a class="remove" href=""><span class="glyphicon glyphicon-remove-sign"></span></a>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr><td colspan="6" class=""></td></tr>
		</tfoot>
	</table>
</div>
<!-- CADASTRAR NOVO VEICULO -->
<div class="window" id="novoVeiculo">
	<a href="#" class="fechar"><span class="glyphicon glyphicon-remove text-red"></span></a>
	<form>
		<fieldset class="">
			<legend>Novo Veículo</legend>
			<div class="form-group col-md-6">
				<label for="nome">Nome</label>
				<input class="form-control" type="text" name="name" required>
			</div>
			<div class="form-group col-md-6">
				<label for="placa">Placa</label>
				<input class="form-control" type="text" name="placa" required>
			</div>
			<div class="form-group col-md-6">
				<label for="grupo">Tipo</label>
				<select class="form-control" name="grupo" required>
					<option value="esportivo">Esportivo</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="status">Status</label>
				<select class="form-control" name="status" disabled>
					<option value="disponivel">Disponível</option>
					<option value="locado">Locado</option>
					<option value="oficina">Oficina</option>
				</select>
			</div>
			<div class="form-group col-md-12">
				<label for="file-photo">Selecione a foto</label>
				<input type="file" id="file-photo">
			</div>
			<div class="form-group col-md-6">
				<button class="btn btn-success" type="submit" id="">Gravar</button>
			</div>
		</fieldset>
	</form>
</div>
<!-- CADASTRAR NOVO VEICULO -->

<!-- EDITAR VEICULO -->
<div class="window" id="editarVeiculo">
	<a href="#" class="fechar"><span class="glyphicon glyphicon-remove text-red"></span></a>
	<form>
		<fieldset class="">
			<legend>Editar Veículo</legend>
			<div class="form-group col-md-12 text-center">
				<img class="car-photo" src="/trabalho_web/uploads/7368.jpg">
			</div>
			<div class="form-group col-md-6">
				<label for="nome">Nome</label>
				<input class="form-control" type="text" name="name" placeholder="Porsche" disabled>
			</div>
			<div class="form-group col-md-6">
				<label for="placa">Placa</label>
				<input class="form-control" type="text" name="placa" placeholder="DF-0808" disabled="">
			</div>
			<div class="form-group col-md-6">
				<label for="grupo">Tipo</label>
				<select class="form-control" name="grupo" disabled>
					<option value="esportivo">Esportivo</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="status">Status</label>
				<select class="form-control" name="status" disabled>
					<option value="disponivel">Disponível</option>
					<option value="locado">Locado</option>
					<option value="oficina">Oficina</option>
				</select>
			</div>
			<div class="form-group col-md-12">
				<label for="file-photo">Selecione a foto</label>
				<input type="file" id="file-photo">
			</div>
			<div class="form-group col-md-6">
				<button class="btn btn-success" type="submit">Gravar</button>
			</div>
		</fieldset>
	</form>
</div>
<!-- EDITAR VEICULO -->



<!-- mascara para cobrir o site -->
<div id="mascara"></div>
