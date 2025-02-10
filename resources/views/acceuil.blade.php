<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyTech-Labs - Développement Web & Mobile | Marketing Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            background-image: url('{{ asset('images/devimage.jpg') }}'); /* Ajoutez votre image de fond ici */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header */
        header {
            background: rgba(51, 51, 51, 0.8); /* Ajoutez un fond semi-transparent pour améliorer la lisibilité */
            color: #fff;
            padding: 20px 0;
        }

        header .logo {
            height: 80px; /* Augmentez la taille du logo */
            border-radius: 15px; /* Arrondissez les bords du logo */
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        /* Hero Section */
        .hero {
            background: rgba(0, 0, 0, 0.5); /* Ajoutez un fond semi-transparent pour améliorer la lisibilité */
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .hero .btn {
            background: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            text-align: center;
            background: rgba(255, 255, 255, 0.8); /* Ajoutez un fond semi-transparent pour améliorer la lisibilité */
        }

        .services h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        .service-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .service-item {
            width: 30%;
            margin-bottom: 20px;
        }

        .service-item img {
            height: 120px; /* Augmentez la taille des images */
            margin-bottom: 20px;
            border-radius: 15px; /* Arrondissez les bords des images */
        }

        .service-item h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .service-item p {
            font-size: 1rem;
            color: #666;
        }

        /* About Section */
        .about {
            background: rgba(244, 244, 244, 0.8); /* Ajoutez un fond semi-transparent pour améliorer la lisibilité */
            padding: 80px 0;
            text-align: center;
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about p {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Contact Section */
        .contact {
            padding: 80px 0;
            text-align: center;
            background: rgba(255, 255, 255, 0.8); /* Ajoutez un fond semi-transparent pour améliorer la lisibilité */
        }

        .contact h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .contact p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 40px;
        }

        .contact form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .contact form input, .contact form textarea {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact form button {
            background: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        /* Footer */
        footer {
            background: rgba(51, 51, 51, 0.8); /* Ajoutez un fond semi-transparent pour améliorer la lisibilité */
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer ul {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            justify-content: center;
        }

        footer ul li {
            margin: 0 10px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <img src="{{ asset('images\monlogo.jpg') }}" alt="CyTech-Labs" class="logo">
            <nav>
                <ul>
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#apropos">À Propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="accueil" class="hero">
        <div class="container">
            <h1>Bienvenue chez CyTech-Labs</h1>
            <p>Votre partenaire en développement d'applications web et mobiles, et en stratégies de marketing digital.</p>
            <a href="#services" class="btn">Découvrez nos services</a>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2>Nos Services</h2>
            <div class="service-grid">
                <div class="service-item">
                    <img src="{{ asset('images/ticmanagement.jpeg') }}" alt="Développement Web">
                    <h3>Développement Web</h3>
                    <p>Création de sites web sur mesure, optimisés pour les performances et le référencement.</p>
                </div>
                <div class="service-item">
                    <img src="{{ asset('images/ticmanagement.jpeg') }}" alt="Développement Mobile">
                    <h3>Développement Mobile</h3>
                    <p>Conception d'applications mobiles intuitives et performantes pour iOS et Android.</p>
                </div>
                <div class="service-item">
                    <img src="{{ asset('images/ticmanagement.jpeg') }}" alt="Marketing Digital">
                    <h3>Marketing Digital</h3>
                    <p>Stratégies de marketing digital pour booster votre présence en ligne et générer des leads.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="apropos" class="about">
        <div class="container">
            <h2>À Propos de Nous</h2>
            <p>CyTech-Labs est une entreprise innovante spécialisée dans le développement d'applications web et mobiles, ainsi que dans le marketing digital. Notre équipe d'experts est dédiée à fournir des solutions sur mesure pour répondre aux besoins uniques de nos clients.</p>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contactez-nous</h2>
            <p>Prêt à transformer vos idées en réalité ? Contactez-nous dès aujourd'hui pour discuter de votre projet.</p>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Votre nom" required>
                <input type="email" name="email" placeholder="Votre email" required>
                <textarea name="message" placeholder="Votre message" required></textarea>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </div>
    </section>
    @foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        @if($post->image)
            <img src="{{ asset('images/ticmanagement.jpeg' . $post->image) }}" alt="Post Image">
        @endif
        @can('update', $post)
            <a href="{{ route('posts.edit', $post) }}">Modifier</a>
        @endcan
        @can('delete', $post)
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        @endcan
    </div>
    @endforeach


    <footer>
        <div class="container">
            <p>&copy; 2025 CyTech-Labs. Tous droits réservés.</p>
            <ul>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">Conditions d'utilisation</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>