<?php

?>
<html lang="pt_br">
    <head>
        <meta charset="utf-8"/>
        <script>
            //Filtragem de dados
            const dados = ['Dinheiro','Cartao','R$ 900', 'Cheques', 'R$ 400', "R$ 100"];
            //Manipulando busca usando o filter 
            const filtro = dados.filter(preco =>{
                    return preco.includes('R$');   // ['R$ 200', 'R$ 400']
            });

            console.log(filtro);

            const filtro_mapeado = filtro.map(function(preco){ //Mapeia o array filtro
                precos = Number(preco.replace("R$ ","")); //retira o "R$ "
                return precos;
            });
            console.log(filtro_mapeado.sort((a,b)=> a - b)); //[100, 400, 900]
            

            const total = filtro_mapeado.reduce((acc, item) => acc + item); //pega o item anterior e o atual  e soma na função de retorno
            console.log(total);


        </script>
    </head>
</html>