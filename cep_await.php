<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>App Pesquisa Endereço</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<script>
		//Consumindo API de cep usando o fetch await
		async function carregaCEP(link) {
			let url = "https://viacep.com.br/ws/" + link + "/json/";
			const response = await fetch(url); //pega a promessa no em json
			jsonCep = await response.json();    //converte a promessa em json
			return jsonCep;
		}

		function buscaCEP(link) {
			const cep = carregaCEP(link); 
			//aguarda o processamento para manipular o json
			cep.then(response => { 
				document.getElementById('endereco').value = response.logradouro;
				document.getElementById('bairro').value = response.bairro;
				document.getElementById('cidade').value = response.localidade;
				document.getElementById('uf').value = response.uf;
			});
		}
	</script>
</head>

<body>

	<nav class="navbar navbar-light bg-light mb-4">
		<div class="container">
			<div class="navbar-brand mb-0 h1">
				<h3>App Pesquisa Endereço</h3>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row form-group">
			<div class="col-sm-3">
				<input type="number" class="form-control" onblur="buscaCEP(this.value)" placeholder="CEP" />
			</div>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="endereco" placeholder="Endereço" readonly />
			</div>
		</div>

		<div class="row form-group">
			<div class="col-sm-6">
				<input type="text" class="form-control" id="bairro" placeholder="Bairro" readonly />
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="cidade" placeholder="Cidade" readonly />
			</div>

			<div class="col-sm-2">
				<input type="text" class="form-control" id="uf" placeholder="UF" readonly />
			</div>
		</div>

		<div class="row form-group">
			<div class="col-sm-7">
				<input type="text" class="form-control" placeholder="Nick" />
			</div>
			<div class="col-sm-5">
				<input type="password" class="form-control"  placeholder="Senha"/>
			</div>
		</div>
	</div>
</body>

</html>