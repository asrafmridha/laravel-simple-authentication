<x-app-layout>
    <x-slot name="header">

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Farming System.</title>
    <link rel="stylesheet" href="{{asset("learn/style.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87db10118b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="heading">

    
          
    </a>
    </div>
    <div class="nav">

        <li class="hello"><a href="{{url("dashboard")}}">Home</a> </li>
        <li><a href="{{url('farming')}}">Farming</a> </li>
        <li><a href="{{url("agriculture")}}">Agriculture</a> </li>
        <li><a href="{{url("rooftop")}}">Rooftop Garden</a> </li>
        <li><a href="#">Services</a> </li>
        <li><a href="about.html">About Us</a> </li>
        <li><a href="{{url("contact")}}">Contact Us</a> </li>

    </div>
    
    <div>

        <img height="720px" width="2000px"   src="{{asset("learn/photos/animal.jpg")}}" alt="">
    </div>




    <div class="footer bg-primary ">
        <section>

            <div class="footer-section">
              <div class="container  ">
      
                <div class="row ">
      
                  <div class="col  text-center text-white">
                    <em>Are you totally broken?</em>
      
      
                    <h1>Trust Allah that the success that you want will be granted you.</h1>
                  </div>
                </div>
      
                <div class="row">
                  <div class="col">
      
                    <div class="text-center text-white">
      
                      <a href="https:facebook.com/kosto.asraful"><i class="fa fa-facebook-square text-dark" style="font-size:36px"></i></a>
                      <a href="https:linkedin.com/in/asraf-mridha-7801ba197/"><i class="fa fa-github-square text-dark" style="font-size: 40px;"></i></a>
                      
      
                      
                    </div>
                  </div>
                </div>
      
                <div class="row">
                  <div class="col text-center">
                     
                    <p class="fs-3" text-light>&copy;All Rights Reserved to Asraful Islam</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
       
    </div>
    
</body>
</html>




        
    </x-slot>
</x-app-layout>

    






