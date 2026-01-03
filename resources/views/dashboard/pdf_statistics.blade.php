<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Statistiques du refuge - Pattes Heureuses</title>
</head>
<style>
    body {
        font-family: DejaVu Sans, sans-serif;
        color: rgba(51, 51, 51, 0.8);
        margin: 0;
        padding: 10px;
    }

    h1 {
        text-align: center;
        color: #843C06;
        margin-bottom: 10px;
    }

    .intro {
        text-align: left;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .stats-grid {
        display: flex;
        gap: 10px;
    }

    .card {
        border: 2px solid #843C06;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 3px rgba(0,0,0,0.25);
        background-color: #fff;
        margin-bottom: 10px;
        padding: 5px;
    }

    .card h2 {
        font-size: 1.5em;
        margin: 0;
        color: #843C06;
    }

    .card p {
        margin: 10px 0 0;
    }

    .summary {
        margin-top: 20px;
        font-size: 1em;
        line-height: 1.5;
        color: #444;
    }

    footer {
        text-align: left;
        margin-top: 20px;
        font-size: 0.9em;
        color: #666;
    }
</style>
<body>
<h1>Statistiques du refuge</h1>

<div class="intro">
    Voici le rapport mensuel de notre refuge. Ce document resume l'activite recente, incluant l'accueil des nouveaux animaux, les adoptions effectuees, ainsi que les animaux actuellement en soin ou en attente d'adoption. Nous esperons que ces chiffres vous donnent une idee claire de notre engagement et de nos besoins.
</div>

<div class="stats-grid">
    <article class="card">
        <h2>{{ $welcome }}</h2>
        <p>Animaux accueillis</p>
    </article>
    <article class="card">
        <h2>{{ $adopted }}</h2>
        <p>Animaux adoptés</p>
    </article>
    <article class="card">
        <h2>{{ $in }}</h2>
        <p>Animaux en refuge</p>
    </article>
    <article class="card">
        <h2>{{ $care }}</h2>
        <p>Animaux en soin</p>
    </article>
    <article class="card">
        <h2>{{ $pending }}</h2>
        <p>Adoptions en attente</p>
    </article>
    <article class="card">
        <h2>{{ $draft }}</h2>
        <p>Validations en attente</p>
    </article>
</div>

<div class="summary">
    Comme vous pouvez le constater, notre refuge continue de croître et de s'adapter aux besoins des animaux. Chaque chiffre represente non seulement un animal pris en charge, mais aussi des familles et benevoles impliques. Merci pour votre soutien continu et votre interet pour le bien-etre animal.
</div>

<footer>
    Généré par <strong>Elise</strong> le {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }} - Refuge animalier
</footer>
</body>
</html>
