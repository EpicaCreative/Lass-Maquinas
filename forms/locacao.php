
<html>
<head>
  <meta charset="utf-8">
  <title>Formulário de máquina</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>

@media  (min-width: 700px) {
  
body { width: 100%; overflow:hidden;}

}

@media  (max-width: 600px) {
  
input.tipotexto { width: 10%; }

}

input.tipotexto { width: 100%; }

input.tipotextohalf { width: 22%; }

textarea.tipotexto { width: 100%; }


  </style>

</head>
<body>

 <form action="envia.php" method="POST"> 
 
  <input type="text" name="nome_cliente" required="" placeholder="Nome" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;"> 

  <input type="text" name="email_cliente" required="" placeholder="E-mail" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;"> 

  <input type="text" name="telefone_cliente" required="" placeholder="Telefone" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;"> 

  <input type="text" name="cidade_cliente" required="" placeholder="Cidade" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;"> 
  
  <input type="text" name="uf_cliente" required="" placeholder="UF" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;"> 

  <input type="text" list="oque" name="maquina_deseja" required="" placeholder="Procurando por" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;">


  <!--<center><input type="submit" value="Enviar" style="background-color: #fcc53b; color: white; font-weight: 600; font-family: 'Open Sans', sans-serif; font-size: 18px; padding: 9px 30px; border-radius: 10px; border: none;"></center> -->
  <center><input type="submit" name="BTEnvia" value="Enviar" style="background-color: #fcc53b; color: white; font-weight: 600; font-family: 'Open Sans', sans-serif; font-size: 18px; padding: 9px 30px; border-radius: 17px; border: none;" class="submit-button w-button"></center>

 </form>

<datalist id="oque">
  <option value="Empilhadeiras">
  <option value="Plataformas Elevatórias">
  <option value="Paleteiras Elétricas">
</datalist>
</body>
</html>