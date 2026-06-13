# Qué debe aprender el equipo backend del frontend de este proyecto

Este documento describe los componentes frontend existentes y qué debe comprender el equipo backend para colaborar sin romper el diseño.

## 1. Estructura de front-end

Las vistas HTML y la interfaz están en `app/views/`.
- `app/views/layouts/`: layouts compartidos para todas las páginas
- Carpetas por módulo: `clientes/`, `perfil/`, `notificaciones/`, `vendedor/`, `bodega/`, `compras/`, `cliente/`, `intelligence/`

Ejemplo:
- `app/views/layouts/header.php`
- `app/views/layouts/sidebar.php`
- `app/views/layouts/navbar.php`
- `app/views/layouts/footer.php`
- `app/views/vendedor/vendedor_index.php`

## 2. Archivos de estilo y scripts

### CSS
- `public/css/app.css`
- Contiene variables, diseño de sidebar, navbar, cards, botones, responsive y estilos base.
- El frontend ya dejó los estilos iniciales; el backend debe respetar las clases y estructuras existentes.

### JavaScript
- `public/js/app.js`
- Controla el toggle del sidebar y el comportamiento de dropdowns.
- Evita cambiar el HTML sin revisar el JS porque puede romper interacciones.

## 3. Cómo se cargan los estilos y scripts

En `app/views/layouts/header.php`:
- se carga `public/css/app.css`
- se cargan librerías externas como Bootstrap, FontAwesome, Lucide

En `app/views/layouts/footer.php`:
- se carga `public/js/app.js`
- se carga Bootstrap JS

## 4. Qué debe entender el backend

### A. Los layouts compartidos
- `header.php` define el `<head>` y abre el `<body>` y layout.
- `sidebar.php` define el menú lateral.
- `navbar.php` define los controles superiores (notificaciones, mensajes, perfil).
- `footer.php` cierra la plantilla y agrega scripts.

El backend debe saber que cada vista incluye estos archivos con `require_once`.

### B. Las vistas específicas
- Cada vista de módulo contiene solo el contenido de la página.
- No debe duplicarse el header/sidebar/navbar/footer en cada vista.
- Si se necesita un nuevo módulo, debe crearse como vista en `app/views/<modulo>/<modulo>_index.php`.

### C. Uso de clases CSS
- El backend debe respetar las clases de diseño ya usadas: `page-title`, `page-description`, `card-panel`, `notification-item`, `status-chip`, `panel-split`, etc.
- Si agrega nuevos bloques, debería pedir al equipo frontend que añada estilos en `app.css`.

### D. Componentes de rol y menú
- El sidebar define secciones por rol.
- El backend debe generar contenido o estado de página según rol, pero el diseño y rutas deben mantenerse.

## 5. Qué archivos revisar cuando se agregue una nueva funcionalidad

- `app/views/layouts/sidebar.php` si se añade un nuevo enlace de módulo
- `app/views/layouts/navbar.php` si se necesita nuevo menú superior
- `public/css/app.css` si requiere nuevo estilo visual
- `public/js/app.js` si se necesita nueva interacción

## 6. Reglas para el backend

- No modificar directamente el HTML de los layouts sin coordinar con frontend.
- Si un controlador necesita una vista nueva, crea la vista en `app/views/<modulo>/` y usa la misma estructura de layout.
- Si necesitas pasar datos a la vista, hazlo con `$this->render('ruta', ['data' => $data])`.
- Evita insertar scripts inline en las vistas; usa `public/js/app.js` cuando sea posible.

## 7. Ejemplo práctico

Si el backend crea un nuevo módulo `reportesAvanzados`:
1. Crear `app/controllers/ReportesAvanzadosController.php`
2. Crear `app/views/reportesAvanzados/reportesAvanzados_index.php`
3. Incluir `require_once __DIR__ . '/../layouts/header.php';` y demás layouts
4. Mantener las clases CSS existentes y agregar solo lo necesario en `app.css`

---

Este documento es una guía para que el backend aprenda a respetar la interfaz y a colaborar con el frontend usando la estructura del proyecto actual.