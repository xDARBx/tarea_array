<?php
function datos_productos() {
    
    return [
        [
        'id'=>'1',
        'nombre'=>'zapatos',
        'precio'=>100000,
        'imagen'=>"https://imgs.search.brave.com/Wv9YvUIvcXOxjp11yEyJpiffyljcPeJgNBAm7Hz-ppg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/Y3JlYXRlLnZpc3Rh/LmNvbS9hcGkvbWVk/aWEvc21hbGwvNDM4/MDUxMC9zdG9jay1w/aG90by1ibGFjay1t/YWxlLXNob2VzLWlz/b2xhdGVkLW9uLXRo/ZS13aGl0ZS1tb3Jl/LWZvb3R3YXJlLWlu/LW15LXBvcg"
        ],
        [
        'id'=>'2',
        'nombre'=>'zapatillas',
        'precio'=>120000,
        'imagen'=>"https://imgs.search.brave.com/HexlCJ-2zKsz9S1BvGrZKaejwXw2balWKZupU9hHIlQ/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudW5zcGxhc2gu/Y29tL3Bob3RvLTE1/NDIyOTEwMjYtN2Vl/YzI2NGMyN2ZmP2F1/dG89Zm9ybWF0JmZp/dD1jcm9wJnE9ODAm/dz0xMDAwJml4bGli/PXJiLTQuMC4zJml4/aWQ9TTN3eE1qQTNm/REI4TUh4elpXRnlZ/Mmg4TW54OGVtRndZ/WFJ2ZkdWdWZEQjhm/REI4Zkh3dw"
        ],
        [
        'id'=>'3',
        'nombre'=>'gorra',
        'precio'=>1400,
        'imagen'=>"https://imgs.search.brave.com/w5az4lCa8hPW45bfMTQjfvLJ_36NWLKqEOIOMkt64UY/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/Zm90by1ncmF0aXMv/Z29ycmEtbmVncmEt/YWlzbGFkYV8xMjU1/NDAtMTAyMy5qcGc_/c2l6ZT02MjYmZXh0/PWpwZw"
        ],
        [
        'id'=>'4',
        'nombre'=>'remera',
        'precio'=>3500,
        'imagen'=>"https://imgs.search.brave.com/LGac8rFsUH6L02pdOPVvwe8cKplJDMVj5V9CKRQW8N0/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1wc2Qv/d2hpdGUtdC1zaGly/dC1tb2RlbC1mcm9u/dC12aWV3LW1vY2t1/cF8xMjU1NDAtODYx/LmpwZz9zaXplPTYy/NiZleHQ9anBn"
        ],
        [
        'id'=>'5',
        'nombre'=>'pantalón',
        'precio'=>17000,
        'imagen'=>"https://imgs.search.brave.com/8zjoLBpDLpMeGy074xnhXjsJkoxfhcvFCLMPVSdFous/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cGhvdG9zLXByZW1p/dW0vcGFudGFsb24t/cGFudGFsb24tY2Fy/Z28tbWFycm9uLW1h/bGUtaXNvbGUtZm9u/ZC1ibGFuY18yNTky/MjktOTUyLmpwZz9z/aXplPTYyNiZleHQ9/anBn"
        ],
        [
        'id'=>'6',
        'nombre'=>'buzo',
        'precio'=>12500,
        'imagen'=>"https://imgs.search.brave.com/U8-sshjHCWcgx3161jSSSUeIJcWTw0gvBMpipjeXJuE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMuc3RpY2twbmcu/Y29tL2ltYWdlcy81/OGUzOGNjMzIwNGQ1/NTZiYmQ5N2IxNWIu/cG5n"
        ],
        [
        'id'=>'7',
        'nombre'=>'cinto',
        'precio'=>1500,
        'imagen'=>"https://imgs.search.brave.com/4AWwSmkEzCPLGHa5UTIBy8y2Y3KZ6PNvOeXTk-geCrE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMuc3RpY2twbmcu/Y29tL3RodW1icy81/ODBiNTdmYmQ5OTk2/ZTI0YmM0M2JlZDYu/cG5n"
        ],
        [
        'id'=>'8',
        'nombre'=>'short',
        'precio'=>2000,
        'imagen'=>"https://imgs.search.brave.com/dKC1tpf4HiTcn-QCHBrq0ZV4nBLMqXjmdWFdwk0hZDc/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1wc2Qv/c2hvcnRzLXNwb3J0/LW1vY2t1cF8xODE5/NDUtMTM2NS5qcGc_/c2l6ZT02MjYmZXh0/PWpwZw"
        ],
        [
        'id'=>'9',
        'nombre'=>'campera',
        'precio'=>15000,
        'imagen'=>"https://imgs.search.brave.com/ci_oikHJ-s69LDmRjMKScbU0CsFNuhgVSuT0Rjz8FLo/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9odHRw/Mi5tbHN0YXRpYy5j/b20vRF9OUV9OUF84/MTczODUtTUxBNDcz/NjczNzE4MzZfMDky/MDIxLVYud2VicA"
        ],
        [
        'id'=>'10',
        'nombre'=>'jean',
        'precio'=>12000,
        'imagen'=>"https://imgs.search.brave.com/VjcTjipAovwHL0uFRkSr5nteTBBNCjU76pTMEKvYGOM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTM3/MzA4NDMwL2VzL2Zv/dG8vYXp1bC1vc2N1/cm8tdmFxdWVyb3Mt/ZGUtZGlzZSVDMyVC/MW8tcGFyYS1ob21i/cmVzLWZvbmRvLWJs/YW5jby5qcGc_cz02/MTJ4NjEyJnc9MCZr/PTIwJmM9cEh6UTla/MXBvQ01yV1F4WUN0/aThoY1I0VFdwM0Uw/Q21idjNhcWx4UEFC/cz0"
        ],
        ];
};


$productos = datos_productos();

foreach ($productos as $producto) {
   		  
    /* echo "<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $producto['id'] ?></h5>
      <p class="card-text"><?php echo $producto['nombre'] ?></p>
      <p class="card-text"><?php echo $producto['precio'] ?></p>
      
    </div>"; */
    
} 
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tarea ForEach</title>
  </head>


  <body class="row">
    <h1 class="text-center">For Each Producto en su Card</h1>

<?php
    foreach ($productos as $producto) {
        ?>


  <div class="col-3 m-auto">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
  <img src="<?php echo $producto['imagen'] ?>" class="card-img-top" alt="card-imagen">
  <div class="card-body">
    <h5 class="card-title">Código: <?php echo $producto['id'] ?></h5>
    <p class="card-text">Nombre: <?php echo $producto['nombre'] ?></p>
    <p class="card-text">Precio: $<?php echo $producto['precio'] ?></p>
    </div>
  </div>
  </div>
<br>



<?php
} 
?>

<div class="d-flex justify-content-center m-auto">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>


<footer>
  <p class="text-center">
    DARB 2023
  </p>
</footer>
</body>
</html>

