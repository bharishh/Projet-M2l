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
                @foreach ($collaborateurs as $collaborateur)

                    <div class="collaborator-item">
                        <div class="collaborator-image">
                            <img src="{{ asset('storage/' . $collaborateur->image) }}" alt="">

                        </div>
                        <div class="collaborator-details">
                            <p>
                               <p><strong>{{ $collaborateur->prenom }} {{ $collaborateur->nom }}</strong> - ({{ $collaborateur->age }} ans)</p>
                            {{ $collaborateur->ville }}, {{ $collaborateur->pays }}
                            <form action="{{ route('collab.destroy', $collaborateur) }}" method="post" onsubmit="return confirm('Confirmer la suppression ?');">
                                @csrf
                                @method('DELETE')
                                <button>Supprimer</button>
                            </form>
                            <button>
                                <a href="{{route('collab.edit', $collaborateur)}}">Update</a>
                            </button>

                            <h3>{{ $collaborateur->categorie }}</h3>
                            📲 : <a href="tel:{{ $collaborateur->telephone }}">{{ $collaborateur->telephone }}</a><br>
                            📧 : <a href="mailto:{{ $collaborateur->email }}">{{ $collaborateur->email }}</a><br>
                            🎂 : {{ $collaborateur->date_naissance }}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>




    </div>
</main>
</body>
</html>

