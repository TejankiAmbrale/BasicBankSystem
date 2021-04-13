<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Document</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,600&display=swap');

.wapper .button{
    display:inline-block;
    height:60px;
    width:60px;      
    float:center;
    overflow:hidden;
    margin:0 5px;
    background:#fff;
    border-radius: 50px;
    cursor:pointer;
    box-shadow:0px 10px 10px rgba(0,0,0,0.1);
    transition:all 0.3s ease-out;
}
.wapper .button:hover{
    width:200px;
}
.wapper .button .icon{
    display:inline-block;
    text-align: center;
    height:60px;
    width:60px;
    border-radius: 50px;
    box-sizing: border-box;
    line-height: 60px;
    transition:all 0.3s ease-out;
}
.wapper .button:nth-child(1):hover .icon{
    background:#4267b2;
}
.wapper .button:nth-child(2):hover .icon{
    background:#1da1fe;
}
.wapper .button:nth-child(3):hover .icon{
    background:#c32aa3;
}
.wapper .button:nth-child(4):hover .icon{
    background:#09b7fc;
}
.wapper .button .icon i{
 font-size: 25px;
 line-height: 60px;
 transition:all 0.3s ease-out;

}
.wapper .button:hover .icon i{
    color:#fff;
}
.wapper .button span{
 font-size: 20px;
 font-weight: 500;
 line-height: 60px;
 margin-left: 10px;
 transition:all 0.3s ease-out;
}
.wapper .button:nth-child(1) span{
    color:#4267b2;
}
.wapper .button:nth-child(2) span{
    color:#1da1fe;
}
.wapper .button:nth-child(3) span{
    color:#c32aa3;
}
.wapper .button:nth-child(4) span{
    color:#09b7fc;
}

.nv ul{
    float:right;
        list-style-type: none;
        margin-top: -285px;
        margin-right: -1320px;
        
   }
   .nv ul li{
  display:inline-block;
   }
   .nv ul li a{
   text-decoration: none;
        padding:5px 10px;
        border:1px;
        border-width: 2px;
        transition: 0.6s ease;
        position: relative;
        display: inline-block;
          padding: 12px 36px;
          margin: 10px 0;
          text-decoration: none;
          text-transform: uppercase;
          font-size: 18px;
          letter-spacing: 2px;
          border-radius: 7px;
          color: rgb(0, 0, 0);  
   }
   .nv ul li a:hover{
    color: #f8aa01;
    background-color: #00154F;
      opacity:0.5;
      }
      .contact-info{
        display: flex;
        width: 100%;
        max-width: 1200px;
        align-items: center;
        justify-content: center;
        padding: 0 20px;
      }
      
      
      .card{
        background: #210070;
        padding: 0 20px;
        margin: 0 10px;
        width: calc(33% - 20px);
        height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        border:2px solid #00154F;
        border-radius:35px;
        cursor: pointer;
      }
      
      .card-icon{
        font-size: 28px;
        background: #F4aF1B;
        width: 60px;
        height: 60px;
        text-align: center;
        line-height: 60px !important;
        border-radius: 50%;
        transition: 0.3s linear;
      }
      
      .card:hover .card-icon{
        background: none;
        color: #F2BC94;
        transform: scale(1.6);
      }
      
      .card p{
        margin-top: 20px;
        font-weight: 300;
        letter-spacing: 2px;
        max-height: 0;
        opacity: 0;
        transition: 0.3s linear;
      }
      
      .card:hover p{
        max-height: 40px;
        opacity: 1;
      }
      @media screen and (max-width:800px) {
        .contact-info{
          flex-direction: column;
        }
        .card{
          width: 100%;
          max-width: 300px;
          margin: 10px 0;
        }
      }
      body{
          position:relative;
          width:100%;
          min-height:100vh;
          padding:2rem;
          background-color: #ffffff;
          overflow:hidden;
          display:flex;
          align-items:center;
          justify-content: center;
          background:url(img/tr1.jpg);
          background-repeat: no-repeat;
          background-size: cover;
         
      }
      .wapper{
        position: fixed;
        top: 75%;
        left: 50%;
        margin-top: -50px;
        margin-left: -100px;
      }
</style>
<body>
  <div="container">
  <div class="contact-info">
    <div  class="nv">
<ul >
      <li class="active" ><a  href="index.php" >Home</a></li> </ul></div>
    
    <div style="background-color:#00154F ;" class="card">
      <i class="card-icon far fa-envelope"></i>
      <p>p49r7xjbspd@temporary-mail.net</p>
    </div>
    <div style="background-color:#00154F;" class="card">
      <i class="card-icon fas fa-phone"></i>
      <p>+02226477244</p>
    </div>
    <div style="background-color:#00154F;" class="card">
      <i class="card-icon fas fa-map-marker-alt"></i>
      <center><p>Shop No-286, Kherwadi Road, Bandra(e) Mumbai Maharashtra 400051</p></center>
    </div>
  </div>
   <br>
   <br>
   <br>
  <div class="wapper">
    <div class="button">
      <div class="icon">
        <i class="fab fa-facebook-f"></i>
      </div>
      <span><b>FACEBOOK</b></span>
    </div>
    <div class="button">
      <div class="icon">
        <i class="fab fa-twitter"></i>
      </div>
      <span><b>TWITTER</b></span>
    </div>
    <div class="button">
      <div class="icon">
        <i class="fab fa-instagram"></i>
      </div>
      <span><b>INSTAGRAM</b></span>
    </div>
    <div class="button">
      <div class="icon">
        <i class="fab fa-linkedin"></i>
      </div>
      <span><b>LINKEDIN</b></span>
    </div>
  </div>
</div>
</body>
</html>

 
  