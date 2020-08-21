<?php
include("base.php");
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$usuario = $_SESSION['usuario'];
$sql="SELECT * FROM hoteles";
$query=mysqli_query($db,$sql);
$json=array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
  *{
    color: #202020  ;
  }
  body{
    background-image: url("img/hotel.jpg");
  }
</style>
  </head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Hoteles</a>
      <?php
        if($usuario == null){

        }else{
          
          ?>
          <button id="agregar" style="transform:translateX(700px)" class="btn btn-success">Agregar hotel</button>

          <div id="popup1"style=" background:rgba(0, 0, 0, 0.3); position: fixed; top:0; left: 0; bottom:0; right: 0; display: flex; justify-content: center; align-items: center; z-index:2;">
        <div class="card" id="mostrar2" style="width: 20%; background-color: rgb(102, 102, 102);">
          <div class="card-body">
            <button class="btn btn-danger" id="cerrar1"style=" transform:translateY( -10px) translateX(310px)"><img src="img/cerrar.png"></button>
            <form method="POST" action="addhotel.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="Text"  name="nombre" class="form-control"  aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label >Descripcion</label>
    <input type="text"  name="desc" class="form-control" >
  </div>
  <div class="form-group">
    <label >Direccion</label>
    <input type="text"  name="direccion" class="form-control" >
  </div>
  
  <div class="form-group">
    
    <label >Numero de Telefono</label>
    <input type="text" name="telefono" class="form-control" >
  </div>
  <div class="form-group">
    <label >Whatsapp</label>
    <input type="text" name="whatsapp"class="form-control" >
  </div>
  <div class="form-group">
    <label >Imagen 1</label>
    <input type="file" name="imagen1" class="form-control-file" >
  </div>
  <div class="form-group">
    <label >Imagen 2</label>
    <input type="file" name="imagen2" class="form-control-file" >
  </div>
  <div class="form-group">
    <label >Imagen 3</label>
    <input type="file" name="imagen3" class="form-control-file" >
  </div>
  
  
  <button type="submit" class="btn btn-primary">Subir</button>
</form>
          </div>
      </div>
          </div>

          <div id="popup2"style=" background:rgba(0, 0, 0, 0.3); position: fixed; top:0; left: 0; bottom:0; right: 0; display: flex; justify-content: center; align-items: center; z-index:2;">
        <div class="card" id="mostrar3" style="width: 20%; background-color: rgb(102, 102, 102);">
          <div class="card-body">
            <button class="btn btn-danger" id="cerrar2"style=" transform:translateY( -10px) translateX(310px)"><img src="img/cerrar.png"></button>
            
          <form method="POST" action="editarhotel.php" enctype="multipart/form-data">
          <div class="form-group">
    <label for="exampleInputEmail1">id</label>
    <input type="number" id="id" name="numero"  class="form-control"  aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="Text"  id="nombre"name="nombre" class="form-control"  aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label >Descripcion</label>
    <input type="text" id="descripcion"name="desc" class="form-control" >
  </div>
  <div class="form-group">
    <label >Direccion</label>
    <input type="text"  id="direccion" name="direccion" class="form-control" >
  </div>
  <div class="form-group">
    <label >Numero de Telefono</label>
    <input type="text" id="telefono"name="telefono" class="form-control" >
  </div>
  <div class="form-group">
    <label >Whatsapp</label>
    <input type="text" id="whatsapp"name="whatsapp"class="form-control" >
  </div>
  <div class="form-group">
    <label >Imagen 1</label>
    <input type="file" name="imagen1" class="form-control-file" >
  </div>
  <div class="form-group">
    <label >Imagen 2</label>
    <input type="file" name="imagen2" class="form-control-file" >
  </div>
  <div class="form-group">
    <label >Imagen 3</label>
    <input type="file" name="imagen3" class="form-control-file" >
  </div>
  
  
  <button type="submit" class="btn btn-primary">Subir</button>
</form>
          </div>
      </div>
          </div>
        <?php } ?>
      <a  href="index.php" class="btn btn-info" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        
        
        <img src="img/casa.png">
      </a>
      
    </nav>
  </header>
  <?php while($row=mysqli_fetch_array($query)){
    
?>
 
    <div class="card mt-5 ml-5" style="width: 50%; border-radius: 20px; height: auto; background-color: #9B9B9B ; z-index:1;">
        <div class="card-body"  num="<?php echo$row['id'] ?>">
          
          <h4 style="transform: translateX(350px) translateY(10px);"><?php echo$row['nombre']?></h4>
          <?php if($usuario == null){
            }else{

              ?>
              <a href="#" class="editar"><img style="transform:translateX(800px) translateY(-140px);" src="img/editar.png"></a>
              <a href="#" class="eliminar"><img style="transform:translateX(830px) translateY(-140px);" src="img/remover.png"></a>
            <?php } ?>
          <a href="" class="mostrar"><img src="fotos/<?php echo$row['nameimg']?>" style=" transform: translateY(-57px) translateX(-20px); " width="300px" height="200px"></a>
          <button  class="btn btn-danger prueba"  style="transform: translateY(20px);"><img src="https://img.icons8.com/material/24/000000/phone--v1.png"/><?php echo$row['telefono']?></button>
          <button  class="btn btn-success prueba1" style="transform: translateY(20px);"><img src="img/whatsapp.png"><?php echo$row['whatsapp']?></button>
          <p style="transform: translateX(330px) translateY(-160px); margin-left: 10px; "><?php echo$row['descripcion']?></p>
          <b><h5 style="transform: translateY(-170px) translateX(350px);"><?php echo $row['direccion']?></h5></b></b>
        </div>
      </div>
      
      
      <div class="popup"style=" background:rgba(0, 0, 0, 0.3); position: fixed; top:0; left: 0; bottom:0; right: 0; display: flex; justify-content: center; align-items: center; z-index:2; ">
        <div class="card" id="mostrar1" style="width: 20%; background-color: rgb(102, 102, 102);">
          <div class="card-body">
            <button class="btn btn-danger cerrar" style=" transform:translateY(-50px) translateX(310px)"><img src="img/cerrar.png"></button>
            <img class="img2"src=""  style="transform: translateX(-55px);" width="250px" height="200px">
            <img class="img3"src="" width="250px" height="200px">
          </div>
      </div>
      </div>
      <?php } ?>
      
     
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script>
        $('.popup').hide();
        $('#popup1').hide();
        $('#popup2').hide();
       
      

      
$('.mostrar').click(function (e) {
  e.preventDefault();
    $('.popup').show()
    variable=$(this)[0].parentElement
  id=$(variable).attr('num')
    $.post("imghoteles.php", {id},
      function (response) {
        json= JSON.parse(response);
        img2=''
        img3=''
        json.forEach(jsons => {
          img2=jsons.img2
          img3=jsons.img3
            });
            $('.img2').attr('src','fotos/'+ img2)
            $('.img3').attr('src','fotos/'+ img3)
      }
    );
 
    
});
$('.cerrar').click(function(){
  $('.popup').hide(1000)
})
$('#cerrar1').click(function(){
  $('#popup1').hide(1000)
})
$('#agregar').click(function (e) {
  e.preventDefault();
    $('#popup1').show()
 
    
});
$('.editar').click(function (e) { 
  e.preventDefault();
  $('#popup2').show();
  variable=$(this)[0].parentElement
  id=$(variable).attr('num')
  $.post("edithotel.php", {id},
    function (response) {
       json= JSON.parse(response);
       id='';
       nombre='';
      descripcion='';
      direccion='';
      telefono='';
      whatsapp='';
      json.forEach(jsons => {
           id = jsons.id
           nombre=jsons.nombre
           descripcion=jsons.descripcion
           direccion=jsons.direccion
           telefono=jsons.telefono
          whatsapp=jsons.whatsapp
            });
$('#id').val(id)
$('#nombre').val(nombre)
$('#descripcion').val(descripcion)
$('#direccion').val(direccion)
$('#telefono').val(telefono)
$('#whatsapp').val(whatsapp)
           
    }

  );


  
});
$('#cerrar2').click(function (e) { 
  e.preventDefault();
  $('#popup2').hide(1000)
  
});
$('.eliminar').click(function (e) { 
  e.preventDefault();
  variable=$(this)[0].parentElement
  id=$(variable).attr('num')
  $.post("eliminarhotel.php", {id},
    function (response) {
      
    }
  );
});
      </script>
</body>
</html>