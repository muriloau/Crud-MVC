<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>

    <?php
    
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM alunos WHERE codigo = $varIda");
    while($exibe = mysqli_fetch_array($query)){
    ?>

    <div class="container border rounded mt-5 pt-3 pb-3 pe-3 bg-white">
        <div class="row">

        <form action="../controllers/atualizarAluno.php" method="post">

            <div class="col">

            <input class="form-control" type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
            <label class="form-label">Nome</label>

            </div>

            <div class="col">

            <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
            <label class="form-label">Cidade</label>

            </div>

            <input type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>
        
        </div>
        <br>
        <input class="form-check-input" type="radio" value="m" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>>
        <label class="radio-inline">Masculino</label><br>

        <input class="form-check-input" type="radio" value="f" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>>
        <label class="radio-inline">Feminino</label><br><br>

        <input class="btn btn-success" type="submit" value="Atualizar">
    </form>
 </div>
    
    <?php } ?>

<?php include("blades/footer.php") ?>