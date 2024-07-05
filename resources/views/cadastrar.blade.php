<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="./assets/css/cadastrar.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

        * {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: #6d6d6dee
        }
    </style>
</head>

<body>
    <div class="principal">
        <div class="left">
            <div class="container">
                <form action="{{ route('cadastro.store') }}" method="POST">
                    @csrf
                    <div class="logo">
                        <img src="./assets/img/soga-blue.svg" alt="">
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name">Nome</label>
                    </div>

                    <div class="form-group">
                        <input type="tel" id="numero" name="numero" required>
                        <label for="numero">Número de estudante</label>
                    </div>

                    <div class="form-group">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Senha</label>
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
                        <select id="ano" name="ano" required>
                            <option value="" disabled selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <label for="ano">Ano de Frequência</label>
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
