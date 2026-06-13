<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">Perfil</h1>
        <p class="page-description">Datos personales y ajustes de cuenta. Aquí el usuario puede revisar su información y cambiar configuraciones básicas.</p>

        <div class="panel-split">
            <section class="card-panel profile-card">
                <div class="profile-card-header">
                    <div class="profile-avatar-large">AC</div>
                    <div>
                        <h2>Admin Core</h2>
                        <p class="page-description">Administrador del sistema con acceso completo al panel y los módulos de IA.</p>
                    </div>
                </div>

                <div class="profile-details">
                    <div class="profile-details-item">
                        <strong>Nombre completo</strong>
                        <span>Administración Ragnarix</span>
                    </div>
                    <div class="profile-details-item">
                        <strong>Correo electrónico</strong>
                        <span>admin@ragnarix.com</span>
                    </div>
                    <div class="profile-details-item">
                        <strong>Rol</strong>
                        <span>Administrador principal</span>
                    </div>
                    <div class="profile-details-item">
                        <strong>Último acceso</strong>
                        <span>Hoy, 08:32 AM</span>
                    </div>
                </div>

                <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-top: 18px;">
                    <button class="btn">Editar Perfil</button>
                    <button class="btn" style="background: rgba(255,255,255,0.08); color: var(--text-secondary);">Cambiar Contraseña</button>
                </div>
            </section>

            <section class="card-panel">
                <h2>Actividad reciente</h2>
                <div class="notification-list">
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Inicio de sesión exitoso</strong>
                            <span class="notification-meta">Hace 19 minutos</span>
                        </div>
                        <span class="status-chip success">Listo</span>
                    </div>
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Solicitud de nueva API</strong>
                            <span class="notification-meta">Ayer</span>
                        </div>
                        <span class="status-chip warning">Revisión</span>
                    </div>
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Actualización de permisos</strong>
                            <span class="notification-meta">Hace 2 días</span>
                        </div>
                        <span class="status-chip success">Completo</span>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
