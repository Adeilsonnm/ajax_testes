<html lang="pt-br">

<head>
    <meta charset="utf9">
    <title>Filmes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="xmltojson.js"></script>
    <script>
        function recuperaFilmes() {
            let httpDados = new XMLHttpRequest(); //recebe os dados
            httpDados.open('GET', 'filmes.xml'); //usa op método open para abrir o dado
            httpDados.onreadystatechange = function() { //verifica a resposta do no processo de acesso ao servidor
                if (httpDados.readyState == 4 && httpDados.status == 200) { //verifica o stado e o status do servidor
                    let xmlDados = httpDados.responseText; //recebe a informação vinda do servidor
                    console.log(xmlDados);
                    let parser = new DOMParser(); //permite converter estilos de documentos 
                    let domFilmes = parser.parseFromString(xmlDados, 'text/xml'); //converte o xml em um objeto dom 
                    console.log(domFilmes);
                    let filmeConvertidoJson = xmlToJson(domFilmes); //usa uma funçao que converte xml em json manipulavel por js usando o xmltojoson.js
                    console.log(filmeConvertidoJson);

                    for(var i in filmeConvertidoJson['filmes']['filme']){

                        let item = filmeConvertidoJson['filmes']['filme'][i]; //variavel auxiliar
                        let divRow = document.createElement('div');
                        divRow.className = 'row';
                        let divCol = document.createElement('div');
                        divCol.className = 'col';

                        let p1 = document.createElement('p');
                        p1.innerHTML = '<strong>Titulo: </strong>'+item['titulo']['#text'];

                        let p2 = document.createElement('p');
                        p2.innerHTML = '<strong>Resumo: </strong>'+item['resumo']['#text'];

                        let genero = '';
                        for(var j in item['genero']){
                         if(genero){
                            genero += ', ';
                         }
                        genero += item['genero'][j]['#text'];
                        }
                        let p3 = document.createElement('p');
                        p3.innerHTML = '<strong>Gênero: </strong>'+genero;

                        
                        let elenco = '';
                        for(var h in item['elenco']['ator']){
                         if(elenco){
                            elenco += ', ';
                         }
                         elenco += item['elenco']['ator'][h]['#text'];
                        }

                        let p4 = document.createElement('p');
                        p4.innerHTML = '<strong>Elenco: </strong>'+elenco;

                        let p5 = document.createElement('p');
                        p5.innerHTML = '<strong>Data de Lançamento: </strong>'+item['dataLancamento']['#text']+' ('+item['dataLancamento']['@attributes']['pais']+')';
                        
                        let hr = document.createElement('hr');

                        divRow.appendChild(divCol); //adiciona divCol a divRow 
                        divCol.appendChild(p1);
                        divCol.appendChild(p2);
                        divCol.appendChild(p3);
                        divCol.appendChild(p4);
                        divCol.appendChild(p5);
                        divCol.appendChild(hr);

                        document.getElementById('lista').appendChild(divRow);
                    }


                }
            }
            httpDados.send();
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-light mb-4">
        <div class="container">
            <div class="navbar-brand mb-0 h1">
                <h2>Catálogo de filmes</h2>
            </div>
        </div>
    </nav>
    <div class="container" id="lista">
        <div class="ro mb-4">
            <div class="col">
                <button type="button" class="btn btn-success" onclick="recuperaFilmes()">Buscar Filmes</button>
            </div>
        </div>


    </div>
</body>

</html>