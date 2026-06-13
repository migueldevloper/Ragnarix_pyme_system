<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <div style="display:flex; align-items:center; justify-content:center; height:60vh;">
            <div style="background:rgba(17,21,54,0.6); padding:32px; border-radius:12px; width:360px; text-align:center;">
                <h2 style="margin-bottom:12px;">Login (placeholder)</h2>
                <p style="color:var(--text-secondary); font-size:14px;">La autenticación se implementará más adelante.</p>
                <button onclick="window.location='?page=dashboard'" class="btn-primary-action" style="margin-top:16px; width:100%;">Entrar (simulado)</button>
            </div>
        </div>

    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
