function ConsultarNombre() {
    document.getElementById("btnProcesar").disabled=true;
    let identicacion = document.getElementById("txtIdenticacion").value; /*Todas las variables de manera local van a ser programadas con let  y de manera global se usa el var*/


    if (identicacion.length >= 9) {
        $.ajax({
            type: 'GET',
            url: 'https://apis.gometa.org/cedulas/' + identicacion,
            datatype: 'json',
            success: function (data) {
                if (data.resultcount > 0) {

                    document.getElementById("btnProcesar").disabled=false; /**Si encuentra el nombre lo habilita  */
                    document.getElementById("txtNombre").value = data.nombre
                  

                }
                else {
                    document.getElementById("txtNombre").value = "";

                }
            }
        });
    }
    else {
        document.getElementById("txtNombre").value = "";
    }
}


