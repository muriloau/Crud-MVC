<?php include("blades/header.php") ?>
    <div class="container border rounded mt-5 pt-3 pb-3 pe-3 bg-white">

        <form action="../controllers/cadastrarAluno.php" method="post">
            
            <div class="row">

                <div class="col">

                <label class="form-label">Nome</label>
                <input class="form-control" type="text" name="alunoNome"><br>

                </div>

                <div class="col">

                <label class="form-label">Cidade</label>
                <input class="form-control" type="text" name="alunoCidade"><br>

                </div>

            </div>

                <input class="form-check-input" type="radio" value="m" name="alunoSexo">
                <label class="radio-inline">Masculino</label><br>

                <input class="form-check-input" type="radio" value="f" name="alunoSexo">
                <label class="radio-inline">Feminino</label><br><br>

                <input class="btn btn-success" type="submit" value="Cadastrar">

        </form>
    </div>
<?php include("blades/footer.php") ?>