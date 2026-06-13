<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">Panel Bodega</h1>
        <p class="page-description">Módulo para gestionar inventario, movimientos y stock crítico.</p>

        <div class="card-grid">
            <section class="card-panel">
                <h2>Stock bajo</h2>
                <div class="notification-list" style="margin-top: 18px;">
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Cables eléctricos</strong>
                            <span class="notification-meta">Stock: 6 unidades</span>
                        </div>
                        <span class="status-chip danger">Bajo</span>
                    </div>
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Interruptores</strong>
                            <span class="notification-meta">Stock: 12 unidades</span>
                        </div>
                        <span class="status-chip warning">Casi</span>
                    </div>
                </div>
            </section>
            <section class="card-panel">
                <h2>Productos agotados</h2>
                <div class="message-list" style="margin-top: 18px;">
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Bombillos LED</strong>
                            <span class="message-meta">Último movimiento: ayer</span>
                        </div>
                    </div>
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Regletas</strong>
                            <span class="message-meta">Último movimiento: hoy</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="panel-split" style="margin-top: 24px;">
            <section class="card-panel">
                <h2>Últimos movimientos</h2>
                <div class="message-list">
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Entrada de 120 barras</strong>
                            <span class="message-meta">Producto: Tubos PVC - 1 hora</span>
                        </div>
                    </div>
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Salida de 34 unidades</strong>
                            <span class="message-meta">Producto: Cinta aislante - 2 horas</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card-panel">
                <h2>Inventario valorizado</h2>
                <p class="page-description">Valor estimado del stock disponible y rotación de productos.</p>
                <div style="display: grid; gap: 12px; margin-top: 16px;">
                    <div class="notification-item">
                        <strong>Total inventario</strong>
                        <span class="notification-meta">$143,200.00</span>
                    </div>
                    <div class="notification-item">
                        <strong>Rotación alta</strong>
                        <span class="notification-meta">Paneles solares, cables</span>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>