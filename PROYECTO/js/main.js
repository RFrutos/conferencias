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
                let entradas1dia= un_dia.value;
                let entradas2dias= dos_dias.value;
                let entradas3dias= tres_dias.value;

                let sumaEntradas= function(a, b, c){
                    return(a*30+b*45+c*50);
                }
                let totalEntradas= sumaEntradas(entradas1dia, entradas2dias, entradas3dias);
                
                
                
                


            //Extras + entradas
                
                let totalCamisetas= camiseta.value;
                let totalEtiquetas= etiqueta.value;
                

                let operacionTotal= function(a, b, c){
                    return (b*(10-(7*10/100))+a+c*5)
                
                }   
                let resultadoTotal= operacionTotal(totalEntradas, totalCamisetas, totalEtiquetas);
                
                let nuevoTotalp= document.createElement(`p`);
                let nuevoTotal= document.createTextNode(`TOTAL: ${resultadoTotal} $`);
                nuevoTotalp.appendChild(nuevoTotal);
                
                const viejoTotal= document.querySelector(".seccion .pago .total");
                viejoTotal.parentNode.replaceChild(nuevoTotalp, viejoTotal);


                
                let resumenNuevoli= document.createElement("li");
                let resumenNuevo= document.createTextNode(`Entradas 1 dia: ${entradas1dia}`);
                resumenNuevoli.appendChild(resumenNuevo);

                let resumenViejo= document.querySelector(".lista ul");
                resumenViejo.appendChild(resumenNuevoli);

                let resumenNuevoli2= document.createElement("li");
                let resumenNuevo2= document.createTextNode(`Entradas 2 dias: ${entradas2dias}`);
                resumenNuevoli2.appendChild(resumenNuevo2);
                resumenViejo.appendChild(resumenNuevoli2);

                let resumenNuevoli3= document.createElement("li");
                let resumenNuevo3= document.createTextNode(`Entradas 3 dias: ${entradas3dias}`);
                resumenNuevoli3.appendChild(resumenNuevo3);
                resumenViejo.appendChild(resumenNuevoli3);

                let resumenNuevoli4= document.createElement("li");
                let resumenNuevo4= document.createTextNode(`Camisetas: ${totalCamisetas}`);
                resumenNuevoli4.appendChild(resumenNuevo4);
                resumenViejo.appendChild(resumenNuevoli4);

                let resumenNuevoli5= document.createElement("li");
                let resumenNuevo5= document.createTextNode(`Etiquetas: ${totalEtiquetas}`);
                resumenNuevoli5.appendChild(resumenNuevo5);
                resumenViejo.appendChild(resumenNuevoli5);

                
                
                

                

                


                
                
             }
         }   
        
        
        
        
        
        
        
        

























    }); //DOM Content Loaded

})();