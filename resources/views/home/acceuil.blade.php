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
            <li><a href="{{route('collab.create')}}">Ajouter</a></li>
            <li>   @if (Auth::check() && Auth::user()->image)
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="Photo de profil de l'admin" >
                @else
                    {{-- Optionnel : Image par défaut si aucun admin connecté ou pas d'image --}}
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

        <div class="container">

            <div>
                @if (isset($collaborateurs) && $collaborateurs && $collaborateurs->image)
                    <img src="{{ asset('storage/' . $collaborateurs->image) }}" alt="Image de bienvenue de l'admin">
                @else
                    {{-- Optionnel : Image par défaut si pas d'admin ou pas d'image --}}
                    <img src="{{ asset('images/default_welcome.png') }}" alt="Image de bienvenue par défaut">
                @endif
            </div>

            <div>
                <ul>


                </ul>
            </div>
            <h3>Technique</h3>
        </div>
        <button class="button" type="submit">dire bonjour a un autre Collaborateur</button>
    </section>

</main>

</body>
</html>
