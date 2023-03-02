//Bibliotecas 
https://sweetalert2.github.io/#input-types


//#GIT
git -- version 
git init //inicia o git no projeto 
git status //mostra os arquivos não enviados
git add. //adiciona o arquivo ao fluxo de versionamento
git commit -a -m "1° upload" //realiza o comentário da mudança -a é "todo tipo de arquivo" -m é "mensagem"

//@ Agora pode ser mandado para o git hub
git remote add origin https://github.com/Adeilsonnm/ajax_testes.git //irá adicionar o repositório
git branch -M main //Define o local de envio, main é algo como producao
git push -u origin main //realiza o envio

/*
…or create a new repository on the command line

echo "# ajax_testes" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Adeilsonnm/ajax_testes.git
git push -u origin main

…or push an existing repository from the command line

git remote add origin https://github.com/Adeilsonnm/ajax_testes.git
git branch -M main
git push -u origin main
*/

git config --list //ver as configuraçoes do git