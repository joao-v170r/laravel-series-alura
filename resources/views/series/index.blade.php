<x-layout titleWindows="list séries">
    <section class="container d-flex justify-content-md-center flex-column">
        @isset($mensagemSession)
        <div class="alert alert-success alert-dismissible" role="alert">
            <div>{{ $mensagemSession }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endisset
        <div class="">        
            <ul class="list-group">          
                @foreach ($series as $serie)
                <li class="list-group-item d-flex justify-content-between align-items-start  bg-dark bg-opacity-50">                
                    <div class="">
                        <label class="form-check-label text-white stretched-link" id="label-{{ $serie['id'] }}" for="series{{ $serie['id'] }}">{{ $serie['name'] }}</label>                    
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class=" input-group col-auto">
                            <div class="m-1">
                                <form id="editar{{ $serie['id'] }}" action="{{ route('series.edit', $serie['id']) }}" method="get">                            
                                    <button type="submit" class="btn btn-dark color-base  btn-sm btn-opacity-50">Editar</button>  
                                </form>
                            </div>
                            <div class="m-1">
                                <form id="form{{ $serie['id'] }}"action="{{ route('series.destroy', $serie['id'] ) }}" method="post">
                                    @csrf
                                    @method('DELETE')  
                                    <button type="button" id="{{ $serie['id'] }}" class="btn btn-danger btn-sm delete-series" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >X</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach 
            </ul>
            <a href="{{ route('series.create') }}" class="btn btn-secondary  mt-1 float-end " type="button">Nova Série</a>
        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Remover Serie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja remover <small id="modalNameSerie" class="bg-danger text-white" ></small> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                        <button type="button" class="btn btn-danger" id="confirmaModal" >Continuar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/seriesIndex.js') }}"></script>
</x-layout>
