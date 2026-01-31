<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="images/icon.ico">

<!--META TAGS-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@200;300;400;600&family=Pacifico&family=Signika+Negative:wght@700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lora:wght@400;500&display=swap" rel="stylesheet"> 

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>


html {
  scroll-behavior: smooth;
}
:root{
  scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
  scrollbar-width: thin !important;
}
::-webkit-scrollbar {
  height: 12px;
  width: 8px;
  background: #000;
}
::-webkit-scrollbar-thumb {
  background: gray;
  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}
::-webkit-scrollbar-corner {
  background: #000;
}










/*DEFAULT*/
body {
  width: 100%;
  margin:0;
  overflow-x: hidden;
  font-family: 'Cairo', sans-serif;
}

a,li,button,input,textarea {
  text-decoration:none;
  transition: 0.5s;
  list-style: none;
  outline: none !important;
}

button::-moz-focus-inner,a::-moz-focus-inner,input::-moz-focus-inner,textarea::-moz-focus-inner {
  border: 0;
}

.btn1 {
  background-color: #f18826;
  text-align: center;
  color: #fff;
  padding: 15px 30px;
  border: 0;
  border-radius: 5px;
}

.btn1:hover {
  background: #000;
  box-shadow: 0px 6px 16px -6px rgba(1,1,1,0.5);
}

.btn2 {
  background-color: #3399ff;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  border:0;
  z-index:111;
  display:block;
  width:150px;
  margin:2vh 0;
  border-radius:40px;
}

.btn2:hover {
  background-color: #2c73a1;
  box-shadow: 0px 6px 16px -6px rgba(1,1,1,0.5);
}

.title{
  font-family: 'Signika Negative', sans-serif;
  font-weight:900;
}

.sub-title{
  font-weight:400;
}

.dark-title{
  font-family: 'Bebas Neue', cursive;
}

p{
  line-height:1.8em;
  letter-spacing:0.08em;
}

table{
  width:100%;
  border-collapse:collapse;
}

table td{
  position:relative;
  vertical-align:top;
}

.sections{
  position:relative;
  margin:10vh auto;
}

.title_header{
  width:50%;
  margin:10vh auto;
  text-align:center;
}

.title_header h1{
  font-family: 'Berkshire Swash', cursive;
  font-size:2em;
  font-weight:900;
  position:relative;
  top:15px;
  display:block;
}

.title_header h5{
  color:gray;
  font-size:1.2em;
  line-height:1.4em;
}

.title-2{
  font-family: 'Berkshire Swash', cursive;
  letter-spacing:0.08em;
  line-height:1.4em;
  color:#E39831;
}


.btn3{
  background:transparent;
  border:1px solid #00e1ef;
  margin:auto;
  display:block;
  width:200px;
  color:#00e1ef;
  text-align:center;
  padding:20px;
  border-radius:5px;
  margin-top: 40px;
}

.btn3:hover{
  background:#00e1ef;
  color:#000;
}


@media (max-width:820px){
  .title_header{
    width:90%;
  }
  .title_header h1{
    font-size:1.6em;
  }
  .title_header h5{
    font-size:1.1em;
  }
}






/*ANIMATION*/
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
.inline-photo {
  opacity: 0;
  transform: translateY(4em) rotateZ(-0deg);
  transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
  will-change: transform, opacity;
}
.inline-photo.is-visible {
  opacity: 1;
  transform: rotateZ(-0deg);
}
.inline-photo2 {
  opacity: 0;
  transform: translateX(-15em) rotateZ(-0deg);
  transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
  will-change: transform, opacity;
}
.inline-photo2.is-visible2 {
  opacity: 1;
  transform: rotateZ(-0deg);
}
.inline-photo3 {
  opacity: 0;
  transform: translateX(15em) rotateZ(-0deg);
  transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
  will-change: transform, opacity;
}
.inline-photo3.is-visible3 {
  opacity: 1;
  transform: rotateZ(-0deg);
}
@-webkit-keyframes fadeInFromNone {
  0% {
    display: none;
    opacity: 0;
  }

  1% {
    display: block;
    opacity: 0;
  }

  100% {
    display: block;
    opacity: 1;
  }
}

@-moz-keyframes fadeInFromNone {
  0% {
    display: none;
    opacity: 0;
  }

  1% {
    display: block;
    opacity: 0;
  }

  100% {
    display: block;
    opacity: 1;
  }
}

@-o-keyframes fadeInFromNone {
  0% {
    display: none;
    opacity: 0;
  }

  1% {
    display: block;
    opacity: 0;
  }

  100% {
    display: block;
    opacity: 1;
  }
}

@keyframes fadeInFromNone {
  0% {
    display: none;
    opacity: 0;
  }

  1% {
    display: block;
    opacity: 0;
  }

  100% {
    display: block;
    opacity: 1;
  }
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}















/*TOP NAVIGATION*/
header{
  position:fixed;
  top:2rem;
  width:100%;
  z-index:9999;
  transition:0.5s;
}

.topnav {
  overflow: hidden;
  background-color:#fff;
  width:80%;
  height:80px;
  margin:auto; 
  box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
  transition:0.5s;
  font-family: 'Cairo', sans-serif;
}

.topnav a {
  float: left;
  display: block;
  color: #8c6239;
  text-align: center;
  padding: 24px 16px;
  margin:auto 1rem;
  text-decoration: none;
  font-size: 17px;
  position:relative;
}

.logo{
 width: 103px;
    height: 79px;
  position:absolute;
  top:0.2rem;
  border-radius:0px;
}

#icon{
  float:right;
}

#active{
  display:flex;
  font-weight:bold;
  width:100px;
  font-family: 'Pacifico', cursive;
}

#active:hover{
  color:#fff;
}

.topnav .active{
  color:#236b9a;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: #8c6239;
  padding: 24px 16px;
  background-color: inherit;
  font-family: inherit;
  margin:auto 1rem;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-top:2px solid #ec4613;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 8px 16px;
  margin:auto 0rem;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  color: #236b9a;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 920px) {
  .logo{
    height:40px;
    width:100px;
    position:static;
  }
  .topnav{
    height:auto;
  }
  .topnav a {
    float: left;
    display: block;
    color: #8c6239;
    text-align: center;
    padding: 14px 16px;
  }
  .dropdown .dropbtn {
    padding: 14px 16px;
  }
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
  #active{
    display:none;
  }
}

@media screen and (max-width: 920px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    padding: 6px 16px;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

/* ANIMATION */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


@media (max-width:820px){
  .Cards{
    display:block;
  }
  .product_card{
    width:45%;
    display:inline-block;
    margin:10px;
  }
  .product_card .title-2{
    font-size:0.9em;
  }
  .product_card section .price{
    margin-right:3px; 
  }
  .product_card section{
    font-size:12px; 
  }
}








.video-container{
    position: relative;
    width: 100%;
    height: 75vh;
    overflow: hidden;
}

.video{
    width: 100%;
    height: 100%;
    object-fit: cover; /* यो image पनि cover गराउँछ */
}

.overlayer{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1;
}

.video-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    z-index: 2;
    text-align: center;
    font-size: 2rem;
}

@media (max-width: 768px){
    .video-text{
        font-size: 1.2rem;
        padding: 0 10px;
    }
}




.info {
    text-align: center;
    margin-bottom: -60px;
    color: rgb(8, 10, 28);
}

.card {
    width: 300px;
    height: 390px;
    border-radius: 10px;
    box-shadow: rgba(33, 33, 33, 0.25) 0 6px 12px -2px, rgba(0, 0, 0, 0.438) 0 3px 7px -3px;
    text-align: center;
    margin-top: 10px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    position: relative;
    font-size: large;
    opacity: 0.9;
    transform: scale(0.8, 0.8);
    transition: all 0.3s ease-in-out;
}

.active {
    opacity: 1;
    transform: scale(1, 1);
    transition: all 0.3s ease-in-out;
}

.card p {
    padding: 0 20px;
}

.card .image-container {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    overflow: hidden;
}

.card .image-container img {
    height: 100%;
    margin-left: -25%;
}

.card .name-container {
    position: absolute;
    bottom: 0;
    background-color: rgb(0, 3, 26);
    color: ivory;
    width: 100%;
    text-align: center;
    padding: 10px 0;
}





#review-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    padding: 40px;
    justify-items: center;
}

/* Tablet → 2 cards */
@media (max-width: 992px) {
    #review-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Mobile → 1 card */
@media (max-width: 600px) {
    #review-container {
        grid-template-columns: 1fr;
    }

    .card {
        width: 90%;
    }
}




/*FOOTER*/
.footer{
  background:#000;
  padding:30px 0px;
  font-family: 'Play', sans-serif;
  text-align:center;
  background-image:url("https://i.ibb.co/7Nwg5dK/footer.jpg");
  background-size:100% 100%;
}

.footer .row{
  width:100%;
  margin:1% 0%;
  padding:0.6% 0%;
  color:gray;
  font-size:0.8em;
}

.footer .row a{
  text-decoration:none;
  color:gray;
  transition:0.5s;
}

.footer .row a:hover{
  color:#fff;
}

.footer .row ul{
  width:100%;
}

.footer .row ul li{
  display:inline-block;
  margin:0px 30px;
}

.footer .row a i{
  font-size:2em;
  margin:0% 1%;
}

@media (max-width:720px){
  .footer{
    text-align:left;
    padding:5%;
  }
  .footer .row ul li{
    display:block;
    margin:10px 0px;
    text-align:left;
  }
  .footer .row a i{
    margin:0% 3%;
  }
}





</style>

<body>



<header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img class="logo" src="./logooo.png" alt=""></a>
<a id="active"></a>
<a href="/" class="active">HOME</a>
<a href="/feedback">Review</a>
<a href="/gallery">Gallery</a>
<a href="/blog">Blog</a>
<a href="/contact">CONTACT</a>
<a href="#">ABOUT</a>
<a href="#" style="float:right;padding: 24px 2px;"><i class="fa fa-search" class="openBtn" onclick="openSearch()"></i></a>
<a href="#" style="float:right;padding: 24px 2px;"><i class="fa fa-user-circle-o"></i></a>
<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>


<script>
    function NavBar() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
document.getElementById("myTopnav").style.width = "100%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "0%";
document.getElementById("roll_back").style.display = "block";
} else {
document.getElementById("myTopnav").style.width = "80%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "2rem";
document.getElementById("roll_back").style.display = "none";
}
}


</script>



<div class="container">
   
 <div class="video-container">
  
  <img class="video" src="./reviewimg.jpg" alt="Healthy Animals">

  <div class="overlayer"></div>

  <h3 class="video-text">
    Master the Art of Baking
  </h3>

</div>

</div>






<div id="review-container">
  
</div>

<script>
const reviewContainer = document.getElementById("review-container");

const reviews = [
    {
        img: "./reviewimg1.jpg",
        alt: "Profile picture of Indyah Almay",
        text: "I really enjoyed this course! It was fun and interactive as well as educational. I learnt a lot!",
        name: "Indyah Almay"
    },
    {
        img: "./reviewimg2.jpg",
        alt: "Profile picture of Edward Jones",
        text: "A well thought out course with the student in mind. Thanks for creating this for the community.",
        name: "Edward Jones"
    },
    {
        img: "./reviewimg3.jpg",
        alt: "Profile picture of Heather White",
        text: "I managed to do this course in my spare time after hours and have only positive things to say!",
        name: "Heather White"
    }
];

reviews.forEach(review => {
    const card = document.createElement("div");
    card.classList.add("card");

    card.innerHTML = `
        <img height='200px' width='100px'src="${review.img}" alt="${review.alt}">
        <p>${review.text}</p>
        <h4>${review.name}</h4>
    `;

    reviewContainer.appendChild(card);
});
</script>


<script>
function populateDisplay() {
    reviews.forEach(review => {
        const cardElement = document.createElement('div')
        cardElement.classList.add('card')

        cardElement.addEventListener('mouseover', showCard)
        cardElement.addEventListener('mouseleave', blurCard)

        const imageContainer = document.createElement('div')
        imageContainer.classList.add('image-container')
        const imageElement = document.createElement('img')
        imageElement.setAttribute('src', review.img)
        imageElement.setAttribute('alt', review.alt)
        imageContainer.append(imageElement)

        const paragraphElement = document.createElement('p')
        paragraphElement.textContent = review.text
        const nameContainer = document.createElement('div')
        nameContainer.classList.add('name-container')
        nameContainer.textContent = review.name

        cardElement.append(imageContainer, paragraphElement, nameContainer)

        reviewContainer.append(cardElement)
    })
}
populateDisplay()

function showCard() {
    this.classList.add('active')
}

function blurCard() {
    this.classList.remove('active')
}

</script>



<footer>
<div class="footer">
<div class="row">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
</div>

<div class="row">
<ul>
<li><a href="#">Contact us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Career</a></li>
</ul>
</div>

<div class="row">
Copyright © 2021 name - All rights reserved
</div>
</div>
</footer>



</body>
</html>
