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
        if(calcular === null){

        }
        else{
        calcular.addEventListener("click", calcularSuma);
        
        function calcularSuma(event){
            event.preventDefault();
            if(regalos.value === " "){
                alert("Debes elegir un regalo");    
            }
            if(nombre.value === ""){
                alert("Nombre es obligatorio");
                nombre.style.border= "solid 2px red"; 
            }
            if(apellidos.value === ""){
                alert("Apellidos es obligatorio");
                apellidos.style.border= "solid 2px red"; 
            }
            if(email.value === ""){
                alert("email es obligatorio");
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

                
                //RESUMEN //solo se muestra el valor de etiquetas aunque en la consola se muestra bien
                
                let resumen=[];
                let resumenImprimir= document.querySelector(".lista");
                resumen.push(`Entradas un dia: ${entradas1dia}`);
                resumen.push(`Entradas dos dias: ${entradas2dias}`);
                resumen.push(`Entradas tres dias: ${entradas3dias}`);
                resumen.push(`Camisetas: ${totalCamisetas}`);
                resumen.push(`Etiquetas: ${totalEtiquetas}`);

                for (let i= 0; i <resumen.length; i++){  
                resumenImprimir.innerHTML=`Tu lista: </br> ${resumen[i]}`;
                console.log(resumen[i]);
                    
                }
                email.addEventListener("change", cambiarMail);



        //  ESTO DEBERIA VALIDAR UN MAIL CORRECTO PERO NO HACE NADA 
        //         function cambiarMail(){
        //             if("@" === null){
        //                 alert("email incorrecto");
        //                 email.style.border= "solid 2px red";
        //     }
        // }
                
                
             }

         }
        
        

        }
        
         //OCULTAR //consigo que lo muestre pero no que lo oculte si el valor vuelve a ser 0
         const viernes= document.getElementById("viernes");
         const sabado= document.getElementById("sabado");
         const domingo= document.getElementById("domingo");
        
         
        
        if(un_dia === null){}
        else{
            un_dia.addEventListener("change", ocultarV);
            function ocultarV(){
            if(un_dia.value > 0){
                viernes.style.display= "grid";
        }   
            
            if(un_dia.value === 0){ 
                viernes.style.display= "none";
            }
        }
        }
        if(dos_dias === null){}
        else{
            dos_dias.addEventListener("change", ocultarVS);
            function ocultarVS(){
                if(dos_dias.value > 0){
                    viernes.style.display= "grid";
                    sabado.style.display= "grid";
            }
            }
        }
        if(tres_dias === null){}
        else{
            tres_dias.addEventListener("change", ocultarVSD);
                function ocultarVSD(){
                    if(tres_dias.value > 0){
                        viernes.style.display= "grid";
                        sabado.style.display= "grid";
                        domingo.style.display= "grid";
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



        
            
        
        

























    }); //DOM Content Loaded

})();