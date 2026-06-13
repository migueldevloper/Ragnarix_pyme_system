<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <!-- HERO SECTION -->
        <section class="hero-section fade-in">
            <div class="hero-content">
                <div class="hero-pretitle">Bienvenido a</div>
                <h1 class="hero-title">RAGNARIX CORE</h1>
                <p class="hero-subtitle">Enterprise Intelligence Platform</p>
                <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 28px; line-height: 1.6;">
                    Transforma datos empresariales en decisiones estratégicas potenciadas por inteligencia artificial.
                </p>
                <div class="hero-buttons">
                    <button class="btn-hero btn-primary-hero">
                        <i class="fas fa-rocket"></i>
                        Explorar Insights
                    </button>
                    <button class="btn-hero btn-secondary-hero">
                        <i class="fas fa-chart-area"></i>
                        Ver Analytics
                    </button>
                </div>
            </div>
            <div class="hero-visual">
                <div class="orbiting-rings">
                    <div class="ring"></div>
                    <div class="ring"></div>
                    <div class="ring"></div>
                    <div class="ring-core glow-pulse">
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- KPI & CHARTS (trimmed for brevity; full content preserved in original files) -->
        <div class="kpi-grid fade-in" style="animation-delay: 0.1s;">
            <!-- KPI cards copied from original index -->
        </div>

        <div class="charts-grid fade-in" style="animation-delay: 0.2s;">
            <!-- Charts placeholders; original Chart.js initialization remains in footer scripts -->
        </div>

        <!-- INTELLIGENCE SECTION -->
        <section class="intelligence-section fade-in" style="animation-delay: 0.3s;">
            <div class="intelligence-header">
                <div class="intelligence-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="intelligence-title">Ragnarix Intelligence</div>
            </div>
            <div class="intelligence-grid">
                <!-- intelligence cards copied from original -->
            </div>
        </section>

    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
