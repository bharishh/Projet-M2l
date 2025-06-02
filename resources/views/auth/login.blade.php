
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
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
            <li><a href="#">CONNEXION</a></li>
        </ul>
    </nav>
</header>

<main>

    <section class="image">


    </section>


    <section class="form">
        <h2>Connexion</h2>

        <form action="{{route('auth.doLogin')}}" method="post">
            <label for="email">Email</label>
            @csrf
            <input type="email" id="email" name="email" required placeholder="email">

            <label for="password">Password</label>
            @csrf
            <input type="password" id="password" name="password" required placeholder="password">

            <button type="submit">Login</button>
            @error('email')
            <div class="alert-error"> {{$message}}</div>
            @enderror
        </form>
    </section>
</main>
</body>
</html>
