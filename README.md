## Processos para que o projeto seja executado

**1 - Clonar este repositório**

   `git clone https://github.com/ViniciusVonAhn/TesteProd.git`
   
**2 - Entrar no diretório do projeto clonado**

**3 - Instalar o composer**

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

* /cliente - gerenciamento dos clientes cadastrados

* /cliente/create = Cadastro de cliente 

* /cliente/1/edit = Altera o cliente com id 1

* /cliente/1 = exclui o cliente com id 1

* /pesquisar?pesquisar=vi = pesquisa os clientes que contém as letras vi no nome
