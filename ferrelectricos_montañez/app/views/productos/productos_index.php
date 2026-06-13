<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
<main class="main-content" id="mainContent">
    <div class="content-wrapper">
        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <div class="page-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h1 class="page-title">Productos</h1>
                    <p style="color: var(--text-secondary); font-size: 14px;">Gestión completa del catálogo de productos</p>
                </div>
                <div class="header-actions">
                    <button class="btn-primary-action" id="newProductBtn">
                        <i class="fas fa-plus"></i> Nuevo Producto
                    </button>
                </div>
            </div>
        </div>

        <div class="products-table">
            <div class="table-header">
                <div>Producto</div>
                <div>Categoría</div>
                <div>Precio</div>
                <div>Stock</div>
                <div>Estado</div>
                <div>Acciones</div>
            </div>
            <div id="productsContainer">
                <div class="table-row" style="justify-content: center;">
                    <div style="grid-column: 1 / -1; text-align:center; color:var(--text-secondary); padding:24px;">
                        No hay productos aún. Agregue productos cuando la funcionalidad esté disponible.
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
