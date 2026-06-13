<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">Mensajes</h1>
        <p class="page-description">Centro de mensajes internos y soporte. Aquí se muestran conversaciones recientes y vistas rápidas de mensajes.</p>

        <div class="panel-split">
            <section class="card-panel">
                <div class="card-panel-header">
                    <div>
                        <h2>Conversations</h2>
                        <p class="page-description">Selecciona una conversación para ver el detalle.</p>
                    </div>
                    <button class="btn">Nuevo mensaje</button>
                </div>

                <div class="message-list">
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Soporte de pedidos</strong>
                            <span class="message-meta">¿Dónde está mi envío? - 12:24 PM</span>
                        </div>
                        <span class="status-chip success">Activo</span>
                    </div>
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Consulta de inventario</strong>
                            <span class="message-meta">Stock bajo en paneles LED - 09:18 AM</span>
                        </div>
                        <span class="status-chip warning">Pendiente</span>
                    </div>
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Solicitud de permiso</strong>
                            <span class="message-meta">Actualización de acceso de vendedor - Ayer</span>
                        </div>
                        <span class="status-chip success">Leído</span>
                    </div>
                </div>
            </section>

            <section class="card-panel message-preview">
                <h2>Vista previa</h2>
                <h3>Soporte de pedidos</h3>
                <p>Hola, me gustaría saber el estado de la orden #7845 y si puede entregarse antes del viernes. Muchas gracias.</p>
                <div class="message-meta">Enviado por: Cliente interno</div>
                <div class="message-meta">Estado: En proceso</div>
                <div style="margin-top: 22px; display: flex; gap: 12px; flex-wrap: wrap;">
                    <button class="btn">Responder</button>
                    <button class="btn" style="background: rgba(255,255,255,0.08); color: var(--text-secondary);">Marcar como leído</button>
                </div>
            </section>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>