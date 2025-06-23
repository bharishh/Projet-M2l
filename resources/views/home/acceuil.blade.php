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
            <li><a href="{{route('collab.index')}}">Lister</a></li>

            @auth
                @if(Auth::user()->is_admin)
                    <li><a href="{{ route('collab.create') }}">Ajouter</a></li>
                @endif
            @endauth
            @if (Auth::check() && !Auth::user()->is_admin)
            <li><a href="{{ route('collab.edit', Auth::user()->id) }}">Modifier mon Profil</a></li>
            @endif

            <li>   @if (Auth::check() && Auth::user()->image)
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="Photo de profil de l'admin" >
                @else
                    <img src="{{ asset('images/default_avatar.png') }}" alt="Avatar par défaut" >
                @endif</li>


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

            <div class="collaborator-card">
                @if ($collaborateurs)
                    <div class="collaborator-category">
                        {{ $collaborateurs->categorie }}
                    </div>
                <div class="collaborator-image">
                    <img src="{{ asset('storage/' . $collaborateurs->image) }}" alt="Image collaborateur">
                </div>
                <div class="collaborator-details">
                    <p class="collaborator-name">
                        <strong>{{ $collaborateurs->prenom }} {{ $collaborateurs->nom }}</strong> - ({{ $collaborateurs->age }} ans)
                    </p>
                    <p class="collaborator-location">
                        {{ $collaborateurs->ville }}, {{ $collaborateurs->pays }}
                    </p>
                    <p>📲 : <a href="tel:{{ $collaborateurs->telephone }}">{{ $collaborateurs->telephone }}</a></p>
                    <p>📧 : <a href="mailto:{{ $collaborateurs->email }}">{{ $collaborateurs->email }}</a></p>
                    <p>🎂 : {{ $collaborateurs->date_naissance }}</p>
                </div>
            </div>
            @else
                <p>Aucun collaborateur à afficher.</p>
            @endif


        <button><a href="{{ route('home.acceuil') }}">Dire bonjour à un autre collaborateur</a></button>
    </section>

</main>

</body>
</html>
