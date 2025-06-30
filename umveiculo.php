<?php
include "cabecalho.php";

$id = $_GET['id'];

include "conexao.php";

$sql = "select * from veiculos where id = $id";

$resultado = mysqli_query($conexao, $sql);

$marca = "";
$modelo = "";
$ano_fabricacao = "";
$ano_modelo = "";
$cor = "";
$tipo_combustivel = "";
$tipo_veiculo = "";
$categoria = "";
$foto = "";

while ($linha = mysqli_fetch_assoc($resultado)) {
    $marca = $linha["marca"];
    $modelo = $linha["modelo"];
    $ano_fabricacao = $linha["ano_fabricacao"];
    $ano_modelo = $linha["ano_modelo"];
    $cor = $linha["cor"];
    $tipo_combustivel = $linha["tipo_combustivel"];
    $tipo_veiculo = $linha["tipo_veiculo"];
    $categoria = $linha["categoria"];
    $foto = $linha["foto"];
}

mysqli_close($conexao);

?>
<div class="container">
    <div class="row mx-5 mt-5">
        <div class="col">
            <img src="<?= $foto ?>" class="img-fluid">
        </div>
        <div class="col pt-5">
            <h4 class="fw-bold "><?= $marca; ?>
            <h5 class="ano-fab fw-semibold">Modelo: <?= $modelo; ?></h5>
            <h5 class="ano-fab fw-semibold">Ano de Fabricação: <?= $ano_fabricacao; ?></h5>
            <h5 class="ano-mod fw-semibold">Ano do Modelo: <?= $ano_modelo; ?></h5>
            <h5 class="cor fw-semibold">Cor: <?= $cor; ?></h5>
            <h5 class="combustivel fw-semibold">Combústivel: <?= $tipo_combustivel; ?></h5>
            <h5 class="tipo-veiculo fw-semibold">Tipo: <?= $tipo_veiculo; ?></h5>
            <h5 class="cat mb-3 fw-semibold">Categoria: <?= $categoria; ?></h5>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>