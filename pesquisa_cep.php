<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>App Pesquisa Endereço</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script>
			function buscaCEP(link){
				let url = "https://viacep.com.br/ws/"+link+"/json/";
				let dadosCep = new XMLHttpRequest();
				dadosCep.open('GET', url);

				dadosCep.onreadystatechange = function (){
					if(dadosCep.readyState ==4 && dadosCep.status == 200){
						let dadosCepJoson = JSON.parse(dadosCep.responseText);
						document.getElementById('endereco').value = dadosCepJoson.logradouro;
						document.getElementById('bairro').value = dadosCepJoson.bairro;
						document.getElementById('cidade').value = dadosCepJoson.localidade;
						document.getElementById('uf').value = dadosCepJoson.uf;
					}
					if(dadosCep.status == 400){
						console.log("Cep não encontrado!");
					}
				}
				
				dadosCep.send();
				
				
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
					<input type="number" class="form-control" onblur="buscaCEP(this.value)" placeholder="CEP"/>
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
		</div>
	</body>
</html>