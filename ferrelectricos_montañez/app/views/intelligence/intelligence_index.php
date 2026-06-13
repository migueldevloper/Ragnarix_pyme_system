<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <h1 class="page-title">Ragnarix Intelligence</h1>
        <p class="page-description">Panel IA inicial. Diseño listo para integrar con PHP, Python y APIs externas.</p>

        <section class="card-panel ia-panel">
            <div class="ia-panel-header">
                <div>
                    <h2>Generador de prompts</h2>
                    <p class="page-description">Usa esta sección como base para crear y ejecutar prompts de IA en el futuro.</p>
                </div>
                <button class="btn">Ver historial</button>
            </div>

            <div class="ia-prompt">
                <label for="promptInput" style="color: var(--text-secondary); font-size: 14px;">Ingresa un prompt para la IA</label>
                <textarea id="promptInput" class="input-field" rows="5" placeholder="Ejemplo: Genera un resumen de ventas semanales con recomendaciones"></textarea>
                <button class="btn">Ejecutar prompt</button>
            </div>

            <div class="ia-output card-panel">
                <h3>Resultado de IA</h3>
                <pre>El resultado aparecerá aquí cuando se conecte el módulo IA con datos reales y APIs.</pre>
            </div>
        </section>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
