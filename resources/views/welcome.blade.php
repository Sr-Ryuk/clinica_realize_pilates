<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realize Pilates - Transforme seu corpo e mente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: #2d5016 !important;
            letter-spacing: -0.5px;
        }

        .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin: 0 15px;
            transition: color 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: #4a7c2a !important;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #4a7c2a;
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        .btn-entrar {
            background: linear-gradient(135deg, #4a7c2a, #2d5016);
            color: #fff !important;
            padding: 10px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-entrar:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(45, 80, 22, 0.3);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #2d5016 0%, #4a7c2a 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding-top: 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            top: -200px;
            right: -100px;
            animation: float 6s ease-in-out infinite;
        }

        .hero::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 50%;
            bottom: -100px;
            left: -50px;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) scale(1);
            }

            50% {
                transform: translateY(-20px) scale(1.05);
            }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            color: #fff;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        .hero p {
            font-size: 1.4rem;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 2rem;
            animation: fadeInUp 1.2s ease-out;
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

        .cta-button {
            background: #fff;
            color: #2d5016;
            padding: 18px 50px;
            font-size: 1.2rem;
            font-weight: 700;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1.4s ease-out;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            background: #f0f0f0;
        }

        /* Benefits Section */
        .benefits {
            padding: 100px 0;
            background: #f8f9fa;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d5016;
            margin-bottom: 3rem;
            text-align: center;
        }

        .benefit-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(45, 80, 22, 0.15);
            border-color: #4a7c2a;
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #4a7c2a, #2d5016);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
        }

        .benefit-card h3 {
            font-size: 1.5rem;
            color: #2d5016;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .benefit-card p {
            color: #666;
            line-height: 1.6;
        }

        /* About Section */
        .about {
            padding: 100px 0;
            background: #fff;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-text h2 {
            font-size: 2.5rem;
            color: #2d5016;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .about-text p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .about-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #4a7c2a, #2d5016);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 3rem;
            box-shadow: 0 10px 40px rgba(45, 80, 22, 0.2);
        }

        /* Services Section */
        .services {
            padding: 100px 0;
            background: linear-gradient(135deg, #2d5016 0%, #4a7c2a 100%);
            color: #fff;
        }

        .services .section-title {
            color: #fff;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            height: 100%;
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-10px);
            border-color: rgba(255, 255, 255, 0.4);
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .service-card p {
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 100px 0;
            background: #f8f9fa;
        }

        .testimonial-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .testimonial-text {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 20px;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #4a7c2a, #2d5016);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .testimonial-info h4 {
            font-size: 1.1rem;
            color: #2d5016;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .testimonial-info p {
            font-size: 0.9rem;
            color: #999;
            margin: 0;
        }

        /* Contact Section */
        .contact {
            padding: 100px 0;
            background: #fff;
        }

        .contact-info {
            background: linear-gradient(135deg, #2d5016, #4a7c2a);
            color: #fff;
            border-radius: 20px;
            padding: 60px;
            height: 100%;
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }

        .contact-text p {
            margin: 0;
            font-size: 1.1rem;
        }

        .contact-form {
            background: #f8f9fa;
            border-radius: 20px;
            padding: 60px;
        }

        .contact-form h3 {
            font-size: 2rem;
            color: #2d5016;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .form-control {
            border-radius: 10px;
            padding: 15px;
            border: 2px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .form-control:focus {
            border-color: #4a7c2a;
            box-shadow: 0 0 0 0.2rem rgba(74, 124, 42, 0.15);
        }

        .btn-submit {
            background: linear-gradient(135deg, #4a7c2a, #2d5016);
            color: #fff;
            padding: 15px 50px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(45, 80, 22, 0.3);
        }

        /* Footer */
        footer {
            background: #1a2f0d;
            color: rgba(255, 255, 255, 0.7);
            padding: 40px 0;
            text-align: center;
        }

        footer a {
            color: #4a7c2a;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #6ba83f;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .about-content {
                flex-direction: column;
            }

            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-link {
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Realize Pilates</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#beneficios">Benefícios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#depoimentos">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="btn btn-entrar" href="#" onclick="entrarSistema()">Entrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1>Realize Pilates</h1>
                    <p>Transforme seu corpo, fortaleça sua mente e realize seu potencial</p>
                    <button class="cta-button" onclick="scrollTo('#contato')">Agende sua Aula Experimental</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits" id="beneficios">
        <div class="container">
            <h2 class="section-title">Por que escolher o Pilates?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">💪</div>
                        <h3>Fortalecimento Muscular</h3>
                        <p>Desenvolva força, resistência e tônus muscular de forma equilibrada e segura.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">🧘</div>
                        <h3>Flexibilidade</h3>
                        <p>Melhore sua amplitude de movimento e reduza tensões musculares com exercícios específicos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">🎯</div>
                        <h3>Postura Correta</h3>
                        <p>Corrija desvios posturais e alivie dores nas costas através do alinhamento corporal.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">🧠</div>
                        <h3>Concentração</h3>
                        <p>Conecte corpo e mente através de movimentos conscientes e respiração controlada.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">❤️</div>
                        <h3>Bem-estar</h3>
                        <p>Reduza o estresse, melhore sua qualidade de vida e sinta-se mais energizado.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">⚡</div>
                        <h3>Resultados Rápidos</h3>
                        <p>Perceba mudanças significativas em poucas semanas de prática regular.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="sobre">
        <div class="container">
            <div class="row about-content">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Sobre a Realize Pilates</h2>
                        <p>
                            Fundada com o propósito de promover saúde e qualidade de vida, a Realize Pilates é mais
                            que um estúdio de exercícios. Somos um espaço dedicado à transformação integral do ser humano.
                        </p>
                        <p>
                            Nossa equipe é formada por profissionais certificados e apaixonados pelo método Pilates,
                            com anos de experiência em reabilitação, condicionamento físico e bem-estar.
                        </p>
                        <p>
                            Contamos com equipamentos de última geração e um ambiente acolhedor, projetado para
                            proporcionar conforto e segurança durante sua prática. Trabalhamos com turmas reduzidas
                            para garantir atenção individualizada a cada aluno.
                        </p>
                        <p>
                            <strong>Nossa missão:</strong> Ajudar você a alcançar seus objetivos através do movimento
                            consciente, respeitando suas limitações e potencializando suas capacidades.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        🏢
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="servicos">
        <div class="container">
            <h2 class="section-title">Nossos Serviços</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Pilates Solo</h3>
                        <p>Aulas em grupo com exercícios no solo utilizando acessórios como bola, faixa elástica e disco de equilíbrio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Pilates Aparelhos</h3>
                        <p>Sessões individuais ou em dupla com equipamentos especializados como Reformer, Cadillac e Chair.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Pilates Terapêutico</h3>
                        <p>Acompanhamento especializado para reabilitação de lesões e tratamento de dores crônicas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Pilates para Gestantes</h3>
                        <p>Programa especial para futuras mamães, focado em preparação para o parto e bem-estar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Pilates para Terceira Idade</h3>
                        <p>Exercícios adaptados para melhorar mobilidade, equilíbrio e qualidade de vida.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Avaliação Postural</h3>
                        <p>Análise completa da sua postura para desenvolver um programa personalizado de exercícios.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="depoimentos">
        <div class="container">
            <h2 class="section-title">O que nossos alunos dizem</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Comecei o Pilates para tratar dores na lombar e os resultados superaram minhas expectativas.
                            Hoje me sinto mais forte e sem dor. A equipe é excepcional!"
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">MR</div>
                            <div class="testimonial-info">
                                <h4>Maria Rodrigues</h4>
                                <p>Aluna há 2 anos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "O Pilates mudou minha vida! Além de melhorar minha postura, ganhei flexibilidade e
                            disposição. As aulas são personalizadas e os instrutores são muito atenciosos."
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">JS</div>
                            <div class="testimonial-info">
                                <h4>João Silva</h4>
                                <p>Aluno há 1 ano</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Ambiente acolhedor e profissionais qualificados. Recomendo para todos que buscam qualidade
                            de vida através do movimento consciente. Melhor decisão que tomei!"
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">AS</div>
                            <div class="testimonial-info">
                                <h4>Ana Santos</h4>
                                <p>Aluna há 3 anos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contato">
        <div class="container">
            <h2 class="section-title">Entre em Contato</h2>
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3>Fale Conosco</h3>
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div class="contact-text">
                                <p>Rua das Flores, 123<br>Centro, Lavras - MG</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div class="contact-text">
                                <p>(35) 3829-0000<br>(35) 99999-0000</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div class="contact-text">
                                <p>contato@realizepilates.com.br</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">🕐</div>
                            <div class="contact-text">
                                <p>Seg a Sex: 6h às 20h<br>Sábado: 7h às 13h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h3>Agende sua Aula Experimental</h3>
                        <form onsubmit="enviarFormulario(event)">
                            <input type="text" class="form-control" placeholder="Seu Nome" required>
                            <input type="email" class="form-control" placeholder="Seu E-mail" required>
                            <input type="tel" class="form-control" placeholder="Seu Telefone" required>
                            <textarea class="form-control" rows="4" placeholder="Mensagem (opcional)"></textarea>
                            <button type="submit" class="btn btn-submit">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Realize Pilates — Sistema desenvolvido por <a href="#">HydraCode</a></p>
            <p style="margin-top: 10px; font-size: 0.9rem;">Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scroll
        function scrollTo(target) {
            document.querySelector(target).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        // Adiciona smooth scroll para links da navbar
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('href');
                if (target !== '#') {
                    scrollTo(target);
                }
            });
        });

        // Função para entrar no sistema
        function entrarSistema() {
            window.location.href = '{{ auth()->check() ? route("admin.dashboard") : route("login") }}';
        }

        // Função para enviar formulário
        function enviarFormulario(e) {
            e.preventDefault();
            alert('Obrigado pelo contato! Em breve entraremos em contato com você.');
            e.target.reset();
        }
    </script>
</body>

</html>