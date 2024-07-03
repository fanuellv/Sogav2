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
        <input type="text" placeholder="">
        <h3 id="biotext">Biografia</h3>
    </div>
    <h3>Selecione pelo menos quatro (4) interesses</h3>
    <form id="interests-form">
        <div class="checkbox-container">
            <div class="checkbox-item">
                <input type="checkbox" id="interesse1" name="interests" value="programacao">
                <label for="interesse1">Programação</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="interesse2" name="interests" value="analise_dados">
                <label for="interesse2">Análise de Dados</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="interesse3" name="interests" value="contabilidade">
                <label for="interesse3">Contabilidade</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="interesse4" name="interests" value="auditoria">
                <label for="interesse4">Auditoria</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="interesse5" name="interests" value="gestao_financeira">
                <label for="interesse5">Gestão Financeira</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="interesse6" name="interests" value="banco_dados">
                <label for="interesse6">Banco de Dados</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="interesse7" name="interests" value="sistemas_informacao">
                <label for="interesse7">Sistemas de Informação</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="interesse8" name="interests" value="gestao_base_dados">
                <label for="interesse8">Gestão de Base de Dados</label>
            </div>
        </div>
        <div class="btn11">
            <button type="button" id="btndireto">Cancela</button>
            <button type="submit" id="btnesquerdo">Seguinte</button>
        </div>
    </form>
</body>
</html>
