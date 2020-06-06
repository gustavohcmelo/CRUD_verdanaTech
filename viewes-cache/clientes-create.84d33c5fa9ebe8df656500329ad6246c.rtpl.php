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
                                        <h3 class="panel-title">Novo Cliente</h3>
                                    </div>
                                    <form role="form" action="/clientes/create" method="post">
                                        <div class="panel-body">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="type">
                                                <span>Pessoa Jurídica</span>
                                            </label>
                                            <br>
                                            <input type="number" class="form-control" placeholder="CPF ou CNPJ" name="id_clients">
                                            <br>
                                            <input type="text" class="form-control" placeholder="Nome (nome fantasia para pessoas jurídicas)" name="fantasy_name">
                                            <br>
                                            <input type="text" class="form-control" placeholder="Razão Social" name="company_name">
                                            <br>
                                            <input type="text" class="form-control" placeholder="CEP" style="width: 20%; display: inline;" name="postal_code">
                                            <input type="text" class="form-control" placeholder="Rua, Avenida, Logradouro" style="width: 60%; display: inline;" name="street">
                                            <input type="text" class="form-control" placeholder="Numero" style="width: 15%; display: inline; margin-bottom: 20px;" name="number">
                                            <br>
                                            <input type="text" class="form-control" placeholder="Bairro" style="width: 25%; display: inline;" name="neighborhood">
                                            <input type="text" class="form-control" placeholder="Cidade" style="width: 25%; display: inline;" name="city">
                                            <input type="text" class="form-control" placeholder="UF" style="width: 25%; display: inline;" name="state">
                                            <input type="text" class="form-control" placeholder="País" style="width: 20%; display: inline; margin-bottom: 20px;" name="country">
                                            <br>
                                            <input type="hidden" name="status" value="0">
                                            <div class="row">
                                                <div class="col-md-6" style="width: 100%;">
                                                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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


