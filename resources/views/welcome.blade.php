<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realize Pilates - Transforme seu corpo e mente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite([
    'resources/css/landing.css'
    ])

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

        // Smooth Scroll function (renamed to avoid conflicts)
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

        function entrarSistema(e) {
            // Verificação simples para demonstração
            // Se estiver num ambiente Laravel, use a lógica original:
            // window.location.href = "{{ auth()->check() ? route('dashboard') : route('login') }}";

            e.preventDefault();
            console.log("Redirecionando para login...");
            window.location.href = "/login"; // Link padrão para teste
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