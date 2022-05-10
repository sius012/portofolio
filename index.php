<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Azeret+Mono&display=swap');

        * {
            margin: 0px;
            font-family: 'arial';
        }

        body {
            margin: 0px;
            background-image: url("bg-porto.png");
            height: 1000px;
            overflow-x: hidden;

        }

        #mains {
            color: white;
            z-index: 10;
            position: absolute;

        }

        p{
            font-size: 8pt;
        }

        div {
            text-align: center;
        }

        .baliho {
            border-radius: 0px 0px 50px 50px;
            width: 100%;
            height: 450px;
            background-image: linear-gradient(to right, #961717, rgb(255, 89, 89));
            text-align: center;
            vertical-align: center;
        }

        p {
            font-weight: bold;
        }

        .title1 {
            left: 100px;
            top: 100px;
            position: absolute;
            font-size: 25pt;
            color: white
        }

        #secto {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: sectionanimation 1s ease-in-out;

        }

        #secto::before {
            content: '';
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(black, rgba(28, 24, 57, 0.728));

        }

        section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #mp {
            object-fit: unset;
            
            width: auto;
            object-fit: cover;
            size: 10px;
            right: 100px !important;
            left: unset;
            top: 100px;

        }

        .sius {
            color: white;
            font-size: 50px;
            z-index: 10;
            left: 100px;
            top: 150px;
            margin-bottom: 20px;
    
 
        }

        .nav {
            list-style-type: none;
            color: white;
            display: inline;
            z-index: 0;
            top: 10px;
            right: 0px;
            position: absolute;

        }

        .nav li {
            display: inline;
            font-weight: lighter;

        }

        .nav li a {
            display: inline-block;
            margin: 30px;
            text-decoration: none;
            padding: 10px;
            color: white;


        }

        #l4 {
            filter: blur(5px);

        }

        #l3 {
            filter: blur(2px);
        }

        section p {
            color: white;
            z-index: 3;
        }

        ul {}

        .listporto {
            margin-bottom: 10px;
            display: block;
            list-style-type: none;
            animation: mymove 0.5s ease-in-out;
        }

        .listporto li {
            display: inline;
            list-style-type: none;
            width: 100px;
        }

        .listporto a {
            display: inline-block;
            text-decoration: none;
            color: white;
            padding: 20px;
            border: 3px solid rgb(255, 255, 255);
            border-radius: 20px;
            animation: mymove 0.2s;

        }




        @keyframes sectionanimation {
            0% {
                height: 100vw;
            }

            100% {
                border-radius: 0px;

            }
        }

        .desc {
            z-index: 10;
          
            left: 150px;
            top: 250px;
            margin-bottom: 40px;

        }

        .desc2 {
            line-height: 200%;
            padding: 20px;
            background-color: rgba(24, 0, 39, 0.259);
            margin-top: 10px;
            margin-bottom: 50px;
            width: 800px;
            align-self: center;
            margin-left: 18%;
        }

        .my-card {
            width: 8rem;
            height: 9rem;
            background-color: rgb(48, 19, 68);
            border-radius: 30px;
            margin: 3px;
            padding: 20px;

            
           
           
       
        }

        .main-rotate{
           transition: 2s ease-in-out;
        }

        .main-rotate .my-card{
           position: absolute;
        }
        .my-card:hover{
            
           
            
        }

        .contact {
           
            z-index: 10;
            left: 200px;
            bottom: 230px;

        }

        .contact a {
            border-radius: 100px;
            display: block;
            padding: 10px;
            text-decoration: none;
            color: rgb(0, 0, 0);
            background-color: white;
            font-weight: bold;
            width: 100px;

        }

        .img-cont {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            grid-gap: 10px;
        }

        
.main-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.kartu-dalam {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.main-card:hover .kartu-dalam {
  transform: rotateY(180deg);

  align-items: center;
}

.kartu-depan, .kartu-belakang {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.kartu-depan {
  background-color: #bbb;
  color: black;
  width: 200px;
  height: 250px;
  border: 5px solid rgb(41, 7, 78);

}

.kartu-belakang {
    text-align: center;
    width: 200px;
 padding: 10px;
  background-color: #23072f;
  color: white;
  transform: rotateY(180deg);
  height: 250px;
}

.open{
    z-index: 10;
    text-align: left;
    position: absolute;
    left: 50px;
}

.open p{
    font-size: 12pt;
}

img{
    animation: floating 2s infinite;
}
@keyframes floating {
    0% { transform: translate(0,  0px); }
    50%  { transform: translate(30, 15px); }
    100%   { transform: translate(0, -0px); }   
}

@keyframes floating2 {
    0% { transform: translate(0,  0px); }
    50%  { transform: translate(10, 35px); }
    100%   { transform: translate(0, -0px); }   
}

@keyframes floating3 {
    0% { transform: translate(0,  10px); }
    50%  { transform: translate(30, 35px); }
    100%   { transform: translate(0, -0px); }   
}


#l1{
    animation: floating1 3s infinite; 
}
#l2{
    animation: floating2 3s infinite; 
}
#l3{
    animation: floating3 3s infinite; 
}
    </style>

<body>
    </head>
    <section id="secto">


        <img src="assets/img/b3.png" id='l4' alt="">
        <img src="assets/img/b2.png" id='l3' alt="">
        <img src="assets/img/b1.png" id='l2' alt="">
        <img src="l1.svg" id='l1' alt="" style="display:none">
        <img src="myfoto.png" id='mp' alt="">
        <div class="open">
            <p class="sius">Hai, I'm Sius

            </p>

            <p class="desc">
                Hai, my name is Dionisius Setya Hermawan
            </p>

            <div class="contact">
                <a href="">Contact Me</a>
            </div>

        </div>

            <ul class="nav">
                <li><a href="..">Home</a></li>
                <li><a href="">Portofolio</a></li>
            </ul>
            

    </section>
    <section id="mains" style="width: 100%;">
        <div style="padding: 30px">
            <h2>#INTRODUCTION</h2>
            <div class="desc2">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa repudiandae dolore ipsum, odio nihil
                    est repellendus. Saepe, corrupti quaerat esse ad molestias nulla voluptate quis. Laboriosam rerum
                    nam nulla sequi.</p>
            </div>

            <h2>MY PORTOFOLIO</h2>
            <br>
            <br>
            <ul class="listporto">
                <li><a href="">All</a></li>
                <li><a href="">Animation</a></li>
                <li><a href="">Web Developing</a></li>
                <li><a href="">Web Design</a></li>
                <li><a href="">Game Developing</a></li>
            </ul>
            <br>
            <br>
            <br>
            <div>
               <h3>#Animation</h3>
            </div>
            <button><a href="tambahporto.php">Tambah</a></button>
            <div class="img-cont" style="margin-left: 0px; padding-top: 30px;">
              

               
               <?php
                    include "config/conn.php";

                 

                    $datas = $connect->query("SELECT * FROM piece");
                    

                    while($f = $datas->fetch_assoc()){
          
                   
                        $gambar = $f["gambar"];
                       ?>
                              <div class="main-card">
                    <div class="kartu-dalam">
                        <div style="background-image: url('assets/animasi/<?php echo $gambar ?>'); background-size: cover;" class="kartu-depan">
                            <p><?php echo $f["nama_karya"]?></p>
                        </div>
                        <div style="z-index: -1; background-size: cover;" class="kartu-belakang">
                            <p>Scout Suite Front</p>
                        </div>
                    </div>
               </div>   

<?php
                    }       

                ?>
      

          
             
            </div>

            <div class="video-yt"></div>
       
            
        </div>

       

    </section>

    <script>
        var l1 = document.getElementById("l1");
        var l2 = document.getElementById("l2");
        var l3 = document.getElementById("l3");
        var l4 = document.getElementById("l4");
        var mp = document.getElementById("mp");

        window.addEventListener('scroll', function () {
            var value = window.scrollY;

            l1.style.top = value * 0.5 + 'px';
            l2.style.top = value * 0.7 + 'px';
            l3.style.top = value * 0.8 + 'px';
            l4.style.top = value * 0.9 + 'px';
            mp.style.top = value * 0.3 + 'px';

            mp.style.filter = "blur(" + value * 0.04 + 'px)';
            l4.style.filter = "blur(" + value * 0.04 + 'px)';
        });
    </script>
</body>

</html>