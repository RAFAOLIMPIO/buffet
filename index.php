<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pedro Cadorin & Eliane Dias | Buffet</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    /* Reset */
    * { margin:0; padding:0; box-sizing:border-box; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

    /* Cores */
    :root {
        --laranja: #E67E22;
        --laranja-escuro: #D35400;
        --preto: #2C3E50;
        --bege: #FDF6E3;
        --marrom: #8B4513;
        --branco: #FFFFFF;
    }

    body { background-color: var(--bege); color: var(--preto); line-height:1.6; }

    .container { width:90%; max-width:1200px; margin:0 auto; padding:0 15px; }

    /* Header */
    header { background-color: var(--preto); position:sticky; top:0; z-index:100; }
    .header-content { display:flex; justify-content:space-between; align-items:center; padding:15px 0; }
    .logo h1 { color: var(--laranja); font-size:1.8rem; }
    .logo span { color: var(--branco); font-weight:300; }
    nav ul { display:flex; list-style:none; }
    nav ul li { margin-left:25px; }
    nav ul li a { color: var(--branco); text-decoration:none; font-weight:500; position:relative; }
    nav ul li a::after { content:''; position:absolute; bottom:-5px; left:0; width:0; height:2px; background-color:var(--laranja); transition:width 0.3s; }
    nav ul li a:hover { color: var(--laranja); }
    nav ul li a:hover::after { width:100%; }

    /* Hero */
    .hero { background: linear-gradient(rgba(44,62,80,0.8), rgba(44,62,80,0.8)), url('hero.jpg'); background-size:cover; background-position:center; height:600px; display:flex; align-items:center; justify-content:center; text-align:center; color:var(--branco); }
    .hero h2 { font-size:3rem; margin-bottom:20px; color:var(--laranja); }
    .hero p { font-size:1.2rem; margin-bottom:30px; max-width:700px; margin-left:auto; margin-right:auto; }
    .btn { background-color:var(--laranja); color:var(--branco); padding:12px 30px; border-radius:5px; font-weight:600; text-decoration:none; transition:all 0.3s; border:none; cursor:pointer; }
    .btn:hover { background-color:var(--laranja-escuro); transform:translateY(-3px); box-shadow:0 5px 15px rgba(230,126,34,0.3); }

    /* Seções */
    section { padding:80px 0; }

    .section-title { text-align:center; margin-bottom:50px; }
    .section-title h2 { font-size:2.5rem; color:var(--laranja); margin-bottom:15px; position:relative; display:inline-block; }
    .section-title h2::after { content:''; position:absolute; bottom:-10px; left:50%; transform:translateX(-50%); width:80px; height:3px; background-color:var(--laranja); }
    .section-title p { max-width:700px; margin:0 auto; color:var(--preto); font-size:1.1rem; }

    /* Quem Somos */
    .about-content { display:flex; gap:40px; align-items:center; flex-wrap:wrap; }
    .about-text { flex:1; }
    .about-text p { margin-bottom:20px; font-size:1.1rem; }
    .about-image { flex:1; border-radius:10px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); }
    .about-image img { width:100%; height:auto; display:block; transition:transform 0.5s; }
    .about-image:hover img { transform:scale(1.05); }

    /* Cardápio */
    .menu-items { display:grid; grid-template-columns:repeat(auto-fill,minmax(300px,1fr)); gap:30px; }
    .menu-item { background-color:var(--branco); border-radius:10px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.05); transition:transform 0.3s, box-shadow 0.3s; }
    .menu-item:hover { transform:translateY(-10px); box-shadow:0 15px 30px rgba(0,0,0,0.1); }
    .menu-item img { width:100%; height:200px; object-fit:cover; }
    .menu-item-content { padding:20px; }
    .menu-item h3 { color:var(--laranja); margin-bottom:10px; font-size:1.3rem; }
    .menu-item p { color:var(--preto); }

    /* Contato */
    .contact-content { display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:40px; }
    .contact-info, .contact-form { background-color:var(--bege); padding:30px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.05); }
    .contact-info h3, .contact-form h3 { color:var(--laranja); margin-bottom:20px; font-size:1.5rem; }
    .contact-detail { display:flex; align-items:center; margin-bottom:15px; }
    .contact-detail i { margin-right:10px; color:var(--laranja); }
    .social-links { display:flex; gap:15px; margin-top:20px; }
    .social-link { display:inline-flex; align-items:center; justify-content:center; width:40px; height:40px; background-color:var(--laranja); color:var(--branco); border-radius:50%; text-decoration:none; transition:all 0.3s; }
    .social-link:hover { background-color:var(--laranja-escuro); transform:translateY(-3px); }

    .form-group { margin-bottom:20px; }
    .form-group label { display:block; margin-bottom:5px; font-weight:500; color:var(--preto); }
    .form-group input, .form-group textarea, .form-group select { width:100%; padding:12px; border:1px solid #ddd; border-radius:5px; font-size:1rem; }
    .form-group textarea { height:150px; resize:vertical; }

    /* Equipe */
    .team-members { display:flex; justify-content:center; gap:40px; flex-wrap:wrap; }
    .team-member { text-align:center; max-width:300px; }
    .member-photo { width:200px; height:200px; border-radius:50%; overflow:hidden; margin:0 auto 20px; border:5px solid var(--laranja); box-shadow:0 5px 15px rgba(0,0,0,0.1); }
    .member-photo img { width:100%; height:100%; object-fit:cover; }
    .member-info h3 { color:var(--laranja); margin-bottom:10px; font-size:1.5rem; }
    .member-info p { color:var(--preto); margin-bottom:15px; }
    .member-contact i { color:#25D366; font-size:1.2rem; margin-right:5px; }

    /* Footer */
    footer { background-color:var(--preto); color:var(--branco); padding:40px 0 20px; }
    .footer-content { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px; margin-bottom:30px; }
    .footer-column h3 { color:var(--laranja); margin-bottom:20px; }
    .footer-column p, .footer-column a { color:#ccc; margin-bottom:10px; display:block; text-decoration:none; }
    .footer-column a:hover { color:var(--laranja); }
    .footer-photos { display:flex; gap:20px; margin-top:10px; }
    .footer-photos img { width:100px; border-radius:50%; }
    .copyright { text-align:center; padding-top:20px; border-top:1px solid #444; color:#999; font-size:0.9rem; }

    /* Responsivo */
    @media (max-width:768px) {
        .header-content { flex-direction:column; }
        nav ul { margin-top:15px; flex-wrap:wrap; justify-content:center; }
        .about-content { flex-direction:column; }
        .team-members { flex-direction:column; align-items:center; }
    }
</style>
</head>
<body>

<!-- Header -->
<header>
    <div class="container header-content">
        <div class="logo"><h1>PEDRO CADORIN <span>& ELIANE DIAS</span></h1></div>
        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#about">Quem Somos</a></li>
                <li><a href="#menu">Cardápio</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero -->
<section id="home" class="hero">
    <div class="container">
        <h2>CHURRASCO GOURMET & BUFFET</h2>
        <p>Transformamos seus eventos em momentos inesquecíveis com churrasco de alta qualidade e serviços de buffet completos.</p>
        <a href="#contact" class="btn">Solicitar Orçamento</a>
    </div>
</section>

<!-- Quem Somos -->
<section id="about">
    <div class="container">
        <div class="section-title"><h2>Quem Somos</h2><p>Conheça nossa história e nosso diferencial</p></div>
        <div class="about-content">
            <div class="about-text">
                <p>Pedro Cadorin e Eliane Dias unem suas expertises para oferecer o melhor em churrasco gourmet e buffet para eventos.</p>
                <p>Pedro é especialista em cortes nobres e churrasco gourmet, Eliane comanda o buffet com pratos diversificados e serviço completo.</p>
                <p>Garantimos que seu evento seja memorável, com atenção aos detalhes e paixão pela gastronomia.</p>
            </div>
            <div class="about-image">
                <img src="hero.jpg" alt="Equipe do Buffet">
            </div>
        </div>
    </div>
</section>

<!-- Cardápio -->
<section id="menu">
    <div class="container">
        <div class="section-title"><h2>Nosso Cardápio</h2><p>Algumas de nossas especialidades</p></div>
        <div class="menu-items">
            <div class="menu-item"><img src="churrasco1.jpg" alt="Churrasco"><div class="menu-item-content"><h3>Picanha Premium</h3><p>Corte nobre, grelhado no ponto perfeito.</p></div></div>
            <div class="menu-item"><img src="churrasco2.jpg" alt="Churrasco"><div class="menu-item-content"><h3>Costela Assada</h3><p>Preparada lentamente até atingir maciez total.</p></div></div>
            <div class="menu-item"><img src="buffet1.jpg" alt="Buffet"><div class="menu-item-content"><h3>Buffet Variado</h3><p>Opções de saladas, acompanhamentos e pratos quentes.</p></div></div>
        </div>
    </div>
</section>

<!-- Equipe -->
<section id="team">
    <div class="container">
        <div class="section-title"><h2>Nossa Equipe</h2><p>Profissionais que tornam seu evento único</p></div>
        <div class="team-members">
            <div class="team-member">
                <div class="member-photo"><img src="pedro.png" alt="Pedro Cadorin"></div>
                <div class="member-info"><h3>Pedro Cadorin</h3><p>Churrasco Gourmet</p><div class="member-contact"><i class="fab fa-whatsapp"></i> (11) 94163-5006</div></div>
            </div>
            <div class="team-member">
                <div class="member-photo"><img src="eliane.png" alt="Eliane Dias"></div>
                <div class="member-info"><h3>Eliane Dias</h3><p>Buffet & Eventos</p><div class="member-contact"><i class="fab fa-whatsapp"></i> (11) 99899-5260</div></div>
            </div>
        </div>
    </div>
</section>

<!-- Contato -->
<section id="contact">
    <div class="container">
        <div class="section-title"><h2>Contato</h2><p>Fale conosco para solicitar orçamento ou tirar dúvidas</p></div>
        <div class="contact-content">
            <div class="contact-info">
                <h3>Informações</h3>
                <div class="contact-detail"><i class="fas fa-phone"></i> (11) 94163-5006 Pedro</div>
                <div class="contact-detail"><i class="fas fa-phone"></i> (11) 99899-5260 Eliane</div>
                <div class="contact-detail"><i class="fas fa-envelope"></i> contato@buffet.com.br</div>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
<<<<<<< HEAD
            <div class="contact-form">
                <h3>Enviar Mensagem</h3>
                <form>
                    <div class="form-group"><label>Nome</label><input type="text" required></div>
                    <div class="form-group"><label>Email</label><input type="email" required></div>
                    <div class="form-group"><label>Mensagem</label><textarea required></textarea></div>
                    <button type="submit" class="btn">Enviar</button>
                </form>
=======
            <div class="about-content">
                <div class="about-text">
                    <p>AQUI VAMOS MUDAR</p>
                    <p>Contamos com uma equipe de chefs experientes e profissionais dedicados que trabalham com ingredientes selecionados e receitas exclusivas, sempre priorizando a qualidade e o sabor.</p>
                    <p>Oferecemos serviços completos para casamentos, festas de aniversário, eventos corporativos, coffee breaks e muito mais, sempre adaptando nosso cardápio às necessidades e preferências de cada cliente.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1556909114-4d0d853e5e25?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Equipe do Buffet">
                </div>
>>>>>>> d76350065c8afb92d9af803ed052bff5139d1f8c
            </div>
        </div>
    </div>
</section>

<<<<<<< HEAD
<!-- Footer -->
<footer>
    <div class="container footer-content">
        <div class="footer-column">
            <h3>Pedro Cadorin & Eliane Dias</h3>
            <p>Transformando eventos em experiências inesquecíveis com excelência e gastronomia de qualidade.</p>
            <div class="footer-photos">
                <img src="pedro.png" alt="Pedro Cadorin">
                <img src="eliane.png" alt="Eliane Dias">
=======
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
                        <h3>PÃO</h3>
                        <p>PÃO.</p>
                        <div class="price">R$ 28,00</div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="menu-item" data-category="pratos">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Risotto">
                    <div class="menu-item-content">
                        <h3>PÃOs</h3>
                        <p>PÃO.</p>
                        <div class="price">R$ 42,00</div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="menu-item" data-category="sobremesas">
                    <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cheesecake">
                    <div class="menu-item-content">
                        <h3>SOBREMESA</h3>
                        <p>FRUTA.</p>
                        <div class="price">R$ 22,00</div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="menu-item" data-category="bebidas">
                    <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Coquetel">
                    <div class="menu-item-content">
                        <h3>Coquetel Especial da Casa</h3>
                        <p>BEBIDAS.</p>
                        <div class="price">R$ 18,00</div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="menu-item" data-category="pratos">
                    <img src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Salmão">
                    <div class="menu-item-content">
                        <h3>LANCHE</h3>
                        <p>LANCHE.</p>
                        <div class="price">R$ 58,00</div>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="menu-item" data-category="entradas">
                    <img src="https://images.unsplash.com/photo-1606755962773-d324e74532a7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Salada">
                    <div class="menu-item-content">
                        <h3>Salada</h3>
                        <p>AJKSDJAJSAJ</p>
                        <div class="price">R$ 32,00</div>
                    </div>
                </div>
>>>>>>> d76350065c8afb92d9af803ed052bff5139d1f8c
            </div>
        </div>
        <div class="footer-column">
            <h3>Links Rápidos</h3>
            <a href="#home">Início</a>
            <a href="#about">Quem Somos</a>
            <a href="#menu">Cardápio</a>
            <a href="#contact">Contato</a>
        </div>
        <div class="footer-column">
            <h3>Redes Sociais</h3>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        &copy; 2025 Pedro Cadorin & Eliane Dias. Todos os direitos reservados.
    </div>
</footer>

</body>
</html>
