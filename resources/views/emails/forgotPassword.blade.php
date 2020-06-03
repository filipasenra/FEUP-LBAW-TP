

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])    
 
        <a class="navbar-brand px-2 mr-5" href="{{ url('home') }}">
            <img src="{{ asset('../images/logo.png') }}" width="35" height="42" class="d-inline-block align-center" alt="">
            Papagaio
        </a>
   
        @endcomponent
    @endslot

    {{-- Body --}}

    <header class="welcome ">
            <h1 class="text-center">Alterar palavra-passe!</h1>
            <img src="{{ asset('../images/logo.png') }}"  >
            <h2 class="text-center "><br>Olá! Já não te lembras da tua palavra-passe?
            <br> Não desesperes! Carrega no botão mágico para a repores!
            Obrigado por pertenceres a esta comunidade!!</h2>
    </header>

    @slot('subcopy')
        @component('mail::button', ['url' => route('home')])
        Alterar
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
        <footer >
             <p class="footer" >© 2020 Papagaio, Inc.</p>
        </footer>
        @endcomponent
    @endslot
@endcomponent

