<x-layout titleWindows="adicione séries">
        <x-form.validade :errors="$errors"/>
        <section class="container">
            <form class="row" action="{{ route('series.store') }}" method="POST">
                @csrf
                @method('POST')    
                <div class="col-12">
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-white bg-opacity-50" id="">Nome da Série</span>
                        <input type="text" id="nomeSerie" class="form-control" name="name" value="{{ old('name') }}">
                    </div>    
                </div>   
                <div class="col-6">
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-white bg-opacity-50" id="">N° de Temporadas</span>
                        <input type="number" id="numbTemporadas" class="form-control" name="numbTemporadas" value="{{ old('numbTemporadas') }}">
                    </div>  
                </div>         
                <div class="col-6">
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-white bg-opacity-50" id="">N° de Episódios</span>
                        <input type="number" id="numbEpisodios" class="form-control" name="numbEpisodios" value="{{ old('numbEpisodios') }}">
                    </div>  
                </div>      
                <div class="col-3  float-end">
                    <button type="submit" class="m-1 col-12 btn btn-dark mt-1 bg-opacity-50 ">Salvar</button>                
                </div>
            </form>                    
        </section>
</x-layout>
