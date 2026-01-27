<x-layout>
    <h1 class="display-1">Titulo bonito</h1>
    @auth
        <p>Bem vindo {{auth()->user()->getAuthPassword()}}!</p>
    @else
        <p>Não estou logado</p>
    @endauth
</x-layout>
