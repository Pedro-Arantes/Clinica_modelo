<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de Pacientes</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."paciente/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar Paciente</a>
							<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
					<div class="lst mostraFiltro" style="">
						<form action="" method="">
						<div class="rows">
								<div class="col-4">
									<select name="txt_id_empresa">
										<option selected>Selecione o valor...</option>
										<option value="1">Código</option>
										<option value="2">Nome</option>
										<option value="3">Email</option>
										<option value="4">Cidade</option>
										<option value="5">Site</option>
										<option value="6">Fone</option>
									</select>
								</div>
								<div class="col-6">
									<input type="text"  name="" placeholder="Valor da pesquisar..." >
								</div>
								<div class="col-2">
									<input type="submit" class="btn btn-azul" value="pesquisar">
								</div>
						</div>
						</form>
					</div>
						
				<div class="">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  <th align="left">ID</th>
							<th align="left">Nome</th>
							<th align="left">CPF</th>
							<th align="center">Celular</th>
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $paciente) { ?>
							<tr>
								<td><?php echo $paciente->idpaciente; ?></td>
								<td><?php echo $paciente->nome; ?></td>
								<td><?php echo $paciente->cpf; ?></td>
								<td align="center"><?php echo $paciente->cel; ?></td>
								<td align="center">
									<a   href="<?php echo URL_BASE."paciente/edit/".$paciente->idpaciente ?>" class="btn btn-outline-warning" title="Editar"> <img src="<?php echo URL_BASE."assets/img/iconoir_edit.svg"?>" alt=""> </a>
									<a  href="<?php echo URL_BASE."paciente/excluir/".$paciente->idpaciente ?>" class="btn btn-outline-danger" title="exlcluir"><img src="<?php echo URL_BASE."assets/img/iconoir_trash.svg"?>" alt=""></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>