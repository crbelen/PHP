$(function(){

$("p").css({"background-color":"red"});//aplicamos a todos los parrafos ese css

$("#segundo").css({"background-color":"green"});//aplicamos solo al id

$(".primero").css({"background-color":"blue"});//aplicamos solo a la clase


//ejecutar eventos--->
$("#btn-hide").click(function(){
    //alert("Hola");
    $("#segundo").hide();//se esconde al clickar

})//el boton va a hacer lo que le indique en la funcion

$("#btn-show").dblclick(function(){
    //alert("Hola");
    $("#segundo").show();//se muestra al clickar doble

})
/*
$(".primero").mouseenter(function(){
    //alert("Hola");
    $("#segundo").hide();//se esconde el segundo al pasar raton por el primero

})

$(".primero").mouseleave(function(){
    //alert("Hola");
    $("#segundo").show();//se muestra el segundo al quitar raton del parrafo primero

})
*/
$(".primero").mouseenter(function(){
    //alert("Hola");
    $("#segundo").fadeOut();//se esconde el segundo al pasar raton por el primero

})

$(".primero").mouseleave(function(){
    //alert("Hola");
    $("#segundo").fadeIn();//se muestra el segundo al quitar raton del parrafo primero

})

$("#titulo2").mouseenter(function(){
    //alert("Hola");
    $("#segundo").slideDown();//se esconde el segundo al pasar raton por el primero

})

$("#titulo2").mouseleave(function(){
    //alert("Hola");
    $("#segundo").slideUp();//se muestra el segundo al quitar raton del parrafo primero

})

//si quiero hacer mi propia animacion
$(".primero").animate({width:"300px"});


$("#btn-alert").click(function(){

    alert($("#cuarto)").text());//obtenemos el texto dentro de la ventana alert
    //    alert($("#cuarto)").html());//obtenemos codigo html
    //    alert($("#cuarto)").attr("title"));//obtenemos valor del titulo

})

//si queremos añadir html 

/*
utilizamos dentro de la funcion .html, .append y añade al final un texto, .prepend y me lo pone al principio, .html
.after o .before y entre parentesis un parrafo y me añade un parrafo
.remove() me elimina
.empty me vacia el elemento pero no lo elimina

*/

$("#btn3").click(function(){

    $("#titulo3").addClass("azul"); //tengo tambien removeClass y toggleClass(on-of)

})

})


