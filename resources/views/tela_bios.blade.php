<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro in SOGA</title>
    <link rel="stylesheet" href="teste.css">
    <style>
        #container{
            background-color:white;
            width: 10ovh;
            height:40vw;
            margin: 0vh;
        }
        body{
           background-color:#4484ce;
        }

        .btn01{
            position: absolute;
            top:200px;
            left:50px;
            transform: translate(90%, -10%);
            width: 50%;
            height: 40%;
            display: grid;
            grid-template-columns: repeat(2, 5fr); /* Cria duas colunas com largura igual */
            gap: 10px; /*coloca espaçamento entre os dois grupos*/
        }
         .btn{
            transform: translate(20%, -10%);
             width: 80%;
             border-radius: 10px;
             border:solid 1px;
             box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
             border-color: grey;
             height: 30px;
        }
        .btn11{
            position: absolute;
            top:486px;
            left:50px;
            transform: translate(90%, -10%);
            margin: 5px;
        }
        #btnesquerdo{
            float: right;
            margin:0 10px;
            transform: translate(1300%, -10%);
        }
        #btndireito{
            float:left;
            margin-left: 10px;
        }
        h3{
            position: absolute;
            top:100px;
            transform: translate(210%, -10%); 
            color: black;
            font-size: medium;
            font-family: Arial, Helvetica, sans-serif;
        
        }

        #inputdata{
            
            display: flex;
            justify-content: 2px;
            margin-bottom: 10px;
            gap:5px;
        }
        .data{

            border-radius: 8px;
             border:solid 1px;
             box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
             border-color: grey;
             height: 30px;
             width: 55px;
        }
        #datatext{
            left:-17%;
            top:18%;
            font-size: small;
        }
          .input0{
    
            position: absolute;
            top: 20%;
            left: 5%;
            transform: translate(0%,50%);

        }
        #inputmorada{
            top:35vh;
            left: -30%;
            position: absolute;
            transform: translate(50%, -50%);
            
        
        }
        #morada{
            border-radius: 10px;
             border:solid 1px;
             box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
             border-color: grey;
             height: 30px;
             width: 280px;
        }
        .inputgenero{
            width: 5%;
            height:2%;
        }
        .genero{
            top:20%;
            width: 5%;
            height: 5%;
        }
        .label1{
            color:white;
            
        }
        
    </style>
</head>
<body>
    <div id="container">
        <input type="text" placeholder="">
        <h3 id="biotext" >Biografia</h3>
    </div>    
        <h3>Selecione pelo menos quatro (4) interesses</h3>
        <div class="btn01">
            <button class="btn" id="btn1">Programação</button>
            <button class="btn" id="btn2">Análise de Dados</button>
            <button class="btn" id="btn3">Contabilidade</button>
            <button class="btn" id="btn4">Auditoria</button>
            <button class="btn" id="btn5">Gestão Financeira</button>
            <button class="btn" id="btn6">Banco de Dados</button>
            <button class="btn" id="btn7">Sistemas de Informação</button>
            <button class="btn" id="btn8">Gestão de Base de Dados</button>
         </div>
         <div class="btn11">
            <button  id="btndireto">Cancela</button>
            <button  id="btnesquerdo">Seguinte</button>
        </div>
            
        
        
    </div>
</body>
</html>