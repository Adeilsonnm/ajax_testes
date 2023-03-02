<?php ?>
<html lang="pt_br">

<head>
    <meta charset="utf8" />
    <title>Teste Fetch</title>
    <script>
        function buscaProduto() {
            //    const dadosf  = fetch('https://ranekapi.origamid.dev/json/api/produto').then(function (response){console.log(response)});
            const dadosf = fetch('https://ranekapi.origamid.dev/json/api/produto/')
                .then(response => {
                    return response.json();
                })
                .then(emJson => {
                    for(let i in emJson){
                        console.log(emJson[i].id+' - '+emJson[i].nome);
                    }
                });
        }
    </script>
</head>

<body>
    <a href="#" onclick="buscaProduto();">
        <h1>aqui</h1>
    </a>
</body>

</html>