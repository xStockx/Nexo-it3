# Nexo-IT Consultores - Sitio Web Corporativo

## Acerca de la Empresa

**Nexo-IT Consultores** es una empresa con amplia experiencia en distintas plazas de Latinoamérica que trabaja con la tecnología informática. Desde el año 2007 estamos establecidos en Chile, con oficinas en Providencia, Santiago.

### Nuestra Organización

Contamos con una importante nómina estable y hemos establecido una red de Consultores externos en diversos países del continente (Argentina, Colombia y Uruguay) en función de sus conocimientos específicos en temas particulares. Tenemos el know-how necesario para llevar a cabo tareas a distancia.

Nuestro personal está integrado por:
- **Consultores Técnicos**: Programadores, Analistas, Ingenieros
- **Consultores Funcionales**: Auditores Contadores, Técnicos en Administración de Empresas, Técnicos Contables

Con roles que incluyen: Jefes de Línea, Encargados QA, Jefes de Proyecto, Gerente de Servicios y Supervisores.

## Servicios Principales

### 🔧 Consultoría (PMO)
- Relevamiento, análisis y diagnósticos para definir alcances de proyectos
- Desarrollo de software "a medida"
- Implementación de productos con sus interfaces
- Planificación, definición de responsables y compromisos

### 🔄 Mantenimiento de Aplicaciones (Outsourcing)
- Dotación de equipos técnicos y funcionales
- Corrección de código y mejoras evolutivas
- Servicios bajo Niveles de Servicios (SLA) acordados
- Call Center y Mesa de Gestión de Incidencias

### 🖥️ Mantenimiento de Infraestructura TI
- Instalación de motores de base de datos, antivirus, FTP, IIS
- Seguridad informática, VPNs, Antispam, firewall
- Administración de bases de datos y programación SQL
- Soporte en redes y telecomunicaciones

### ✅ Quality Assurance (QA)
- Definición de casos de prueba y casos de uso
- Matrices de validación y testeo de aplicaciones
- Servicios in-house o outsourcing

## Tecnologías Utilizadas

### Stack del Proyecto Web
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Backend**: PHP
- **Servidor Web**: Apache/IIS compatible
- **Base de Datos**: Compatible con MySQL, PostgreSQL, SQL Server

### Tecnologías de la Empresa

#### Herramientas Especializadas
- **GeneXus**: Especialistas con décadas de experiencia
- **SAP**: Integración con SAP Netweaver y middleware SAP-PI

#### Arquitecturas Soportadas
- Múltiples capas
- Basadas en Web
- Cliente/Servidor
- Arquitecturas orientadas a Servicios (SOA)

#### Plataformas
- AS-400
- Unix (Linux, Ubuntu)
- Windows Servers
- Windows Mobile

#### Bases de Datos
- IBM-DB2
- Oracle
- MS SQL Server
- MySQL
- Sybase

#### Servidores de Aplicaciones
- WebSphere
- Web Logic Servers
- Apache Tomcat
- MS IIS

#### Lenguajes de Programación
- .NET (VB, C#)
- Java, JEE
- SAP ABAP
- PHP
- HTML 5

#### Herramientas de Integración
- SAP Netweaver y SAP-PI
- Microsoft Integration Services (SSIS)
- Workflow, Reporting y Data Warehousing

## Instalación y Configuración

### Requisitos Previos
- PHP 7.4 o superior
- Servidor web (Apache/Nginx)
- Base de datos (MySQL recomendado)

### Instalación Local

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/xStockx/Nexo-it3.git
   cd Nexo-it3
   ```

2. **Configurar servidor web local**
   ```bash
   # Usando PHP built-in server
   php -S localhost:8000
   ```

3. **Acceder al sitio**
   - Abrir navegador en `http://localhost:8000`

### Configuración de Producción

1. **Configurar servidor web**
   - Apuntar DocumentRoot a la carpeta del proyecto
   - Configurar PHP con extensiones necesarias

2. **Configurar base de datos** (si es necesario)
   - Crear base de datos para funcionalidades de contacto
   - Configurar credenciales en archivos de configuración

3. **Configurar envío de correos**
   - Revisar y configurar `enviarCorreo.php`
   - Configurar SMTP según el proveedor

## Estructura del Proyecto

```
Nexo-it3/
├── css/                    # Estilos CSS
│   ├── bootstrap.min.css
│   ├── estilo.css
│   └── style.css
├── js/                     # Scripts JavaScript
│   ├── jquery.js
│   ├── bootstrap.min.js
│   └── enviarCorreo.js
├── views/                  # Vistas PHP
│   ├── head.view.php
│   ├── header.view.php
│   ├── empresa.view.php
│   ├── servicios.view.php
│   ├── tecnologias.view.php
│   └── productos.view.php
├── img/                    # Imágenes
├── index.php              # Página principal
├── empresa.php            # Página de empresa
├── servicios.php          # Página de servicios
├── tecnologias.php        # Página de tecnologías
├── productos.php          # Página de productos
└── enviarCorreo.php       # Funcionalidad de contacto
```

## Pros y Contras del Despliegue

### ✅ Ventajas

#### Tecnológicas
- **Simplicidad**: Arquitectura PHP simple y fácil de mantener
- **Compatibilidad**: Funciona en la mayoría de servidores web
- **Escalabilidad**: Fácil de escalar horizontalmente
- **Costo**: Tecnologías open source reducen costos de licencias
- **Flexibilidad**: Fácil personalización y modificación

#### Empresariales
- **Experiencia Comprobada**: Más de 15 años en el mercado
- **Cobertura Regional**: Presencia en múltiples países de Latinoamérica
- **Diversidad Tecnológica**: Amplio stack de tecnologías soportadas
- **Servicios Integrales**: Desde consultoría hasta mantenimiento completo

### ❌ Desventajas

#### Tecnológicas
- **Arquitectura Básica**: No utiliza frameworks modernos (Laravel, Symfony)
- **Seguridad**: Código PHP plano puede ser más vulnerable
- **Mantenimiento**: Estructura sin patrones modernos puede ser difícil de mantener
- **Performance**: Sin optimizaciones como caché, CDN, etc.
- **Responsive**: Diseño puede no ser completamente responsive

#### Empresariales
- **Dependencia Regional**: Enfoque principalmente en Latinoamérica
- **Tecnologías Legacy**: Algunas tecnologías pueden estar desactualizadas
- **Escalabilidad Empresarial**: Puede requerir reestructuración para grandes volúmenes

## Consideraciones de Seguridad

### Recomendaciones de Despliegue
- Actualizar PHP a versión más reciente
- Implementar HTTPS
- Configurar headers de seguridad
- Validar y sanitizar todas las entradas
- Implementar rate limiting para formularios
- Configurar backups regulares

### Mantenimiento
- Actualizar dependencias regularmente
- Monitorear logs de errores
- Implementar sistema de monitoreo
- Realizar pruebas de seguridad periódicas

## Contacto

**Nexo-IT Consultores**  
📍 Providencia, Santiago de Chile  
🌐 Presencia en Argentina, Colombia y Uruguay  
📧 [Formulario de contacto en el sitio web]

---

*Este README fue creado para proporcionar una visión completa del proyecto y las capacidades de Nexo-IT Consultores. Para más información sobre nuestros servicios, visite nuestro sitio web.*