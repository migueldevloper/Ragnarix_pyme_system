<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">Panel Cliente</h1>
        <p class="page-description">Espacio pensado para clientes que consultan catálogo, pedidos y soporte.</p>

        <div class="panel-split">
            <section class="card-panel">
                <h2>Pedidos recientes</h2>
                <div class="message-list">
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Orden #1479</strong>
                            <span class="message-meta">Enviado - En ruta</span>
                        </div>
                        <span class="status-chip success">Activo</span>
                    </div>
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Orden #1481</strong>
                            <span class="message-meta">Confirmado - Pendiente pago</span>
                        </div>
                        <span class="status-chip warning">Pendiente</span>
                    </div>
                </div>
            </section>

            <section class="card-panel">
                <h2>Información de cuenta</h2>
                <div class="profile-details">
                    <div class="profile-details-item">
                        <strong>Nombre</strong>
                        <span>Cliente Demo</span>
                    </div>
                    <div class="profile-details-item">
                        <strong>Correo</strong>
                        <span>cliente@demo.com</span>
                    </div>
                    <div class="profile-details-item">
                        <strong>Teléfono</strong>
                        <span>+57 300 123 4567</span>
                    </div>
                </div>
                <button class="btn" style="margin-top: 18px;">Ver historial de compras</button>
            </section>
        </div>

        <section class="card-panel" style="margin-top: 24px;">
            <h2>Acceso rápido</h2>
            <div style="display: grid; gap: 14px; margin-top: 16px;">
                <button class="btn">Ver catálogo</button>
                <button class="btn" style="background: rgba(255,255,255,0.08); color: var(--text-secondary);">Contactar soporte</button>
                <button class="btn" style="background: rgba(255,255,255,0.08); color: var(--text-secondary);">Mis direcciones</button>
            </div>
        </section>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>