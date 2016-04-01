$("document").ready(function() {
//   alert("");
    $("a#agregarProducto").click(function(event) {
        var id = $(this).attr("itemid");
        $.ajax({
            type: "POST",
            url: "panel/operacionesCarrito.php",
            data: "id_producto=" + id + "&operacion=agregarCarrito",
            async: false,
            success: function(datos) {
                alert("Articulo agregado a carrito");
                cargarCarrito();

            }
        });
        return false;
    });
    $("a#agregarCarrito").click(function(event) {
        var id = $(this).attr("itemid");
        $.ajax({
            type: "POST",
            url: "panel/operacionesCarrito.php",
            data: "id_producto=" + id + "&operacion=agregarCarrito",
            async: false,
            success: function(datos) {
                alert("Articulo agregado a carrito");
                cargarCarrito();

            }
        });
        return false;
    });
    cargarCarrito();
});

function cargarCarrito() {
    $.ajax({
        type: "POST",
        url: "panel/operacionesCarrito.php",
        data: "operacion=cargarCarrito",
        async: false,
        success: function(datos) {
            $("#cuerpoCarrito").html(datos);


        }
    });
}