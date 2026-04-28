-- Tabla de puntos de gestion
CREATE TABLE puntos_gestion (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  latitud DECIMAL(10,8),
  longitud DECIMAL(11,8)
);

-- Tabla de visitas
CREATE TABLE visitas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  punto_id INT,
  fecha_inicio DATETIME,
  fecha_fin DATETIME,
  duracion INT,

  INDEX (punto_id),
  FOREIGN KEY (punto_id) REFERENCES puntos_gestion(id)
);

-- en este modelo se puede calcular la distancia entre puntos gracias a ls campos (latitud/longitud)
-- se puede obtener los puntos mas visitados agregando COUNT a punto_id
-- tambien se puede calcular la duración promedio de visitas con (AVG)