<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">Panel Compras</h1>
        <p class="page-description">Módulo para gestión de abastecimiento, proveedores y órdenes de compra.</p>

        <div class="card-grid">
            <section class="card-panel">
                <h2>Compras del mes</h2>
                <p class="page-description">Tendencia rápida de las compras registradas en el mes actual.</p>
                <div class="notification-item" style="margin-top: 18px;">
                    <div>
                        <strong>Montos totales</strong>
                        <div class="notification-meta">$34,870.00</div>
                    </div>
                </div>
            </section>
            <section class="card-panel">
                <h2>Órdenes pendientes</h2>
                <div class="notification-list" style="margin-top: 18px;">
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Orden #455</strong>
                            <span class="notification-meta">Proveedor: ElectroPro - Esperando recepción</span>
                        </div>
                        <span class="status-chip warning">Pendiente</span>
                    </div>
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Orden #462</strong>
                            <span class="notification-meta">Proveedor: MontaMarket - Confirmada</span>
                        </div>
                        <span class="status-chip success">Confirmada</span>
                    </div>
                </div>
            </section>
        </div>

        <div class="panel-split" style="margin-top: 24px;">
            <section class="card-panel">
                <h2>Proveedores frecuentes</h2>
                <div class="message-list">
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>ElectroPro</strong>
                            <span class="message-meta">Última compra: 5 días</span>
                        </div>
                    </div>
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>HogarSupply</strong>
                            <span class="message-meta">Última compra: 12 días</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card-panel">
                <h2>Costos acumulados</h2>
                <p class="page-description">Resumen de valores de compra actuales y comparación mensual.</p>
                <div style="display: grid; gap: 12px; margin-top: 16px;">
                    <div class="notification-item">
                        <strong>Total acumulado</strong>
                        <span class="notification-meta">$98,240.00</span>
                    </div>
                    <div class="notification-item">
                        <strong>Promedio semanal</strong>
                        <span class="notification-meta">$24,560.00</span>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>