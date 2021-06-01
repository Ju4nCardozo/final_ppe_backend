<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><title>Skateboarding</title><link rel="stylesheet" href="assets/css/style-starter.css"></head><body><section class="w3l-header"><header id="site-header" class="fixed-top"><div class="container"><nav class="navbar navbar-expand-lg navbar-dark stroke"><a class="navbar-brand" href="/"><span class="fa fa-pencil-square-o"></span> Skateboarding </a><button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon fa icon-expand fa-bars"></span> <span class="navbar-toggler-icon fa icon-close fa-times"></span></button><div class="collapse navbar-collapse" id="navbarTogglerDemo02"><ul class="navbar-nav ml-auto"><li class="nav-item @@home-active"><a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a></li><li class="nav-item @@about-active"><a class="nav-link" href="/about">Acerca De</a></li><li class="nav-item @@contact-active"><a class="nav-link" href="/contact">Contacto</a></li><li class="nav-item @@contenido_exclusivo-active"><a class="nav-link" href="/registro">Contenido Exclusivo</a></li></ul></div><div class="mobile-position"><label class="theme-selector"><input type="checkbox" id="themeToggle"> <i class="gg-sun"></i> <i class="gg-moon"></i></label></div></nav></div></header></section><section><main><div class="box"><div class="box_back"><div class="box_login"><h3>¿Ya tienes una cuenta?</h3><p>Inicia sesión para entrar en la página</p><button id="btn_login">Iniciar sesión</button></div><div class="box_sing-up"><h3>¿Aún no tienes una cuenta?</h3><p>Regístrate sesión poder iniciar sesión</p><button id="btn_sing-up">Regístrarse</button></div></div><div class="container_login-sing-up"><form action="" class="form_login" id="form_login"><h2>Iniciar Sesión</h2><input type="text" id="user" placeholder="Usuario" name="name" required> <input type="password" id="pass" placeholder="Contraseña" name="password" required> <button>Entrar</button><p id="forgot-password">¿olvidaste tu contraseña?</p></form><form action="" class="form_sing-up" id="form_sing-up"><h2>Registrarse</h2><input type="text" id="mail_su" placeholder="Correo Electronico" name="email" required> <input type="text" id="user_su" placeholder="Usuario" name="name" required> <input type="password" id="pass_su" placeholder="Contraseña" name="password" required> <input type="password" id="cpass_su" placeholder="Confirmar Contraseña" required> <button>Registrarse</button></form><form action="" class="form_f-password" id="form_f-password"><h2>Olvidaste tu contraseña</h2><input type="text" id="user_fp" placeholder="Usuario" required> <input type="text" id="mail_fp" placeholder="Correo Electronico" required> <button>Siguiente</button></form><form action="" class="form_c-password" id="form_c-password"><h2>Olvidaste tu contraseña</h2><input type="password" id="pass_cp" placeholder="Nueva Contraseña" required> <input type="password" id="cpass_cp" placeholder="Confirmar Contraseña" required> <button>Restablecer</button></form></div></div></main></section><script src="assets/js/jquery-1.9.1.min.js"></script><script src="assets/js/owl.carousel.js"></script><script>$(document).ready(function () {
    $('.owl-testimonials').owlCarousel({
      loop: false,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })</script><script>$(document).ready(function () {
    $('.owl-logos').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 2,
          nav: false
        },
        480: {
          items: 2,
          nav: false
        },
        667: {
          items: 3,
          nav: false
        },
        1000: {
          items: 4,
          nav: false
        }
      }
    })
  })</script><script>$(document).ready(function () {
    $('.owl-courses').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })</script><script src="assets/js/jquery.magnific-popup.min.js"></script><script>$(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });</script><script src="assets/js/easyResponsiveTabs.js"></script><script type="text/javascript">$(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      tabidentify: 'hor_1', // The tab groups identifier
      activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#nested-tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
      }
    });
  });</script><script src="assets/js/jquery.waypoints.min.js"></script><script src="assets/js/jquery.countup.js"></script><script>$('.counter').countUp();</script><script>$(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });</script><script>$(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });</script><script>const bodyElement = document.querySelector('body');
  const themeToggle = document.querySelector('#themeToggle');
  const darkModeMql = window.matchMedia('(prefers-color-scheme: dark)');

  const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : userPreference(darkModeMql);

  if (currentTheme) {
    bodyElement.classList.add(currentTheme);

    if (currentTheme === 'dark') {
      themeToggle.checked = true;
    }
  }

  function userPreference(e) {
    if (e.matches) {
      bodyElement.classList.add("dark");
      return "dark"
    } else {
      bodyElement.classList.remove("dark");
      return ""
    }
  }

  darkModeMql.addListener(userPreference);

  function themeSwitcher(e) {
    if (e.target.checked) {
      bodyElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    } else {
      bodyElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    }
  }

  themeToggle.addEventListener('change', themeSwitcher);</script><script>window.addEventListener("load",widthPage);
window.addEventListener("load",validarUsuario);
window.addEventListener("load",clear);
document.getElementById("btn_sing-up").addEventListener("click", register);
document.getElementById("btn_login").addEventListener("click", login);
window.addEventListener("resize",widthPage);
document.getElementById("forgot-password").addEventListener("click",forgot_password);

/*Var declaration*/
var form_login = document.querySelector(".form_login");
var form_sing_up = document.querySelector(".form_sing-up");
var form_f_password = document.querySelector(".form_f-password");
var form_c_password = document.querySelector(".form_c-password");
var container_login_sing_up = document.querySelector(".container_login-sing-up")
var box_login = document.querySelector(".box_login");
var box_sing_up = document.querySelector(".box_sing-up");
const mail_su = document.getElementById("mail_su");
const user_su = document.getElementById("user_su");
const pass_su = document.getElementById("pass_su");
const cpass_su = document.getElementById("cpass_su");

const user_fp = document.getElementById("user_fp");
const mail_fp = document.getElementById("mail_fp");

const pass_cp = document.getElementById("pass_cp");
const cpass_cp = document.getElementById("cpass_cp");

const user = document.getElementById("user");
const pass = document.getElementById("pass");

//login
document.getElementById("form_login").addEventListener("submit",function(event){
    event.preventDefault();
   
   axios({
        method: 'post',
        url: 'api/auth/login',
        data: {
          name: user.value,
          password: pass.value
        }
      }).then((data)=>{
        if(data.data.error=="unauthorized") alert("Contraseña incorrecta");
        else{
          alert("Usuario logueado");
        localStorage.setItem("usuario","true");
        localStorage.setItem("token",data.data.token);        
        location.href = "/contenido_exclusivo";
        } 
      }).catch(function(error){
          alert("Usuario incorrecto");
      });
});


//forgot password
document.getElementById("form_f-password").addEventListener("submit",function(event){
    event.preventDefault();
    
    axios({
        method: 'post',
        url: 'api/auth/cambiar',
        data: {
          name: user_fp.value,
          email: mail_fp.value
        }
      }).then((data)=>{
      
          change_password();
        
      }).catch(function(error){
          alert("Usuario o correo incorrecto");
      });

   
    
});

//change password
document.getElementById("form_c-password").addEventListener("submit",function(event){
    event.preventDefault();
    
    if(pass_cp.value==cpass_cp.value)
    {
       axios({
        method: 'post',
        url: 'api/auth/establecer',
        data: {
          name: user_fp.value,
          email: mail_fp.value,
          password: pass_cp.value
        }
      }).then((data)=>{
  
          alert("Contraseña restablecida");
          login();
      }).catch(function(error)
      {
          alert("El correo no coincide con el del usuario");
            forgot();     
          }); 
    }else{
        alert("Las contraseñas no coinciden");
        cpass_cp.value ="";    }
});



//sing up
document.getElementById("form_sing-up").addEventListener("submit",function(event){
    event.preventDefault();
    if(pass_su.value==cpass_su.value)
    {
      axios({
        method: 'post',
        url: 'api/auth/registro',
        data: {
          name: user_su.value,
          email: mail_su.value,
          password: pass_su.value
        }
      }).then((data)=>{
        alert("Usuario registrado");
        localStorage.setItem("token",data.data.token);
      }).catch(function(error){
          alert("Error en los datos");
      });

        login();
    }else{
        alert("Las contraseñas no coinciden");
        cpass_su.value = "";
    }
});

function validarUsuario(){
  if(localStorage.getItem("usuario")=="true")  location.href = "/contenido_exclusivo";                    
}

//Funciones cambio de forms


function change_password(){
    if(window.innerWidth > 850){
        form_f_password.style.display = "none";
        form_c_password.style.display = "block";
    }else{
    form_sing_up.style.display = "none";
    container_login_sing_up.style.left = "0px";
    form_login.style.display = "none";
    box_sing_up.style.display = "block";
    box_login.style.display = "none";
    form_f_password.style.display = "none";
    form_c_password.style.display = "block";
    }
}


function forgot_password(){
    if(window.innerWidth > 850){
        form_sing_up.style.display = "none";
        container_login_sing_up.style.left = "10px";
        form_login.style.display = "none";
        box_sing_up.style.opacity = "1";
        box_login.style.opacity = "0";
        form_f_password.style.display = "block";
        form_c_password.style.display = "none";
    }else{
    form_sing_up.style.display = "none";
    container_login_sing_up.style.left = "0px";
    form_login.style.display = "none";
    box_sing_up.style.display = "block";
    box_login.style.display = "none";
    form_f_password.style.display = "block";
    form_c_password.style.display = "none";
    }
}

function register(){
    clear();
    if(window.innerWidth > 850){

        form_sing_up.style.display = "block";
        container_login_sing_up.style.left = "410px";
        form_login.style.display = "none";
        form_f_password.style.display = "none";
        form_c_password.style.display = "none";
        box_sing_up.style.opacity = "0";
        box_login.style.opacity = "1";
    }else{
        form_f_password.style.display = "none";
        form_c_password.style.display = "none";
        form_sing_up.style.display = "block";
        container_login_sing_up.style.left = "0px";
        form_login.style.display = "none";
        box_sing_up.style.display = "none";
        box_login.style.display = "block";
        box_login.style.opacity = "1";
    }
}

function widthPage(){
    if(window.innerWidth>850){
        box_login.style.display = "block";
        box_sing_up.style.display = "block";
    }else{
        box_sing_up.style.display = "block";
        box_sing_up.style.opacity = "1";
        box_login.style.display = "none";
        form_login.style.display = "block";
        form_sing_up.style.display = "none";
        form_f_password.style.display = "none";
        form_c_password.style.display = "none";
        container_login_sing_up.style.left = "0px";
    }
}


function login(){
    clear();
    if(window.innerWidth > 850){
        form_sing_up.style.display = "none";
        container_login_sing_up.style.left = "10px";
        form_login.style.display = "block";
        box_sing_up.style.opacity = "1";
        box_login.style.opacity = "0";
        form_f_password.style.display = "none";
        form_c_password.style.display = "none";
    }else{
        form_sing_up.style.display = "none";
        container_login_sing_up.style.left = "0px";
        form_login.style.display = "block";
        box_sing_up.style.display = "block";
        box_login.style.display = "none";
        form_f_password.style.display = "none";
        form_c_password.style.display = "none";
    }
}

//Limpiar datos
function clear() {
    user_su.value="";
        mail_su.value="";
        pass_su.value = "";
        cpass_su.value = "";
        user_fp.value="";
        mail_fp.value="";
        pass_cp.value = "";
        cpass_cp.value = "";
        user.value = "";
        pass.value = "";
}</script><script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script><script src="assets/js/bootstrap.min.js"></script><script src="assets/js/main.js"></script></body></html>