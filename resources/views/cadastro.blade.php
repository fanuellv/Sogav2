<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro in SOGA</title>
    <style>
    h3{
        position: absolute;
        top:150px;
        transform: translate(235%, -10%); 
        color: white;
        font-size: medium;
        font-family: Arial, Helvetica, sans-serif;
    }

    #inputdata{
         margin-top: -10px;
         margin-left: 10px;
        display: flex;
         margin-bottom: -9px;
         margin:0;
         padding: 0;
        

    }
    .data{
         background-color: rgb(250, 246, 246);
        border-radius: 8px;
         border:solid 1px;
         box-shadow: 1px 1px 1px rgba(0,0,0,0.5);
         border-color: rgb(216, 214, 214);
         height: 30px;
         width: 80px;
         margin-bottom: -5px;

        
    }
    #datatext{
        left:-88%;
        top:25%;
        font-size: small;
        color: black;
    }
    .container{
        background-color: #f7f5f5;
        width: 350px;
        height: 320px;
        border-radius: 25px;
        text-align: center;
        top: 50%;

    }
    .morada{
        border-radius: 5px;
         box-shadow: 1px 1px 1px rgba(0,0,0,0.5);
         height: 25px;
         width: 280px;
         background-color: rgba(248, 245, 245, 0.753);
          margin-top: 9px;
         border: solid 1px;
         border-color:#4484CE; 
       }
    .generobtn{
        margin-left: 155px;
        gap:5px;
        top:5%;
        
        
    }
    .genero{
       
        width: 10px;
        height: 10px;
        background-color: rgb(12, 104, 32);
        border: none;
        box-shadow: 1px 1px 1px rgba(17, 18, 18, 0.347);
        cursor: pointer;
        margin-left: 1px;
        
    }
    
    body{
        background-color:#4484CE;
        display: flex;     
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin:0;
    }
    .imagem{
        background-color: rgb(199, 196, 196);
        width: 50px;
        border-radius:100%; 
        padding:20px;
        
    }
    .btn{
        margin-top:15px ;
        gap:5px;
        
    }
    #btn1{
        float: left;
        margin-left:32px;
        background-color: #efefef;
        color:rgb(235, 20, 20);
        width: 90px;
        height: 25px;
        border-radius: 3px;
        border-color:red;
        border: solid 1px;
        cursor: pointer;
    }
    #btn2{
        float: right;
        margin-right:32px;
        background-color: #efefef;
        border-color:#4484CE ;
        color:#4484CE;
        width: 90px;
        height: 25px;
        border-radius: 3px;
        border: solid 1px;
        cursor: pointer;
    }
    p{
      margin: 0;
      padding:0;  
      font-size: small;
    }
    .container1{


    }
</style>
</head>
<body>
    
        <div class="container">
            <img class="imagem" src="./img/icons8-pessoa-30.png"> 
            <p>Foto de Perfil</p>
           <div>
            <div class="input">
                <h3 id="datatext" >Data de Nascimento</h3>
             
         <div class="container1">
             <dive id="inputdata"> 
                <input type="date" placeholder="02" class="data" ></input>
                        
              </dive>
              <div class="generobtn">
                <label id="label1">Feminino</labe>       
                <input type="checkbox" class="genero">
                <br>
                <label id="label2">Masculino<label>
                <input type="checkbox" class="genero" id="mas">
              </div>  
    
            </dive> 
            

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