<html> 
<head>
    <meta charset="utf-8">
    <title>404 - Documento no encontrado</title>
    <!-- script type="text/javascript" src="js/jquery.min.js"></script -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body> 
    <div class="container" style="min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
        <div class="row">
            <div class="col-md-8">
                <h1>404 - Documento no encontrado</h1>
                <h3>El documento: <b><?=$_SERVER['REQUEST_URI'];?></b> 
                no ha sido encontrado en nuestro servidor.<br> 
                El error ha sido comunicado al administrador del sitio. Disculpe las molestias 
                ocasionadas.
                <h3>
                <?PHP
                    $fecha = date('d-m-Y H:i:s');
                    $para='webmaster@misitio.com';
                    $asunto='Documento no encontrado.';
                    $mensaje='El documento: ' . $_SERVER['REQUEST_URI'] . ' no ha sido encontrado en el sitio: ' .$_SERVER['SERVER_NAME']. ' al tratar de ser accedido el ' . $fecha . '.';
                    mail($para, $asunto, $mensaje);
                ?>
                <!--
                IE filler
                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                --> 
            </div>
        </div>
    </div>
</body>
</html>