<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .active{
            text-decoration: none;
            color : green;
        }
        .error{
            color:red;
            font-size: 12px;
        }
    </style>
    <title>Meu site</title>
</head>
<body>
    <header>
        <?php function activeMenu($url){
            return request()->is($url) ? 'active' : '';        
            }
        ?>
        <h1>{{ request()->is('/') ? 'Você está na Home' : 'Você não está na na Home' }}</h1>
		<nav>
            <a  class="{{ activeMenu('/') }}" href="{{ route('home') }}">Início</a>
            <a class="{{ activeMenu('salutos/*')}}" href="{{ route('salutos', 'Chris') }}">Saluto</a>
            <a class="{{ activeMenu('contactame')}}" href="{{ route('contactos') }}">Contacto</a>
		</nav>
    </header>

    @yield('contenido')

    <footer>Copyright {{ date('Y')}}</footer>
</body>
</html>