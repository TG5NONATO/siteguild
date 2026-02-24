// Configurações do Discord
const DISCORD_CLIENT_ID = 'SEU_CLIENT_ID_AQUI';
const REDIRECT_URI = window.location.origin + window.location.pathname;

// Estado da aplicação
let currentUser = null;

document.addEventListener('DOMContentLoaded', () => {
    checkDiscordLogin();
    initializeParticles();
    loadGuildData();
});

// Inicializa efeito de partículas (opcional)
function initializeParticles() {
    // Você pode adicionar uma biblioteca de partículas aqui se quiser
    // Ou apenas deixar o CSS background
}

// Verifica login do Discord
function checkDiscordLogin() {
    const userData = localStorage.getItem('guild_user');
    
    if (userData) {
        currentUser = JSON.parse(userData);
        updateUIForLoggedUser();
    }
}

// Login com Discord
function loginWithDiscord() {
    // Simulação de login para demonstração
    // Em produção, use OAuth2 real
    const mockUser = {
        id: '123456789',
        username: 'Guerreiro Fênix',
        avatar: null
    };
    
    loginSuccess(mockUser);
}

function loginSuccess(user) {
    currentUser = user;
    localStorage.setItem('guild_user', JSON.stringify(user));
    updateUIForLoggedUser();
    
    // Mostrar notificação
    showNotification('Bem-vindo à Phoenix Rising, ' + user.username + '!');
}

function logoutDiscord() {
    localStorage.removeItem('guild_user');
    currentUser = null;
    updateUIForLoggedUser();
}

function updateUIForLoggedUser() {
    const connectBtn = document.querySelector('.discord-nav-btn');
    const connectedProfile = document.getElementById('discordConnected');
    
    if (currentUser) {
        connectBtn.style.display = 'none';
        connectedProfile.style.display = 'flex';
        document.getElementById('userName').textContent = currentUser.username;
        
        // Avatar
        const avatarUrl = currentUser.avatar 
            ? `https://cdn.discordapp.com/avatars/${currentUser.id}/${currentUser.avatar}.png`
            : 'https://cdn.discordapp.com/embed/avatars/0.png';
        document.getElementById('userAvatar').src = avatarUrl;
    } else {
        connectBtn.style.display = 'flex';
        connectedProfile.style.display = 'none';
    }
}

// Carrega dados da guild da API do Albion
async function loadGuildData() {
    const GUILD_ID = 'SEU_GUILD_ID_AQUI'; // ID da sua guild no Albion
    
    try {
        // Exemplo de chamada para API do Albion
        // const response = await fetch(`https://gameinfo.albiononline.com/api/gameinfo/guilds/${GUILD_ID}`);
        // const guildData = await response.json();
        
        // Por enquanto, vamos usar dados mockados
        updateGuildStats({
            members: 87,
            fame: 1200000000,
            kills: 15234,
            deaths: 8901,
            rank: 45
        });
        
    } catch (error) {
        console.error('Erro ao carregar dados da guild:', error);
    }
}

// Atualiza estatísticas da guild
function updateGuildStats(stats) {
    // Atualiza estatísticas no header
    document.querySelectorAll('.header-stat .stat-value')[0].textContent = `#${stats.rank}`;
    document.querySelectorAll('.header-stat .stat-value')[1].textContent = stats.members;
    document.querySelectorAll('.header-stat .stat-value')[2].textContent = formatNumber(stats.fame);
    
    // Atualiza cards de estatísticas
    const statNumbers = document.querySelectorAll('.stat-number');
    statNumbers[0].textContent = formatNumber(stats.kills);
    statNumbers[1].textContent = formatNumber(stats.deaths);
    statNumbers[2].textContent = '23'; // Castelos - mockado
    statNumbers[3].textContent = '847M'; // Saque - mockado
}

// Carrega atividades recentes
async function loadRecentActivities() {
    // Simulação de atividades
    const activities = [
        {
            type: 'Conquista Épica',
            description: 'Guild derrotou o chefe mundial "Morgana" em 23min',
            time: 'Há 2 dias',
            icon: 'trophy'
        },
        {
            type: 'Guerra de Guilds',
            description: 'Vitória contra "Dark Wolves" - 45 eliminações',
            time: 'Há 5 dias',
            icon: 'sword'
        },
        {
            type: 'Novo Recorde',
            description: 'Membro "PhoenixKing" atinge 10M de fama em PvP',
            time: 'Há 1 semana',
            icon: 'gem'
        }
    ];
    
    displayActivities(activities);
}

function displayActivities(activities) {
    const timeline = document.querySelector('.activity-timeline');
    if (!timeline) return;
    
    timeline.innerHTML = '';
    activities.forEach(activity => {
        const item = document.createElement('div');
        item.className = 'timeline-item';
        item.innerHTML = `
            <div class="timeline-icon"><i class="fas fa-${activity.icon}"></i></div>
            <div class="timeline-content">
                <h4>${activity.type}</h4>
                <p>${activity.description}</p>
                <small>${activity.time}</small>
            </div>
        `;
        timeline.appendChild(item);
    });
}

// Formata números
function formatNumber(num) {
    if (num >= 1000000000) {
        return (num / 1000000000).toFixed(1) + 'B';
    }
    if (num >= 1000000) {
        return (num / 1000000).toFixed(1) + 'M';
    }
    if (num >= 1000) {
        return (num / 1000).toFixed(1) + 'K';
    }
    return num.toString();
}

// Mostra notificação
function showNotification(message) {
    // Você pode implementar um sistema de notificações aqui
    alert(message); // Simplificado para demonstração
}

// Smooth scroll para âncoras
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Inicialização
loadRecentActivities();