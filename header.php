<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer&family=Niconne&family=Open+Sans:wght@300&family=Oswald:wght@700&family=Permanent+Marker&family=Quicksand:wght@300&family=Redressed&family=Roboto&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="nsirinu.css">
  <title>Responsive Navbar</title>
</head>
<body>
  
    <header class="header" id="header">
       <div id="menu-btn" class="fa-solid fa-bars fa-2x" style="color: black">
    </div>
      <a href="#header" class="logo"><img src="./images/logo_.png" style="width:50%; margin-left: 15%;"></a>
     
   
      <nav class="navbars">
       <a href="#about" class="about_nav_a" style="color: black;">Telegram</a>
        <a href="#contact" class="about_nav" style="">Register</a>
      </nav>
      
    
    </header>

<script type="text/javascript">
  const menu = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}
</script>
<style type="text/css">
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  border: none;
  outline: none;
}

html {
  overflow-x: hidden;
  scroll-padding-top: 5rem;
  scroll-behavior: smooth;
}

section {
  padding: 1rem 5%;
}

header {
  position: sticky;
  top: 0;
  left: 0;
  right: 0;
  background: #f0f0f0;
  padding: 1rem 5%;
  display: flex;
  justify-content: space-between;
  z-index: 1000;
 top: 0px;
left: 0px;
/* UI Properties */
background: #F0F0F0 0% 0% no-repeat padding-box;
box-shadow: 0px 4px 8px #00000040;
opacity: 1;

}

header .logo {
  font-size: 2rem;
  float: left;
}

header .navbar a {
}

header .navbar a:hover {
  color: #D90429;
  background: #EDF2F4;
}


header .navbars a {
  padding: .5rem 1.5rem;
}

header .navbars a:hover {
  color: #D90429;
}

header #menu-btn {
 display: none;
  cursor: pointer;
}

header #menu-btn:hover {
}

.hero {
  background-color: #f0f0f0;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.navbars{
  margin-right:5%;

}

.navbar {
  margin-top: 2%;
}

.about_nav{
  top: 28px;
left: 1182px;
width: 140px;
height: 41px;
/* UI Properties */
background: #FF0000 0% 0% no-repeat padding-box;
border-radius: 25px;
opacity: 1;
top: 38px;
left: 1219px;
width: 66px;
height: 21px;
/* UI Properties */
text-align: center;
font: normal normal normal 16px/21px Roboto;
letter-spacing: 0px;
color: #FFFFFF;
opacity: 1;

}
.about_nav:hover{
  background: white;
  box-shadow:  0px 3px 8px #afafaf;

  color: #ff0000;
}

.about_nav_a a{
  top: 38px;
left: 1082px;
width: 75px;
height: 21px;
/* UI Properties */
text-align: center;
font: normal normal normal 16px/21px Roboto;
letter-spacing: 0px;
color: #848282;
opacity: 1;

}
.navbars{
  margin-top: 2%;
}

@media (max-width: 991px) {
  html {
    font-size: 85%;
  }
  
  
}

@media (max-width: 768px) {
  header #menu-btn {
  display: inline-block;
}


.about_nav{
  display: none;
}
  
  header #menu-btn.fa-times {
    transform: rotate(180deg);
  }
  
  .header .navbar {
    position: absolute;
    top: 99%;
    left: 0;
    right: 0;
    background: #000066;
    color: white;
    border-top: 1px solid #8D99AE;
    padding: 2rem;
    clip-path: polygon(50% 0%, 50% 0, 50% 0, 50% 0, 50% 0);
  }
  
  .header .navbar.active {
    clip-path: polygon(100% 0, 52% 0, 0 0, 0 100%, 100% 100%);
  }
  
  .header .navbar a {
    display: block;
    color: white;
    margin: 2rem;
    text-align: center;
  }
  
  .services .services-box {
    flex-direction: column;
    jusify-content: center;
    align-items: center;
    width: 100%;
    margin: 0 auto;
  }
  
  .about .about-content {
    text-align: center;
    flex-direction: column;
  }
}
</style>
