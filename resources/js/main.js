const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
  document.querySelector("#wrap-side").classList.toggle("expand");
  document.querySelector(".bx-panel").classList.toggle("contraer-bx-alumnos");
});

//importante, cuando se hoste o se cambie de hosting es muy importante actualizar 
//esta constante url por la de su hosting, se tiene que remplazar solo lo antes a: /proyecto-tutorias
 let url = "http://192.168.120.1/proyecto-tutorias/public/verAlumnos"; 

var selectedOptionCarrera = "";

//buscador para la vista mostrar alumnos
document.getElementById('select-carrera').addEventListener('change',function(){
    selectedOptionCarrera = this.value;
   
    
     url = "http://192.168.120.1/proyecto-tutorias/public/mostrarAlumnos/" + selectedOptionCarrera;
    window.location.href = url;
 });

 document.getElementById('select-grupo').addEventListener('change',function(){
    var selectedOptionGrupo = this.value;
    
     var currentUrl = window.location.href;
     let ultimoCaracter = currentUrl.charAt(currentUrl.length - 1);
     let ultimoNumero = parseInt(ultimoCaracter);

    if(isNaN(ultimoNumero)){
  
      currentUrl += "/" + selectedOptionGrupo;
      window.location.href = currentUrl;
    }else{
      let nuevaUrl = currentUrl.slice(0, -1);
      nuevaUrl +=  selectedOptionGrupo;
      window.location.href = nuevaUrl;

    }

    

});

//termina buscador para mostrar alumnos

document.getElementById('select-carrera-tutores').addEventListener('change',function(){
  selectedOptionCarrera = this.value;
  var urlTutores = "http://192.168.120.1/proyecto-tutorias/public/mostrarTutores"
  urlTutores += "/" + selectedOptionCarrera;
  window.location.href = urlTutores;

  

});
              
      



