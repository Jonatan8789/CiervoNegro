-- Crear tabla de productos
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    imagen VARCHAR(255),
    colores JSON,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insertar algunos productos de ejemplo
INSERT INTO productos (nombre, descripcion, precio, categoria, imagen, colores) VALUES
('Remera club lisa', 'Remera de Equipo lisa.', 5000.00, 'remeras', 'assets/productos/CN_Julio_2505.jpg', '[{"nombre": "Blanco", "hex": "#ffffff", "imagen": "assets/productos/CN_Julio_2503.jpg"}, {"nombre": "Negro", "hex": "#000000", "imagen": "assets/productos/CN_Julio_2505.jpg"}, {"nombre": "Rojo", "hex": "#ff0000", "imagen": "assets/productos/CN_Julio_2504.jpg"}]'),
('Remera club Bordada', 'Remera bordada equipo', 1200.00, 'remeras', 'assets/productos/CN_Julio_2528.jpg', '[{"nombre": "Blanco", "hex": "#ffffff", "imagen": "assets/productos/CN_Julio_2528.jpg"}]'),
('Buzo bordado', 'Buzo bordado equipo', 35000.00, 'buzos', 'assets/productos/Remera_personalizada_frente.png', '[{"nombre": "Gris", "hex": "#cccccc", "imagen": "assets/productos/CN_Julio_2508.jpg"}, {"nombre": "Azul", "hex": "#0033cc", "imagen": "assets/productos/CN_Julio_2509.jpg"}]');
