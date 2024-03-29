<html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="../css/style2.css?" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css?">
    <link href="../css/archivos.css?" rel="stylesheet" type="text/css">	
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">    
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>


    <title>Justicia juvenil</title>
	</head>

    <div>

    <div>
        
            <div class="coma">
            <img class="logo" src="../img/logo.webp" width="300" height="300">
            </div>
            <div class="titulo">
         <h1 class="text">Justicia Juvenil</h1>
            <div class="bg"></div>
            <div class="bg bg2"></div>
            <div class="bg bg3"></div>
    </div>
    
    </div >


        <div class="barra">
    <div class="hiper">
        <a class="color" href="../index.html">Inicio</a>
        <a class="color" href="doctrina.php">Doctrina</a>
        <a class="color" href="judiprudencia.php">Jurisprudencia</a>
        <a class="color">Sitios de interes</a>
        <a class="color" href="cursos.php">Cursos</a>
    </div>
        </div>


        <body>
<div class="fondo"> 


        <div class="archivocaja">
        <?php
        include 'conn.php';

        // si el usuario se logueo ahora se muestra esto
        // busca los nombres y paths de los archivos
        $stmt = $pdo->prepare('SELECT nombre, filename, image FROM documents WHERE categoria= 1 ORDER BY nombre ASC');
        $stmt->execute();

        // itera a traves de ellos y los muestra como links
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //lo de abajo trae la imagen del pdf y funciona como link
            echo '<a href="pdfs/' . $row['filename'] . '" target="_blank"><img src="img/' . $row['image'] . '" width="10%" height="10%"></a>';
            echo ' <a class="archivo" href="pdfs/' . $row['filename'] . '" target="_blank">' . $row['nombre'] . ' </a>  <br>';
            echo '<br>';
        }
            ?>
        </div>
        </body>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../img/logo.webp" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
            </div>
            <div class="box box2">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2021 <b>SLee Dw</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</div>
</html>