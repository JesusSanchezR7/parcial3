<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>🌞 Weather API ⚡</title>
</head>

<body>
     
	<div class="container">
		<form action="" method="GET">
              <h3><label for="contry"> Busca Tu localidad</label></h3>
              <h2>El CLIMA DE TU IDENTIDAD ES: </h2>
              <h1><input  id="contry" name="contry" type="text" ></h1>
              <button class="btn btn-warning" id="submit" type="button">Saber ahora</button>
              
                <div class="output">
                  <br>
                   <h4>
                   	<div class="alert alert-primary" role="alert" id='grados'>Grados temp</div> 
                  <br>
                      <div class="alert alert-primary" role="alert" id="tempumax">Temperatura Maxima</div>
                  </h4>
                </div>
        </form>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $("#submit").click(function(){

             var contry = document.getElementById("contry").value;

              $.get("https://api.openweathermap.org/data/2.5/weather?q="+contry+"&appid=c99e56f1a63c930c927557d8733c8493",function(data, status){
                  console.log(data);

                  document.getElementById('grados').innerHTML = data.main.temp
                  document.getElementById('tempumax').innerHTML = data.main.temp_max
                  
              });

          });
        </script>

	<div class="container p-5 my-5 bg-dark text-white"> 
	        <div class="row"> 
	              <div class="col-sm-4">                   
	                  <img src="../imagenes/01.png" width="300" height="150">
	              </div>
	              <div class="col-sm-4">                                    
	                  <img src="../imagenes/02.png" width="300" height="150">
	              </div>
	              <div class="col-sm-4"> 
	                  <img src="../imagenes/03.png" width="300" height="150">
	              </div>                    
	        </div>
	</div>


</body>
</html>