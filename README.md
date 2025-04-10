

## Requisitos para o ambiente

É necessário ter o composer e o Laravel mais recente instalado

O banco utilizado foi MySQL 

## Para rodar o projeto 
 Sâo necessários os comandos padrões de configuração do Laravel

## Adicionar o Composer
    composer install

## criar um .env a partir do .env.example
    cp .env.example .env
### Após isso, configurá-lo para ser compatível 

## criar uma chave de autenticação
	php artisan key:generate

## Rodar as migrations 
	php artisan migrate

## Link simbólico da pasta public/storage
	php artisan storage:link


## Projeto desenvolvido em MVC

### Documentação Back end

####  Eloquent ORM utilizado para realizar todas as queries no BD, A conexão com o BD é feita no arquivo crud-laravel\config\database.php, utilizando as credencias definidas no .env 

 As rotas principais são : 
 
>  Route::get('/') 

Método GET para retornar a página principal (tela 1)

> Route::post('/dados') 

Método POST para criar os dados originais e a cópia para edição (tela 1)

> Route::get('/dados') 

Metodo GET para retornar os dados originais na view (tela 2)

> Route::put('/dados/{id}')

Método PUT para update dos dados para o banco na table de dados registrados (tela 2)

## Documentação Frontend

A tabela da tela 2 se comunica com a rota 
>Route::get('/dados',[DadosEditadosController::class,'retorna_dados_originais'])->name('retorna_tela_dois');;

que utiliza o Controller : DadosEditadosController para realizar o tratamento das informações e mostrar pro usuário.

Essa tabela utiliza dois botões, um de editar, que identifica a linha da tabela que o usuário está alterando, e um de atualizar, que verifica se os campos estão todos preenchidos, preenche um forms hidden e envia as informações para a rota : 

>Route::put('/dados/{id}',[DadosEditadosController::class,'cria_dados_editados'])->name('cria_dados_editados');

Para atualizar a tabela de dados editado e realizar uma verificação se a tabela dados_editados já possui registros para ser mostrada em tela.

## Mensagens de erro

Foi utilizado o método try...catch{} para mostrar mensagens de erro na tela, totalmente traduzidas diretamente na pasta \lang do projeto




