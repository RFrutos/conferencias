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
                let entradas1dia= un_dia.value;
                let entradas2dias= dos_dias.value;
                let entradas3dias= tres_dias.value;
                let totalCamisetas= camiseta.value;
                let totalEtiquetas= etiqueta.value;
                let camisetasDescuento= totalCamisetas*10-(totalCamisetas*10*0.07);
                
                let total= entradas1dia*30+entradas2dias*45+entradas3dias*50+totalEtiquetas*5+camisetasDescuento;
                let totalImprimir= document.querySelector(".total");
                totalImprimir.innerHTML=(`TOTAL: ${total}`);

                
                //RESUMEN 
                  
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
                
                
                
             }

         }


         //OCULTAR
         const viernes= document.getElementById("viernes");
         const sabado= document.getElementById("sabado");
         const domingo= document.getElementById("domingo");
         

         un_dia.addEventListener("blur", ocultarV);
         dos_dias.addEventListener("blur", ocultarVS); 
         tres_dias.addEventListener("blur", ocultarVSD);
         
        function ocultarV(){
            if(un_dia.value > 0){
                viernes.style.display= "grid";
          }
        }
        function ocultarVS(){
            if(dos_dias.value > 0){
                viernes.style.display= "grid";
                sabado.style.display= "grid";
          }
        }
        function ocultarVSD(){
            if(tres_dias.value > 0){
                viernes.style.display= "grid";
                sabado.style.display= "grid";
                domingo.style.display= "grid";
          }
        }

        
        
        
        //Campos obligatorios


            
        
            
        
        

























    }); //DOM Content Loaded

})();