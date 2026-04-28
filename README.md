# Prueba Técnica – Backend / Full Stack (PHP + JavaScript)

Este proyecto fue desarrollado como solución a la prueba técnica solicitada.

La solución está dividida en cuatro partes: conocimientos técnicos, lógica de programación, desarrollo práctico (API REST + interacción DOM) y

---

## Características

Desarrollo en PHP sin uso de frameworks

Construcción de una API REST simple

Manejo de base de datos con MySQL

Ejercicios de lógica implementados en PHP

Interacción con el DOM usando JavaScript y jQuery

Separación de cada ejercicio en archivos independientes

---

## Tecnologías utilizadas

### Backend

PHP
MySQL
PDO

### Frontend

JavaScript (vanilla)
jQuery

---

## Estructura del proyecto

```id="qzq6y4"
seccion1/
seccion2/
seccion3/
│
├── api/
│   ├── db.php
│   └── usuarios_recientes.php
│
└── frontend/
    └── index.html
seccion4/
```

---

## Sección 1 – Conocimientos Técnicos

Contiene respuestas a preguntas teóricas relacionadas con:

Diferencias en PHP y JavaScript
Manejo de eventos en jQuery
Consultas SQL (JOINs)
Valores falsy

Cada respuesta se encuentra en un archivo independiente para facilitar su revisión.

---

## Sección 2 – Lógica de Programación

Se desarrollaron los siguientes ejercicios en PHP:

Palabra más larga en una cadena
Validación de paréntesis balanceados
Frecuencia de caracteres
FizzBuzz
Modelo de datos en SQL

Cada ejercicio se encuentra en un archivo independiente y puede ejecutarse directamente desde consola.

Ejemplo de cada ejecucion individual:

```bash id="yzkh9v"
php 1palabraMasLarga.php
php 2parentesisBalanceados.php
php 3frecuenciaCaracteres.php
php 4fizzbuzz.php
```

---

## Modelo de Datos

Se definieron dos tablas principales:

puntos_gestion
visitas

Este modelo permite:

Registrar visitas a diferentes puntos
Calcular distancia entre puntos (latitud y longitud)
Identificar puntos más visitados
Calcular duración promedio de visitas

---

## Sección 3 – Desarrollo Práctico

### API REST en PHP

Se implementó un endpoint:

GET /usuarios/recientes

Este endpoint retorna los usuarios registrados en los últimos 30 días.

### Funcionalidades

Conexión a base de datos usando PDO
Validación del método HTTP (GET)
Manejo de errores
Respuesta en formato JSON

---

### Configuración de la base de datos

El proyecto incluye un archivo SQL con la estructura y datos de prueba:

seccion3/api/andina_seguridad.sql

Este archivo contiene:

Creación de la base de datos andina_seguridad
Tabla usuarios
Datos de prueba

Cómo importar la base de datos

Puedes importar el archivo .sql usando herramientas como:

HeidiSQL
phpMyAdmin
MySQL Workbench

O desde consola:

mysql -u root -p < andina_seguridad.sql
Nota

El archivo ya incluye datos de prueba, por lo que la API puede ejecutarse directamente después de la importación.
---

### Ejecución de la API

Desde la raíz del proyecto:

```
php -S localhost:8000
```

Acceder en el navegador:

```
http://localhost:8000/seccion3/api/usuarios_recientes.php
```

---

### Ejercicio Frontend (DOM + jQuery)

Se creó una página que permite:

Ingresar un texto en un campo
Convertirlo a mayúsculas
Mostrar el resultado en pantalla

Se utilizó:

jQuery para el manejo del evento click
JavaScript puro para la lógica

Para probarlo ya que es un html solamente accedan dandole click al archivo y se abrira en el navegador

---

## Ejecución de pruebas

Cada archivo de la sección 2 puede ejecutarse de forma independiente.

---

## Notas

El proyecto fue desarrollado priorizando:

Código claro y fácil de entender
Separación de responsabilidades
Ejecución independiente de cada ejercicio

---

