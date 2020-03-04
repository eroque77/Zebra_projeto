@extends ('layouts.estrutura')

<!-- Conteúdo dinâmico para cadastro de programadores -->

@section ('content')
    <div class='row'>
        <div class="col-md-8 col-md-offset-2" align="center"> <!--ofset: desloca pra direita -->
            <div class="panel panel-default"> 
                <div class="panel-heading" align='center'><b>Cadastro de Programadores</b></div> <!--Sobreamento -->
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('inc_programadores') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-4 col-md-offset-1 control-label">*Nome</label>
                                <div class="col-md-6" align="left">
                                    <input id="nome" type="text" class="form-control" name="nome" required autofocus style='width:300px' maxlength="80" autocomplete="nope" value="{{@$alt[0]['nome']}}">
                                </div>  
                                <label class="col-md-4 col-md-offset-1 control-label">*Idade</label>
                                <div class="col-md-6" align="left">
                                    <input id="idade" type="text" class="form-control" name="idade" required autofocus style='width:50px' maxlength="3" autocomplete="nope" value="{{@$alt[0]['idade']}}">
                                </div>
                                <label class="col-md-4 col-md-offset-1 control-label">*Cidade</label>
                                <div class="col-md-6" align="left">
                                    <input id="cidade" type="text" class="form-control" name="cidade" required autofocus style='width:250px' maxlength="70" autocomplete="nope" value="{{@$alt[0]['cidade']}}">
                                </div>
                                <label class="col-md-4 col-md-offset-1 control-label">*E-mail</label>
                                <div class="col-md-6" align="left">
                                    <input id="email" type="text" class="form-control" name="email" required autofocus style='width:300px' maxlength="90" autocomplete="nope" value="{{@$alt[0]['email']}}">
                                </div>
                                <label class="col-md-4 col-md-offset-1 control-label">Cargo</label>
                                <div class="col-md-6" align="left">
                                    <select class="form-control" id="cargo" name="cargo" autofocus style='width:200px'>
                                        @foreach($lista_de_cargos as $car)
                                            <option {{@$alt[0]['cargo'] == $car->id ? 'selected' : '' }}  value="{{$car->id}}">{{$car->cargo}}</option>
                                        @endforeach
                                    </select>
                                </div>    
                                <label class="col-md-4 col-md-offset-1 control-label">*Anos (Experiência)</label>
                                <div class="col-md-6" align="left">
                                    <input id="anos" type="text" class="form-control" name="anos" required autofocus style='width:50px' maxlength="3" autocomplete="nope" value="{{@$alt[0]['anos']}}">
                                </div>                              
                               
                                <div class="form-group">
                                    <div class="col-md-12" style="padding-left:75%;padding-top:3%">
                                        <button type="button" class="btn btn-warning" onclick="retornar()">
                                            Retornar
                                        </button>  
                                        
                                        <button type="submit" class="btn btn-success">
                                            @if(!@$alt)                                               
                                                Cadastrar                                                
                                            @else
                                                Alterar
                                                <input type='hidden' value='alt' name='tipo' id='tipo'>
                                            @endif
                                        </button>
                                    </div>
                                </div>  

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push ('scripts')
    <script>
        function retornar(){
            if($('#tipo').val()=='alt'){
                window.location='{{ route('listagem_de_programadores_view') }}';
                return false;
            }else{
                window.location='{{ route('start') }}';
            }
        }
    </script>
@endpush