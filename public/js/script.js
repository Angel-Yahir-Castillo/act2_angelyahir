async function listarProductos2(){
    fetch("productosApi")
    .then(respuesta=>respuesta.json())
    .then(registros=>{
        const contenedor = document.getElementById('productos')
        contenedor.innerHTML = '';
        registros.forEach(renglon => {
            contenedor.innerHTML+= `<div class="row z-depth-2 section">
                <div class="col s12 m4 l3">
                    <img class="responsive-img" src="productos_imagenes/${renglon.imagen}">
                </div>
                <div class="col s12 m8 l9">
                    <a href="productos/computadoras/${renglon.nombre}"><h4 class="black-text">${renglon.nombre}</h4></a>
                    <h5>$ ${renglon.precio}</h5>
                    <h6>Marca: ${renglon.marca}</h6>
                    <h6>Modelo: ${renglon.modelo}</h6>
                </div>
            </div>`
        });
    })
}

/* opcion con ajax
$(document).ready(function(){
        $("#productos").val('');
        $.ajax({
            url: "productosApi",
            type: "POST",
            success: function(result){
                var resultado = JSON.parse(result);
                resultado.forEach(renglon => {
                    $registro = `<div class="row z-depth-2 section">
                        <div class="col s12 m4 l3">
                            <img class="responsive-img" src=" productos_imagenes/${renglon.imagen}">
                        </div>
                        <div class="col s12 m8 l9">
                            <a href="productos/computadoras/${renglon.nombre}"><h4 class="black-text">${renglon.nombre}</h4></a>
                            <h5>$ ${renglon.precio}</h5>
                            <h6>Marca: ${renglon.marca}</h6>
                            <h6>Modelo: ${renglon.modelo}</h6>
                        </div>
                    </div>`
                    $("#productos").append($registro);
                });            
            }
        }); 
    
}); */

function listarProductos(){
    $("#productos").val('');
    $.ajax({
        url: "productosApi",
        type: "POST",
        success: function(result){
            var resultado = JSON.parse(result);
            resultado.forEach(renglon => {
                $registro = `<div class="row z-depth-2 section">
                    <div class="col s12 m4 l3">
                        <img class="responsive-img" src=" productos_imagenes/${renglon.imagen}">
                    </div>
                    <div class="col s12 m8 l9">
                        <a href="productos/computadoras/${renglon.nombre}"><h4 class="black-text">${renglon.nombre}</h4></a>
                        <h5>$ ${renglon.precio}</h5>
                        <h6>Marca: ${renglon.marca}</h6>
                        <h6>Modelo: ${renglon.modelo}</h6>
                    </div>
                </div>`
                $("#productos").append($registro);
            });            
        }
    }); 
}