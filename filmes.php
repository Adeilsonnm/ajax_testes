

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