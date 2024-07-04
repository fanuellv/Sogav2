<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro in SOGA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/cadastrarEnd.css') }}">
</head>

<body>
    <div id="container">



        <form action="{{route('bio.store')}}" method="POST">
            @csrf
            <label id="biotext" for="biografia">Biografia</label>
            <textarea type="text" name="biografia" placeholder="escreve acerca de ti" class="biografia" maxlength="255"></textarea>

            <h3>Selecione pelo menos quatro (4) interesses</h3>
            <div class="interesse">
                <div>
                    <label><input type="checkbox" name="items" value="item1">Programação</label><br>
                    <label><input type="checkbox" name="items" value="item2">Análise de Dados</label><br>
                    <label><input type="checkbox" name="items" value="item3">Contabilidade</label><br>
                    <label><input type="checkbox" name="items" value="item4">Auditoria</label><br>
                    <label><input type="checkbox" name="items" value="item4">Gestão Financeira</label><br>
                </div>
                <div>
                    <label><input type="checkbox" name="items" value="item4">Gestão Financeira</label><br>
                    <label><input type="checkbox" name="items" value="item4">Banco de dados</label><br>
                    <label><input type="checkbox" name="items" value="item4">Sistema de Informação</label><br>
                    <label><input type="checkbox" name="items" value="item4">Gestão de base de dados</label><br>
                </div>
            </div>
            <div class="buttons">
                <button type="button" class="button secondary" onclick="history.back()">Voltar</button>
                <button type="submit" class="button">Concluir</button>
            </div>
        </form>

    </div>


</body>

</html>
