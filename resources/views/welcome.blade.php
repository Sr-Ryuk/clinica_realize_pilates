<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('APP_NAME', 'Realize Pilates') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/landing.css'])

    <style>
        /* --- CSS REINSERIDO PARA O LAYOUT FUNCIONAR --- */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
            background: rgba(255, 255, 255, 0.98) !important;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: #2d5016 !important;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-nav .nav-link {
            color: #555 !important;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
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

        /* Botão Entrar */
        .btn-entrar {
            background: linear-gradient(135deg, #4a7c2a, #2d5016);
            color: #fff !important;
            padding: 8px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 15px rgba(45, 80, 22, 0.2);
        }

        .btn-entrar:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(45, 80, 22, 0.4);
            background: linear-gradient(135deg, #5da035, #3a661c);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(45, 80, 22, 0.9) 0%, rgba(74, 124, 42, 0.8) 100%), url('https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            display: flex;
            align-items: center;
            padding-top: 80px;
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
            margin-bottom: 2.5rem;
            animation: fadeInUp 1.2s ease-out;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
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
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            background: #f8f9fa;
            color: #2d5016;
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

        /* Sections */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d5016;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: #4a7c2a;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .benefits,
        .testimonials {
            padding: 100px 0;
            background: #f8f9fa;
        }

        .about,
        .contact {
            padding: 100px 0;
            background: #fff;
        }

        /* Cards */
        .benefit-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px 30px;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(45, 80, 22, 0.1);
            border-color: #4a7c2a;
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            color: #2d5016;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .benefit-card:hover .benefit-icon {
            background: linear-gradient(135deg, #4a7c2a, #2d5016);
            color: #fff;
        }

        .benefit-card h3 {
            font-size: 1.35rem;
            color: #2d5016;
            margin-bottom: 15px;
            font-weight: 700;
        }

        /* About */
        .about-image {
            width: 100%;
            height: 400px;
            background-image: url('https://images.unsplash.com/photo-1522898467493-49726bf28798?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
            background-size: cover;
            background-position: center;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(45, 80, 22, 0.2);
        }

        /* Services */
        .services {
            padding: 100px 0;
            background: linear-gradient(135deg, #2d5016 0%, #4a7c2a 100%);
            color: #fff;
        }

        .services .section-title {
            color: #fff;
        }

        .services .section-title::after {
            background: rgba(255, 255, 255, 0.5);
        }

        .service-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 35px;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .service-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Testimonials */
        .testimonial-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            position: relative;
        }

        .testimonial-quote-icon {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 4rem;
            color: #f0f0f0;
            z-index: 0;
        }

        .testimonial-text {
            position: relative;
            z-index: 1;
            font-size: 1.05rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 25px;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
            z-index: 1;
        }

        .testimonial-avatar {
            width: 50px;
            height: 50px;
            background: #4a7c2a;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Contact */
        .contact-info {
            background: linear-gradient(135deg, #2d5016, #4a7c2a);
            color: #fff;
            border-radius: 20px;
            padding: 50px;
            height: 100%;
            box-shadow: 0 20px 40px rgba(45, 80, 22, 0.2);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-form {
            background: #fff;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid #eee;
        }

        .form-control {
            border-radius: 12px;
            padding: 15px;
            border: 1px solid #ddd;
            background-color: #fcfcfc;
            margin-bottom: 20px;
        }

        .form-control:focus {
            border-color: #4a7c2a;
            box-shadow: 0 0 0 0.2rem rgba(74, 124, 42, 0.15);
            background-color: #fff;
        }

        .btn-submit {
            background: #2d5016;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: #4a7c2a;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(45, 80, 22, 0.3);
        }

        /* Footer */
        footer {
            background: #1a2f0d;
            color: rgba(255, 255, 255, 0.6);
            padding: 40px 0;
            text-align: center;
            border-top: 4px solid #4a7c2a;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .about-content {
                flex-direction: column;
            }

            .about-image {
                height: 250px;
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <i class="bi bi-flower1"></i> Realize Pilates
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#beneficios">Benefícios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#depoimentos">Depoimentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a class="btn btn-entrar" href="/login" onclick="entrarSistema(event)">
                            <i class="bi bi-person-circle me-1"></i> Entrar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1>Realize Pilates</h1>
                    <p>Transforme seu corpo, fortaleça sua mente e realize seu potencial máximo com o método Pilates.</p>
                    <a href="#contato" class="cta-button" onclick="smoothScroll(event, '#contato')">
                        Agende sua Aula Experimental
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits" id="beneficios">
        <div class="container">
            <h2 class="section-title">Por que escolher o Pilates?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="bi bi-activity"></i></div>
                        <h3>Força Muscular</h3>
                        <p>Desenvolva força, resistência e tônus muscular de forma equilibrada e segura.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="bi bi-person-arms-up"></i></div>
                        <h3>Flexibilidade</h3>
                        <p>Melhore sua amplitude de movimento e reduza tensões musculares com exercícios específicos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="bi bi-check-circle"></i></div>
                        <h3>Postura Correta</h3>
                        <p>Corrija desvios posturais e alivie dores nas costas através do alinhamento corporal.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="bi bi-lungs"></i></div>
                        <h3>Concentração</h3>
                        <p>Conecte corpo e mente através de movimentos conscientes e respiração controlada.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="bi bi-heart-pulse"></i></div>
                        <h3>Bem-estar</h3>
                        <p>Reduza o estresse, melhore sua qualidade de vida e sinta-se mais energizado.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h3>Resultados</h3>
                        <p>Perceba mudanças significativas no seu corpo em poucas semanas de prática regular.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="sobre">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2 class="section-title" style="text-align: left; left: 0; transform: none;">Sobre a Realize</h2>
                        <p>
                            Fundada com o propósito de promover saúde e qualidade de vida, a Realize Pilates é mais
                            que um estúdio de exercícios. Somos um espaço dedicado à transformação integral do ser humano.
                        </p>
                        <p>
                            Nossa equipe é formada por profissionais certificados e apaixonados pelo método Pilates,
                            com anos de experiência em reabilitação, condicionamento físico e bem-estar.
                        </p>
                        <p>
                            <i class="bi bi-check-circle-fill text-success"></i> Equipamentos de última geração<br>
                            <i class="bi bi-check-circle-fill text-success"></i> Turmas reduzidas<br>
                            <i class="bi bi-check-circle-fill text-success"></i> Ambiente climatizado
                        </p>
                        <p class="mt-4">
                            <strong>Nossa missão:</strong> Ajudar você a alcançar seus objetivos através do movimento
                            consciente.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="servicos">
        <div class="container">
            <h2 class="section-title">Nossos Serviços</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <h3><i class="bi bi-person-standing"></i> Pilates Solo</h3>
                        <p>Aulas em grupo com exercícios no solo utilizando acessórios como bola, faixa elástica e disco de equilíbrio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3><i class="bi bi-bicycle"></i> Pilates Aparelhos</h3>
                        <p>Sessões individuais ou em dupla com equipamentos especializados como Reformer, Cadillac e Chair.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3><i class="bi bi-bandaid"></i> Pilates Terapêutico</h3>
                        <p>Acompanhamento especializado para reabilitação de lesões e tratamento de dores crônicas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3><i class="bi bi-balloon-heart"></i> Gestantes</h3>
                        <p>Programa especial para futuras mamães, focado em preparação para o parto e bem-estar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3><i class="bi bi-hourglass-split"></i> Terceira Idade</h3>
                        <p>Exercícios adaptados para melhorar mobilidade, equilíbrio e qualidade de vida na melhor idade.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3><i class="bi bi-clipboard-data"></i> Avaliação Postural</h3>
                        <p>Análise completa da sua postura para desenvolver um programa personalizado de exercícios.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="depoimentos">
        <div class="container">
            <h2 class="section-title">O que nossos alunos dizem</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <i class="bi bi-quote testimonial-quote-icon"></i>
                        <p class="testimonial-text">
                            "Comecei o Pilates para tratar dores na lombar e os resultados superaram minhas expectativas.
                            Hoje me sinto mais forte e sem dor. A equipe é excepcional!"
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">MR</div>
                            <div class="testimonial-info">
                                <h5 class="mb-0">Maria Rodrigues</h5>
                                <small class="text-muted">Aluna há 2 anos</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <i class="bi bi-quote testimonial-quote-icon"></i>
                        <p class="testimonial-text">
                            "O Pilates mudou minha vida! Além de melhorar minha postura, ganhei flexibilidade e
                            disposição. As aulas são personalizadas e os instrutores são muito atenciosos."
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">JS</div>
                            <div class="testimonial-info">
                                <h5 class="mb-0">João Silva</h5>
                                <small class="text-muted">Aluno há 1 ano</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <i class="bi bi-quote testimonial-quote-icon"></i>
                        <p class="testimonial-text">
                            "Ambiente acolhedor e profissionais qualificados. Recomendo para todos que buscam qualidade
                            de vida através do movimento consciente."
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">AS</div>
                            <div class="testimonial-info">
                                <h5 class="mb-0">Ana Santos</h5>
                                <small class="text-muted">Aluna há 3 anos</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contato">
        <div class="container">
            <h2 class="section-title">Entre em Contato</h2>
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3 class="mb-4">Fale Conosco</h3>
                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon me-3"><i class="bi bi-geo-alt"></i></div>
                            <div>
                                <h5 class="mb-1">Endereço</h5>
                                <p class="mb-0 opacity-75">Rua das Flores, 123<br>Centro, Lavras - MG</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon me-3"><i class="bi bi-telephone"></i></div>
                            <div>
                                <h5 class="mb-1">Telefone</h5>
                                <p class="mb-0 opacity-75">(35) 3829-0000<br>(35) 99999-0000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon me-3"><i class="bi bi-envelope"></i></div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0 opacity-75">contato@realizepilates.com.br</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="contact-icon me-3"><i class="bi bi-clock"></i></div>
                            <div>
                                <h5 class="mb-1">Horário</h5>
                                <p class="mb-0 opacity-75">Seg a Sex: 6h às 20h<br>Sábado: 7h às 13h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h3 class="mb-4" style="color: #2d5016;">Agende sua Aula</h3>
                        <form onsubmit="enviarFormulario(event)">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Seu Nome" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Seu E-mail" required>
                                </div>
                            </div>
                            <input type="tel" class="form-control" placeholder="Seu Telefone" required>
                            <select class="form-control text-muted">
                                <option selected>Interesse principal</option>
                                <option>Pilates Solo</option>
                                <option>Pilates Aparelhos</option>
                                <option>Terapêutico</option>
                            </select>
                            <textarea class="form-control" rows="4" placeholder="Mensagem (opcional)"></textarea>
                            <button type="submit" class="btn btn-submit">Enviar Mensagem <i class="bi bi-send ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Realize Pilates — Sistema desenvolvido por <a href="#">HydraCode</a></p>
            <div class="mt-3">
                <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth Scroll function
        function smoothScroll(e, targetId) {
            e.preventDefault();
            const element = document.querySelector(targetId);
            if (element) {
                const headerOffset = 80; // altura do menu fixo
                const elementPosition = element.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        }

        // Navbar link active state handling
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#')) {
                    smoothScroll(e, href);
                }

                // Collapse navbar on mobile after click
                const navbarCollapse = document.getElementById('navbarNav');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });

        // CORREÇÃO AQUI: Sintaxe correta do Blade e JavaScript
        function entrarSistema(e) {
            e.preventDefault();
            window.location.href = "{{ auth()->check() ? route('dashboard') : route('login') }}";
        }

        function enviarFormulario(e) {
            e.preventDefault();
            // Simulação de envio
            const btn = e.target.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;

            btn.innerHTML = 'Enviando...';
            btn.disabled = true;

            setTimeout(() => {
                alert('Obrigado pelo contato! Em breve entraremos em contato com você.');
                e.target.reset();
                btn.innerHTML = originalText;
                btn.disabled = false;
            }, 1500);
        }
    </script>
</body>

</html>