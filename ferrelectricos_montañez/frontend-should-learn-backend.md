# Qué debe aprender el equipo frontend del backend de este proyecto

Este documento explica los componentes backend existentes y qué debe comprender el equipo frontend para trabajar bien con ellos.

## 1. Flujo principal de la aplicación

El punto de entrada es `public/index.php`.
- Lee `?page=` desde la URL.
- Usa un mapa de rutas para convertir el valor en un controlador.
- Carga `BaseController.php` y el controlador correspondiente.
- Llama al método `index()` del controlador.

Ejemplo de ruta:
- `?page=clientes` → `ClientesController`
- `?page=vendedor` → `VendedorController`

## 2. Controladores

Los controladores están en `app/controllers/`.

Un controlador típico:
- extiende `BaseController`
- carga modelos con `loadModel('NombreModelo')`
- renderiza una vista con `$this->render('ruta/a/vista.php', $data)`

Ejemplo:
- `app/controllers/ClientesController.php`
- `app/controllers/VendedorController.php`

## 3. BaseController

`app/controllers/BaseController.php` centraliza:
- la conexión a la base de datos
- la carga de modelos
- la renderización de vistas

Funciones clave:
- `getDb()`: crea y devuelve un objeto PDO usando `config/database.php` y `app/core/Database.php`
- `loadModel()`: carga la clase del modelo, la instancia con la conexión y la devuelve
- `render()`: extrae datos y carga la vista correspondiente

## 4. Modelos y base de datos

Los modelos están en `app/models/`.
- Cada modelo extiende `BaseModel.php`
- Guarda `$db` como PDO para ejecutar consultas

La configuración de DB está en `config/database.php`.
- Contiene `driver`, `host`, `port`, `database`, `username`, `password`, `charset`

La clase `Database` en `app/core/Database.php` construye el DSN y crea la conexión PDO.

## 5. Vistas y layouts

Las vistas se encuentran en `app/views/`.
- Cada sección tiene su propia carpeta: `clientes/`, `perfil/`, `notificaciones/`, `vendedor/`, etc.
- Las plantillas comparten layouts en `app/views/layouts/`

Layouts comunes:
- `header.php`
- `sidebar.php`
- `navbar.php`
- `footer.php`

Las vistas individuales incluyen estos layouts con `require_once`.

## 6. Qué debe entender el frontend

### A. Cómo se enlazan las vistas
- No deben mover archivos sin avisar al equipo backend.
- El frontend debe saber que `render('clientes/clientes_index.php')` carga `app/views/clientes/clientes_index.php`.

### B. Qué datos pueden llegar desde el backend
- Los controladores pasan variables a la vista usando `$data`.
- En la vista se accede a esas variables directamente después de `extract($data)`.
- Ejemplo: `['clienteModel' => $clienteModel]`.

### C. No modificar controladores sin permiso
- El frontend puede solicitar nuevas variables o datos.
- Pero no debe cambiar la lógica de carga de controladores ni la construcción de modelos.

### D. Cómo funcionan los roles
- El backend debe decidir qué rol está autenticado y qué páginas puede ver.
- El frontend debe diseñar menús y páginas respetando esos roles.
- Si se necesita un nuevo rol, el backend debe agregar la validación y el frontend solo el diseño.

## 7. Qué archivos crear o revisar

### Backend de ejemplo para frontend
- `public/index.php`
- `app/controllers/BaseController.php`
- `app/controllers/ClientesController.php`
- `app/controllers/VendedorController.php`
- `app/controllers/BodegaController.php`
- `app/controllers/ComprasController.php`
- `app/models/BaseModel.php`
- `app/core/Database.php`
- `config/database.php`

## 8. Consejos para aprender

- Abre cada controlador y sigue el `render()` hasta la vista.
- Observa cómo se pasan datos desde el backend a las vistas.
- Comprende que los modelos son responsables de acceder a la base de datos.
- Si necesitas nuevos datos en una vista, pide al backend que agregue la variable en `$data`.

---

Este documento es una guía: el frontend debe usarlo para no tocar la lógica de backend y para saber dónde solicitar cambios cuando falten datos.