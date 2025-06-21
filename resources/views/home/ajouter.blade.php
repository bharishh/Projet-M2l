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

    <h1>Ajouter un Collaborateur</h1>

    <form action="{{route('collab.store')}}" method="post">

        <div class="collaborator-list-wrapper">
            @csrf
            <label>Poste</label>
            <input type="text" name="categorie">

        <label for="civilite">Civilité</label>
        <select name="civility" id="civilite">
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>

            <label>Nom</label>
            <input type="text" name="nom">

            <label>Prenom</label>
            <input type="text" name="Prenom">

            <label>Mail</label>
            <input type="mail" name="mail">

            <label>Pays</label>
            <input type="text" name="pays">

            <label>Ville</label>
            <input type="text" name="ville">

            <label>téléphone</label>
            <input type="text" name="telephone">

            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance">

            <label>Mot de passe</label>
            <input type="password" name="mot_de_passe">

            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" accept="image/*">

             <button type="submit" class="btn">Valider</button>
        </div>
    </form>

</div>
</div>

</main>
</body>
</html>
