<?php ?>
<html lang="pt_br">

<head>
    <meta charset="utf8" />
    <title>Teste Await</title>
    <script>

        async function buscaProdutoAwait(link) {
            const response = await fetch(link); //busca a promessa no link
            const jsonCorpo = await response.json(); //converte para json
            //console.log(jsonCorpo);
            return jsonCorpo;
        }
      //retorna o json quando a promessa estiver terminada (then)
       buscaProdutoAwait('https://ranekapi.origamid.dev/json/api/produto').then(response =>{console.log(response)});

    </script>
</head>

<body>
    <a href="#" onclick="buscaProduto();">
        <h1>Usar Await</h1>
    </a>
</body>

</html>