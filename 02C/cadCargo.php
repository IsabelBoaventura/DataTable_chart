<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" id="form-cad-cargo" >
    <div class="row mb-3">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
        </div>
    </div>

    <div class="row mb-3">
        <label for="cargo" class="col-sm-2 col-form-label">Cargo</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo que exerce">
        </div>
    </div>

    <div class="row mb-3">
        <label for="escritorio" class="col-sm-2 col-form-label">Escritório</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="escritorio" name="escritorio" placeholder="Cidade onde trabalha">
        </div>
    </div>

    <div class="row mb-3">
        <label for="idade" class="col-sm-2 col-form-label">Idade </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="idade" name="idade" placeholder="Sua idade ">
        </div>
    </div>

    <div class="row mb-3">
        <label for="salario" class="col-sm-2 col-form-label">Salário</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="salario" name="salario" placeholder="Seu salário ">
        </div>
    </div>
    <div class="row mb-3">
        <label for="admissao" class="col-sm-2 col-form-label">Data de Admissão</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="admissao" name="admissao" placeholder="Data de Admissão">
        </div>
    </div>
    <!--
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
        <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
            First radio
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
            Second radio
            </label>
        </div>
        <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
            Third disabled radio
            </label>
        </div>
        </div>
    </fieldset>
    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
            Example checkbox
            </label>
        </div>
        </div>
    </div>

    -->
    <button type="submit" class="btn btn-outline-success btn-sm" value="cadastrar">Salvar </button>
    </form>

    <script src="js/datatable.js" ></script>
    
</body>
</html>