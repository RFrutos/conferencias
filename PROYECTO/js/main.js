function cleanField(selector) {
    let domObject = document.querySelector(selector);
    domObject.innerHTML = "";
}

(function() {
    "use strict";
    let regalos= document.querySelector(".regalos");


    document.addEventListener('DOMContentLoaded', function(){

        const listSelector = ".lista";
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
        let resumenImprimir= document.querySelector(listSelector);
        // console.log(resumenImprimir);
        //CALCULAR

        if (calcular !== null) {

            calcular.addEventListener("click", calcularSuma);

            function calcularSuma(event){

                cleanField(listSelector);
                event.preventDefault();

                if(regalos.value === " "){
                    alert("Debes elegir un regalo");
                }
                else if(nombre.value === ""){
                    alert("Nombre es obligatorio");
                    nombre.style.border= "solid 2px red";
                }
                else if(apellidos.value === " "){
                    alert("Apellidos es obligatorio");
                    apellidos.style.border= "solid 2px red";
                }
                else if(email.value === ""){
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

                    resumen.push(`Entradas un dia: ${entradas1dia}`);
                    resumen.push(`Entradas dos dias: ${entradas2dias}`);
                    resumen.push(`Entradas tres dias: ${entradas3dias}`);
                    resumen.push(`Camisetas: ${totalCamisetas}`);
                    resumen.push(`Etiquetas: ${totalEtiquetas}`);

                    for (let i= 0; i <resumen.length; i++){
                        resumenImprimir.innerHTML = `${resumenImprimir.innerHTML}<li>${resumen[i]}</li>`;
                    }

                }

            }
        }

        if (email !== null) {

            email.addEventListener("change", cambiarMail);


            //  ESTO DEBERIA VALIDAR UN MAIL CORRECTO PERO NO HACE NADA
            function cambiarMail(event){
                console.log(event);
                const emailCambio= email.value;
                console.log(validateEmail(emailCambio))
                if(!validateEmail(emailCambio)){

                    alert("email incorrecto");
                    email.style.border= "solid 2px red";
                }
            }
            function validateEmail(email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }

        }

        //OCULTAR //consigo que lo muestre pero no que lo oculte si el valor vuelve a ser 0
        const viernes= document.getElementById("viernes");
        const sabado= document.getElementById("sabado");
        const domingo= document.getElementById("domingo");

        if (un_dia !== null && dos_dias !== null && tres_dias !== null) {

            un_dia.addEventListener("change", showCalendar)
            dos_dias.addEventListener("change", showCalendar)
            tres_dias.addEventListener("change", showCalendar)
            function showCalendar(){
                if(parseInt(tres_dias.value) >0){
                    viernes.style.display= "grid";
                    sabado.style.display= "grid";
                    domingo.style.display= "grid";
                }
                else if(parseInt(dos_dias.value)> 0){
                    viernes.style.display= "grid";
                    sabado.style.display= "grid";
                    domingo.style.display= "none";
                }
                else if(parseInt(un_dia.value)> 0){
                    viernes.style.display= "grid";
                    sabado.style.display= "none";
                    domingo.style.display= "none";
                }else{
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































    }); //DOM Content Loaded

})();
