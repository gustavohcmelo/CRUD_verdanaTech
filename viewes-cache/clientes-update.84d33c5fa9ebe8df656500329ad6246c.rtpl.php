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
                                        <h3 class="panel-title">Clientes</h3>
                                    </div>
                                    <div class="panel-body">
                                        <label class="fancy-radio">
                                            <input name="gender" value="male" type="radio">
                                            <span><i></i>Pessoa Física</span>
                                        </label>
                                        <label class="fancy-radio">
                                            <input name="gender" value="female" type="radio">
                                            <span><i></i>Pessoa Jurídica</span>
                                        </label>
                                        <br>
                                        <input type="text" class="form-control" placeholder="CPF ou CNPJ">
                                        <br>
                                        <input type="text" class="form-control" placeholder="Nome (nome fantasia para pessoas jurídicas)">
                                        <br>
                                        <input type="text" class="form-control" placeholder="Razão Social">
                                        <br>
                                        <input type="text" class="form-control" placeholder="CEP" style="width: 20%; display: inline;">
                                        <input type="text" class="form-control" placeholder="Rua, Avenida, Logradouro" style="width: 60%; display: inline;">
                                        <input type="text" class="form-control" placeholder="Numero" style="width: 15%; display: inline; margin-bottom: 20px;">
                                        <br>
                                        <input type="text" class="form-control" placeholder="Bairro" style="width: 25%; display: inline;">
                                        <input type="text" class="form-control" placeholder="Cidade" style="width: 25%; display: inline;">
                                        <input type="text" class="form-control" placeholder="UF" style="width: 25%; display: inline;">
                                        <input type="text" class="form-control" placeholder="País" style="width: 20%; display: inline; margin-bottom: 20px;">
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


