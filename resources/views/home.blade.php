@extends('layouts.estrutura')

@section('content')
<div class="row">
    <div class="panel panel-default">
        <div class="col-md-2" align='center'>

        </div>
        <div class="col-md-2 panel-default" align='center'>
            <ul class="nav navbar-nav navbar-center">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Cadastros
                    </a>
                    <ul class="dropdown-menu" role="menu"  style='width:250px'>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                            <div style='margin-left:18px'><a href="{{route('cargos')}}">Cadastro de Cargos</a></div>
                        </a>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                            <div style='margin-left:18px'><a href="{{route('programadores')}}">Cadastro de Programadores</a></div>
                        </a>
                    </ul>               
                <li>
            </ul>

            <ul class="nav navbar-nav navbar-center">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Consultas
                    </a>
                    <ul class="dropdown-menu" role="menu"  style='width:250px'>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                            <div style='margin-left:18px'><a href="{{route('listagem_de_programadores_view')}}">Listagem de Programadores</a></div>
                        </a>
                    </ul>               
                <li>
            </ul>
        </div>
    </div>

</div>
@endsection

@if (session('message'))
    <div class="alert alert-success alert-dismissible" id='msg' style='width:320px;height:50px;position:fixed;top:45%;left:40%;background-color:green;color:white;z-index:100' align='center'>
       {{ session('message') }}
    </div>
@endif

@push ('scripts')
    <script>
        setTimeout(function() {     
            $('#msg').fadeOut(1500);        
        },1500);
    </script>
@endpush