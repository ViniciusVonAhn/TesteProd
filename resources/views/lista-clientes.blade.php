<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prodigious</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        @if(session('message') == 'Cliente criado com sucesso!')
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p>{{session('message')}}</p>
            </div>
        @elseif(session('message') == 'Cliente alterado com sucesso!')
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p>{{session('message')}}</p>
            </div>
        @elseif(session('message') == 'Cliente excluido com sucesso!')
        <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p>{{session('message')}}</p>
            </div>
        @endif
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
                            <li class="active"><a href="{{route('cliente.index')}}">Clientes</a></li>
                        </ul>
                        <br>
                        <a href="{{route('cliente.create')}}" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                        <div id="pesquisar" class="pull-right">
                            <form class="form-group" method="get" 
                                  action="/pesquisar">                                   
                                <input type="search" name="pesquisar" 
                                       class="form-control input-sm pull-left" 
                                       placeholder="Pesquisar por nome..." required> 
                                <button class="btn btn-default btn-sm pull-right" 
                                        id="color"> 
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </div>
                    </div>           
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">Código</th>
                                        <th id="center">Nome</th>
                                        <th id="center">Email</th>
                                        <th id="center">Descrição</th>             
                                        <th id="center">Foto</th>                
                                        <th id="center">Ações</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                    <tr>
                                        <td id="center">{{$cliente->id}}</td>
                                        <td id="center">{{$cliente->nome}}</td>
                                        <td id="center">{{$cliente->email}}</td>
                                        <td id="center">{{$cliente->descricao}}</td>
                                        <td id="center">
                                            <img src="{{ url('storage/'.$cliente->imagem) }}" alt="{{ $cliente->imagem }}">
                                        </td>
                                        <td id="center">
                                            <a href="{{route('cliente.edit', $cliente->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('cliente.destroy', $cliente->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" style="background-color: #fff">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </body>
            </html>
