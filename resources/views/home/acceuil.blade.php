<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/home.css') }}">
    <title>M2l</title>
</head>
<body>
<header>
    <figure>
        <a><img src="/asset/Maison_des_ligues_transparent-%201.png" alt="logo" ></a>
        <figcaption hidden>logo M2l</figcaption>
    </figure>
    <h1>Maison des Ligues</h1>

    <nav>
        <ul>
            <li><a href="#">Lister</a></li>
            <li><img src="https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg"></li>
            <li><a href="{{route('auth.logout')}}">Deconnexion</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="slogan">
        <h1>Bienvenue sur M2L,<br> <span>la plateforme qui vous permet de retrouver tous vos collaborateurs.</span></h1>
    </section>

    <section class="libelle">
        <h2>Avez-vous dit bonjour à : </h2>

        <div class="container">

            <div>
                <img src="https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg" alt="">
            </div>

            <div>
                <ul>
                    <li>Clara Laure(22 ans) </li>
                    <li>Paris</li>
                    <li>Clara.Laure@gmail.com</li>
                    <li>06-89-13-98</li>
                    <li>15-02-1990</li>
                </ul>
            </div>
            <h3>Technique</h3>
        </div>
        <button>Dire bonjour à quelqu'un d'autres </button>
    </section>

</main>

</body>
</html>
