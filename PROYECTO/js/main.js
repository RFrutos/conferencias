function clean(selector){
    let objeto= document.querySelector(selector);
    objeto.innerHTML= "";
}
(function() {
    "use strict";
    let regalos= document.querySelector(".regalos");

    
    document.addEventListener('DOMContentLoaded', function(){

        // variables

        const nombre= document.getElementById("nombre");
        const apellidos= document.getElementById("apellidos");
        const email= document.getElementById("email");

        let un_dia= document.querySelector(".un-dia .numero-entradas");
        let dos_dias= document.querySelector(".dos-dias .numero-entradas");
        let tres_dias= document.querySelector(".tres-dias .numero-entradas");
        
        let camiseta= document.querySelector(".camiseta");
        let etiqueta= document.querySelector(".etiqueta");
        
        const calcular= document.querySelector(".calcular");
        const pagar= document.querySelector(".pagar");

        

        
        //CALCULAR
        if(calcular !== null){
            calcular.addEventListener("click", calcularSuma);
             
            function validateEmail(email) {
                let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
            
            function calcularSuma(event){
                let emailValue= email.value;
                event.preventDefault();
                if(regalos.value === " "){
                    alert("Debes elegir un regalo");    
                }
                else if(nombre.value === ""){
                    alert("Nombre es obligatorio");
                    nombre.style.border= "solid 2px red"; 
                }
                else if(apellidos.value === ""){
                    alert("Apellidos es obligatorio");
                    apellidos.style.border= "solid 2px red"; 
                }
                else if(email.value === ""){
                    alert("email es obligatorio");
                    email.style.border= "solid 2px red"; 
                }
               
                else if(!validateEmail(emailValue)){
                    alert("email es incorrecto");
                    email.style.border= "solid 2px red";
                } 
                else{

                    //Extras + entradas
                    let entradas1dia= parseInt(un_dia.value);
                    let entradas2dias= parseInt(dos_dias.value);
                    let entradas3dias= parseInt(tres_dias.value);
                    let totalCamisetas= parseInt(camiseta.value);
                    let totalEtiquetas= parseInt(etiqueta.value);
                    let camisetasDescuento= totalCamisetas*10-(totalCamisetas*10*0.07);
                    
                    let total= entradas1dia*30+entradas2dias*45+entradas3dias*50+totalEtiquetas*5+camisetasDescuento;
                    let totalImprimir= document.querySelector(".total");
                    totalImprimir.innerHTML=(`TOTAL: ${total}`);

                    clean(".lista");

                    
                    //RESUMEN //
                    
                    let resumen=[];
                    let resumenImprimir= document.querySelector(".lista");
                    resumen.push(`Entradas un dia: ${entradas1dia}`);
                    resumen.push(`Entradas dos dias: ${entradas2dias}`);
                    resumen.push(`Entradas tres dias: ${entradas3dias}`);
                    resumen.push(`Camisetas: ${totalCamisetas}`);
                    resumen.push(`Etiquetas: ${totalEtiquetas}`);
                    
                    for (let i= 0; i <resumen.length; i++){
                      
                    resumenImprimir.innerHTML= `${resumenImprimir.innerHTML}<li> ${resumen[i]} </li>`;
                    console.log(resumen[i]);
                        
                    }
        
                
                
                }

            }
        }
        
         
         //OCULTAR //consigo que lo muestre pero no que lo oculte si el valor vuelve a ser 0
         const viernes= document.getElementById("viernes");
         const sabado= document.getElementById("sabado");
         const domingo= document.getElementById("domingo");
        
         
        
        if(un_dia !== null && dos_dias !== null && tres_dias !== null){
            un_dia.addEventListener("change", ocultar);
            dos_dias.addEventListener("change", ocultar);
            tres_dias.addEventListener("change", ocultar);

            function ocultar(){
                if(parseInt(tres_dias.value)>0){
                    viernes.style.display= "grid";
                    sabado.style.display= "grid";
                    domingo.style.display= "grid";
                }
                else if(parseInt(dos_dias.value)>0){
                    viernes.style.display= "grid";
                    sabado.style.display= "grid";
                    domingo.style.display= "none";
                }
                else if(parseInt(un_dia.value)>0){
                    viernes.style.display= "grid";
                    sabado.style.display= "none";
                    domingo.style.display= "none";
                }
                else{
                    viernes.style.display= "none";
                    sabado.style.display= "none";
                    domingo.style.display= "none";
                }
                

            }


        }
        
            
       
        
        
        
        
        //Ocultar talleres seminarios y conferencias de index.

        const btnTalleres= document.querySelector(".talleres");
        const btnConferencias= document.querySelector(".conferencias");
        const btnSeminarios= document.querySelector(".seminarios");
        


        const contenidoTalleres= document.getElementById("contenido-talleres");
        const contenidoConferencias= document.getElementById("contenido-conferencias");
        const contenidoSeminarios= document.getElementById("contenido-seminarios");


        btnTalleres.addEventListener("click", mostrarT)

        function mostrarT(){
            contenidoTalleres.style.display= "flex";
            contenidoConferencias.style.display= "none";
            contenidoSeminarios.style.display= "none";
        }

        btnConferencias.addEventListener("click", mostrarC)

        function mostrarC(){
            contenidoTalleres.style.display= "none";
            contenidoConferencias.style.display= "flex";
            contenidoSeminarios.style.display= "none";
        }

        btnSeminarios.addEventListener("click", mostrarS)

        function mostrarS(){
            contenidoTalleres.style.display= "none";
            contenidoConferencias.style.display= "none";
            contenidoSeminarios.style.display= "flex";
        }

    //Contador interactivo
$(`.contenedor-resumen .apartado:nth-child(1) .numero`).animateNumber({number: 6}, 3000);
$(`.contenedor-resumen .apartado:nth-child(2) .numero`).animateNumber({number: 15}, 3000);
$(`.contenedor-resumen .apartado:nth-child(3) .numero`).animateNumber({number: 3}, 3000);
$(`.contenedor-resumen .apartado:nth-child(4) .numero`).animateNumber({number: 9}, 3000);
    //tiempo
$(".contenido-contador .item:nth-child(1) .numero").countdown("2019/04/26", function(event) {
    $(this).text(
    event.strftime('%D')
    );
});
$(".contenido-contador .item:nth-child(2) .numero").countdown("2019/04/26", function(event) {
    $(this).text(
    event.strftime('%H')
    );
});   
$(".contenido-contador .item:nth-child(3) .numero").countdown("2019/04/26", function(event) {
    $(this).text(
    event.strftime('%M')
    );
});   
$(".contenido-contador .item:nth-child(4) .numero").countdown("2019/04/26", function(event) {
    $(this).text(
    event.strftime('%S')
    );
});   
        


        

























    }); //DOM Content Loaded

})();