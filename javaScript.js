//acciones de botones
let btnlog = document.getElementById("btnLog"); //variable almacenar referencia a id del div
let btnreg = document.getElementById("btnReg");

//funcion auto click
$(document).ready(function() {

  setTimeout(clickbutton, 2); // indicamos que se ejecuta la función a los 2 segundos de haberse cargado la pagina
  function clickbutton() {
    btnlog.click(); // simulamos el click del mouse en el boton del formulario login
  }
  //carga los mensajes de alerta por errores de ingreso o registro
  if (!errores) {
    setTimeout(clickbutton, 2); // indicamos que se ejecuta la función a los 2 segundos de haberse cargado la pagina
    function clickbutton() {
      btnlog.click(); // simulamos el click del mouse en el boton del formulario login
    }
  } else if (errores == 1) { //error de correo o clave que no existen
    setTimeout(clickbutton, 2); // indicamos que se ejecuta la función a los 2 segundos de haberse cargado la pagina
    function clickbutton() {
      btnlog.click(); // simulamos el click del mouse en el boton del formulario registro
    }
  }else if (errores == 2) { //error de correo existente en registro
    setTimeout(clickbutton, 2); // indicamos que se ejecuta la función a los 2 segundos de haberse cargado la pagina
    function clickbutton() {
      btnreg.click(); // simulamos el click del mouse en el boton del formulario registro
    }
  }else if (errores == 3) { //cuenta ingresada con exito
    setTimeout(clickbutton, 2); // indicamos que se ejecuta la función a los 2 segundos de haberse cargado la pagina
    function clickbutton() {
      btnreg.click(); // simulamos el click del mouse en el boton del formulario registro
    }
  }
});

//eventos para validar que se haga click
btnlog.addEventListener("click", login);
btnreg.addEventListener("click", registro);

//aciones de formularios (variables)
var x = document.getElementById("login");
var y = document.getElementById("registro");
var z = document.getElementById("btn");
//funciones formulariio
function login() {
  x.style.left = "20px";
  y.style.left = "1000px";
  z.style.left = "0";
}

function registro() {
  x.style.left = "-1000px";
  y.style.left = "20px";
  z.style.left = "100px";
}