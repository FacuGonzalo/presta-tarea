<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container">
    <div id="carousel" class="carousel slide pointer-event" data-ride="carousel" style="width:400px;margin:auto;">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1" class=""></li>
            <li data-target="#carousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{$_SERVER['REQUEST_URI']}/modules{$usuario[0].photo}" class="d-block w-100" alt="" onclick="showInformation('{$usuario[0].name}', '{$usuario[0].lastname}', '{$usuario[0].description}', '{$usuario[0].genre}')">
                <div class="carousel-caption"><h3>{$usuario[0].name} {$usuario[0].lastname}</h3></div>
            </div>
            <div class="carousel-item">
                <img src="{$_SERVER['REQUEST_URI']}/modules{$usuario[1].photo}" class="d-block w-100" alt="" onclick="showInformation('{$usuario[1].name}', '{$usuario[1].lastname}', '{$usuario[1].description}', '{$usuario[1].genre}')">
                <div class="carousel-caption"><h3>{$usuario[1].name} {$usuario[1].lastname}</h3></div>
            </div>
            <div class="carousel-item">
                <img src="{$_SERVER['REQUEST_URI']}/modules{$usuario[2].photo}" class="d-block w-100" alt="" onclick="showInformation('{$usuario[2].name}', '{$usuario[2].lastname}', '{$usuario[2].description}', '{$usuario[2].genre}')">
                <div class="carousel-caption"><h3>{$usuario[2].name} {$usuario[2].lastname}</h3></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<script>
    function showInformation(name, lastname, description, genre) {
        Swal.fire("Nombre: " + name + " " + "\nApellido: " + lastname + "\nDescripción: " + description + "\nGénero: " + genre);
    }
</script>