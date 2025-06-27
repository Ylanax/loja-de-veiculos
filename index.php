<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveWay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="imagens/logo.png" class="logo mb-0" height="95">
        <h1 class="logo-texto">DriveWay</h1>
        <nav>
            <button type="button" class="btn btn-outline-dark fw-semibold">Home</button>
            <button type="button" class="btn btn-outline-dark me-1 fw-semibold">Automóveis</a>
                <button type="button" class="btn btn-outline-dark fw-semibold">Contato</a>
        </nav>
    </header>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/mustang.jpg" class="d-block w-100 banner" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/audi.jpg" class="d-block w-100 banner" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/porshe.jpg" class="d-block w-100 banner" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/corvette.jpg" class="d-block w-100 banner" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <h2 class="display-5">Mais Populares</h2>

        <div class="row mt-5">
            <?php
            /* inicio da conexão com o BD */
            $servidor = 'localhost';
            $bd = 'bd_loja_automotiva';
            $usuario = 'root';
            $senha = '';

            $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
            if (!$conexao) {
                die("deu ruim" . mysqli_connect_error());
            }

            /* fim da conexão */

            $sql = "select * from veiculos";
            $resultado = mysqli_query($conexao, $sql);

            //echo "<pre>";
            //print_r($resultado);
            //exit();   
            while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="col-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/filme1.webp" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Jurassic Park</h5>
                            <p class="card-text">⭐ 10/10</p>
                            <a href="umfilme.php" class="btn btn-primary">Veja detalhes</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            mysqli_close($conexao);
            ?>

        </div>
        <div class="row">
            <div class="col-6">
                <img src="imagens/bmw.jpg" class="img-fluid">
            </div>
            <div class="col-6 align-content-center">
                <h2 class="bmw-m4 fw-bold text-black">BMW M4 Coupé</h2>
                <p class="fw-semibold text-black">O motor S55 é baseado no N55, mas com componentes internos reforçados e dois turbos.
                    Muita gente faz remap, atingindo facilmente mais de 500 cv com segurança. A BMW M4 F82 é a versão de alto desempenho da Série 4 Coupé, desenvolvida pela divisão BMW M. Lançada em 2014, ela substituiu o BMW M3 Coupé da geração anterior (E92), que fazia parte da Série 3. A partir daí, o M3 ficou apenas como sedã, enquanto o M4 representa o coupé e o conversível.
                </p>
                <ul class="fw-semibold">
                    <li>Motor: 3.0 litros, 6 cilindros em linha, TwinPower Turbo (biturbo)</li>
                    <li>>Potência: Versão padrão: 431 cv (425 hp) @ 5.500–7.300 rpm.</li>
                    <li>Torque: 550 Nm (406 lb-ft) @ 1.850–5.500 rpm.</li>
                    <li>Transmissão: Manual de 6 marchas / Automática de dupla embreagem (DCT) de 7 marchas (opcional).</li>
                    <li>Performance (M4 padrão): 0–100 km/h: ~4,1 segundos (com DCT) // Velocidade máxima: 250 km/h (limitada eletronicamente).</li>
                </ul>
                <a href="https://www.bmw.com.br/pt/all-models/m-series/bmw-4-series-m-models/bmw-m4-coupe.html#dados-tecnicos" class="btn btn-dark fw-bold">Saiba Mais</a>
            </div>
        </div>

        <div class="row">
            <div class="col-6 align-content-center">
                <h2 class="fw-bold text-black">Ferrari 458 Speciale</h2>
                <p class="fw-semibold text-black">Esse modelo é muito valorizado por colecionadores, pois é um dos últimos V8 aspirados da Ferrari antes da chegada dos motores turbo com a 488 GTB.
                </p>
                <ul class="fw-semibold">
                    <li>Produção: 2013–2015</li>
                    <li>Motor: 4.5 litros V8 aspirado (sem turbo)</li>
                    <li>Potência: 605 cv (597 hp) @ 9.000 rpm</li>
                    <li>Torque: 540 Nm @ 6.000 rpm</li>
                    <li>0–100 km/h: ~3,0 segundos</li>
                    <li>Velocidade máxima: Cerca de 325 km/h</li>
                    <li>Peso: ~1.290 kg (mais leve que a 458 normal)</li>
                    <li>Transmissão: Automática de dupla embreagem, 7 marchas</li>
                    <li>Tração: Traseira (RWD)</li>
                </ul>
                <a href="https://www.ferrari.com/en-EN/search?search=ferrari%20408%20speciale&curr=0%7C0&active=0&limit=15%7C15&order=default%7Cdefault&lang=en%7Cen" class="btn btn-light fw-bold">Saiba Mais</a>
            </div>
            <div class="col-6 mt-5">
                <img src="imagens/ferrari.jpg" class="img-fluid">
            </div>
        </div>


        <footer class="rodape">
            <hr>
            <img src="imagens/logo.png">
            <small class="fw-semibold text-black"><?php echo date("Y"); ?></small>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
</body>

</html>