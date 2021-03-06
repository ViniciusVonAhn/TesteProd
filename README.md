## Processos para que o projeto seja executado

**1 - Clonar este repositório**

   `git clone https://github.com/ViniciusVonAhn/TesteProd.git`
   
**2 - Entrar no diretório do projeto clonado**

**3 - Baixar as dependências do projeto**

   `composer install`
   
**4 - Armazenar as imagens feitas por upload**

   `php artisan storage:link`
   
**5 - Criar um banco de dados**   

**6 - Renomear o arquivo .env.example para .env e dentro dele mudar as configs abaixo**

  *DB_DATABASE=nome do banco criado
  
  *DB_USERNAME=root do banco
  
  *DB_PASSWORD=senha do banco
 
**7 - Gerar a nova chave para o seu arquivo .env**

  `php artisan key:generate`
  
**8 - Criar as tabelas no banco**

  `php artisan migrate`
  
**9 - Inicar o servidor**

  `php artisan serve`
  
## Rotas

* localhost:8000/cliente - gerenciamento dos clientes cadastrados

* localhost:8000/cliente/create = Cadastro de cliente 

* localhost:8000/cliente/1/edit = Altera o cliente com id 1

* localhost:8000/cliente/1 = exclui o cliente com id 1

* localhost:8000/pesquisar?pesquisar=vi = pesquisa os clientes que contém as letras vi no nome
