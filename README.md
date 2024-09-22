# PHP 8.3 In-depth study

In-depth study of the PHP language repository, testing examples of each function of this object-oriented programming language from version 5 (currently 8.3).

PHP is interpreted; in other words, it is not compiled, except when using tools or extensions like Zend Opcache or HHVM (HipHop Virtual Machine) run engines.

> **For English readers:** Excuse me if some examples are in Spanish and for my grammar errors in both languages! 😄

I humbly acknowledge that I am using ChatGPT to generate so much code on my own because it is a tool that allows me to study this language in great depth effectively.

In fact, my goal is to know various ways to achieve the same result, questioning which one is the most optimal. Example - ¿Should I use native php array like [1,2,3] or the ArrayObject to get data from an external API (depends)?

## Native PHP vs PHP Extensions/Modules

My current PHP version is **8.3.11**. To know yours, run:

```bash
php -v
```

> **Note:** If it throws an error, it is because you haven't set the environment variable for PHP (of course, install it before setting the environment variable).

To know which modules/extensions are in your PHP installation, run:

```bash
php -m
```

## My Preinstalled PHP Modules by default on windows 11

- **bcmath**: Funciones para cálculos matemáticos de precisión arbitraria.
- **calendar**: Manipulación de calendarios y cálculo de fechas.
- **Core**: Núcleo de PHP, contiene funciones básicas y motor del lenguaje.
- **ctype**: Verificación de tipos de caracteres (alfabéticos, numéricos, etc.).
- **date**: Manipulación y formateo de fechas y horas.
- **dom**: Interfaz para trabajar con documentos XML (DOM).
- **filter**: Validación y filtrado de datos de entrada.
- **hash**: Cálculo y verificación de resúmenes de mensajes.
- **iconv**: Conversión entre diferentes codificaciones de caracteres.
- **json**: Codificación y decodificación de datos en formato JSON.
- **libxml**: Soporte para manipular y validar XML.
- **mysqlnd**: Controlador nativo para MySQL, optimiza el rendimiento.
- **pcre**: Funciones para trabajar con expresiones regulares.
- **PDO**: Interfaz de acceso a bases de datos con API uniforme.
- **Phar**: Creación y manipulación de archivos `.phar`.
- **random**: Generación de números y selecciones aleatorias.
- **readline**: Interfaz para entrada de texto en línea de comandos.
- **Reflection**: Inspección y análisis de clases y métodos en tiempo de ejecución.
- **session**: Gestión de sesiones en aplicaciones web.
- **SimpleXML**: Lectura y manipulación sencilla de XML.
- **SPL**: Estructuras de datos y funciones útiles para OOP.
- **standard**: Funciones estándar para diversas operaciones.
- **tokenizer**: Análisis y tokenización de scripts PHP.
- **xml**: Funciones para manipular documentos XML.
- **xmlreader**: Lectura eficiente de XML mediante eventos.
- **xmlwriter**: Escritura programática de documentos XML.
- **zlib**: Compresión y descompresión de datos.
