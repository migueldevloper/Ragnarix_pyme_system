<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">Notificaciones</h1>
        <p class="page-description">Centro de notificaciones. Aquí se muestran alertas recientes del sistema, ventas y módulos de IA.</p>

        <section class="card-panel notification-section">
            <h2>Notificaciones recientes</h2>
            <div class="notification-list">
                <div class="notification-item">
                    <div class="notification-summary">
                        <strong>Nuevo pedido recibido</strong>
                        <span class="notification-meta">Orden #1284 - 10 min atrás</span>
                    </div>
                    <span class="status-chip success">Nuevo</span>
                </div>
                <div class="notification-item">
                    <div class="notification-summary">
                        <strong>Revisión de inventario</strong>
                        <span class="notification-meta">Producto LED bajo - 37 min atrás</span>
                    </div>
                    <span class="status-chip warning">Atención</span>
                </div>
                <div class="notification-item">
                    <div class="notification-summary">
                        <strong>Sesión iniciada</strong>
                        <span class="notification-meta">Usuario Admin Core - Hoy</span>
                    </div>
                    <span class="status-chip success">Seguro</span>
                </div>
            </div>
        </section>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
