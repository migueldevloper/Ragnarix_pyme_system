<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">Panel Vendedor</h1>
        <p class="page-description">Este espacio está diseñado para el equipo de ventas y punto de venta. Aquí se gestionan pedidos, caja y métricas comerciales.</p>

        <div class="card-grid">
            <section class="card-panel">
                <h2>Ventas del día</h2>
                <p class="page-description">Resumen rápido de ingresos y transacciones recientes.</p>
                <div style="display: grid; gap: 12px; margin-top: 20px;">
                    <div class="notification-item">
                        <div>
                            <strong>Total vendido</strong>
                            <div class="notification-meta">$12,450.00</div>
                        </div>
                    </div>
                    <div class="notification-item">
                        <div>
                            <strong>Pedidos completados</strong>
                            <div class="notification-meta">24 pedidos</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card-panel">
                <h2>Acciones rápidas</h2>
                <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-top: 16px;">
                    <button class="btn">Abrir caja</button>
                    <button class="btn" style="background: rgba(255,255,255,0.08); color: var(--text-secondary);">Nuevo pedido</button>
                    <button class="btn" style="background: rgba(255,255,255,0.08); color: var(--text-secondary);">Buscar cliente</button>
                </div>
            </section>
        </div>

        <div class="panel-split" style="margin-top: 24px;">
            <section class="card-panel">
                <h2>Pedidos recientes</h2>
                <div class="message-list">
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Orden #5341</strong>
                            <span class="message-meta">Cliente: Juan Pérez - En camino</span>
                        </div>
                        <span class="status-chip success">Entregado</span>
                    </div>
                    <div class="message-item">
                        <div class="message-summary">
                            <strong>Orden #5343</strong>
                            <span class="message-meta">Cliente: Mariela - Preparando</span>
                        </div>
                        <span class="status-chip warning">En proceso</span>
                    </div>
                </div>
            </section>

            <section class="card-panel">
                <h2>Inventario crítico</h2>
                <div class="notification-list">
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Baterías</strong>
                            <span class="notification-meta">Stock: 8 unidades</span>
                        </div>
                        <span class="status-chip warning">Reabastecer</span>
                    </div>
                    <div class="notification-item">
                        <div class="notification-summary">
                            <strong>Cables</strong>
                            <span class="notification-meta">Stock: 18 unidades</span>
                        </div>
                        <span class="status-chip warning">Revisión</span>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>