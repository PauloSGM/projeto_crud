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
    <div id="titulo" class="container-fluid col-md-12 ">
        <div class="row">
            <div class="col-md-12">
            <h1>Meu Primeiro CRUD</h1>
            <h3>CRUD básico com armazenamento em cookies</h3>
        </div>
    </div>
    </div>
    <div class="container-fluid col-md-12">
        <div class="row">
            <div class="col-md-12">
                <form>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Digite seu primeiro nome</span>
                </div>
                <input type="text" class="form-control" placeholder="Ex: João" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Digite seu sobrenome</span>
                </div>
                <input type="text" class="form-control" placeholder="Ex: Pereira da Silva" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Digite sua data de nascimento</span>
                </div>
                <input type="text" class="form-control" placeholder="Ex: 14/02/1991" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Digite sua escolaridade</span>
                </div>
            </form>
                <input type="text" class="form-control" placeholder="Ex: nível médio" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                
            
        </div>
    </div>
</div>
<div class="container-fluid col-md-12">
    <div class="row">
        <div class="col-col-md-12">
            <button type="button" class="btn btn-primary float-right">Adicionar informações</button>
        </div>
    </div>
</div>
    <div class="container col-md-12 ">
    <div class="col-md-12">
        <div class="row">
        <table id="tblDados" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Ordem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Escolaridade</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Paulo</td>
                    <td>Moura</td>
                    <td>29/11/1986</td>
                    <td>Superior</td>
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