<x-layout title="list séries">
    @isset($mensagemSucesso)
    <div class="alert alert-success alert-dismissible" role="alert">
        <div>{{ $mensagemSucesso }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endisset
    <div class="">        
        <ul class="list-group">          
            @foreach ($series as $serie)
            <li class="list-group-item bg-dark bg-opacity-50 d-flex justify-content-between aling-itens-center" style="min-width: 50rem;">                
                <label class="form-check-label text-white stretched-link" id="label-{{ $serie['id'] }}" for="series{{ $serie['id'] }}">{{ $serie['name'] }}</label>
                <form id="form{{ $serie['id'] }}"action="{{ route('series.destroy', $serie['id'] ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="input-group">
                        <button type="button" id="{{ $serie['id'] }}" class="btn btn-danger btn-sm delete-series" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >X</button>
                    </div>
                </form>
            </li>
            @endforeach 
        </ul>
        <a href="{{ route('series.create') }}" class="btn btn-dark mt-1 float-end bg-opacity-50" type="button">Nova Série</a>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Remover Serie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Deseja remover <small id="modalNameSerie" class="bg-danger text-white" ></small> ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                    <button type="button" class="btn btn-primary" id="confirmaModal" >Continuar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const listSeries = document.querySelectorAll(`.delete-series`);
        const nameSerieModal = document.querySelector(`#modalNameSerie`);
        const enviar = document.querySelector(`#confirmaModal`);
        var formAtual;

        listSeries.forEach((btnSerie) => {
            btnSerie.addEventListener('click', (e) => {
                e.preventDefault();

                let id = btnSerie.id
                let nameSerie = document.querySelector(`#label-${id}`);
               
                formAtual = document.querySelector(`#form${id}`);
                
                nameSerieModal.textContent = nameSerie.textContent;
                
            });
        });
        
        enviar.addEventListener('click', () => {            
            if(formAtual != null){
                formAtual.submit();
            }
        });
    </script>
</x-layout>
