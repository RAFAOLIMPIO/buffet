<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Cadorin & Eliane Dias | Churrasco Gourmet & Buffet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* ===== VARIÁVEIS E CONFIGURAÇÕES GLOBAIS ===== */
        :root {
            --laranja: #D35400;
            --laranja-claro: #E67E22;
            --preto: #2C3E50;
            --cinza-escuro: #34495E;
            --bege: #FDF6E3;
            --marrom: #8B4513;
            --branco: #FFFFFF;
            --cinza-claro: #F8F9FA;
            --dourado: #B8860B;
            --sombra: 0 8px 30px rgba(0, 0, 0, 0.08);
            --sombra-destaque: 0 15px 40px rgba(0, 0, 0, 0.12);
            --transicao: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            --transicao-rapida: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            background-color: var(--branco);
            color: var(--preto);
            line-height: 1.7;
            overflow-x: hidden;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            line-height: 1.2;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.8rem;
            color: var(--preto);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            font-weight: 700;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--laranja), var(--marrom));
            border-radius: 2px;
        }

        .section-title p {
            color: var(--cinza-escuro);
            max-width: 700px;
            margin: 30px auto 0;
            font-size: 1.15rem;
            font-weight: 400;
        }

        /* ===== BOTÕES PREMIUM ===== */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-claro));
            color: var(--branco);
            padding: 18px 40px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transicao);
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(211, 84, 0, 0.3);
            font-size: 1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-family: 'Inter', sans-serif;
            z-index: 1;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.7s;
            z-index: -1;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(211, 84, 0, 0.4);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--laranja);
            color: var(--laranja);
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--laranja);
            color: var(--branco);
        }

        .btn i {
            margin-right: 12px;
            font-size: 1.2rem;
        }

        /* ===== CABEÇALHO E NAVEGAÇÃO ===== */
        header {
            background-color: rgba(44, 62, 80, 0.98);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: var(--transicao);
            backdrop-filter: blur(10px);
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

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo h1 {
            font-size: 1.9rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            line-height: 1.2;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            position: relative;
            color: var(--branco);
        }

        .logo h1 span {
            display: flex;
            align-items: center;
            margin-right: 8px;
            font-family: 'Playfair Display', serif;
            font-size: 2.1rem;
            position: relative;
            font-weight: 700;
        }

        .name-pedro, .name-eliane {
            color: var(--branco);
            transition: var(--transicao-rapida);
        }

        .logo:hover .name-pedro,
        .logo:hover .name-eliane {
            color: var(--laranja-claro);
        }

        .ampersand {
            color: var(--laranja);
            margin: 0 12px;
            font-weight: 400;
            font-size: 1.7rem;
            font-family: 'Playfair Display', serif;
        }

        .logo-subtitle {
            font-size: 0.95rem;
            color: var(--branco);
            font-weight: 400;
            margin-top: 5px;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            margin-right: 15px;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-claro));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
            box-shadow: 0 4px 10px rgba(211, 84, 0, 0.3);
        }

        .logo-icon-end {
            width: 30px;
            height: 30px;
            margin-left: 10px;
            background: linear-gradient(135deg, var(--marrom), var(--laranja));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 35px;
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--branco);
            font-weight: 500;
            transition: var(--transicao-rapida);
            position: relative;
            padding: 8px 0;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-family: 'Inter', sans-serif;
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
            color: var(--laranja-claro);
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
            z-index: 1001;
        }

        /* ===== HERO SECTION PREMIUM ===== */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            max-height: 1000px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--branco);
            overflow: hidden;
            background: linear-gradient(rgba(44, 62, 80, 0.85), rgba(44, 62, 80, 0.9)), 
                        url('https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1000px;
            width: 90%;
            padding: 40px 20px;
            animation: fadeInUp 1s ease;
        }

        .hero-tagline {
            font-size: 1.3rem;
            letter-spacing: 5px;
            text-transform: uppercase;
            margin-bottom: 30px;
            color: var(--laranja-claro);
            font-weight: 500;
            display: block;
            font-family: 'Inter', sans-serif;
            animation: fadeInDown 0.8s ease 0.3s both;
        }

        .hero-title {
            font-size: 5rem;
            margin-bottom: 30px;
            font-weight: 700;
            line-height: 1;
            animation: fadeInUp 0.8s ease 0.5s both;
        }

        .hero-subtitle {
            font-size: 6rem;
            color: var(--laranja-claro);
            display: block;
            margin-top: 15px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-description {
            font-size: 1.4rem;
            margin-bottom: 50px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            letter-spacing: 0.5px;
            line-height: 1.6;
            font-weight: 300;
            animation: fadeInUp 0.8s ease 0.7s both;
        }

        .hero-buttons {
            display: flex;
            gap: 25px;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease 0.9s both;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
            color: var(--branco);
            font-size: 1.5rem;
        }

        /* ===== SEÇÃO SOBRE ===== */
        .about {
            background-color: var(--cinza-claro);
            position: relative;
            overflow: hidden;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .about-text {
            position: relative;
            text-align: left;
        }

        .about-text h3 {
            font-size: 2.2rem;
            color: var(--laranja);
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
        }

        .about-text h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--laranja), var(--marrom));
            border-radius: 2px;
        }

        .about-text p {
            margin-bottom: 25px;
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--cinza-escuro);
        }

        .about-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-top: 35px;
        }

        .feature {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 20px;
            border-radius: 12px;
            background: var(--branco);
            box-shadow: var(--sombra);
            transition: var(--transicao);
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: var(--sombra-destaque);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-claro));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--branco);
            font-size: 1.2rem;
            flex-shrink: 0;
            transition: var(--transicao);
        }

        .feature:hover .feature-icon {
            transform: rotate(15deg) scale(1.1);
        }

        .feature-text h4 {
            font-size: 1.2rem;
            margin-bottom: 8px;
            color: var(--preto);
        }

        .feature-text p {
            font-size: 0.95rem;
            margin-bottom: 0;
            color: var(--cinza-escuro);
            opacity: 0.8;
        }

        .about-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--sombra-destaque);
            transition: var(--transicao);
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

        /* ===== SEÇÃO CARDÁPIO ===== */
        .menu {
            background-color: var(--branco);
            position: relative;
            overflow: hidden;
        }

        .menu-preview {
            text-align: center;
            margin-bottom: 60px;
        }

        .menu-preview p {
            font-size: 1.15rem;
            margin-bottom: 35px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            color: var(--cinza-escuro);
        }

        .menu-highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .menu-highlight {
            background: var(--branco);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--sombra);
            transition: var(--transicao);
            position: relative;
        }

        .menu-highlight:hover {
            transform: translateY(-10px);
            box-shadow: var(--sombra-destaque);
        }

        .menu-highlight img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: var(--transicao);
        }

        .menu-highlight:hover img {
            transform: scale(1.05);
        }

        .menu-highlight-content {
            padding: 25px;
        }

        .menu-highlight-content h3 {
            margin-bottom: 12px;
            color: var(--laranja);
            font-size: 1.5rem;
        }

        .menu-highlight-content p {
            color: var(--cinza-escuro);
            margin-bottom: 15px;
            line-height: 1.6;
        }

        /* ===== MODAL DO CARDÁPIO ===== */
        .menu-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 2000;
            overflow-y: auto;
            backdrop-filter: blur(5px);
        }

        .menu-modal-content {
            background-color: var(--branco);
            margin: 50px auto;
            padding: 40px;
            border-radius: 20px;
            width: 95%;
            max-width: 1100px;
            position: relative;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            animation: modalFadeIn 0.6s ease;
        }

        .menu-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            border-bottom: 2px solid var(--laranja);
            padding-bottom: 20px;
        }

        .menu-modal-header h2 {
            color: var(--laranja);
            font-size: 2.5rem;
            margin: 0;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 2.5rem;
            color: var(--preto);
            cursor: pointer;
            transition: var(--transicao-rapida);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .close-modal:hover {
            color: var(--laranja);
            transform: rotate(90deg);
            background: rgba(230, 126, 34, 0.1);
        }

        .menu-categories {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .category-btn {
            background: var(--branco);
            border: 2px solid var(--laranja);
            padding: 12px 25px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 50px;
            transition: var(--transicao);
            color: var(--laranja);
            font-weight: 600;
            position: relative;
            overflow: hidden;
            z-index: 1;
            letter-spacing: 0.5px;
            font-family: 'Inter', sans-serif;
        }

        .category-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-claro));
            transition: var(--transicao);
            z-index: -1;
            border-radius: 50px;
        }

        .category-btn:hover, .category-btn.active {
            color: var(--branco);
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(230, 126, 34, 0.3);
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
            position: relative;
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--sombra-destaque);
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
            font-size: 1.5rem;
        }

        .menu-item p {
            color: var(--cinza-escuro);
            margin-bottom: 15px;
            line-height: 1.6;
        }

        /* ===== SEÇÃO GALERIA ===== */
        .gallery {
            background-color: var(--cinza-claro);
            padding: 100px 0;
            position: relative;
        }

        .gallery-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-slider {
            display: flex;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: var(--sombra-destaque);
            height: 550px;
        }

        .gallery-slide {
            min-width: 100%;
            transition: transform 0.7s ease;
            position: relative;
        }

        .gallery-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 40px;
        }

        .slide-content h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .slide-content p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .gallery-nav {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            gap: 15px;
        }

        .gallery-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--cinza-claro);
            border: 2px solid var(--laranja);
            cursor: pointer;
            transition: var(--transicao);
        }

        .gallery-dot.active {
            background: var(--laranja);
            transform: scale(1.2);
        }

        .gallery-prev, .gallery-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(230, 126, 34, 0.9);
            color: white;
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            transition: var(--transicao);
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-prev:hover, .gallery-next:hover {
            background: var(--laranja);
            transform: translateY(-50%) scale(1.1);
        }

        .gallery-prev {
            left: 30px;
        }

        .gallery-next {
            right: 30px;
        }

        /* ===== SEÇÃO CONTATO ===== */
        .contact {
            background-color: var(--branco);
            position: relative;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
        }

        .contact-info, .contact-form {
            background-color: var(--cinza-claro);
            padding: 50px;
            border-radius: 20px;
            box-shadow: var(--sombra);
            transition: var(--transicao);
        }

        .contact-info:hover, .contact-form:hover {
            transform: translateY(-5px);
            box-shadow: var(--sombra-destaque);
        }

        .contact-info h3, .contact-form h3 {
            margin-bottom: 30px;
            color: var(--laranja);
            font-size: 1.8rem;
            position: relative;
            display: inline-block;
        }

        .contact-info h3::after, .contact-form h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--laranja), var(--marrom));
            border-radius: 2px;
        }

        .contact-details {
            margin-bottom: 40px;
        }

        .contact-detail {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .contact-detail i {
            margin-right: 15px;
            color: var(--laranja);
            width: 20px;
            text-align: center;
            font-size: 1.2rem;
            margin-top: 5px;
        }

        .contact-detail div {
            flex: 1;
        }

        .contact-detail h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--preto);
        }

        .contact-detail p {
            color: var(--cinza-escuro);
            opacity: 0.8;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-claro));
            color: var(--branco);
            border-radius: 50%;
            text-decoration: none;
            transition: var(--transicao);
            font-size: 1.3rem;
        }

        .social-link:hover {
            transform: translateY(-5px) rotate(10deg);
            box-shadow: 0 8px 15px rgba(230, 126, 34, 0.4);
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: var(--preto);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 16px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transicao);
            background-color: var(--branco);
            font-family: 'Inter', sans-serif;
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

        /* ===== SEÇÃO EQUIPE ===== */
        .team {
            background-color: var(--cinza-claro);
            position: relative;
        }

        .team-members {
            display: flex;
            justify-content: center;
            gap: 80px;
            flex-wrap: wrap;
        }

        .team-member {
            text-align: center;
            max-width: 350px;
            transition: var(--transicao);
            position: relative;
        }

        .team-member:hover {
            transform: translateY(-15px);
        }

        .member-photo {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 30px;
            border: 5px solid var(--laranja);
            box-shadow: var(--sombra-destaque);
            transition: var(--transicao);
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--preto);
            font-weight: bold;
            position: relative;
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

        .member-icon {
            position: absolute;
            bottom: -10px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--laranja), var(--laranja-claro));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            border: 3px solid var(--branco);
        }

        .member-info h3 {
            color: var(--laranja);
            margin-bottom: 15px;
            font-size: 1.8rem;
        }

        .member-info p {
            color: var(--preto);
            margin-bottom: 20px;
            font-weight: 500;
            font-size: 1.1rem;
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
            font-size: 1.5rem;
        }

        /* ===== RODAPÉ ===== */
        footer {
            background-color: var(--preto);
            color: var(--branco);
            padding: 80px 0 30px;
            position: relative;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            margin-bottom: 30px;
            color: var(--laranja);
            font-size: 1.6rem;
            position: relative;
            display: inline-block;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--laranja), var(--marrom));
            border-radius: 2px;
        }

        .footer-column p, .footer-column a {
            color: #ccc;
            margin-bottom: 15px;
            display: block;
            text-decoration: none;
            transition: var(--transicao-rapida);
            line-height: 1.6;
        }

        .footer-column a:hover {
            color: var(--laranja);
            transform: translateX(5px);
        }

        .copyright {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid #444;
            color: #999;
            font-size: 0.9rem;
        }

        /* ===== ANIMAÇÕES ===== */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }

        /* ===== RESPONSIVIDADE ===== */
        @media (max-width: 1200px) {
            .about-content {
                gap: 60px;
            }
            
            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 50px;
            }
        }

        @media (max-width: 992px) {
            .about-content {
                grid-template-columns: 1fr;
                gap: 60px;
            }
            
            .about-image {
                order: -1;
            }

            .gallery-slider {
                height: 500px;
            }

            .contact-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .hero-title {
                font-size: 4rem;
            }
            
            .hero-subtitle {
                font-size: 5rem;
            }
            
            .hero-description {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                padding: 15px 0;
            }
            
            nav {
                width: 100%;
                margin-top: 20px;
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
                padding: 12px 0;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
            
            .menu-toggle {
                display: block;
                position: absolute;
                top: 20px;
                right: 20px;
            }
            
            .hero-title {
                font-size: 3.2rem;
            }
            
            .hero-subtitle {
                font-size: 4rem;
            }
            
            .section-title h2 {
                font-size: 2.5rem;
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
                gap: 60px;
            }

            .gallery-slider {
                height: 400px;
            }

            .gallery-prev, .gallery-next {
                width: 50px;
                height: 50px;
                font-size: 1.3rem;
            }

            .slide-content {
                padding: 30px;
            }

            .slide-content h3 {
                font-size: 1.5rem;
            }

            .logo h1 {
                font-size: 1.8rem;
                flex-direction: column;
            }

            .logo h1 span {
                font-size: 2rem;
            }

            .about-features {
                grid-template-columns: 1fr;
            }
            
            .hero {
                background-attachment: scroll;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 80px 0;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 3rem;
            }
            
            .hero-tagline {
                font-size: 1rem;
            }
            
            .hero-description {
                font-size: 1rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .menu-items {
                grid-template-columns: 1fr;
            }

            .gallery-slider {
                height: 300px;
            }

            .gallery-prev, .gallery-next {
                width: 40px;
                height: 40px;
                font-size: 1.1rem;
            }

            .gallery-prev {
                left: 15px;
            }

            .gallery-next {
                right: 15px;
            }

            .slide-content {
                padding: 20px;
            }

            .slide-content h3 {
                font-size: 1.3rem;
            }

            .logo h1 {
                font-size: 1.5rem;
            }

            .logo h1 span {
                font-size: 1.7rem;
            }

            .ampersand {
                display: none;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
            }

            .contact-info, .contact-form {
                padding: 30px 20px;
            }

            .menu-modal-content {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- ===== CABEÇALHO E NAVEGAÇÃO ===== -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="logo-text">
                        <h1>
                            <span class="name-pedro">Pedro Cadorin</span>
                            <span class="ampersand">&</span>
                            <span class="name-eliane">Eliane Dias</span>
                            <div class="logo-icon-end">
                                <i class="fas fa-star"></i>
                            </div>
                        </h1>
                        <div class="logo-subtitle">Churrasco Gourmet & Buffet</div>
                    </div>
                </div>
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <nav id="mainNav">
                    <ul>
                        <li><a href="#home">Início</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#menu">Cardápio</a></li>
                        <li><a href="#gallery">Galeria</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- ===== SEÇÃO HERO ===== -->
    <section id="home" class="hero">
        <div class="hero-content">
            <span class="hero-tagline">Experiências Gastronômicas</span>
            <h1</h1>
            <p class="hero-description">Combinamos a tradição do churrasco gourmet com a sofisticação do buffet para criar momentos inesquecíveis em seu evento</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn"><i class="fas fa-calendar-alt"></i> Solicitar Orçamento</a>
                <a href="#menu" class="btn btn-outline"><i class="fas fa-utensils"></i> Ver Cardápio</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- ===== SEÇÃO SOBRE ===== -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Sobre Nós</h2>
                <p>Dois especialistas, uma paixão: transformar seu evento em uma experiência única</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Nossa História</h3>
                    <p>Combinando anos de experiência e paixão pela gastronomia, Pedro Cadorin e Eliane Dias criaram uma parceria que eleva qualquer evento a um patamar de excelência.</p>
                    <p>Pedro Cadorin domina a arte do churrasco gourmet, trazendo cortes selecionados e técnicas aprimoradas que garantem sabor e qualidade excepcionais. Seu trabalho é reconhecido pela sofisticação e maestria no preparo de carnes.</p>
                    <p>Eliane Dias comanda o universo do buffet & eventos, oferecendo um cardápio diversificado e serviços completos que atendem desde casamentos íntimos até grandes celebrações corporativas.</p>
                    <div class="about-features">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Churrasco Gourmet</h4>
                                <p>Cortes selecionados e técnicas especiais de preparo</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Buffet Completo</h4>
                                <p>Cardápio diversificado para todos os tipos de eventos</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Qualidade Premium</h4>
                                <p>Ingredientes selecionados e preparo impecável</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Atendimento Personalizado</h4>
                                <p>Serviço dedicado para atender suas necessidades</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1556909114-4d0d853e5e25?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Pedro e Eliane - Churrasco Gourmet & Buffet">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SEÇÃO CARDÁPIO ===== -->
    <section id="menu" class="menu">
        <div class="container">
            <div class="section-title">
                <h2>Cardápio Exclusivo</h2>
                <p>Selecionamos os melhores ingredientes para criar pratos memoráveis</p>
            </div>
            <div class="menu-preview">
                <p>Explore nosso cardápio completo com uma variedade de pratos cuidadosamente preparados para tornar seu evento inesquecível.</p>
                <button class="btn" id="openMenuBtn"><i class="fas fa-book-open"></i> Ver Cardápio Completo</button>
            </div>
            <div class="menu-highlights">
                <div class="menu-highlight">
                    <img src="https://images.unsplash.com/photo-1594041680534-e8c8cdebd659?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Picanha Premium">
                    <div class="menu-highlight-content">
                        <h3>Picanha Premium</h3>
                        <p>Corte nobre de picanha, preparada com tempero especial e grelhada no ponto perfeito para realçar seu sabor único.</p>
                    </div>
                </div>
                <div class="menu-highlight">
                    <img src="https://images.unsplash.com/photo-1476124369491-e7addf5db371?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Risotto de Cogumelos">
                    <div class="menu-highlight-content">
                        <h3>Risotto de Cogumelos</h3>
                        <p>Arroz arbóreo cremoso com cogumelos frescos, queijo parmesão e ervas finas. Textura perfeita e sabor intenso.</p>
                    </div>
                </div>
                <div class="menu-highlight">
                    <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Cheesecake de Frutas Vermelhas">
                    <div class="menu-highlight-content">
                        <h3>Cheesecake de Frutas Vermelhas</h3>
                        <p>Base de biscoito, creme de queijo suave e calda de frutas vermelhas. A combinação perfeita para finalizar sua refeição.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MODAL DO CARDÁPIO ===== -->
    <div class="menu-modal" id="menuModal">
        <div class="menu-modal-content">
            <div class="menu-modal-header">
                <h2>Cardápio Completo</h2>
                <button class="close-modal" id="closeMenuBtn">&times;</button>
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
                    <img src="https://images.unsplash.com/photo-1594041680534-e8c8cdebd659?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Picanha Premium">
                    <div class="menu-item-content">
                        <h3>Picanha Premium</h3>
                        <p>Corte nobre de picanha, preparada com tempero especial e grelhada no ponto perfeito para realçar seu sabor único.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="menu-item" data-category="churrasco">
                    <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Costela Bovinha">
                    <div class="menu-item-content">
                        <h3>Costela Bovinha</h3>
                        <p>Costela bovina assada lentamente por horas, resultando em uma carne extremamente macia e saborosa.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="menu-item" data-category="entradas">
                    <img src="https://images.unsplash.com/photo-1572695157366-5e585ab2b69f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Bruschetta Italiana">
                    <div class="menu-item-content">
                        <h3>Bruschetta Italiana</h3>
                        <p>Pão italiano torrado com tomate fresco, manjericão e azeite de oliva extra virgem. Uma explosão de sabores mediterrâneos.</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="menu-item" data-category="pratos">
                    <img src="https://images.unsplash.com/photo-1476124369491-e7addf5db371?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Risotto de Cogumelos">
                    <div class="menu-item-content">
                        <h3>Risotto de Cogumelos</h3>
                        <p>Arroz arbóreo cremoso com cogumelos frescos, queijo parmesão e ervas finas. Textura perfeita e sabor intenso.</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="menu-item" data-category="pratos">
                    <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Salmão Grelhado">
                    <div class="menu-item-content">
                        <h3>Salmão Grelhado</h3>
                        <p>Filé de salmão grelhado com molho de maracujá e acompanhamentos selecionados. Equilíbrio perfeito entre doce e ácido.</p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="menu-item" data-category="sobremesas">
                    <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Cheesecake de Frutas Vermelhas">
                    <div class="menu-item-content">
                        <h3>Cheesecake de Frutas Vermelhas</h3>
                        <p>Base de biscoito, creme de queijo suave e calda de frutas vermelhas. A combinação perfeita para finalizar sua refeição.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== SEÇÃO GALERIA ===== -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Eventos</h2>
                <p>Confira alguns dos momentos especiais que criamos para nossos clientes</p>
            </div>
            <div class="gallery-container">
                <div class="gallery-slider" id="gallerySlider">
                    <div class="gallery-slide">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80" alt="Casamento Ana e Carlos">
                        <div class="slide-content">
                            <h3>Casamento Ana e Carlos</h3>
                            <p>Buffet completo para 150 convidados com churrasco gourmet e serviço premium</p>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Aniversário Corporativo">
                        <div class="slide-content">
                            <h3>Aniversário Corporativo</h3>
                            <p>Evento para 200 pessoas com churrasco gourmet e buffet internacional</p>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Festa de 15 Anos">
                        <div class="slide-content">
                            <h3>Festa de 15 Anos</h3>
                            <p>Celebração especial com buffet completo e decoração temática</p>
                        </div>
                    </div>
                </div>
                <button class="gallery-prev" id="galleryPrev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="gallery-next" id="galleryNext">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <div class="gallery-nav" id="galleryNav">
                    <div class="gallery-dot active" data-slide="0"></div>
                    <div class="gallery-dot" data-slide="1"></div>
                    <div class="gallery-dot" data-slide="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SEÇÃO CONTATO ===== -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Entre em Contato</h2>
                <p>Estamos prontos para transformar seu evento em uma experiência única</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Informações de Contato</h3>
                    <div class="contact-details">
                        <div class="contact-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Localização</h4>
                                <p>São Paulo e Região Metropolitana</p>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Horário de Atendimento</h4>
                                <p>Atendimento personalizado de acordo com seu evento</p>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>E-mail</h4>
                                <p>contato@pedroeliane.com.br</p>
                            </div>
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
                            <textarea id="message" name="message" placeholder="Descreva seu evento, suas expectativas e necessidades específicas..."></textarea>
                        </div>
                        <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Enviar Solicitação</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SEÇÃO EQUIPE ===== -->
    <section class="team">
        <div class="container">
            <div class="section-title">
                <h2>Nossa Equipe</h2>
                <p>Conheça os especialistas que vão tornar seu evento inesquecível</p>
            </div>
            <div class="team-members">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Pedro Cadorin">
                        <div class="member-icon">
                            <i class="fas fa-fire"></i>
                        </div>
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
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Eliane Dias">
                        <div class="member-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
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

    <!-- ===== RODAPÉ ===== -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Pedro Cadorin & Eliane Dias</h3>
                    <p>Transformamos seus eventos em momentos inesquecíveis com excelência gastronômica e serviços personalizados. Do churrasco gourmet ao buffet completo, cada detalhe é pensado para criar uma experiência única.</p>
                </div>
                <div class="footer-column">
                    <h3>Links Rápidos</h3>
                    <a href="#home">Início</a>
                    <a href="#about">Sobre Nós</a>
                    <a href="#menu">Cardápio</a>
                    <a href="#gallery">Galeria</a>
                    <a href="#contact">Contato</a>
                </div>
                <div class="footer-column">
                    <h3>Contato</h3>
                    <p>São Paulo e Região Metropolitana</p>
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
        // ===== MENU MOBILE TOGGLE =====
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
            
            // ===== MODAL DO CARDÁPIO =====
            const openMenuBtn = document.getElementById('openMenuBtn');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const menuModal = document.getElementById('menuModal');
            
            openMenuBtn.addEventListener('click', function() {
                menuModal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            });
            
            closeMenuBtn.addEventListener('click', function() {
                menuModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            });
            
            // Fechar modal ao clicar fora
            window.addEventListener('click', function(event) {
                if (event.target === menuModal) {
                    menuModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
            
            // ===== FILTRO DO CARDÁPIO =====
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
            
            // ===== FORMULÁRIO DE CONTATO =====
            const form = document.getElementById('budget-form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Solicitação enviada com sucesso! Entraremos em contato em breve.');
                form.reset();
            });
            
            // ===== HEADER SCROLL EFFECT =====
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
            
            // ===== GALERIA DE FOTOS =====
            const gallerySlider = document.getElementById('gallerySlider');
            const galleryPrev = document.getElementById('galleryPrev');
            const galleryNext = document.getElementById('galleryNext');
            const galleryDots = document.querySelectorAll('.gallery-dot');
            let currentSlide = 0;
            const totalSlides = document.querySelectorAll('.gallery-slide').length;
            
            function updateGallery() {
                gallerySlider.style.transform = `translateX(-${currentSlide * 100}%)`;
                
                // Atualizar dots
                galleryDots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentSlide);
                });
            }
            
            galleryPrev.addEventListener('click', function() {
                currentSlide = (currentSlide > 0) ? currentSlide - 1 : totalSlides - 1;
                updateGallery();
            });
            
            galleryNext.addEventListener('click', function() {
                currentSlide = (currentSlide < totalSlides - 1) ? currentSlide + 1 : 0;
                updateGallery();
            });
            
            galleryDots.forEach(dot => {
                dot.addEventListener('click', function() {
                    currentSlide = parseInt(this.getAttribute('data-slide'));
                    updateGallery();
                });
            });
            
            // Auto-play para a galeria
            setInterval(function() {
                currentSlide = (currentSlide < totalSlides - 1) ? currentSlide + 1 : 0;
                updateGallery();
            }, 6000);
            
            // ===== ANIMAÇÕES AO SCROLL =====
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
            const animatedElements = document.querySelectorAll('.menu-item, .about-image, .team-member, .menu-highlight');
            animatedElements.forEach(el => {
                observer.observe(el);
            });

            // ===== SCROLL SUAVE PARA LINKS INTERNOS =====
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>