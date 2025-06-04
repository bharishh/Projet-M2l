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

    <div class="main-layout-container">

        <div class="middle-column">
            <h1>Liste collaborateurs</h1>

            <div class="search-bar">
                <input type="text" placeholder="Recherche par nom...">
            </div>


            <div class="collaborator-list-wrapper">
                @foreach ($collab as $collab)

                    <div class="collaborator-item">
                        <div class="collaborator-image">
                            <img src="{{ $collab->image }}" alt="">

                        </div>
                        <div class="collaborator-details">
                            <p>
                                <strong>{{ $collab->prenom }} {{ $collab->nom }}</strong> - ({{$collab->age}} ans)</p>
                                        {{$collab->ville}}, {{$collab->pays}}

                                        <h3>{{ $collab->categorie }}</h3>
                            📲 : <a href="tel:{{$collab->telephone}}"> {{$collab->telephone}}</a><br>
                            📧 : <a href="mailto:{{ $collab->email }}"> {{ $collab->email }}</a><br>
                            <p>🎂 : {{$collab ->date_naissance}}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>




    </div>
</main>
</body>
</html>

