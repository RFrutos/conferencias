(function() {
    "use strict";
    let regalos= document.querySelector(".regalos");

    
    document.addEventListener('DOMContentLoaded', function(){

        // variables

        const nombre= document.querySelector(".nombre");
        const apellidos= document.querySelector(".apellidos");
        const email= document.querySelector(".email");

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
         const viernes= document.querySelector("#viernes");


         un_dia.addEventListener("blur", ocultar);
         dos_dias.addEventListener("blur", ocultar); 
         tres_dias.addEventListener("blur", ocultar);
         
         function ocultar(){
            
         }
        
        
        
        
        
        
        
        

























    }); //DOM Content Loaded

})();