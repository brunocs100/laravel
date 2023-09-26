<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Título Aqui</title>
</head>
<body>
    <header>
        <!-- Coloque aqui o código para o cabeçalho -->
        <h1>Meu Site</h1>
        <nav>
            <ul>
                <li><a href="/">Página Inicial</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="/contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Esta seção será preenchida pelas visões filhas -->
        @yield('content')
    </main>

    <footer>
        <!-- Coloque aqui o código para o rodapé -->
        <p>&copy; {{ date('Y') }} Seu Site</p>
    </footer>
</body>
</html>