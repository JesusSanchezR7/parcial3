<!-- Iniciar Sesion -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>🌞 Weather API ⚡</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="../css/styles.css">


</head>

<body>
      
    <div >
    <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v13.0&appId=641096733765564&autoLogAppEvents=1" nonce="VcPLjXfz"></script>
       
        <div>
            <form action="../dashboard.html" class="form-box animated fadeInUp">

              <form>

                 <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/dqxvvqzi.json"
                    trigger="loop"
                    colors="outline:#ffffff,primary:#2516c7,secondary:#110a5c"
                    style="width:200px;height:200px">
                </lord-icon>                          
                <h1 class="form-title"> Iniciar Sesión </h1>
                <p>Dirección de correo electrónico </p>

                <input type="text" placeholder="Correo Electronico">
                <input type="password" placeholder="Contraseña">
                <button href="" type="submit" id="submit" >Continue</button>
                <button type="button" id="submit">iniciar</button>

                <h1>________________________</h1>

                
                <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="true" data-use-continue-as="true"></div>
                <button type="submit"  >GOOGLE</button>

                <a href="index.html" >¿Olvidó su contraseña?</a>
                <h1></h1>
                <a href="registro.php">Crear Una Cuenta</a>
                <p></p>
                <a href="https://www.google.com/">Long in with your organization</a> 
                <p></p>
                
                <a href="../Index.html" >Regresar A Inicio</a> 
                 <p></p>
                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
              </form>
            </form>
        </div>
    </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){
      $("#submit").click(function(){
        var correo = $("#em").val();
        var password = $("#pwd").val();

          if (correo == "" || password == ""){
            $("#error").text("Campos vacios");
            $("#error").text("color","red");
          }
          else
          {
            $.post("../controler/login.php",
            {
              correo: correo,
              password: password
            },
            function(data,status){
              console.log(data)
              var obj = JSON.parse(data);

              if(obj.estado == true)
              {
                window.location.replace("dashboard.html");
              }
              else if(obj.estado == false){
                $("#error").text("Error al iniciar sesion");
                $("#error").css("color","red");
              }
            });
          }
      });
    });


  </script>

<script>
  //bOTON DE FACEBOOK
  function statusChangeCallback(response) {  
    console.log('statusChangeCallback');
    console.log(response);                   
    if (response.status === 'connected') {   
      testAPI();  
    } else {                                 
      document.getElementById('status').innerHTML = ' ' +
        '';
    }
  }


  function checkLoginState() {               
    FB.getLoginStatus(function(response) {   
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '641096733765564',
      cookie     : true,                     
      xfbml      : true,                     
      version    : 'v12.0'           
    });


    FB.getLoginStatus(function(response) {   
      statusChangeCallback(response);        
    });
  };
 
  function testAPI() {                      
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }


</script>



<div id="status">
</div>


<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
</body>
</html>


   




<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  position: relative;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }

  .texto-justificado{
text-align: justify;
}

}
</style>
</head>
<body>
