<x-layout title="Series"> 
    <a href="/series/criar">Adicionar</a>
    <ul> 
        @foreach($mySeries as $serie)
        <li>{{ $serie }}</li>
        @endforeach
</ul>
</x-layout>