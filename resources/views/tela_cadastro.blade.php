<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro in SOGA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="./assets/css/tela_cadastro.css">
      <link rel="stylesheet" href="all.min.css">
       
</head>
    
<body>
    <div class="container">
        <div id="fto"></div>
        <div id="cdt1">
            <div id="cdt2">
                <div id="img"><img src="./assets/img/soga-blue.svg" ></div>
                <div class="input-wrapper">
                    <input type="text" placeholder="Selecione o seu Curso" class="cdt" id="inputCursoSelecionado">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <select id="selectCurso" onchange="updateInput()">
                       <option value="">Selecione um curso</option>
                       <option value="IGF">IGF</option>
                       <option value="GBS">GBS</option>
                       <option value="CGS">CGS</option>
                       
                   </select>

                      
               </div>
               <div class="input-wrapper">
                    <i class="fa-solid fa-school"></i>
                    <input class="cdt" type="text" placeholder="Ano de frequência" id="AnoSelecinado">
                    <select id="selectAno" onchange="updateInput2()">
                       <option value="">Selecione o ano de frequência</option>
                       <option value="1ºano">1ºano</option>
                       <option value="2ºano">2ºano</option>
                       <option value="3ºano">3ºano</option>
                       <option value="4ºano">4ºano</option>
                       
                   </select>
               </div>
                <div class="input-wrapper">
                    <input type="email" placeholder="Email" class="cdt" id="input2">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-wrapper"> 
                    <i class="fa-solid fa-user-graduate"></i> 
                    <input type="text" placeholder="Nome" class="cdt" id="input3">
                </div >   
                 <div class="input-wrapper"> 
                    <i class="fa-solid fa-user-graduate"></i>  
                    <input type="text" placeholder="Nº de estudante" class="cdt" id="input4">
               </div >
                <div class="input-wrapper">
                     <i class="fa-solid fa-lock"></i>
                     <input type="password" placeholder="Senha" class="cdt" id="input5">
                </div>
                <div class="btn">   
                   
            
                   <button id="btn2" type="submit">SEGUINTE</button>
                   <button  id="btn1"  >CANCELAR</button>
                </form>
                </div>    

            </div>
        </div>
    </div>
    <!--<script src="all.min.js"></script>*/-->
    <script>
        function updateInput() {
            var selectCurso = document.getElementById('selectCurso');
            var inputCursoSelecionado = document.getElementById('inputCursoSelecionado');
            
            inputCursoSelecionado.value = selectCurso.value;

            
        }
        function updateInput2() {
            var selectAno = document.getElementById('selectAno');
            var AnoSelecionado = document.getElementById('AnoSelecionado');
            
            AnoSelecionado.value = selectAno.value;
        }

    
    </script>

</body>
</html>