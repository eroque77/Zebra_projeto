@extends ('layouts.estrutura')

<!-- Conteúdo dinâmico para cadastro de cargos -->

@section ('content')
    <div class='row'>
        <div class="col-md-8 col-md-offset-2" align="center"> <!--ofset: desloca pra direita -->
            <div class="panel panel-default"> 
                <div class="panel-heading" align='center'><b>Cadastro de Cargos</b></div> <!--Sobreamento -->
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('inc_cargos') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-4 col-md-offset-1 control-label">*Nome do Cargo</label>
                                <div class="col-md-6" align="left">
                                    <input id="cargo" type="text" class="form-control" name="cargo" required autofocus style='width:250px' maxlength="29" autocomplete="nope">
                                </div>  
                               
                                <div class="form-group">
                                    <div class="col-md-12" style="padding-left:75%;padding-top:3%">
                                        <button type="button" class="btn btn-warning" onclick="retornar()">
                                            Retornar
                                        </button>  
                                        <button type="submit" class="btn btn-success">
                                            Cadastrar
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
            window.location='{{ route('start') }}';
        }
    </script>
@endpush