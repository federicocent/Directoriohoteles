<?php
include("base.php");
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$username=$_SESSION['usuario'];
$sql1="SELECT * FROM comentarios";
$query1=mysqli_query($db,$sql1);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Local Directory | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .carousel .carousel-item{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            user-select:none;
        }
        .carousel-item{
            width: 500px !important;
            height: 500px !important ;
        }
    </style>
</head>

<body>
    
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            
            <nav class="main-menu mobile-menu" style="background-color: rgba(0,0,0,0) ;">
                <ul>
                    <li class="active" ><a href="index.html">Inicio</a></li>
                    
                    <li><a href="contact.html">Contacto</a></li>

                    <li><a href="quienessomos.html">Quienes Somos</a></li>
                </ul>
           
           
            <div class="header-right">
                
                <div class="user-access">
                    <h6 style="color: white; transform:translateX(-200px) translateY(10px); font-size:20px">Bienvenido,<?php if( $username == null){
                        echo"Invitado";
                    }else{
                        echo"$username";
                    } ?></h6>
                    <a href="login.html">Login-Admin</a>
                    <?php
                    if( $username == null){
                        
                    }else{
                      ?>
                      <a href="cerrarsesion.php" class="ml-5 mr-5">Cerrar Sesion</a>
                      <a id="agregar" href="" >Agregar categoria</a>
                      </nav>
                     <div id="popup1"style=" background:rgba(0, 0, 0, 0.3); position: fixed; top:0; left: 0; bottom:0; right: 0; display: flex; justify-content: center; align-items: center; transform:translateY(-200px); z-index:1;">
       <div class="card" id="mostrar2" style="width: 20%; background-color: rgb(102, 102, 102);">
          <div class="card-body">
            <button class="btn btn-danger" id="cerrar1"style=" transform:translateY( -10px) translateX(310px)"><img src="img/cerrar.png"></button>
            <form method="POST" action="addcategoria.php" enctype="multipart/form-data">
  <div class="form-group">
    <label>Nombre de la categoria</label>
    <input type="Text"  name="nombre" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label >Archivo php</label>
    <input type="file" name="php" class="form-control-file" >
  </div> 
  
  <button type="submit" class="btn btn-primary">Subir</button>
</form>
          </div>
      </div>
          </div>
                    <?php  
                    }
                    ?>

                </div>
               
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-text">
                        <img src="img/placeholder.png" alt="">
                        <h1>El Banco, Magdalena Colombia</h1>
                        <form method="POST"  action="inicio.php" class="filter-search">
                            <div class="category-search">
                                <h5>Buscar Categoria</h5>
                                <select name="category" id="categorias" class="ca-search">
                             
                                    
                                </select>
                                
                            </div>
                            <div class="location-search">

                            </div>
                            <button type="submit" name="search">Buscar Ahora</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Trending Restaurant Section Begin -->
    <div>
        <!--<img alt="COVID-19" class="img-responsive" src="https://www.paginasamarillas.com.co/view/global/common/images/banner/co/COVID-PARA-PACOM_OKOKOK.png">-->
           
    </div>
    
    
    <section>
   <div class="container">
       <div class="row">
           <div class="col sl2">
               <h1 class="center-aling mt-5">Comentarios</h1>
               <div class="carousel center-aling">
                   <?php while($row=mysqli_fetch_array($query1)){

                    ?>
                   <div class="carousel-item" >
                       <div class="avatar" style=" width:60px; height:60px; border-radius:50px; background-color:#C18BFE; margin-bottom:20px"><h2 style="transform:translateX(20px) translateY(10px); color:whitesmoke"></h2></div>
                       <h3><?php echo$row['nombre'] ?></h3>
                       <p><?php echo$row['mensaje'] ?></p>
                       
                   </div>
                   
                   <?php } ?>
                   
                   </div>
               </div>
           </div>
       </div>
   </div>
  
    </section>

    
    <!-- Testimonial Section End -->


   <!-- App Section End -->



    <!-- Footer Section Begin -->
    <footer class="footer-section spad" style="padding-bottom:50px; padding-left:0; padding-top:10px;overflow:hidden; ">
       
                    </div>
                </div>
            </div>
            <div class="row footer-bottom" >
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="copyright" style="transform:translateY(60%)"><p class="text-white" >
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           Derechos&copy;<script>document.write(new Date().getFullYear());</script> Todos lo derechos reservados por <a href="#" >Shalom Net</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p></div>
                </div>
              
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $('#popup1').hide();
        $('#agregar').click(function (e) { 
            e.preventDefault();
  
            $('#popup1').show();
        });
        $('#cerrar1').click(function (e) { 
            e.preventDefault();
            $('#popup1').hide(1000)
        });
        $.get("categorias.php",
            function (response) {
                let json = JSON.parse(response);
                let most='';
                let most1='';
                json.forEach(jsons => {
            most +=`
            <option>${jsons.categoria}</option>          
            `
            most1 +=`
            <li data-value="${jsons.categoria}" class="option selected focus">${jsons.categoria}</li>
            `        
            });
            $('#categorias').html(most)
            $('.list').html(most1);
            }
        );
       
        avatar=document.querySelectorAll('.avatar').parentElement;
        nombre=avatar.querySelector('h3').innerHTML
        primerletra=nombre.slice(0,1)
        div=avatar.querySelector('div')
        divdentro=div.querySelector('h2')
        console.log(avatar)

        
        divdentro.innerHTML=primerletra.toUpperCase()
    </script>
    <script src="js/comentarios.js"></script>

</body>

</html>