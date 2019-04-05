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
                            <li class="active">Alteração</li>
                        </ul>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO CLIENTE</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('cliente.update', $cliente->id)}}" 
                          enctype="multipart/form-data">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" 
                                       class="form-control" 
                                       value="{{$cliente->nome}}"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" 
                                       class="form-control" 
                                       value="{{$cliente->email}}"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagem">Foto</label>
                                <input type="file" 
                                       name="imagem"
                                       accept=".gif,.jpg,.png"
                                       class="form-control"
                                       data-toggle="tooltip" 
                                       data-placement="top"
                                       title="Usar arquivo com dimensões 300x300 
                                       - JPG, GIF, PNG"
                                       value="{{$cliente->imagem}}">
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                 <textarea name="descricao" class="form-control" rows="3" cols="10" required><?php echo $cliente  ['descricao'];?></textarea>
                            </div>
                        </div>                     
                        <div class="col-md-12">
                            <button type="submit" 
                                    class="btn btn-warning">
                                Alterar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </body>
</html>
