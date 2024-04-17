<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>@yield('title')</title>
    @yield('style')
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
        }

        .burger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .burger div {
            width: 25px;
            height: 3px;
            background-color: #fff;
            margin: 3px;
        }

        @media screen and (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                align-items: center;
                width: 100%;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #333;
                padding: 10px 0;
            }

            .nav-links li {
                margin: 10px 0;
            }

            .burger {
                display: flex;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="logo"></div>
            <ul class="nav-links">
                <li><a href="{{route('index')}}">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="{{route('add')}}">Add Contact</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>

    <script>
        const burger = document.querySelector('.burger');
        const navLinks = document.querySelector('.nav-links');

        burger.addEventListener('click', () => {
            navLinks.classList.toggle('nav-active');
        });
    </script>

</body>

</html>