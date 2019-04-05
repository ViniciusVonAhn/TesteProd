<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prodigious</title>

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>    
        <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Gerenciamento de Cliente</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">                
                            <li><a href="{{route('cliente.index')}}">Clientes</a></li>                  
                            <li class="active">Cadastro</li>
                        </ul>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>CADASTRO DOS DADOS DO CLIENTE</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('cliente.store')}}" 
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="nome">Nome*</label>
                                <input type="text" name="nome" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="text" name="email" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagem">Foto*</label>
                                <input type="file" name="imagem"
                                       class="form-control"
                                       accept=".gif,.jpg,.png"
                                       data-toggle="tooltip"
                                       title="Usar arquivo com dimensões 300x300 
                                       - JPG, GIF, PNG" 
                                       data-placement="top"
                                       required>
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="descricao">Descrição*</label>
                                <textarea name="descricao" class="form-control" rows="3" cols="10" placeholder="Exemplo, representante da empresa..." required></textarea>
                            </div>
                        </div>                         
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning">
                                Cadastrar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </body>
</html>
