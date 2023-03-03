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
//@ como mudar o usuário git da maquina https://coffops.com/alteracao-de-usuario-git/
git config --global user.name "Luiz Antonio Rech"
git config --global user.email luiz.rech@conffops.com.br
//para trocar o usuario precisa remove-lo das credenciais do windows
//Branch permite que muitas pessoas trabalhem em um unico projeto  -> Tarefa
#Branch (Tarefa)
git checkout -b "nova tarefa" //cria uma nova tarefa
//adiciona um commit 
git push --set-upstream origin nova_tarefa //cria uma nova tarefa para trabalhar
//mudar para tarefa main
git checkout main
//ver em qual branch 
git branch //main se for o caso , mosta o branch

//junta os projetos (tarefas)
git merge main //(main estando na raiz) 
git push //para mandar para a git hub


//#Atualizar o projeto se atentar ao bratch trabalhado
git pull
git clone 'https://github.com/Adeilsonnm/ajax_testes.git' nome_da_pasta //clona o projeto e adiciona a pasta
//possivel dar modificar e commitar o main, e mudar o bratch durante o processo

git clean -f //remove aquivos adicionados por engano


//@dica desfazer 
git checkout './filmes.php' //funciona como um ctrol-z , desfaz

git log //movimentaçoes do projeto

git branch -d 'branch' //aqui é possivel escluir um branch