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
									<h3 class="panel-title">Produtos</h3>
                                </div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Código</th>
												<th>Nome</th>
												<th>Tipo</th>
                                                <th>Preço de compra</th>
												<th>Preço de venda</th>
												<th>Data de Compra</th>
												<th>Cliente</th>
                                                <th>Edit</th>
                                                <th>Remove</th>
											</tr>
										</thead>
										<tbody>
											<?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

											<tr>
												<td><?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["name_product"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["type_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td>R$<?php echo htmlspecialchars( $value1["purchase_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td>R$<?php echo htmlspecialchars( $value1["cost_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["purchase_date"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
												<td><?php echo htmlspecialchars( $value1["fantasy_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td><a href="/produtos/update/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="lnr lnr-pencil"></a></td>
                                                <td><a href="/produtos/delete/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="lnr lnr-trash"></a></td>
                                                
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


