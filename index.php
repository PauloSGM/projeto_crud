<!DOCTYPE html>
<html lang="pt-br">

<head>
   
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Meu CRUD</title>
</head>

<body>

<?php switch($_POST['tabela']){

case '1':
$nome = $_POST[nome];
$sobreNome = $_POST[sobreNome];
$dataNasc = $_POST[dataNasc];
$escolaridade = $_POST[escolaridade];
break;

case '2':
    $nome2 = $_POST[nome];
    $sobreNome2 = $_POST[sobreNome];
    $dataNasc2 = $_POST[dataNasc];
    $escolaridade2 = $_POST[escolaridade];
    break;

    case '3':
        $nome3 = $_POST[nome];
        $sobreNome3 = $_POST[sobreNome];
        $dataNasc3 = $_POST[dataNasc];
        $escolaridade3 = $_POST[escolaridade];
        break;

        case '4':
            $nome4 = $_POST[nome];
            $sobreNome4 = $_POST[sobreNome];
            $dataNasc4 = $_POST[dataNasc];
            $escolaridade4 = $_POST[escolaridade];
            break;  

};
?>
    <div id="titulo" class="container-fluid col-md-12 ">
        <div class="row">
            <div class="col-md-12">
            <h1>Sistema CRUD</h1>
            <h3>Digite seus dados abaixo para salvá-los nas tabelas</h3>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Digite seu primeiro nome</span>
                </div>
                <input type="text" class="form-control" name="nome" placeholder="Ex: João" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Digite seu sobrenome</span>
                </div>
                <input type="text" class="form-control" name="sobreNome" placeholder="Ex: Pereira da Silva" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Digite sua data de nascimento</span>
                </div>
                <input type="date" class="form-control" name="dataNasc" placeholder="Ex: 14/02/1991" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <select name="escolaridade" class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Escolha o seu nível de escolaridade</option>
  <option value="Nível fundamental">Nível fundamental</option>
  <option value="Nível Médio">Nível médio</option>
  <option value="Nível superior">Nível superior</option>
</select><br>
                <div class="container-fluid col-md-12">
                <select name="tabela" class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Escolha em qual linha da tabela abaixo você quer salvar seus dados</option>
  <option value="1">Tabela 1</option>
  <option value="2">Tabela 2</option>
  <option value="3">Tabela 3</option>
  <option value="3">Tabela 4</option>
</select>
    <div class="row">
   
        <div class="col-col-md-12"><br>
            <button type="submit" class="btn btn-primary float-right">Adicionar informações</button>
        </div>
    </div></form>
        </div>
    </div>
</div>
</div>
    <div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
        <table id="tblDados" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Tabela</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Escolaridade</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $nome?></td>
                    <td><?php echo $sobreNome?></td>
                    <td><?php echo $dataNasc?></td>
                    <td><?php echo $escolaridade?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?php echo $nome2?></td>
                    <td><?php echo $sobreNome2?></td>
                    <td><?php echo $dataNasc2?></td>
                    <td><?php echo $escolaridade2?></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><?php echo $nome3?></td>
                    <td><?php echo $sobreNome3?></td>
                    <td><?php echo $dataNasc3?></td>
                    <td><?php echo $escolaridade3?></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><?php echo $nome4?></td>
                    <td><?php echo $sobreNome4?></td>
                    <td><?php echo $dataNasc4?></td>
                    <td><?php echo $escolaridade4?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<p style="background:rgb(0, 209, 181);font-size:12px;margin:15px 0;padding:15px;text-align:center">
    © 2021 Copyright. Todos os direitos reservados a Paulo Moura.</p>
        <script src="./js/index.js"></script>

</body>

</html>