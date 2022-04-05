<!-- Registrarse  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>🌞 Weather API ⚡</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>

    <div id="fb-root"></div>
    
        <div>


            <form action="index.html" class="form-box animated fadeInUp">
                 <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/gazjnoea.json"
                trigger="loop"
                colors="primary:#ffffff,secondary:#1b1091"
                style="width:250px;height:250px">
            </lord-icon>                          
                <h1 class="form-title">-- REGISTRARSE--</h1>         
                <p>________________________</p>
                <input type="text"     id="nom_completo" placeholder="Nombre Completo">
                <input type="text"     id="correo" placeholder="Correo">
                <input type="password" id="password" placeholder="Contraseña">
                
                 <p>________________________</p>                              

                <button type="button" id="submit" class="btn btn-primary">Enviar</button>
                
                <p></p>
                <a href="login.php" class="btn btn-primary" >Cancelar</a>

            </form>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $("#submit").click(function(){

          var nom_completo = document.getElementById('nom_completo').value;
          var correo = document.getElementById('correo').value; 
          var password = document.getElementById('password').value;
           
          $.post("../controlers/registrarse.php",
          {

            nom_completo: nom_completo,
            correo: correo,
            password: password
         
          },
          function(data, status){
            console.log(status);
            console.log(data);  
          });
        }); 
    </script>

</body>
</html>

   