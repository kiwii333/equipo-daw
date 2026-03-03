<nav>
    <a href="{{route('/')}}">Inicio</a>
    <a href="{{route('players.index')}}">Jugadores</a>
    <a href="{{route('events.index')}}">Eventos</a>
    <a href="{{route('account')}}">Cuenta</a>
    <a href="{{route('location')}}">Dónde estamos</a>
    <a href="{{route('signup')}}">Crear cuenta</a>
    <a href="{{route('login')}}">Iniciar sesión</a>
    @if (Auth::check() && user()->rol = 'admin')
        <a href="{{route('players.create')}}">Añadir Jugadores</a>
        <a href="{{route('events.create')}}">Añadir Eventos</a>
        <a href="{{route('messages.index')}}">Mensajes</a>
    @endif
    <a href="{{route('googlepage')}}">Loguéate con SSO Google</a>
</nav>
