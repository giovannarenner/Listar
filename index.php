<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    *{
    margin: 0px;
    padding: 0px;
    
}

.container{
    text-align: center;
    margin: auto;
    margin-top: 20px;
}

body{
    background-color: rgb(250, 152, 107);
}
.inputR{
    margin-top: 20px;
}
.res{
    margin-top: 20px;
    border: 3px solid black;
    padding: 10px;
    font-size: 20px;

}  

</style>
<body>
    <div class="container">
    <div class="titulo">
  <h1>Insira um número</h1>
    </div>
<form  method="POST">
            <p class="inputN">
             <input class="inputR" type="number" name="numero1" />
            </p>
        <button class="res">Imprimir valores</button>  
        <?php
          if(isset($_POST['numero1'])){
          $n = $_POST['numero1'];
          
         for ($r = 0; $r <= $n; $r++) {
          if ($r % 2 == 0) {
              echo "<p 
                 style=
                 'color:red;
                 background-color: pink; 
                  border:3px solid black;
                  width:100px;
                  padding:10px;
                  border-radius: 25px 12.5px;
                  text-align:center;
                  margin:5px auto;'> $r <br> </p>";
          } else {
              echo "<p 
              style=
              'color:pink;
              background-color: red; 
               border:3px solid black;
               border-radius: 25px 12.5px;
               width:100px;
               padding:10px;
               text-align:center;
               margin:2px auto;'> $r <br> </p>";
          }
      }
    }
       ?>     
        </form>
        </div>
</body>
</html>