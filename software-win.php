<?php include("top.php"); ?>
<?php include("nav.php"); ?>
<h1>Instalando Python 3 En Windows 10</h1>
<p><b>Nota:</b> Cualquier version reciente rezonable de Python es aceptable para este curso.
Si usted tiene una version de Python 3.x en su computadora deberia poder usarla para esta clase.
</p>
<p>Por favor, descargue e instale Python 3.x desde:</p>
<p><a href="http://www.python.org/download/" target="_blank">http://www.python.org/download/</a></p>
<p>Luego de instalar Python, asegurate de marcar "Add Python 3.5 to PATH" para que puedas escribir <b>python</b> en el símbolo del sistema para ejecutar Python.
</p>
<b>Instalando Atom Text Editor</b>
<p>Descargue e instale Atom desde este sitio:
</p>
<p><a href="http://atom.io" target="_blank">http://atom.io</a>

<h1>Escribiendo un programa de Python 3 con Atom en Windows-10</h1>
<p>
Tenemos un video paso por paso
<a href="https://www.youtube.com/watch?v=uZbaYeYGYRQ&index=1&list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p" target="_blank">
</a> enseñando como instalar Python 3 y Atom y escribir su primer programa.
<p>
<h1>Notas del la línea de comandos (Command Line) de Windows</h1>
<p>
Cuando la Simbolo de Sistema (Command Line) <b style="color:black;background-color:#a0ffff">inicia</b>, estaras en tu directorio de "Inicio". Su directorio de inicio es diferente para cada uno de los sistemas operativos.
En cada uno de estos ejemplos, se debe utilizar su cuenta iniciada en lugar de csev.
<pre>
    Windows XP:             C:\Documentos y Ajustes\csev
    Windows Vista:          C:\Usuarios\csev
    Windows 7:              C:\Usuarios\csev
    Windows 10:             C:\Usuarios\csev
</pre>
El símbolo del sistema (Command Line) generalmente incluye alguna pista sobre 
dónde se encuentra en la estructura de carpetas de su disco duro.
<p>Si realmente quieres saber dónde estás, utiliza el comando cd sin parámetros:
<pre>
    C:\Users\csev> cd
    C:\Users\csev
</pre>
<p>
¿A donde puedes ir?
</p>
<p>
Generalmente, lo primero que se debe hacer al abrir una interfaz de Simbolo de Sistema (Command Line) es navegar a la carpeta correcta. Supongamos que se desea ejecutar un archivo desde el escritorio.
   El comando es <b>cd Desktop</b> para entrar a la carpeta que es tu Escritorio.  Puedes usar el comando <b>dir</b> para ver cuales archivos estan en el directorio y el comando <b>cd ..</b> para ir "<b style="color:black;background-color:#a0ffff">arriba</b>" en el directorio
</p>
<p> 
<b>Truco ingenioso:</b>  En el comando cd, puede escribir parcialmente el nombre de una carpeta, como Escritorio, y luego presionar la tecla TAB y el sistema completará automáticamente el nombre de la carpeta si ha escrito lo suficiente para que el sistema pueda adivinar con precisión lo que desea escribir.
<p>
Si te perdiste...
<p>
Si no sabe en qué carpeta se encuentra y/o cómo acceder a la carpeta deseada, simplemente cierre y vuelva a abrir la ventana del símbolo del sistema (Command Line) o la terminal. Volverá a su directorio de "inicio", por lo que podrá empezar desde una ubicación conocida.
<p>
Algunos consejos interesantes sobre la interfaz del símbolo del sistema (Command Line) de Windows
<p>
Si hace clic en el pequeño ícono ubicado en la esquina superior izquierda de la ventana del símbolo del sistema y selecciona Preferencias, puede configurar muchas cosas sobre la línea de comando; probablemente la más importante sea configurar el tamaño del búfer del historial de comandos en 999.
<p>
<h1>Ejecutando su programa Python en el símbolo del sistema (Command Line)</h1>
<p>
Para ejecutar su programa en la línea de comandos, escriba en el símbolo del sistema. Windows reconoce que los archivos que terminan con el sufijo ".py" son programas Python.
<pre>
    python firstprog.py
</pre>
or
<pre>
    
</pre>
Donde firstprog.py es el nombre del archivo que contiene tu programa de Python.  
Asegurate de que usas el comando cd para estar en el directorio correcto que contenga(n) tu(s) archivo(s) del programa(s)correct directory that contains your program file(s).
</p>
<p> 
Puede ejecutar su programa repetidamente en la ventana de comandos.  
Consejo: Puede usar la flecha <b style="color:black;background-color:#a0ffff">arriba</b>-para retroceder en los comandos anteriores y volver a ejecutarlos presionando Intro. Esto le permite editar y volver a ejecutar su programa rápidamente para realizar cambios y probarlos.
</p>
<?php include('footer.php');?>
  
