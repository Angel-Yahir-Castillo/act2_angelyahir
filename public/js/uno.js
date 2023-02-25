function busquedaAvanzada(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#productos").empty();
    $.ajax({
        url: "http://localhost/act2_angelyahir/public/api/busquedaAApi",
        type: "POST",
        data: $("#busquedaA").serialize(),
        success: function(result){
            var resultado = JSON.parse(result);
            //console.log(resultado);
            if(resultado.length == 0){
                $("#productos").append(`<h4>No se encontraron productos</h4>`);
            }
            resultado.forEach(renglon => {
                $registro = `<div class="row z-depth-2 section contProductos">
                    <div class="col s12 m4 l3">
                        <img class="responsive-img" src="../productos_imagenes/${renglon.imagen}">
                    </div>
                    <div class="col s12 m8 l9">
                        <a href="../${renglon.nombre}"><h4 class="black-text">${renglon.nombre}</h4></a>
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

function busquedaSimple(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#productos").empty();
    $.ajax({
        url: "http://localhost/act2_angelyahir/public/api/busquedaApi",
        type: "POST",
        data: $("#busquedaS").serialize(),
        success: function(result){
            var resultado = JSON.parse(result);
            if(resultado.length == 0){
                $("#productos").append(`<h4>No se encontraron productos</h4>`);
            }
            //console.log(resultado);
            resultado.forEach(renglon => {
                $registro = `<div class="row z-depth-2 section contProductos">
                    <div class="col s12 m4 l3">
                        <img class="responsive-img" src="../productos_imagenes/${renglon.imagen}">
                    </div>
                    <div class="col s12 m8 l9">
                        <a href="../${renglon.nombre}"><h4 class="black-text">${renglon.nombre}</h4></a>
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
