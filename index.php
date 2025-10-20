<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buffet Delícias & Eventos</title>
    <style>
        /* Reset e estilos gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header e Navegação */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 1.8rem;
            color: #8B4513;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #8B4513;
        }

        /* Seção Hero */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1555244162-803834f70033?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background-color: #8B4513;
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #654321;
        }

        /* Seções gerais */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #8B4513;
            margin-bottom: 15px;
        }

        .section-title p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Quem Somos */
        .about-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .about-text {
            flex: 1;
        }

        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Cardápio */
        .menu {
            background-color: #f5f5f5;
        }

        .menu-categories {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .category-btn {
            background: none;
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 1rem;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.3s;
        }

        .category-btn.active {
            border-bottom: 2px solid #8B4513;
            color: #8B4513;
            font-weight: 600;
        }

        .menu-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .menu-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .menu-item-content {
            padding: 20px;
        }

        .menu-item h3 {
            margin-bottom: 10px;
            color: #8B4513;
        }

        .menu-item p {
            color: #666;
            margin-bottom: 15px;
        }

        .price {
            font-weight: 600;
            color: #8B4513;
            font-size: 1.2rem;
        }

        /* Contato */
        .contact-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .contact-info, .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .contact-info h3, .contact-form h3 {
            margin-bottom: 20px;
            color: #8B4513;
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-detail i {
            margin-right: 10px;
            color: #8B4513;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #8B4513;
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .social-link:hover {
            background-color: #654321;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 40px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            margin-bottom: 20px;
            color: #8B4513;
        }

        .footer-column p, .footer-column a {
            color: #ccc;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
        }

        .footer-column a:hover {
            color: white;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            color: #999;
            font-size: 0.9rem;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
            }

            nav ul {
                margin-top: 15px;
            }

            nav ul li {
                margin-left: 15px;
                margin-right: 15px;
            }

            .hero-content h2 {
                font-size: 2.2rem;
            }

            .about-content {
                flex-direction: column;
            }

            .menu-categories {
                flex-wrap: wrap;
            }

            .category-btn {
                margin-bottom: 10px;
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
                    <!-- Logo placeholder - substitua pelo logo real -->
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjYwIiBoZWlnaHQ9IjYwIiByeD0iMTAiIGZpbGw9IiM4QjQ1MTMiLz4KPHN2ZyB4PSIxNSIgeT0iMTUiIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+CjxwYXRoIGQ9Ik0zIDZIMjFNMjEgMTJIM0MyMSAxMiAyMSAxOCAxOCAyMUMxNSAyNCA5IDI0IDYgMjFDMyAxOCAzIDEyIDIxIDEyeiIvPgo8L3N2Zz4KPC9zdmc+" alt="Logo Buffet">
                    <h1>Buffet Delícias & Eventos</h1>
                </div>
                <nav>
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
                <h2>Transformamos seus eventos em momentos inesquecíveis</h2>
                <p>Serviço completo de buffet para casamentos, aniversários, corporativos e muito mais</p>
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
                    <p>Há mais de 15 anos no mercado, o Buffet Delícias & Eventos se dedica a criar experiências gastronômicas únicas para nossos clientes. Nossa missão é transformar momentos especiais em memórias inesquecíveis através da excelência em serviços de alimentação.</p>
                    <p>Contamos com uma equipe de chefs experientes e profissionais dedicados que trabalham com ingredientes selecionados e receitas exclusivas, sempre priorizando a qualidade e o sabor.</p>
                    <p>Oferecemos serviços completos para casamentos, festas de aniversário, eventos corporativos, coffee breaks e muito mais, sempre adaptando nosso cardápio às necessidades e preferências de cada cliente.</p>
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
                <button class="category-btn" data-category="entradas">Entradas</button>
                <button class="category-btn" data-category="pratos">Pratos Principais</button>
                <button class="category-btn" data-category="sobremesas">Sobremesas</button>
                <button class="category-btn" data-category="bebidas">Bebidas</button>
            </div>
            <div class="menu-items">
                <!-- Item 1 -->
                <div class="menu-item" data-category="entradas">
                    <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Bruschetta">
                    <div class="menu-item-content">
                        <h3>Bruschetta Italiana</h3>
                        <p>Pão italiano torrado com tomate fresco, manjericão e azeite de oliva extra virgem.</p>
                        <div class="price">R$ 28,00</div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="menu-item" data-category="pratos">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Risotto">
                    <div class="menu-item-content">
                        <h3>Risotto de Cogumelos</h3>
                        <p>Arroz arbóreo cremoso com cogumelos frescos, queijo parmesão e ervas finas.</p>
                        <div class="price">R$ 42,00</div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="menu-item" data-category="sobremesas">
                    <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cheesecake">
                    <div class="menu-item-content">
                        <h3>Cheesecake de Frutas Vermelhas</h3>
                        <p>Base de biscoito, creme de queijo suave e calda de frutas vermelhas.</p>
                        <div class="price">R$ 22,00</div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="menu-item" data-category="bebidas">
                    <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Coquetel">
                    <div class="menu-item-content">
                        <h3>Coquetel Especial da Casa</h3>
                        <p>Uma combinação exclusiva de frutas tropicais, vodka e licor premium.</p>
                        <div class="price">R$ 18,00</div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="menu-item" data-category="pratos">
                    <img src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Salmão">
                    <div class="menu-item-content">
                        <h3>Salmão Grelhado</h3>
                        <p>Filé de salmão grelhado com molho de maracujá e acompanhamentos.</p>
                        <div class="price">R$ 58,00</div>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="menu-item" data-category="entradas">
                    <img src="https://images.unsplash.com/photo-1606755962773-d324e74532a7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Salada">
                    <div class="menu-item-content">
                        <h3>Salada Caesar</h3>
                        <p>Alface romana, croutons, queijo parmesão e molho caesar tradicional.</p>
                        <div class="price">R$ 32,00</div>
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
                            <i>📍</i>
                            <span>Rua das Flores, 123 - Centro, São Paulo - SP</span>
                        </div>
                        <div class="contact-detail">
                            <i>📞</i>
                            <span>(11) 3456-7890</span>
                        </div>
                        <div class="contact-detail">
                            <i>✉️</i>
                            <span>contato@buffetdelicias.com.br</span>
                        </div>
                        <div class="contact-detail">
                            <i>🕒</i>
                            <span>Segunda a Sábado: 8h às 22h</span>
                        </div>
                    </div>
                    <h3>Redes Sociais</h3>
                    <div class="social-links">
                        <a href="#" class="social-link">FB</a>
                        <a href="#" class="social-link">IG</a>
                        <a href="#" class="social-link">YT</a>
                        <a href="#" class="social-link">WA</a>
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
                            <input type="text" id="event-type" name="event-type" required>
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Buffet Delícias & Eventos</h3>
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
                    <p>Rua das Flores, 123 - Centro</p>
                    <p>São Paulo - SP</p>
                    <p>contato@buffetdelicias.com.br</p>
                    <p>(11) 3456-7890</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Buffet Delícias & Eventos. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Filtro do cardápio
        document.addEventListener('DOMContentLoaded', function() {
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
        });
    </script>
</body>
</html>