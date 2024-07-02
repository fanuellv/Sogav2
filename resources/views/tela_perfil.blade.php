<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro in SOGA</title>
    <link rel="stylesheet" href="./assets/css/tela_perfil.css">
    <style>
    
    
</style>
</head>
<body>
    
        <div class="container">
            <img class="imagem" src="./img/icons8-pessoa-30.png"> 
            <p>Adicone uma foto Perfil</p>
           <div>
            <div class="input">
                <h3 id="datatext" >Data de Nascimento</h3>
             
             <div class="container1">
             <div id="inputdata"> 
                <input type="date" placeholder="02" class="data" ></input>
                        
              </div>
              <div class="generobtn">
                <label id="label1">Feminino</labe>       
                <input type="checkbox" class="genero">
                <br>
                <label id="label2">Masculino<label>
                <input type="checkbox" class="genero" id="mas">
              </div>  
    
            </div> 
            

               <div id="inputmorada">
                <input  placeholder="Município" class="morada" type="text" id="cidade" name="cidade">
                <input  placeholder="Bairro" class="morada" type="text" id="estado" name="estado">
            </div> 
            <div class="btn">
                <button id="btn1">VOLTAR</button>
                <button id="btn2">SEGUINTE</button>
            </div>  


        </div>      
            
</body>
</html>