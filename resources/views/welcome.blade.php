@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>multi computer service</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
        .container{
        background-color: #0f736f;
        color:white;
        width:1210px;
        display:flex;
        flex-wrap:wrap;
        padding-left:250px;

    }
    .container a {
        color:black;
    }
    .fa {
  padding: 15px;
  font-size: 15px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
    #s1 ul {
    background-color: white;

}
#s1 a{
    color:black;
    font-size:20px;
}

#d5{
    display:flex;
    justify-content:flex-start; 
    padding-left:250px;
    background-color:#0f736f;
}
#f5{
    background-color:#0f736f;
    padding-left:250px;
    color:white;
    font-size:30px;
}
#gsearch{
    margin:20px;
    padding:25px;
    padding-right:200px;
}
#gh{
    padding:25px;
    background-color:orange;
    color:white;
    font-size:15px;
}
#g4{
  height:20px;
    padding-top:30px;

}
#a12{
    display:flex;
    flex-direction:column;
}

#z12{
    display:flex;
    flex-direction:column;
}
#e12{
    display:flex;
    flex-direction:column;
}

#r45{
    display:flex;
    justify-content:space-around;
}
#a13{
    display:flex;
    flex-direction:column;
}

#z13{
    display:flex;
    flex-direction:column;
}
#e13{
    display:flex;
    flex-direction:column;
}
#r13{
    display:flex;
    flex-direction:column;
}
#t13{
    display:flex;
    flex-direction:column;
}

#r50{
    display:flex;
    justify-content:space-around;
}
#a14{
    display:flex;
    flex-direction:column;
}

#z14{
    display:flex;
    flex-direction:column;
}
#e14{
    display:flex;
    flex-direction:column;
}
#r14{
    display:flex;
    flex-direction:column;
}
#t14{
    display:flex;
    flex-direction:column;
}
#y14{
    display:flex;
    flex-direction:column;
}

#r60{
    display:flex;
    justify-content:space-around;
}
#d89{
    display:flex;
    justify-content: space-around;
}
#k55{
  background-color:black;
  color:white;
  font-size: 50px;
}

</style>
</head>
<body>
<div class="container">
<div class="s1">
        <ul class="nav nav-tabs">
    
    
     <li  role="presentation"><a href="/"type="button">Acceuil</a></li>
     <li  role="presentation"><a href="/quisommesnous"type="button">Qui sommes nous?</a></li>
     <li  role="presentation"class="dropdown"><a href="/"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Creation site web<span class="caret"></span></a><ul class="dropdown-menu"><div id="d89"><li><a href="/site web vitrine">site web vitrine</a><img src="image/2.jpg"> </li><li><a href="/site web E-commerce">site web E-commerce</a><img src="image/4.jpg"></li><li><a href="/Site Web Dynamique">Site Web Dynamique</a><img src="image/6.jpg"></li><li><a href="/Pack Web Complete">Pack Web complete</a><img src="image/8.jpg"></li><li><a href="/presentation">Reference</a><img src="image/10.jpg"></li></div></ul></li>
     <li  role="presentation"><a href="/referencement"type="button">referencement</a></li>
        <li  role="presentation"><a href="/multimedia"type="button">Multi-media</a></li> 
        <li  role="presentation"><a href="/reference"type="button">Reseau Informatique</a></li> 
        <li  role="presentation"><a href="/reference"type="button">Logiciels</a></li>   

    
        <li  role="presentation"><a href="/reference"type="button">reference</a></li>   

        
        </ul></div></div>

    <br><br><br>

<div class="container" id="k55">
    
   
<div align="center"> 
<p id="demo"></p>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script></div><br><br>
<div class="container">

    <div class="row">
<div class="col-md-8">
    <h3>Cr??ation Site Web</h3>
    <p>Aujourd???hui plus de 70% des entreprises sont connect??es ?? internet, et c???est le premier outil utilis?? pour rechercher de l???information, des produits ou des fournisseurs. disposer d???un site internet est une n??cessit?? et un atout pour vos clients.

Multi-computer services est une agence web sp??cialis?? dans la conception de supports de communication sur internet .

Notons diverse service tel que cr??ation site web ,r??f??rencement ,Multim??dia ,r??seau informatique</p>
</div>
<div class="col-md-4">
    <img src="image/17.PNG">
</div></div></div>
<section>

<div  class="container "align="center">
   <div class="col-md-2"> <h4>Hebergement Gratuit</h4><img src="image/23.jpg"><p>Nous offre un H??bergement <br>performant  et adapt?? gratuit <br>pour tout client..</p></div>
  <div class="col-md-2"> <h4>Maintenance</h4> <img src="image/24.jpg"><p>Nous appliquons la mise ?? <br>jour afin de pr??server<br> les performances de votre site.</p></div>
    <div class="col-md-2"><h4>Budget Maitris??</h4><img src="image/25.jpg"><p>Quel que soit votre projet<br> nous prenons en consideration votre budget<br> et proposons des solutions adapt??s</p> </div></div></section>
    <br><br>
    <hr>
<div class="container mb-20">
  <div  class="row">

<div class="col-md-6">
    <img src="image/18.PNG">
</div>
<div class="col-md-6">
    <h3>Le SEO facteur cl?? de r??ussite sur le web</h3>
    <p>Le r??f??rencement naturel d??signe les techniques utilis??es par les moteurs de recherche qui classent les r??sultats qu???ils renvoient aux internautes lorsque ces derniers tapent une requ??te.

Par extension, r??f??rencement naturel est un terme qui est ??galement utilis?? dans le marketing digital pour d??finir l???ensemble des techniques et m??thodes qui permettent d???optimiser un site web pour am??liorer son classement dans les moteurs de recherche. On parle alors ??galement de SEO pour Search Engine Optimization (Optimisation pour les moteurs de recherche).

Le r??f??rencement naturel concerne uniquement les r??sultats class??s par l???algorithme de pertinence des moteurs. Les r??sultats publicitaires (Adwords) ne rentrent pas dans le champ du SEO.</p>
 </div></div></div></div>
<div align="center"><h1>Pour ??tre cr??atif d???un site web comment commencer ?</h1> </div>
<div align="center">
<img src="image/27.PNG"></div>
<div align="center">
<p>Voici les cinq ??tapes de cr??ation d???un site web :</p></div>

  <div class="col-md-2"> <img src="image/22.PNG"><h5>Audi <br>cahier de charge</h5></div>
   <div class="col-md-2"> <img src="image/23.PNG"><h5>Egronomie <br>prototype</h5></div>
    <div class="col-md-2"><img src="image/24.PNG"><h5>Conception <br>une charte graphique</h5> </div>
     <div class="col-md-2"><img src="image/25.PNG"><h5>D??veloppement <br>Int??gration</h5></div>
     <div class="col-md-2"><img src="image/26.PNG"><h5>Suivi <br>Lancement de site</h5></div>
</div>
<hr><br><br><br><br><br><br><br><br><br>
<div align="center"class="mt-6">
<h3>Comment faire pour avoir une strat??gie de r??f??rencement efficace?</h3>
<h4>Vous voulez positionnez votre site le plus haut possible afin de d??passer vos concurrents?</h4> 
</div>
  <div class="col-md-2"> <img src="image/28.PNG"><h5>OPTIMISATION</h5></div>
  <div class="col-md-2"><img src="image/29.PNG"><h5>MOTS CLES</h5></div>
  <div class="col-md-2"><img src="image/30.PNG"><h5>CONTENU</h5> </div>
     <div class="col-md-2"><img src="image/31.PNG"><h5>LIENS</h5></div>
 <div class="col-md-2"><img src="image/32.PNG"><h5>ANALYSE</h5></div>
     <div class="col-md-2"> <img src="image/33.PNG"><h5>TRAFIC</h5></div>

</div>
</body>
</html>
@endsection
