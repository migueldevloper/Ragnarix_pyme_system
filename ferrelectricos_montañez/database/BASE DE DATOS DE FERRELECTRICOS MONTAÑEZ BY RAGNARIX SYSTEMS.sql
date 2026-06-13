CREATE DATABASE sistema_ventas; USE sistema_ventas;
CREATE TABLE usuario ( id_usuario INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(100) NOT
NULL, apellido VARCHAR(100) NOT NULL, correo VARCHAR(150) UNIQUE NOT NULL, telefono
VARCHAR(20), contrasena VARCHAR(255) NOT NULL, estado ENUM('Activo','Inactivo') DEFAULT 'Activo',
fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP ) ENGINE=InnoDB;
CREATE TABLE rol ( id_rol INT AUTO_INCREMENT PRIMARY KEY, nombre_rol VARCHAR(50) UNIQUE NOT
NULL, descripcion VARCHAR(255) ) ENGINE=InnoDB;

CREATE TABLE usuario_rol ( id_usuario INT, id_rol INT, PRIMARY KEY(id_usuario,id_rol),
FOREIGN KEY (id_usuario)
REFERENCES usuario(id_usuario)
ON DELETE CASCADE,
FOREIGN KEY (id_rol)
REFERENCES rol(id_rol)
ON DELETE CASCADE
) ENGINE=InnoDB;
CREATE TABLE permiso ( id_permiso INT AUTO_INCREMENT PRIMARY KEY, nombre_permiso
VARCHAR(100) UNIQUE NOT NULL, descripcion VARCHAR(255) ) ENGINE=InnoDB;

CREATE TABLE rol_permiso ( id_rol INT, id_permiso INT,
PRIMARY KEY(id_rol,id_permiso),
FOREIGN KEY (id_rol)
REFERENCES rol(id_rol)
ON DELETE CASCADE,
FOREIGN KEY (id_permiso)
REFERENCES permiso(id_permiso)
ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE cliente ( id_cliente INT AUTO_INCREMENT PRIMARY KEY,
id_usuario INT UNIQUE,
tipo_documento ENUM('CC','TI','CE','NIT'),
numero_documento VARCHAR(30),
FOREIGN KEY (id_usuario)
 REFERENCES usuario(id_usuario)
 ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE direccion_envio ( id_direccion INT AUTO_INCREMENT PRIMARY KEY,
id_cliente INT NOT NULL,
direccion VARCHAR(250) NOT NULL,
ciudad VARCHAR(100) NOT NULL,
departamento VARCHAR(100) NOT NULL,
referencia VARCHAR(255),
FOREIGN KEY (id_cliente)
REFERENCES cliente(id_cliente)
ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE proveedor ( id_proveedor INT AUTO_INCREMENT PRIMARY KEY,
nit VARCHAR(30) UNIQUE,
nombre VARCHAR(150) NOT NULL,
contacto VARCHAR(150),
telefono VARCHAR(20),
correo VARCHAR(150),
direccion VARCHAR(250),
estado ENUM('Activo','Inactivo')
DEFAULT 'Activo'
) ENGINE=InnoDB;

CREATE TABLE categoria ( id_categoria INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
descripcion TEXT
) ENGINE=InnoDB;
CREATE TABLE producto ( id_producto INT AUTO_INCREMENT PRIMARY KEY,
id_categoria INT NOT NULL,
codigo_barras VARCHAR(100) UNIQUE,
nombre VARCHAR(150) NOT NULL,
marca VARCHAR(100),
unidad_medida VARCHAR(50),
descripcion TEXT,
precio_compra DECIMAL(12,2) NOT NULL,
precio_venta DECIMAL(12,2) NOT NULL,
stock_actual INT DEFAULT 0,
stock_minimo INT DEFAULT 0,
estado ENUM('Activo','Inactivo')
DEFAULT 'Activo',
FOREIGN KEY (id_categoria)
REFERENCES categoria(id_categoria)
) ENGINE=InnoDB;
CREATE TABLE imagen_producto ( id_imagen INT AUTO_INCREMENT PRIMARY KEY,
id_producto INT NOT NULL,
ruta_imagen VARCHAR(255) NOT NULL,
principal BOOLEAN DEFAULT FALSE,
FOREIGN KEY (id_producto)
 REFERENCES producto(id_producto)
 ON DELETE CASCADE
) ENGINE=InnoDB;
CREATE TABLE entrada_inventario ( id_entrada INT AUTO_INCREMENT PRIMARY KEY,
id_proveedor INT NOT NULL,
fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
documento_soporte VARCHAR(150),
FOREIGN KEY (id_proveedor)
 REFERENCES proveedor(id_proveedor)
) ENGINE=InnoDB;
CREATE TABLE detalle_entrada ( id_detalle_entrada INT AUTO_INCREMENT PRIMARY KEY,
id_entrada INT NOT NULL,
id_producto INT NOT NULL,
cantidad INT NOT NULL,
costo_unitario DECIMAL(12,2) NOT NULL,
subtotal DECIMAL(12,2) NOT NULL,
FOREIGN KEY (id_entrada)
REFERENCES entrada_inventario(id_entrada)
ON DELETE CASCADE,
FOREIGN KEY (id_producto)
REFERENCES producto(id_producto)
) ENGINE=InnoDB;
CREATE TABLE salida_inventario ( id_salida INT AUTO_INCREMENT PRIMARY KEY,
fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
motivo VARCHAR(150) NOT NULL
) ENGINE=InnoDB;
CREATE TABLE detalle_salida ( id_detalle_salida INT AUTO_INCREMENT PRIMARY KEY,
id_salida INT NOT NULL,
id_producto INT NOT NULL,
cantidad INT NOT NULL,
FOREIGN KEY (id_salida)
REFERENCES salida_inventario(id_salida)
ON DELETE CASCADE,
FOREIGN KEY (id_producto)
REFERENCES producto(id_producto)
) ENGINE=InnoDB;
CREATE TABLE carrito ( id_carrito INT AUTO_INCREMENT PRIMARY KEY,
id_cliente INT NOT NULL,
fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (id_cliente)
 REFERENCES cliente(id_cliente)
 ON DELETE CASCADE
) ENGINE=InnoDB;
CREATE TABLE detalle_carrito ( id_detalle_carrito INT AUTO_INCREMENT PRIMARY KEY,
id_carrito INT NOT NULL,
id_producto INT NOT NULL,
cantidad INT NOT NULL,
FOREIGN KEY (id_carrito)
REFERENCES carrito(id_carrito)
ON DELETE CASCADE,
FOREIGN KEY (id_producto)
REFERENCES producto(id_producto)
) ENGINE=InnoDB;
-- ===================================================== -- PEDIDOS (ONLINE Y PRESENCIAL)
-- =====================================================
CREATE TABLE pedido ( id_pedido INT AUTO_INCREMENT PRIMARY KEY,
id_cliente INT NOT NULL,
id_usuario INT NULL,
id_direccion INT NULL,
canal ENUM(
'Presencial',
'Online'
) NOT NULL,
estado ENUM(
'Pendiente',
'Pagado',
'Preparando',
'Despachado',
'Entregado',
'Cancelado'
) DEFAULT 'Pendiente',
metodo_pago ENUM(
'Efectivo',
'Tarjeta',
'Transferencia',
'Nequi',
'Daviplata'
),
subtotal DECIMAL(12,2) NOT NULL,
iva DECIMAL(12,2) NOT NULL,
total DECIMAL(12,2) NOT NULL,
observaciones TEXT,
fecha_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,
fecha_pago DATETIME NULL,
fecha_entrega DATETIME NULL,
FOREIGN KEY (id_cliente)
REFERENCES cliente(id_cliente),
FOREIGN KEY (id_usuario)
REFERENCES usuario(id_usuario),
FOREIGN KEY (id_direccion)
REFERENCES direccion_envio(id_direccion)
) ENGINE=InnoDB;
CREATE TABLE detalle_pedido ( id_detalle_pedido INT AUTO_INCREMENT PRIMARY KEY,
id_pedido INT NOT NULL,
id_producto INT NOT NULL,
cantidad INT NOT NULL,
precio_unitario DECIMAL(12,2) NOT NULL,
subtotal DECIMAL(12,2) NOT NULL,
FOREIGN KEY (id_pedido)
REFERENCES pedido(id_pedido)
ON DELETE CASCADE,
FOREIGN KEY (id_producto)
REFERENCES producto(id_producto)
) ENGINE=InnoDB;
CREATE TABLE historial_pedido ( id_historial INT AUTO_INCREMENT PRIMARY KEY,
id_pedido INT NOT NULL,
estado VARCHAR(50) NOT NULL,
observacion TEXT,
fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (id_pedido)
REFERENCES pedido(id_pedido)
ON DELETE CASCADE
) ENGINE=InnoDB;
INSERT INTO rol(nombre_rol,descripcion) VALUES ('Administrador','Control total del sistema'),
('Vendedor','Gestion de ventas'), ('Cliente','Compras en linea'), ('Bodeguero','Gestion de inventario');
INSERT INTO permiso(nombre_permiso,descripcion) VALUES ('GESTIONAR_USUARIOS','Administrar
usuarios'), ('GESTIONAR_ROLES','Administrar roles'), ('GESTIONAR_PRODUCTOS','Administrar
productos'), ('GESTIONAR_INVENTARIO','Administrar inventario'), ('GESTIONAR_PEDIDOS','Administrar
pedidos'), ('REGISTRAR_VENTAS','Registrar ventas'), ('VER_REPORTES','Consultar reportes'),
('COMPRAR_PRODUCTOS','Realizar compras');
