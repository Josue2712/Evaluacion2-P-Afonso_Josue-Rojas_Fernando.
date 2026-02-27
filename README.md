<p align="center">
    <a href="https://laravel.com/" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <h1>Universidad Politécnica Territorial "Federico Brito Figueroa"</h1>
    <h2>PNF en Informática</h2>

    <h3>📌 Evaluación 2 - Paradigmas de Programación</h3>
    <h3>👥 Integrantes: Josue Afonso - Fernando Rojas</h3>

    <h3>📚 Enunciado Asignado: #4 - Escuela</h3>
    <strong>Relación:</strong> Curso (Padre) → Estudiante (Hijo)<br/>
    <strong>Campos de la tabla Hija (Estudiantes):</strong><br/>
    ▪ nombre (required)<br/>
    ▪ email (email, unique)<br/>
    ▪ fecha_nacimiento (date)<br/>
    (Relacionado con un curso a través de curso_id)

    <h2>⚙️ Instrucciones para inicializar el proyecto</h2>
    1️⃣ Clonar el repositorio:<br/>
    &nbsp;&nbsp;&nbsp;git clone https://github.com/Josue2712/Evaluacion2-P-Afonso_Josue-Rojas_Fernando.git<br/>
    2️⃣ Instalar dependencias:<br/>
    &nbsp;&nbsp;&nbsp;composer install<br/>
    3️⃣ Configurar archivo .env para SQLite:<br/>
    &nbsp;&nbsp;&nbsp;DB_CONNECTION=sqlite<br/>
    &nbsp;&nbsp;&nbsp;# (Eliminar o comentar las líneas de MySQL)<br/>
    4️⃣ Crear la base de datos SQLite:<br/>
    &nbsp;&nbsp;&nbsp;En Windows PowerShell: New-Item -Path database\database.sqlite -ItemType File -Force<br/>
    5️⃣ Generar clave de aplicación:<br/>
    &nbsp;&nbsp;&nbsp;php artisan key:generate<br/>
    6️⃣ Ejecutar migraciones:<br/>
    &nbsp;&nbsp;&nbsp;php artisan migrate<br/>
    7️⃣ (Opcional) Insertar datos de prueba:<br/>
    &nbsp;&nbsp;&nbsp;php artisan tinker<br/>
    &nbsp;&nbsp;&nbsp;DB::table('cursos')->insert([...]);<br/>
    8️⃣ Iniciar servidor de desarrollo:<br/>
    &nbsp;&nbsp;&nbsp;php artisan serve<br/>
    9️⃣ Acceder a la aplicación:<br/>
    &nbsp;&nbsp;&nbsp;Estudiantes: http://127.0.0.1:8000/estudiantes<br/>
    &nbsp;&nbsp;&nbsp;Cursos: http://127.0.0.1:8000/cursos<br/>
</p>
