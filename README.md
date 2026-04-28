# Prueba Técnica – Backend / Full Stack (PHP + JavaScript)

Este proyecto fue desarrollado como solución a la prueba técnica solicitada.

La solución está dividida en cuatro secciones: conocimientos técnicos, lógica de programación, desarrollo práctico (API REST + interacción DOM) y preguntas abiertas.

---

## Características

- Desarrollo en PHP sin uso de frameworks
- Construcción de una API REST simple
- Manejo de base de datos con MySQL
- Ejercicios de lógica implementados en PHP
- Interacción con el DOM usando JavaScript y jQuery
- Separación de cada ejercicio en archivos independientes

---

## Tecnologías utilizadas

### Backend
- PHP
- MySQL
- PDO

### Frontend
- JavaScript (vanilla)
- jQuery

---

### Requisitos

Para ejecutar este proyecto es necesario tener instalado:

PHP 7.4 o superior 
MySQL
Un navegador web

También puede utilizar entornos como:

XAMPP
Laragon

Estos ya incluyen PHP y MySQL configurados.

Opcional:

Herramienta de gestión de base de datos (HeidiSQL, phpMyAdmin, MySQL Workbench)

---

## Estructura del proyecto

```
prueba-tecnica/
│
├── seccion1/          # Respuestas a preguntas teóricas
│
├── seccion2/          # Ejercicios de lógica en PHP
│   ├── 1palabraMasLarga.php
│   ├── 2parentesisBalanceados.php
│   ├── 3frecuenciaCaracteres.php
│   ├── 4fizzbuzz.php
│   └── 5modeloDatos.sql
│
├── seccion3/
│   ├── api/
│   │   ├── db.php
│   │   ├── usuarios_recientes.php
│   │   └── andina_seguridad.sql
│   └── frontend/
│       └── index.html
│
└── seccion4/          # Preguntas abiertas
```

---

## Sección 1 – Conocimientos Técnicos

Contiene respuestas a preguntas teóricas relacionadas con:

- Diferencias entre `==` y `===` en PHP
- Comportamiento de `NaN` en JavaScript
- Manejo de eventos en jQuery
- Consultas SQL (INNER JOIN vs LEFT JOIN)
- Valores falsy en PHP y JavaScript

Cada respuesta se encuentra en un archivo independiente dentro de la carpeta `seccion1/`.

---

## Sección 2 – Lógica de Programación

Se desarrollaron los siguientes ejercicios en PHP:

- Palabra más larga en una cadena
- Validación de paréntesis balanceados
- Frecuencia de caracteres
- FizzBuzz
- Modelo de datos en SQL

Cada ejercicio está en un archivo independiente y puede ejecutarse directamente desde consola:

```bash
php seccion2/1palabraMasLarga.php
php seccion2/2parentesisBalanceados.php
php seccion2/3frecuenciaCaracteres.php
php seccion2/4fizzbuzz.php
```

---

## Modelo de Datos

Se definieron dos tablas principales:

- `puntos_gestion`
- `visitas`

Este modelo permite:

- Registrar visitas a diferentes puntos de gestión
- Calcular la distancia entre puntos usando latitud y longitud
- Identificar los puntos con mayor cantidad de visitas
- Calcular la duración promedio por visita

El archivo SQL se encuentra en `seccion2/modeloDatos.sql`.

---

## Sección 3 – Desarrollo Práctico

### API REST en PHP

Se implementó el siguiente endpoint:

```
GET /usuarios/recientes
```

Retorna los usuarios registrados en los últimos 30 días en formato JSON.

**Funcionalidades:**

- Conexión a base de datos usando PDO
- Validación del método HTTP (solo GET)
- Manejo de errores con códigos HTTP apropiados
- Respuesta en formato JSON

---

### Configuración de la base de datos

El proyecto incluye un archivo SQL con la estructura y datos de prueba:

```
seccion3/api/andina_seguridad.sql
```

Este archivo contiene:

- Creación de la base de datos `andina_seguridad`
- Estructura de la tabla `usuarios`
- Datos de prueba listos para usar

**Importar desde consola:**

```bash
mysql -u root -p < seccion3/api/andina_seguridad.sql
```

O usando herramientas como HeidiSQL, phpMyAdmin o MySQL Workbench.

> El archivo ya incluye datos de prueba, por lo que la API puede probarse directamente después de la importación.

---

### Ejecución de la API

Desde la raíz del proyecto, iniciar el servidor local de PHP:

```bash
php -S localhost:8000
```

Luego acceder en el navegador:

```
http://localhost:8000/seccion3/api/usuarios_recientes.php
```

---

### Ejercicio Frontend (DOM + jQuery)

Se creó una página HTML que permite:

- Ingresar un texto en un campo
- Convertirlo a mayúsculas al hacer clic en el botón
- Mostrar el resultado en pantalla

**Tecnologías usadas:**
- jQuery para el manejo del evento click
- JavaScript puro para la lógica de transformación

**Para probarlo:** abrir el archivo `seccion3/frontend/index.html` directamente en el navegador.

---

## Notas

El proyecto fue desarrollado priorizando:

- Código claro y fácil de mantener
- Separación de responsabilidades
- Ejecución independiente de cada ejercicio