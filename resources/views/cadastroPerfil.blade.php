<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro in SOGA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/telaPerfil.css') }}">
</head>
<body>
    
    <div class="container">
        <img class="imagem" src="{{ asset('img/icons8-pessoa-30.png') }}" alt="Ícone de Pessoa"> 
        <p>Adicione uma foto de Perfil</p>
        
        <form action="{{route('perfil.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input">
                <div class="input-foto">
                    <input type="file" name="fotoPerfil" accept="image/*">
                </div>

                <h3 id="datatext">Data de Nascimento</h3>
                <div class="container1">
                    <div id="inputdata"> 
                        <input type="date" name="dataNascimento" class="data">
                    </div>

                    <div class="generobtn">
                        <div class="masculino">
                          <label id="label1" for="generoF">Feminino</label>       
                          <input type="radio" name="femenino" value="feminino" class="genero">
                        </div>
                        <div class="femenino">
                          <label id="label2" for="generoM">Masculino</label>
                          <input type="radio" name="masculino" value="masculino" class="genero">
                        </div>
                    </div>
                </div> 

                <div id="inputmorada">
                    <input placeholder="Município" class="morada" type="text" name="municipio">
                    <input placeholder="Bairro" class="morada" type="text" name="bairro">
                </div>

                <div class="btn">
                  <button type="button" id="btn1" onclick="history.back()">VOLTAR</button>
                  <button type="submit" id="btn2">SEGUINTE</button>
              </div>
          </div>  
      </form>
  </div>    

</body>
</html>