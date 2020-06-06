<?php if(!class_exists('Rain\Tpl')){exit;}?>		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"></h3>
					<div class="row">
						<div class="col-md-12">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Buscar Produto">
                                <span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
                            </div>
                            <br>
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Clientes</h3>
                                </div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Tipo</th>
												<th>Registro</th>
												<th>Nome</th>
												<th>Razão Social</th>
                                                <th>Endereço</th>
                                                <th>Número</th>
                                                <th>CEP</th>
												<th>Cidade</th>
												<th>Bairro</th>
												<th>Estado</th>
												<th>País</th>
												<th>Editar</th>
												<th>Excluir</th>
												
											</tr>
										</thead>
										<tbody>
											<?php $counter1=-1;  if( isset($clients) && ( is_array($clients) || $clients instanceof Traversable ) && sizeof($clients) ) foreach( $clients as $key1 => $value1 ){ $counter1++; ?>

											<tr>
												<td><?php if( $value1["type"] == 1 ){ ?>CNPJ<?php }else{ ?>CPF<?php } ?></td>
												<td><?php echo htmlspecialchars( $value1["id_clients"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["fantasy_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["company_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td><?php echo htmlspecialchars( $value1["street"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["number"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["postal_code"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["city"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["neighborhood"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["state"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["country"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td><a href="/clientes/update/<?php echo htmlspecialchars( $value1["id_clients"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="lnr lnr-pencil"></a></td>
                                                <td><a href="/produtos/delete/<?php echo htmlspecialchars( $value1["id_clients"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="lnr lnr-trash"></a></td>
                                                
											</tr>
											<?php } ?>

										</tbody>
									</table>
								</div>
							</div>
                            <!-- END BASIC TABLE -->
                        </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>


