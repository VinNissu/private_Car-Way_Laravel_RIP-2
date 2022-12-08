<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car-way-limpo</title>


  <!-- Bibliotecas de icones -->
  <!--Fonte Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--Fonte Awesome-->
<!--Recursos do Bootstrapp-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!--Recursos do Bootstrapp-->
<!-- Conexao com css    -->
<link rel="stylesheet" href="css/styleMenuLateral.css">
<link rel="stylesheet" href="./css/style.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Conexao com css    -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Conexao data aos js-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Conexao data aos js-->

</head>
<head>

  <input type="checkbox" id="check">
  <label for="check">
   <i class=" fas fa-bars" id="btn"></i>
   <i class=" fas fa-times"  id="cancel"></i>
  </label>
  <div class="sidebar">
   <header>Menu</header>
    <a href="#" class="active">
     <i class="fas fa-qrcode"></i>
     <span>Painel</span>
    </a>
    <a href="#">
     <i class="fas fa-link"></i>
     <span>Localizacao</span>
    </a>
    <a href="#">
     <i class="fas fa-stream"></i>
     <span class="decoration-none">Configurar</span>
    </a>
    <a href="#">
     <i class="fas fa-calendar"></i>
     <span>Eventos</span>
    </a>
    <a href="#">
     <i class="fas fa-question-circle"></i>
     <span>Sobre nos</span>
    </a>
    <a href="#">
     <i class="fas fa-slider-h"></i>
     <span>Serviços</span>
    </a>
    <a href="#">
     <i class="fas fa-enveloper"></i>
     <span>Contato</span>
    </a>
  </div>
 </head>
<body>

<section class="col-12  d-flex justify-content-between bg-black cssDoCabecario posicaodocabecario px-5" data-aos="flip-up">
      <h1><a href="#" class="fs-3 d-none d-lg-block mt-2 text-light text-decoration-none"><i class="fa-solid fa-layer-group text-light fs-5"></i></a></h1>

    </h1> 

    <h1 class="col-2 d-none d-lg-block "><a class="text-decoration-none" href="#" target="_blank" rel="noopener noreferrer" ><button class="btn btn-light d-flex justify-content-end fs-6 mt-2" ></i>Você está em SJC<i class="fa-solid fa-map-pin mt-1"></i></button></a>
    </h1>

    <h1 class="col-2 text-light d-flex justify-content-center fs-5 d-none d-lg-block"><a  class="text-decoration-none"href="./TelaUploadFinal.html" target="_blank" rel="noopener noreferrer"><button class="btn btn-light d-flex justify-content-end fs-6 mt-2"></i>Enviar uma foto
    </button></a>
    </h1>

    <h1 class="col-1 text-light d-flex justify-content-center fs-5 d-none d-lg-block"><a class="text-decoration-none" href="TelaComunidadeFinal.html"><button class="btn btn-light d-flex justify-content-end fs-6 mt-2" onclick="modalComu()">Comunidade&nbsp;<i class="fa-solid fa-people-group mt-1"></i></button></a>
    </h1>



<!--Mobile-->
<section class="d-flex justify-content-between px-5 container bg-black d-md-block d-lg-none">
  <h1 class="text-light col-4 fs-4 mt-4"></i>Menu</h1>
  <a href="TelaUploadFinal.html"><h1 class="text-light col-4 fs-4 bordamobile decoration-none mt-4">Enviar</h1></a>
  
  
  

</section>

</section>



<section class="cardbox">
<section class="shadowsection mt-5 px-5 bg-white mx-5"data-aos="fade-up"
data-aos-duration="1000">
    <div>&nbsp;</div>
    <div class="container-fluid borderadius bg-black d-flex justify-content-between ">
        <div class="card mb-1 mt-1" style="max-width:300px;">
            <div class="row g-0">
              <div class="col-4">
                <img class="img-thumbnail imagemdousuario d-none d-lg-block mt-2 ms-1" src="./imgs/Interrogação-profile.jpg"></img>
              </div>
              
              <div class="col-md-8 usuarioindex d-none d-lg-block ">
                <div class="card-body">
                  <h5 class="card-title fw-bold">sr WILSON</h5>
                  <p class="card-text">Red-suns</p>
                </div>
              </div>
            </div>
          </div>
    <h1 class="text-light mt-2 d-none d-lg-block"><i class="fa-solid fa-earth-oceania mt-3"></i>SP/SJC/Vila</h1>   
    <h1 class="text-light ms-5 ps-5 d-none d-lg-block"></i><button class="btn btn-light d-flex justify-content-end fs-3 mt-4" onclick="modal()"></i>reportar
    </button></h1>
</div>




<div class="container d-flex justify-content-center mt-5" data-aos="zoom-in">
    <img class="img-fluid col-12 shadowimg imagemdofeed" alt="Imagem-feed" src="./imgs/ponto-de-interrogacao.jpg"></img>
</div> 

<div class="container bg-white">
    <div class="text-warning d-flex justify-content-center ">
    </div>
    <div>
      <h1 class="mt-5 text-black fw-bold">Usuário disse:</h1>
      <p class="borderadius fs-3 mx-5 px-5 mt-3 text-black d-none d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto deleniti consectetur maxime eius voluptatum! Cumque repellendus numquam voluptates delectus velit itaque, alias corrupti modi veritatis ab, earum iste officia sint.</p></div>

    <ul>
        <div>&nbsp</div>
        <div>&nbsp</div>
        <div>&nbsp</div>
    </ul>
</div>
</section>

  <a href="./TelaUploadFinal.html" class="blocoenviarfoto">
    <span class="iconenviarfoto d-none d-lg-block"><i class="fa-solid fa-file-circle-plus" data-aos="zoom-out-right"></i></span>
    
  </a>
</section>

<section class="cardbox">
  <section class="shadowsection mt-5 px-5 bg-white mx-5"data-aos="fade-up"
  data-aos-duration="1000">
      <div>&nbsp;</div>
      <div class="container-fluid borderadius bg-black d-flex justify-content-between">
          <div class="card mb-1 mt-1" style="max-width:300px;">
              <div class="row g-0">
                <div class="col-4">
                  <img class="img-thumbnail imagemdousuario d-none d-lg-block mt-2" src="./imgs/Interrogação-profile.jpg"></img>
                </div>
                
                <div class="col-md-8 usuarioindex d-none d-lg-block ">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">sr WILSON</h5>
                    <p class="card-text">Red-suns</p>
                  </div>
                </div>
              </div>
            </div>
      <h1 class="text-light mt-2 d-none d-lg-block"><i class="fa-solid fa-earth-oceania mt-3"></i>SP/SJC/Vila</h1>   
      <h1 class="text-light ms-5 ps-5 d-none d-lg-block"></i><button class="btn btn-light d-flex justify-content-end fs-3 mt-4" onclick="modal()"></i>reportar
      </button></h1> 
  </div>
  
  
  
  
  <div class="container d-flex justify-content-center mt-5 " data-aos="zoom-in">
      <img class="img-fluid col-12 shadowimg imagemdofeed" alt="Imagem-feed" src="./imgs/ponto-de-interrogacao.jpg"></img>
  </div> 
  
  <div class="container bg-white">
      <div class="text-warning d-flex justify-content-center ">
      </div>
      <div>
        <h1 class="mt-5 text-black fw-bold">Usuário disse:</h1>
        <p class="borderadius fs-3 mx-5 px-5 mt-3 text-black d-none d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto deleniti consectetur maxime eius voluptatum! Cumque repellendus numquam voluptates delectus velit itaque, alias corrupti modi veritatis ab, earum iste officia sint.</p></div>
  
      <ul>
          <div>&nbsp</div>
          <div>&nbsp</div>
          <div>&nbsp</div>
      </ul>
  </div>
  </section>
  
      
    </a>
  
  
  
  </section>
</body>
</html>

<script src="js/costumer.js"></script>
