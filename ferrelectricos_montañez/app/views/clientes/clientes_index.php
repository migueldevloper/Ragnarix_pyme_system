<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">CRM - Gestión de Clientes</h1>

        <div class="customers-grid">
            <div class="customer-card">
                <div style="text-align:center; padding:40px; color:var(--text-secondary);">
                    <p style="font-weight:600;">Sin datos de clientes</p>
                    <p>Este proyecto es escolar: agregue clientes desde la funcionalidad cuando esté implementada.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
