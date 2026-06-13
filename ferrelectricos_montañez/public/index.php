<?php
// Simple router: ?page=clientes, productos, inventario, etc.
$page = $_GET['page'] ?? 'login';

$map = [
	'dashboard' => 'DashboardController',
	'analytics' => 'AnalyticsController',
	'clientes' => 'ClientesController',
	'configuracion' => 'ConfiguracionController',
	'login' => 'LoginController',
	'intelligence' => 'IntelligenceController',
	'inventario' => 'InventarioController',
	'notificaciones' => 'NotificacionesController',
	'pedidos' => 'PedidosController',
	'perfil' => 'PerfilController',
	'mensajes' => 'MensajesController',
	'vendedor' => 'VendedorController',
	'bodega' => 'BodegaController',
	'compras' => 'ComprasController',
	'productos' => 'ProductosController',
	'proveedores' => 'ProveedoresController',
	'reportes' => 'ReportesController',
	'usuarios' => 'UsuariosController',
	'ventas' => 'VentasController',
];

if (!array_key_exists($page, $map)) {
	http_response_code(404);
	echo "Página no encontrada";
	exit;
}

$controllerName = $map[$page];
$controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';
if (!file_exists($controllerFile)) {
	http_response_code(500);
	echo "Controlador no encontrado";
	exit;
}

require_once __DIR__ . '/../app/controllers/BaseController.php';
require_once $controllerFile;
$ctrl = new $controllerName();
$ctrl->index();

