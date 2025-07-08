{{ include('layouts/header.php', {
    title: 'Connection',
    nav1: 'Galerie',
    nav2: 'Creer votre compte',
    nav3: 'Conectez-vouz',
    nav4: 'A propos',
    nav5: 'Contact',
    lien1: '/livres',
    lien2: '/user/create',
    lien3: '/auth/index',

}) }}

<header>
    <h1 class="quicksand">Librairie <strong class="pompiere">Voyages imaginaires</strong></h1>
</header>

<main class="main__form">

    <!-- action="{{base}}/user/connection" -->
    <form action="{{base}}/auth/index" method="post" class="form">
        <header>
            <h2 class="quicksand">Connectez vous</h2>
            <hr>
        </header>
        <div class="form__contenu">
            <lablel class="form__label">Courriel :</lablel>
            <input class="form__input" type="text" name="courriel" id="courriel" value="{{user.courriel}}" placeholder="courriel@courriel.com">
            {% if errors.courriel is defined %}
            <span class="error">{{errors.courriel}}</span>
            {% endif %}
        </div>
        <div class="form__contenu">
            <lablel class="form__label">Mot de passe:</lablel>
            <input class="form__input" type="password" name="motPasse" id="motPasse" value="{{user.motPasse}}" placeholder="Votre mot de passe">
            {% if errors.motPasse is defined %}
            <span class="error">{{errors.motPasse}}</span>
            {% endif %}
        </div>
        {% if errors is defined %}
        <span class="error">{{errors.message}}</span>
        {% endif %}
        <button type="submit" class="btn">Connecter</button>
    </form>
</main>

{{ include('layouts/footer.php') }}