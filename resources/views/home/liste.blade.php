<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/liste.css') }}">
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
            <li><a href="{{route('home.acceuil')}}">Acceuil</a></li>
            <li><img src="https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg"></li>
            <li><a href="{{route('auth.logout')}}">Deconnexion</a></li>
        </ul>
    </nav>
</header>
<main>
    <h2>Liste collaborateurs</h2>

    @if ($collab->isEmpty())
        <p>Aucun employé trouvé.</p>
    @else
        @foreach ($collab as $collab)
        <div class="container">
            <div>
                <img src="{{$collab->image}}" alt="">
            </div>
        <ul>
                <li>
                    <strong>{{ $collab->prenom }} {{ $collab->nom }}</strong> - {{ $collab->categorie }} ({{ $collab->email }})
                </li>
        </ul>
        </div>
        @endforeach
    @endif
</main>
</body>
</html>
