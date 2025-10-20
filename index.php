<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Cadorin e Eliane Dias | Buffet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset e Variáveis */
        :root {
            --laranja: #E67E22;
            --laranja-escuro: #D35400;
            --preto: #2C3E50;
            --bege: #FDF6E3;
            --marrom: #8B4513;
            --branco: #FFFFFF;
            --cinza-claro: #F5F5F5;
            --sombra: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transicao: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bege);
            color: var(--preto);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.8rem;
            color: var(--laranja);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            font-weight: 700;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, var(--laranja), var(--marrom));
            border-radius: 2px;
        }

        .section-title p {
            color: var(--preto);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-escuro));
            color: var(--branco);
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transicao);
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(230, 126, 34, 0.3);
            font-size: 1rem;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.7s;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(230, 126, 34, 0.4);
        }

        .btn:hover::before {
            left: 100%;
        }

        /* Header */
        header {
            background-color: var(--preto);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: var(--transicao);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            font-size: 1.8rem;
            color: var(--laranja);
            font-weight: 700;
            letter-spacing: 1px;
        }

        .logo span {
            color: var(--branco);
            font-weight: 300;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--branco);
            font-weight: 500;
            transition: var(--transicao);
            position: relative;
            padding: 5px 0;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--laranja);
            transition: width 0.3s;
        }

        nav ul li a:hover {
            color: var(--laranja);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--branco);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(44, 62, 80, 0.85), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1556909114-4d0d853e5e25?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--branco);
            padding-top: 80px;
        }

        .hero-content h2 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--laranja);
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            animation: fadeInDown 1s ease;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .hero .btn {
            animation: fadeInUp 1s ease 0.6s both;
        }

        /* About Section */
        .about {
            background-color: var(--branco);
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1;
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--sombra);
            transform: perspective(1000px) rotateY(-5deg);
            transition: var(--transicao);
        }

        .about-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transicao);
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        /* Menu Section */
        .menu {
            background-color: var(--cinza-claro);
            position: relative;
            overflow: hidden;
        }

        .menu::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100" opacity="0.03"><path d="M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z" fill="%23000"/></svg>');
        }

        .menu-categories {
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .category-btn {
            background: var(--branco);
            border: 2px solid var(--laranja);
            padding: 12px 25px;
            margin: 0 5px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 50px;
            transition: var(--transicao);
            color: var(--laranja);
            font-weight: 600;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .category-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-escuro));
            transition: var(--transicao);
            z-index: -1;
            border-radius: 50px;
        }

        .category-btn:hover, .category-btn.active {
            color: var(--branco);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(230, 126, 34, 0.3);
        }

        .category-btn:hover::before, .category-btn.active::before {
            width: 100%;
        }

        .menu-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }

        .menu-item {
            background-color: var(--branco);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--sombra);
            transition: var(--transicao);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .menu-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: var(--transicao);
        }

        .menu-item:hover img {
            transform: scale(1.05);
        }

        .menu-item-content {
            padding: 25px;
        }

        .menu-item h3 {
            margin-bottom: 10px;
            color: var(--laranja);
            font-size: 1.4rem;
        }

        .menu-item p {
            color: var(--preto);
            margin-bottom: 15px;
            line-height: 1.6;
        }

        /* Contact Section */
        .contact {
            background-color: var(--branco);
        }

        .contact-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }

        .contact-info, .contact-form {
            background-color: var(--cinza-claro);
            padding: 40px;
            border-radius: 15px;
            box-shadow: var(--sombra);
            transition: var(--transicao);
        }

        .contact-info:hover, .contact-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .contact-info h3, .contact-form h3 {
            margin-bottom: 25px;
            color: var(--laranja);
            font-size: 1.6rem;
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-detail i {
            margin-right: 15px;
            color: var(--laranja);
            width: 20px;
            text-align: center;
            font-size: 1.2rem;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-escuro));
            color: var(--branco);
            border-radius: 50%;
            text-decoration: none;
            transition: var(--transicao);
            font-size: 1.2rem;
        }

        .social-link:hover {
            transform: translateY(-5px) rotate(10deg);
            box-shadow: 0 5px 15px rgba(230, 126, 34, 0.4);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--preto);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 14px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transicao);
            background-color: var(--branco);
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--laranja);
            outline: none;
            box-shadow: 0 0 0 3px rgba(230, 126, 34, 0.2);
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        /* Team Section */
        .team {
            background-color: var(--cinza-claro);
        }

        .team-members {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .team-member {
            text-align: center;
            max-width: 300px;
            transition: var(--transicao);
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .member-photo {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 25px;
            border: 5px solid var(--laranja);
            box-shadow: var(--sombra);
            transition: var(--transicao);
        }

        .team-member:hover .member-photo {
            border-color: var(--marrom);
            transform: scale(1.05);
        }

        .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transicao);
        }

        .team-member:hover .member-photo img {
            transform: scale(1.1);
        }

        .member-info h3 {
            color: var(--laranja);
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        .member-info p {
            color: var(--preto);
            margin-bottom: 15px;
            font-weight: 500;
        }

        .member-contact {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: var(--preto);
            font-weight: 500;
            font-size: 1.1rem;
        }

        .member-contact i {
            color: #25D366;
            font-size: 1.4rem;
        }

        /* Footer */
        footer {
            background-color: var(--preto);
            color: var(--branco);
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            margin-bottom: 25px;
            color: var(--laranja);
            font-size: 1.4rem;
        }

        .footer-column p, .footer-column a {
            color: #ccc;
            margin-bottom: 12px;
            display: block;
            text-decoration: none;
            transition: var(--transicao);
        }

        .footer-column a:hover {
            color: var(--laranja);
            transform: translateX(5px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
            color: #999;
            font-size: 0.9rem;
        }

        /* Animações */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsividade */
        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
            }
            
            .about-image {
                margin-top: 30px;
                transform: none;
            }
            
            .about-image:hover {
                transform: none;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                padding: 15px 0;
            }
            
            nav {
                width: 100%;
                margin-top: 15px;
                display: none;
            }
            
            nav.active {
                display: block;
            }
            
            nav ul {
                flex-direction: column;
                width: 100%;
            }
            
            nav ul li {
                margin: 0;
                text-align: center;
                padding: 10px 0;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
            
            .menu-toggle {
                display: block;
                position: absolute;
                top: 20px;
                right: 20px;
            }
            
            .hero-content h2 {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
            
            .menu-categories {
                flex-wrap: wrap;
            }
            
            .category-btn {
                margin-bottom: 10px;
            }
            
            .team-members {
                flex-direction: column;
                align-items: center;
            }
            
            .contact-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero-content h2 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .menu-items {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header e Navegação -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1>PEDRO CADORIN <span>& ELIANE DIAS</span></h1>
                </div>
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <nav id="mainNav">
                    <ul>
                        <li><a href="#home">Início</a></li>
                        <li><a href="#about">Quem Somos</a></li>
                        <li><a href="#menu">Cardápio</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Seção Hero -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>CHURRASCO GOURMET & BUFFET</h2>
                <p>Transformamos seus eventos em momentos inesquecíveis com churrasco de alta qualidade e serviços de buffet completos.</p>
                <a href="#contact" class="btn">Solicitar Orçamento</a>
            </div>
        </div>
    </section>

    <!-- Seção Quem Somos -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Quem Somos</h2>
                <p>Conheça nossa história e o que nos torna a melhor escolha para seu evento</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>Com anos de experiência no mercado, Pedro Cadorin e Eliane Dias uniram suas expertises para oferecer o melhor em churrasco gourmet e serviços de buffet para eventos.</p>
                    <p>Pedro Cadorin é especialista em churrasco gourmet, trazendo cortes selecionados e técnicas aprimoradas para garantir sabor e qualidade excepcionais. Seu CHURRASCO GOURMET é reconhecido pela excelência e sofisticação.</p>
                    <p>Eliane Dias comanda o BUFFET & EVENTOS, oferecendo um cardápio diversificado e serviços completos para casamentos, festas corporativas, aniversários e celebrações especiais.</p>
                    <p>Juntos, garantimos que seu evento seja memorável do início ao fim, com atenção aos detalhes e paixão pela gastronomia.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1556909114-4d0d853e5e25?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Equipe do Buffet">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Cardápio -->
    <section id="menu" class="menu">
        <div class="container">
            <div class="section-title">
                <h2>Nosso Cardápio</h2>
                <p>Conheça algumas de nossas especialidades</p>
            </div>
            <div class="menu-categories">
                <button class="category-btn active" data-category="all">Todos</button>
                <button class="category-btn" data-category="churrasco">Churrasco</button>
                <button class="category-btn" data-category="entradas">Entradas</button>
                <button class="category-btn" data-category="pratos">Pratos Principais</button>
                <button class="category-btn" data-category="sobremesas">Sobremesas</button>
            </div>
            <div class="menu-items">
                <!-- Item 1 -->
                <div class="menu-item" data-category="churrasco">
                    <img src="https://images.unsplash.com/photo-1558036117-15e82a2c9a9a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Picanha">
                    <div class="menu-item-content">
                        <h3>Picanha Premium</h3>
                        <p>Corte nobre de picanha, preparada com tempero especial e grelhada no ponto perfeito.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="menu-item" data-category="churrasco">
                    <img src="https://images.unsplash.com/photo-1594041680534-e8c8cdebd659?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Costela">
                    <div class="menu-item-content">
                        <h3>Costela Bovinha</h3>
                        <p>Costela bovina assada lentamente, resultando em uma carne macia e saborosa.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="menu-item" data-category="entradas">
                    <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Bruschetta">
                    <div class="menu-item-content">
                        <h3>Bruschetta Italiana</h3>
                        <p>Pão italiano torrado com tomate fresco, manjericão e azeite de oliva extra virgem.</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="menu-item" data-category="pratos">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Risotto">
                    <div class="menu-item-content">
                        <h3>Risotto de Cogumelos</h3>
                        <p>Arroz arbóreo cremoso com cogumelos frescos, queijo parmesão e ervas finas.</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="menu-item" data-category="pratos">
                    <img src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Salmão">
                    <div class="menu-item-content">
                        <h3>Salmão Grelhado</h3>
                        <p>Filé de salmão grelhado com molho de maracujá e acompanhamentos selecionados.</p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="menu-item" data-category="sobremesas">
                    <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cheesecake">
                    <div class="menu-item-content">
                        <h3>Cheesecake de Frutas Vermelhas</h3>
                        <p>Base de biscoito, creme de queijo suave e calda de frutas vermelhas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Contato -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contato</h2>
                <p>Entre em contato conosco para solicitar orçamentos e informações</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Informações de Contato</h3>
                    <div class="contact-details">
                        <div class="contact-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>São Paulo e Região</span>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-clock"></i>
                            <span>Atendimento personalizado de acordo com seu evento</span>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <span>contato@pedroeliane.com.br</span>
                        </div>
                    </div>
                    <h3>Redes Sociais</h3>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Solicite um Orçamento</h3>
                    <form id="budget-form">
                        <div class="form-group">
                            <label for="name">Nome Completo</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="event-type">Tipo de Evento</label>
                            <select id="event-type" name="event-type" required>
                                <option value="">Selecione...</option>
                                <option value="casamento">Casamento</option>
                                <option value="aniversario">Aniversário</option>
                                <option value="corporativo">Evento Corporativo</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="event-date">Data do Evento</label>
                            <input type="date" id="event-date" name="event-date" required>
                        </div>
                        <div class="form-group">
                            <label for="guests">Número de Convidados</label>
                            <input type="number" id="guests" name="guests" min="10" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea id="message" name="message" placeholder="Descreva seu evento e suas necessidades..."></textarea>
                        </div>
                        <button type="submit" class="btn">Enviar Solicitação</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Equipe -->
    <section class="team">
        <div class="container">
            <div class="section-title">
                <h2>Nossa Equipe</h2>
                <p>Conheça os profissionais que vão tornar seu evento especial</p>
            </div>
            <div class="team-members">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="pedro.png">
                    </div>
                    <div class="member-info">
                        <h3>Pedro Cadorin</h3>
                        <p>Especialista em Churrasco Gourmet</p>
                        <div class="member-contact">
                            <i class="fab fa-whatsapp"></i>
                            <span>(11) 94163-5006</span>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-photo">
                        <img src="eliane.png">
                    </div>
                    <div class="member-info">
                        <h3>Eliane Dias</h3>
                        <p>Especialista em Buffet & Eventos</p>
                        <div class="member-contact">
                            <i class="fab fa-whatsapp"></i>
                            <span>(11) 99899-5260</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Pedro Cadorin & Eliane Dias</h3>
                    <p>Transformamos seus eventos em momentos inesquecíveis com excelência gastronômica e serviços personalizados.</p>
                </div>
                <div class="footer-column">
                    <h3>Links Rápidos</h3>
                    <a href="#home">Início</a>
                    <a href="#about">Quem Somos</a>
                    <a href="#menu">Cardápio</a>
                    <a href="#contact">Contato</a>
                </div>
                <div class="footer-column">
                    <h3>Contato</h3>
                    <p>São Paulo e Região</p>
                    <p>contato@pedroeliane.com.br</p>
                    <p>Pedro: (11) 94163-5006</p>
                    <p>Eliane: (11) 99899-5260</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Pedro Cadorin e Eliane Dias. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Menu Mobile Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const mainNav = document.getElementById('mainNav');
            
            menuToggle.addEventListener('click', function() {
                mainNav.classList.toggle('active');
                menuToggle.innerHTML = mainNav.classList.contains('active') 
                    ? '<i class="fas fa-times"></i>' 
                    : '<i class="fas fa-bars"></i>';
            });
            
            // Fechar menu ao clicar em um link
            const navLinks = document.querySelectorAll('nav a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        mainNav.classList.remove('active');
                        menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                });
            });
            
            // Filtro do cardápio
            const categoryButtons = document.querySelectorAll('.category-btn');
            const menuItems = document.querySelectorAll('.menu-item');
            
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove a classe active de todos os botões
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Adiciona a classe active ao botão clicado
                    this.classList.add('active');
                    
                    const category = this.getAttribute('data-category');
                    
                    // Filtra os itens do menu
                    menuItems.forEach(item => {
                        if (category === 'all' || item.getAttribute('data-category') === category) {
                            item.style.display = 'block';
                            // Adiciona animação ao mostrar
                            item.style.animation = 'fadeInUp 0.6s ease forwards';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
            
            // Formulário de contato
            const form = document.getElementById('budget-form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Solicitação enviada com sucesso! Entraremos em contato em breve.');
                form.reset();
            });
            
            // Header scroll effect
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 100) {
                    header.style.padding = '10px 0';
                    header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
                } else {
                    header.style.padding = '20px 0';
                    header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
                }
            });
            
            // Animações ao scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Observar elementos para animação
            const animatedElements = document.querySelectorAll('.menu-item, .about-image, .team-member');
            animatedElements.forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>