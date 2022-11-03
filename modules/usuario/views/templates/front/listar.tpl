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
                <img src="{$_SERVER['REQUEST_URI']}/modules{$usuario[0].photo}" class="d-block w-100" alt="" onclick="showInformation('{$usuario[0].description}', '{$usuario[0].genre}')">
                <div class="carousel-caption"><h3>{$usuario[0].name} {$usuario[0].lastname}</h3></div>
            </div>
            {foreach array_slice($usuario, 1) as $u}
                <div class="carousel-item">
                    <img src="{$_SERVER['REQUEST_URI']}/modules{$u.photo}" class="d-block w-100" alt="" onclick="showInformation('{$u.description}', '{$u.genre}')">
                    <div class="carousel-caption"><h3>{$u.name} {$u.lastname}</h3</div>
                </div>
            {/foreach}
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<script>
    function showInformation(description, genre) {
        Swal.fire("Descripción: " + description + "\nGénero: " + genre);
    }
</script>