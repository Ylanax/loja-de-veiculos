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
            <div class="col-3 mb-5">
                <div class="card bg-dark text-white h-100" style="width: 18rem;">
                    <img src=<?= $linha['foto']; ?> class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold text-center mb-3"><?=$linha['marca']; ?></h4>
                        <p class="botoes"><?=$linha['detalhes']; ?></p>
                        <a href="umveiculo.php?id=<?=$linha['id'];?>" class="btn btn-secondary d-flex justify-content-center fw-semibold">Detalhes</a>
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