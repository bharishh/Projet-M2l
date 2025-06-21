<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/ajouter.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Profil</title>

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
    <div class="container">
    <div class="middle-column">

        <h1>Modifier un Collaborateur</h1>

        <form action="{{ route('collab.update', $collaborateur->id) }}" method="post" enctype="multipart/form-data">
            <div class="collaborator-list-wrapper">
            @csrf
            @method('PUT')

            <label>Poste</label>
            <input type="text" name="categorie" value="{{ old('categorie', $collaborateur->categorie) }}">

            <label for="civilite">Civilité</label>
            <select name="civility" id="civilite">
                <option value="homme" {{ old('civility', $collaborateur->civility) == 'homme' ? 'selected' : '' }}>Monsieur</option>
                <option value="femme" {{ old('civility', $collaborateur->civility) == 'femme' ? 'selected' : '' }}>Madame</option>
            </select>

            <label>Nom</label>
            <input type="text" name="nom" value="{{ old('nom', $collaborateur->nom) }}">

            <label>Prénom</label>
            <input type="text" name="prenom" value="{{ old('prenom', $collaborateur->prenom) }}">

            <label>Mail</label>
            <input type="email" name="email" value="{{ old('email', $collaborateur->email) }}">

            <label>Pays</label>
            <input type="text" name="pays" value="{{ old('pays', $collaborateur->pays) }}">

            <label>Ville</label>
            <input type="text" name="ville" value="{{ old('ville', $collaborateur->ville) }}">

            <label>Téléphone</label>
            <input type="text" name="telephone" value="{{ old('telephone', $collaborateur->telephone) }}">

            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" value="{{ old('date_naissance', $collaborateur->date_naissance) }}">

            <label>Mot de passe (laisser vide si inchangé)</label>
            <input type="password" name="password">

            <label for="image">Photo</label>
            <input type="file" name="image" id="image" accept="image/*">

            <button type="submit" class="btn">Valider</button>
        </form>
    </div>
    </div>
</div>
</main>
</body>
</html>
