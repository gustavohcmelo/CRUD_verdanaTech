<?php if(!class_exists('Rain\Tpl')){exit;}?>		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Cadastros</h3>
						</div>
						<div class="panel-body">
							<div class="row">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Novo Produto</h3>
                                    </div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" placeholder="0000000" disabled style="width: 20%; display: inline; margin-bottom: 20px;">
                                        <br>
                                        <input type="text" class="form-control" placeholder="Nome do Produto">
                                        <br>
                                        <input type="text" class="form-control" placeholder="Data de Compra" style="width: 49%; display: inline;">
                                        <select class="form-control" style="width: 49%; display: inline; margin-bottom: 20px;">
                                            <option value="cheese">Tipo de item</option>
                                            <option value="tomatoes">Informática</option>
                                            <option value="mozarella">Escritório</option>
                                            <option value="mushrooms">Limpeza</option>
                                        </select>
                                        <br>
                                        <input type="number" min="0.00" max="10000.00" class="form-control" placeholder="Preço de Compra R$0,00" style="width: 49%; display: inline;">
                                        <input type="number" min="0.00" max="10000.00" class="form-control" placeholder="Preço de Venda R$0,00" style="width: 49%; display: inline; margin-bottom: 20px;">
                                        <input type="hidden" name="status" value="0">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 100%;">
                                                <button type="button" class="btn btn-primary btn-block">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>


