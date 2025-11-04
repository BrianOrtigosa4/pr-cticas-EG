<?php
$mensajeEnviado = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensajeEnviado = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3 - Bootstrap + PHP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .sidebar {
            background-color: lightgray;
            height: 100vh;
            padding: 20px;
        }
        .green-box {
            background-color: lightgreen;
            padding: 20px;
        }
        .blue-box {
            background-color: lightblue;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar">
            <h4>Sidebar</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#miModal">Abrir Modal</button>
        </div>
        <div class="col-md-9">
            <div class="green-box mt-3">
                <div class="alert alert-success">
                    Esto es una alerta de éxito dentro del div verde!
                </div>
            </div>
            <div class="row mt-3">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Card <?= $i ?></h5>
                                <p class="card-text">Contenido de la tarjeta <?= $i ?></p>
                                <button class="btn btn-secondary btn-sm">Ver más</button>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="blue-box mt-3">
                <h4>Slider</h4>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://picsum.photos/800/300?random=1" alt="Primera imagen">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://picsum.photos/800/300?random=2" alt="Segunda imagen">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://picsum.photos/800/300?random=3" alt="Tercera imagen">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <div class="mt-5">
                <h3>Formulario de Contacto</h3>

                <?php if ($mensajeEnviado): ?>
                    <div class="alert alert-success">Formulario enviado con éxito!</div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Asunto</label>
                        <input type="text" name="asunto" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea name="mensaje" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mi Modal</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Contenido del modal...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


