# Frontend Checklist para Ragnarix System

## Qué archivos ya están listos como plantillas
- `public/css/app.css`
- `public/js/app.js`
- `app/views/mensajes/mensajes_index.php`
- `app/views/perfil/perfil_index.php`
- `app/views/notificaciones/notificaciones_index.php`
- `app/views/intelligence/intelligence_index.php`
- `app/views/vendedor/vendedor_index.php`
- `app/views/bodega/bodega_index.php`
- `app/views/compras/compras_index.php`
- `app/views/layouts/navbar.php`
- `app/views/layouts/sidebar.php`
- `app/views/layouts/header.php`
- `app/views/layouts/footer.php`

## Roles y páginas clave
- Administrador: `dashboard/dashboard_index.php`
- Vendedor: `app/views/vendedor/vendedor_index.php`
- Bodega: `app/views/bodega/bodega_index.php`
- Compras: `app/views/compras/compras_index.php`
- Mensajes: `app/views/mensajes/mensajes_index.php`
- Notificaciones: `app/views/notificaciones/notificaciones_index.php`
- Perfil: `app/views/perfil/perfil_index.php`
- IA: `app/views/intelligence/intelligence_index.php`

## Reglas de acceso por rol
- El sistema debe abrir el panel según el rol autenticado.
- Un vendedor no debe acceder a módulos de configuración, usuarios ni administración de clientes fuera de las ventas.
- El catálogo debe comportarse como un mini ecommerce para pedidos internos/ventas rápidas.
- La forma de pago será contra entrega, no hay integración con métodos de pago online.
- Para ventas, se debe registrar código de factura/venta y demás datos como en un POS, pero sin hardware adicional.

## Qué NO deben tocar
- `public/index.php`
- `app/controllers/*`
- `app/core/*`
- `app/models/*`
- `config/*`

Esos archivos controlan rutas, controladores, carga de vistas y conexión a base de datos.

## Qué debe ir en cada archivo

### `public/css/app.css`
- Tipografía real del proyecto
- Variables de color y branding
- Layout principal: sidebar, navbar, main content
- Cards, botones, badges, inputs, formularios
- Estilos responsive para desktop / tablet / móvil
- Apoyo visual para el panel IA, vendedor y cliente

### `public/js/app.js`
- Abrir y cerrar dropdowns en la navbar
- Toggle del sidebar
- Click fuera para cerrar menús
- Animaciones suaves
- Base para futura integración con datos dinámicos

### `app/views/layouts/header.php`
- Incluir hoja de estilos global
- Mantener el `<head>` limpio de contenido específico
- Colocar el logo real cuando esté disponible
- No añadir lógica de página aquí

### `app/views/layouts/sidebar.php`
- Menú principal del sistema
- Enlaces existentes: Dashboard, Mensajes, Notificaciones, Perfil, Vendedor, Cliente
- El equipo debe estilizarlo, no cambiar rutas
- Mantener jerarquía clara entre secciones

### `app/views/layouts/navbar.php`
- Iconos de notificaciones, mensajes, documentos
- Badge con números
- Dropdowns de interacción visual
- Perfil con dropdown de opciones
- Ninguna lógica de backend aquí, sólo diseño

### `app/views/layouts/footer.php`
- Incluir `public/js/app.js`
- Mantener scripts globales
- No poner lógica de negocio o datos reales aquí

## Qué deben completar en cada vista

### `app/views/mensajes/mensajes_index.php`
- Lista de conversaciones
- Vista previa de mensaje
- Botón `Nuevo mensaje`
- Estilos para estados y cards

### `app/views/perfil/perfil_index.php`
- Información del usuario
- Avatar, nombre, correo, rol
- Botones: editar perfil, cambiar contraseña
- Sección de actividad reciente

### `app/views/notificaciones/notificaciones_index.php`
- Lista de notificaciones recientes
- Clasificar nuevas / importantes
- Cards limpias y ordenadas

### `app/views/intelligence/intelligence_index.php`
- Panel IA inicial
- Área de prompt
- Botón `Ejecutar`
- Resultado de ejemplo
- Historial / tarjetas de estado

### `app/views/vendedor/vendedor_index.php`
- Panel de ventas
- Pedidos recientes
- Inventario crítico
- Acciones rápidas de punto de venta
- Catálogo de productos para venta rápida
- Registro de código de venta/factura y datos de cliente
- Pago contra entrega (solo registro de método)

### `app/views/cliente/cliente_index.php`
- Panel para cliente
- Pedidos recientes
- Datos de cuenta
- Botones de acceso rápido

## Sugerencias generales
- El catálogo debe funcionar como mini ecommerce interno para vendedor y cliente.
- El vendedor no debe tocar módulos de clientes avanzados ni configuración.
- El sistema debe mostrar solo las opciones permitidas por rol.
- Usar la fuente y logo del branding real
- Mantener coherencia de colores y formas
- Responder con un diseño responsive desde el inicio
- Dejar espacios para datos reales sin tocar la lógica backend
- El backend se conectará después, no deben implementar consultas ahora
- No cambiar nombres de rutas ni páginas ya establecidas

## Mensaje para el equipo
Las plantillas ya están listas y disponibles como base. El equipo frontend debe trabajar únicamente sobre:
- `public/css/app.css`
- `public/js/app.js`
- `app/views/layouts/*.php`
- `app/views/mensajes/mensajes_index.php`
- `app/views/perfil/perfil_index.php`
- `app/views/notificaciones/notificaciones_index.php`
- `app/views/intelligence/intelligence_index.php`
- `app/views/vendedor/vendedor_index.php`
- `app/views/bodega/bodega_index.php`
- `app/views/compras/compras_index.php`
- `app/views/cliente/cliente_index.php`

No deben tocar:
- `public/index.php`
- `app/controllers/*`
- `app/core/*`
- `app/models/*`
- `config/*`

Esta guía ya contiene qué debe ir en cada vista. Su trabajo es completar diseños, estilos y estructura visual, no la lógica de datos ni las consultas.

### Resumen rápido para el equipo
1. Usar las plantillas existentes como punto de partida.
2. Diseñar cada página con el estilo corporativo y responsive.
3. No modificar rutas ni controladores.
4. Dejar espacios claros para datos que se conectarán después desde el backend.
5. Confirmar que el sidebar y navbar se vean consistentes para cada rol.
