<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>

    <header>
        <img src="../img/logo.png" alt="" />

        <i class="bx bx-menu" id="menu-icon"></i>
        <nav>
            <ul>
                @if ($title == "Al-Quran | Bersama Almaas")
                    <li><a href="/#hero">Home</a></li>
                    <li><a href="/#about">About</a></li>
                    <li><a href="/#program">Program</a></li>
                    <li><a href="/AlQuran" style="color: #ffc107">AlQuran</a></li>
                @else
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#program">Program</a></li>
                    <li><a href="/AlQuran">AlQuran</a></li>
                @endif
                <button class="btn" onclick="active()">Login</button>
            </ul>
        </nav>
    </header>


        @yield('container')


        <footer>
        <span>© Copyright AlmaasDakwah 2024</span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>