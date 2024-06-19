<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="./assets/css/cadastrar.css">
</head>
<body>
    <div class="principal">
        <div class="left">
            <div class="container">
                <form action="" method="POST">
                    <div class="logo">
                        <img src="./assets/img/soga-blue.svg" alt="">
                    </div>
            
                    <div class="form-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
            
                    <div class="form-group">
                        <input type="text" id="nome" name="nome" required>
                        <label for="nome">Nome</label>
                    </div>
            
                    <div class="form-group">
                        <input type="tel" id="number" name="number" required>
                        <label for="number">Número de estudante</label>
                    </div>
            
                    <div class="form-group">
                        <input type="password" id="senha" name="senha" required>
                        <label for="senha">Senha</label>
                    </div>
                    <div class="form-group-select">
                        <select id="curso" name="curso" required>
                            <option value="" disabled selected></option>
                            <option value="CF">CF</option>
                            <option value="IGF">IGF</option>
                            <option value="GBS">GBS</option>
                        </select>
                        <label for="curso">Curso</label>
                    </div>
            
                    <div class="form-group-select">
                        <select id="ano_frequencia" name="ano_frequencia" required>
                            <option value="" disabled selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <label for="ano_frequencia">Ano de Frequência</label>
                    </div>
            
                    <div class="btn">
                        <button type="submit">Seguinte</button>
                        <button type="button">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="right">
            <img src="./assets/img/img-cadastrar.svg" alt="" width="500px">
        </div>
    </div>
</body>
</html>