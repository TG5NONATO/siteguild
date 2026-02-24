<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix Rising - Albion Guild</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Background com efeito de pergaminho -->
    <div class="parchment-bg"></div>
    
    <!-- Efeito de partículas (opcional) -->
    <div class="particles"></div>

    <!-- Header com brasão -->
    <header class="guild-header">
        <div class="header-content">
            <div class="crest-container">
                <img src="https://via.placeholder.com/150/5865F2/ffffff?text=Phoenix" alt="Guild Crest" class="guild-crest">
                <div class="crest-glow"></div>
            </div>
            <div class="guild-title">
                <h1>Phoenix <span class="gold-text">Rising</span></h1>
                <p class="guild-motto">"Das cinzas, renascemos mais fortes"</p>
            </div>
            <div class="guild-stats-header">
                <div class="header-stat">
                    <i class="fas fa-shield-alt"></i>
                    <span class="stat-value">#45</span>
                    <span class="stat-label">Ranking</span>
                </div>
                <div class="header-stat">
                    <i class="fas fa-users"></i>
                    <span class="stat-value">87</span>
                    <span class="stat-label">Membros</span>
                </div>
                <div class="header-stat">
                    <i class="fas fa-trophy"></i>
                    <span class="stat-value">1.2B</span>
                    <span class="stat-label">Fama</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Navegação da Guild -->
    <nav class="guild-nav">
        <div class="nav-container">
            <ul class="nav-links">
                <li><a href="#home" class="active"><i class="fas fa-home"></i> Início</a></li>
                <li><a href="#roster"><i class="fas fa-users"></i> Membros</a></li>
                <li><a href="#conquests"><i class="fas fa-crown"></i> Conquistas</a></li>
                <li><a href="#territories"><i class="fas fa-map-marked-alt"></i> Territórios</a></li>
                <li><a href="#recruitment"><i class="fas fa-handshake"></i> Recrutamento</a></li>
                <li><a href="#hall-of-fame"><i class="fas fa-star"></i> Hall da Fama</a></li>
            </ul>
            <div class="discord-connect">
                <button class="discord-nav-btn" onclick="loginWithDiscord()">
                    <i class="fab fa-discord"></i>
                    <span>Conectar</span>
                </button>
                <div id="discordConnected" class="connected-profile" style="display: none;">
                    <img id="userAvatar" src="" alt="Avatar" class="mini-avatar">
                    <span id="userName"></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="guild-main">
        <!-- Banner da Guild -->
        <section id="home" class="hero-banner">
            <div class="banner-overlay"></div>
            <div class="banner-content">
                <h2>Forjados no <span class="fire-text">Fogo</span></h2>
                <p>Uma das guilds mais antigas e respeitadas de Albion</p>
                <div class="banner-buttons">
                    <a href="#recruitment" class="btn-gold">
                        <i class="fas fa-sword"></i> Junte-se a nós
                    </a>
                    <a href="#roster" class="btn-silver">
                        <i class="fas fa-scroll"></i> Conheça a guild
                    </a>
                </div>
            </div>
        </section>

        <!-- Estatísticas da Guild -->
        <section class="guild-stats-section">
            <div class="section-header">
                <i class="fas fa-chart-line section-icon"></i>
                <h2>Estatísticas da Guild</h2>
            </div>
            <div class="stats-grid">
                <div class="stat-card">
                    <i class="fas fa-skull-crossbones"></i>
                    <div class="stat-detail">
                        <span class="stat-number">15,234</span>
                        <span class="stat-desc">Kills totais</span>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-heart-broken"></i>
                    <div class="stat-detail">
                        <span class="stat-number">8,901</span>
                        <span class="stat-desc">Mortes</span>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-chess-king"></i>
                    <div class="stat-detail">
                        <span class="stat-number">23</span>
                        <span class="stat-desc">Castelos</span>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-gem"></i>
                    <div class="stat-detail">
                        <span class="stat-number">847M</span>
                        <span class="stat-desc">Saqueados</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Membros em Destaque -->
        <section class="featured-members">
            <div class="section-header">
                <i class="fas fa-crown section-icon"></i>
                <h2>Liderança</h2>
            </div>
            <div class="members-grid">
                <div class="member-card leader">
                    <div class="member-rank">Guild Master</div>
                    <div class="member-avatar">
                        <i class="fas fa-user-circle"></i>
                        <span class="rank-crown"><i class="fas fa-crown"></i></span>
                    </div>
                    <h3>PhoenixKing</h3>
                    <div class="member-stats">
                        <span><i class="fas fa-fist-raised"></i> 45K kills</span>
                        <span><i class="fas fa-clock"></i> 4 anos</span>
                    </div>
                </div>
                <div class="member-card officer">
                    <div class="member-rank">Oficial</div>
                    <div class="member-avatar">
                        <i class="fas fa-user-circle"></i>
                        <span class="rank-shield"><i class="fas fa-shield-alt"></i></span>
                    </div>
                    <h3>WarriorQueen</h3>
                    <div class="member-stats">
                        <span><i class="fas fa-fist-raised"></i> 32K kills</span>
                        <span><i class="fas fa-clock"></i> 3 anos</span>
                    </div>
                </div>
                <div class="member-card officer">
                    <div class="member-rank">Oficial</div>
                    <div class="member-avatar">
                        <i class="fas fa-user-circle"></i>
                        <span class="rank-shield"><i class="fas fa-shield-alt"></i></span>
                    </div>
                    <h3>DarkKnight</h3>
                    <div class="member-stats">
                        <span><i class="fas fa-fist-raised"></i> 38K kills</span>
                        <span><i class="fas fa-clock"></i> 3.5 anos</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Territórios da Guild -->
        <section id="territories" class="guild-territories">
            <div class="section-header">
                <i class="fas fa-map-marked-alt section-icon"></i>
                <h2>Nossos Territórios</h2>
            </div>
            <div class="territory-map">
                <div class="territory-card bridgewatch">
                    <i class="fas fa-city"></i>
                    <h4>Bridgewatch</h4>
                    <p>Território principal • Nível 6</p>
                    <span class="territory-bonus">+15% Recursos</span>
                </div>
                <div class="territory-card martlock">
                    <i class="fas fa-mountain"></i>
                    <h4>Martlock</h4>
                    <p>Posto avançado • Nível 5</p>
                    <span class="territory-bonus">+10% Defesa</span>
                </div>
                <div class="territory-card caerleon">
                    <i class="fas fa-dragon"></i>
                    <h4>Caerleon</h4>
                    <p>Zona de guerra • Nível 7</p>
                    <span class="territory-bonus">+20% Fama</span>
                </div>
            </div>
        </section>

        <!-- Atividades Recentes -->
        <section class="recent-activities">
            <div class="section-header">
                <i class="fas fa-scroll section-icon"></i>
                <h2>Crônicas da Guild</h2>
            </div>
            <div class="activity-timeline">
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fas fa-trophy"></i></div>
                    <div class="timeline-content">
                        <h4>Conquista Épica</h4>
                        <p>Guild derrotou o chefe mundial "Morgana" em 23min</p>
                        <small>Há 2 dias</small>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fas fa-sword"></i></div>
                    <div class="timeline-content">
                        <h4>Guerra de Guilds</h4>
                        <p>Vitória contra "Dark Wolves" - 45 eliminações</p>
                        <small>Há 5 dias</small>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fas fa-gem"></i></div>
                    <div class="timeline-content">
                        <h4>Novo Recorde</h4>
                        <p>Membro "PhoenixKing" atinge 10M de fama em PvP</p>
                        <small>Há 1 semana</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Recrutamento -->
        <section id="recruitment" class="recruitment-section">
            <div class="recruitment-box">
                <div class="recruitment-text">
                    <h3><i class="fas fa-handshake"></i> Junte-se à Lenda</h3>
                    <p>Buscamos guerreiros dedicados para fortalecer nossas fileiras. Se você busca glória e batalhas épicas, seu lugar é aqui.</p>
                    <ul class="requirements">
                        <li><i class="fas fa-check-circle"></i> Mínimo 20M de fama PvE</li>
                        <li><i class="fas fa-check-circle"></i> Experiência em ZvZ</li>
                        <li><i class="fas fa-check-circle"></i> Microfone e Discord ativo</li>
                        <li><i class="fas fa-check-circle"></i> Disponibilidade para CTAs</li>
                    </ul>
                </div>
                <div class="recruitment-action">
                    <button class="btn-discord-large" onclick="loginWithDiscord()">
                        <i class="fab fa-discord"></i>
                        Candidate-se via Discord
                    </button>
                    <p class="small-text">Faça login com Discord para iniciar sua jornada</p>
                </div>
            </div>
        </section>

        <!-- Hall da Fama -->
        <section id="hall-of-fame" class="hall-of-fame">
            <div class="section-header">
                <i class="fas fa-star section-icon"></i>
                <h2>Hall da Fama</h2>
            </div>
            <div class="fame-carousel">
                <div class="fame-card">
                    <span class="rank">#1</span>
                    <i class="fas fa-user-circle"></i>
                    <h4>PhoenixKing</h4>
                    <p>47,234 kills</p>
                </div>
                <div class="fame-card">
                    <span class="rank">#2</span>
                    <i class="fas fa-user-circle"></i>
                    <h4>DarkKnight</h4>
                    <p>38,901 kills</p>
                </div>
                <div class="fame-card">
                    <span class="rank">#3</span>
                    <i class="fas fa-user-circle"></i>
                    <h4>WarriorQueen</h4>
                    <p>32,445 kills</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="guild-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Phoenix Rising</h4>
                <p>Desde 2017 escrevendo história em Albion</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-discord"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitch"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h4>Horários de CTA</h4>
                <p>🇧🇷 20:00 - ZvZ</p>
                <p>🇧🇷 22:00 - Hells</p>
                <p>🇧🇷 00:00 - Crystal</p>
            </div>
            <div class="footer-section">
                <h4>Contato</h4>
                <p><i class="fas fa-envelope"></i> phoenix.rising@albion.com</p>
                <p><i class="fab fa-discord"></i> discord.gg/phoenix</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Phoenix Rising. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>