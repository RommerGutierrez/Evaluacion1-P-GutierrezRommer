<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<h1>Universidad Politécnica Territorial del estado Aragua "Federico Brito Figueroa" - PNF en Informática</h1>

<h2>Estudiante: Rommer Tomás Gutiérrez Oliveros</h2>    

<h2>Enunciado Asignado: #5 (Streaming de Video)</h2>
<strong>Columnas:</strong>
<ul>
    <li>id</li>
    <li>titulo (string)</li>
    <li>duracionMinutos (integer)</li>
    <li>calificacion (float)</li>
    <li>estreno (date)</li>
</ul>

<h2>Instrucciónes para inicializar el proyecto (en VSCode):</h2>
<p><strong>AVISO: Antes de proceder, si tiene algún antivirus (principalmente Avast) instalado, se sugiere que lo desactive antes de empezar. Esto debido a que durante las pruebas se ha visto que este interfiere con la correcta instalacion de componentes, dependencias y la ejecución de servidores locales de Laravel detectando erroneamente archivos esenciales como amenazas en un falso positivo.</strong></p>
<h3>1. Prerrequisitos:</h3>
<ul>
    <li>Git instalado.</li>
    <li>Composer instalado.</li>
    <li>Sevidor MySQL (preferiblemente XAMPP).</li>
    <li>Visual Studio Code</li>
</ul>

<h3>2. Clonar el Proyecto</h3>
<ol>
    <li>Abre Visual Studio Code y abre una terminal (Ctrl + ñ o Terminal > New Terminal)</li>
    <li>Navega a la carpeta donde quieras guardar el proyecto (por ejemplo: cd documentos)</li>
    <li>
        Ejecuta el siguiente comando bash en la terminal:<br>
        <pre><code>git clone https://github.com/RommerGutierrez/Evaluacion1-P-GutierrezRommer.git</code></pre>
    </li>
    <li>Entra en la carpeta del proyecto</li>
    <li>Abre la carpeta en VSCode (ya sea arrastrandola a la ventana de VSCode o yendo a File > Open Folder</li>
</ol>

<h3>3. Configuración y Ejecución</h3>
<ol>
    <li>
        Instalar dependencias de PHP mediante el siguiente comando en la terminal:<br>
        <pre><code>composer install</code></pre>
    </li>
    <li> Configurar el entorno:
        <ol>
        <li>
            Copia el archivo .env de ejemplo (<code>.env.example</code>) mediante el siguiente comando en la terminal:<br> <pre><code>copy .env.example .env</code></pre>
        </li>
        <li>
            Abre el nuevo archivo <code>.env</code> en VS Code y (de ser necesario) ajusta las credenciales referentes a la base de datos hasta que queden de la siguiente manera:.<br>
            <pre><code>
                    DB_CONNECTION=mysql<br>
                    DB_HOST=127.0.0.1<br>
                    DB_PORT=3306<br>
                    DB_DATABASE=evaluacion_laravel<br>
                    DB_USERNAME=root<br>
                    DB_PASSWORD=<br>
            </code></pre>
        </li>
        </ol>
    </li>
    <li>
        Generar la clave de la aplicación en el archivo <code>.env</code> (para garantizar la seguridad e integridad de los datos):<br>
        <pre><code>php artisan key:generate</code></pre>
    </li>
    <li>Crea una base de datos vacía en tu gestor MySQL (en este caso, se recomienda PHPMyAdmin) con el nombre que se encuentra en el archivo <code>.env</code></li>
    <li>
        Ejecutar migraciones junto con los datos de prueba utilizando el siguiente comando:<br>
        <pre><code>php artisan migrate --seed</code></pre>
    </li>
    <li>
        Iniciar el servidor:<br>
        <pre><code>php artisan serve</code></pre><br>
        <p>Visita <code>http://127.0.0.1:8000/peliculas</code> en tu navegador</p>
    </li>
</ol>
