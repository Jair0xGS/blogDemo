function editarDatos() {
    document.getElementById("datosLLenados").style.display = "none";
    document.getElementById("datosParaLlenar").style.display = "inline";
    document.getElementById("fileEdit").style.display = "block"; 
}

function cancelarEdicion(){
    document.getElementById("fileEdit").style.display = "none";
    document.getElementById("datosLLenados").style.display = "inline";
    document.getElementById("datosParaLlenar").style.display = "none";
}