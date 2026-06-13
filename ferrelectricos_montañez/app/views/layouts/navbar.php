<!-- NAVBAR -->
<nav class="navbar-custom">
    <div class="navbar-left">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Buscar usuarios, productos, pedidos...">
        </div>
    </div>
    <div class="navbar-right">
        <div class="navbar-icon" title="Notificaciones" data-action="notifications">
            <i class="fas fa-bell"></i>
            <div class="notification-badge">5</div>
            <div class="dropdown-panel">
                <a class="dropdown-item" href="?page=notificaciones">
                    <i class="fas fa-bell"></i>
                    <span>Ver todas las notificaciones</span>
                </a>
                <a class="dropdown-item" href="?page=notificaciones">
                    <i class="fas fa-star"></i>
                    <span>Notificación importante</span>
                </a>
            </div>
        </div>
        <div class="navbar-icon" title="Mensajes" data-action="messages">
            <i class="fas fa-envelope"></i>
            <div class="notification-badge">3</div>
            <div class="dropdown-panel">
                <a class="dropdown-item" href="?page=mensajes">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Ir a Mensajes</span>
                </a>
                <a class="dropdown-item" href="?page=mensajes">
                    <i class="fas fa-paper-plane"></i>
                    <span>Nuevo mensaje</span>
                </a>
            </div>
        </div>
        <div class="navbar-icon" title="Documentos" data-action="documents">
            <i class="fas fa-file-alt"></i>
            <div class="dropdown-panel">
                <a class="dropdown-item" href="?page=configuracion">
                    <i class="fas fa-folder-open"></i>
                    <span>Documentos recientes</span>
                </a>
            </div>
        </div>
        <div class="profile-section" id="profileSection">
            <div class="profile-avatar">AC</div>
            <div class="profile-text">
                <div class="profile-name">Admin Core</div>
                <div class="profile-role">Administrador</div>
            </div>
            <div class="profile-dropdown">
                <a href="?page=perfil" class="profile-dropdown-item" id="profileLink">
                    <i class="fas fa-user"></i>
                    <span>Mi Perfil</span>
                </a>
                <a href="?page=configuracion" class="profile-dropdown-item" id="settingsLink">
                    <i class="fas fa-cog"></i>
                    <span>Configuración</span>
                </a>
                <a href="?page=login" class="profile-dropdown-item logout" id="logoutLink">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar Sesión</span>
                </a>
            </div>
        </div>
    </div>
</nav>
