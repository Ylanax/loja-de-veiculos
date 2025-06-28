<?php
include "cabecalho.php";
?>

<div class="container">
    <h2 class="auto-text mt-5 fw-bold text-black">Automóveis</h2>
    <div class="row mt-5">

        <?php
        include "conexao.php";

        $sql = "select * from veiculos";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3 mb-3">
                <div class="card bg-dark text-white" style="width: 18rem;">
                    <img src=<?= $linha['foto']; ?> class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold text-center mb-3"><?=$linha['marca']; ?></h4>
                        <h5 class="ano-fab fw-normal">Modelo: <?=$linha['modelo']; ?></h5>
                        <h5 class="ano-fab fw-normal">Ano de Fabricação: <?=$linha['ano_fabricacao']; ?></h5>
                        <h5 class="ano-mod fw-normal">Ano do Modelo: <?=$linha['ano_modelo']; ?></h5>
                        <h5 class="cor fw-normal">Cor: <?=$linha['cor']; ?></h5>
                        <h5 class="combustivel fw-normal">Combústivel: <?=$linha['tipo_combustivel']; ?></h5>
                        <h5 class="tipo-veiculo fw-normal">Tipo: <?=$linha['tipo_veiculo']; ?></h5>
                        <h5 class="cat mb-3 fw-normal">Categoria: <?=$linha['categoria']; ?></h5>
                        <a href="automoveis.php" class="btn btn-secondary d-flex justify-content-center fw-semibold">Detalhes</a>
                    </div>
                </div>
            </div>
        <?php
        }
        mysqli_close($conexao);
        ?>
    </div>
</div>

<?php include "rodape.php"; ?>