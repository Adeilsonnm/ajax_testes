<html lang="pt-br">

<head>
    <meta charset="utf9">
    <title>Filmes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="xmltojson.js"></script>
    <script>
        function recuperaFilmes() {
            let httpDados = new XMLHttpRequest(); //recebe os dados
            httpDados.open('GET', 'filmes.json'); //usa op método open para abrir o dado
            httpDados.onreadystatechange = function() { //verifica a resposta do no processo de acesso ao servidor
                if (httpDados.readyState == 4 && httpDados.status == 200) { //verifica o stado e o status do servidor
                    let jsonDados = httpDados.responseText; //recebe a informação vinda do servidor
                    console.log(jsonDados);
                    let objDados = JSON.parse(jsonDados);
                    console.log(objDados.filmes);


                    // // <div class="row">
                    // //     <div class="col">
                    // //         <p><strong>Título:</strong>Titulo</p>
                    // //         <p><strong>Resumo:</strong>Titulo</p>
                    // //         <p><strong>Gênero:</strong>Titulo</p>
                    // //         <p><strong>Elenco:</strong>Titulo</p>
                    // //         <p><strong>Data de Lançamento:</strong>Titulo</p>
                    // //         <hr>
                    // //     </div>
                    // // </div>
                    // //Se criará um lista de elementos filmes usando modede acima dem comentário
                    for(var i in objDados.filmes){
                        let item = objDados.filmes[i]; //variavel auxiliar
                        console.log(item);
                        let divRow = document.createElement('div');
                        divRow.className = 'row';
                        let divCol = document.createElement('div');
                        divCol.className = 'col';

                        let p1 = document.createElement('p');
                        p1.innerHTML = '<strong>Titulo: </strong>'+item.titulo;

                        let p2 = document.createElement('p');
                        p2.innerHTML = '<strong>Resumo: </strong>'+item.resumo;

                        let genero = '';
                        for(var j in item.generos){
                         if(genero){
                            genero += ', ';
                         }
                        genero += item.generos[j].genero;
                        }
                        let p3 = document.createElement('p');
                        p3.innerHTML = '<strong>Gênero: </strong>'+genero;

                        
                        let elenco = '';
                        for(var h in item.elenco){
                         if(elenco){
                            elenco += ', ';
                         }
                         elenco += item.elenco[h].ator;
                        }

                        let p4 = document.createElement('p');
                        p4.innerHTML = '<strong>Elenco: </strong>'+elenco;

                        let p5 = document.createElement('p');
                        p5.innerHTML = '<strong>Data de Lançamento: </strong>'+item.dataLancamento.data+' ('+item.dataLancamento.pais+')';
                        
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