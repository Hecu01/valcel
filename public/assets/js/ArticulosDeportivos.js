$(document).ready(function(){
    /* 
    |
    |--------------------------------------------------------------------------------
    | Sportivo - Artículos Deportivos
    |--------------------------------------------------------------------------------
    |
    */ 
    /* Editar articulos deportivos */
    $('#seleccion-tipo-producto').change(function () {
        var opcionSeleccionada = $(this).val();
        if (opcionSeleccionada === 'calzado') {
            // valor true
        
            // muestra el btn agregar calzados
            $('#addCalzados').show();

            // activa sólo lectura el stock principal 
            $("#stock_input").prop('readonly', true).val('');
            $("#stock_input").addClass('estilo-readonly');

            // dar un mensaje de que es normal el sólo lectura
            $("#stock_input").on("click", function() {
                // evalua si está en solo lectura
                if($(this).prop('readonly')){
    
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-bottom-center",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr["info"]("El campo STOCK es la sumatoria de todos los calzados, no se puede editar", "Información");
                }
            });


        } else {
            $('#addCalzados').hide();
            $("#stock_input").prop('readonly', false).val('');
            $("#stock_input").removeClass('estilo-readonly');
        }
    });
    /* Checkbox calzados y stock en modal calzados */
    var checkboxes = $('input[type="checkbox"][name^="talles"]');

    // Agrega un evento change a cada checkbox
    checkboxes.each(function() {
        $(this).change(function() {
            // Obtén el ID del calzado correspondiente
            var talleId = $(this).attr('id').split('-')[1];

            // Obtén el campo de texto correspondiente
            var stockInput = $('#stock-' + talleId);

            // Habilita o deshabilita el campo de texto según el estado del checkbox
            stockInput.prop('disabled', !$(this).prop('checked'));
        });
    });


    // Agrega un evento change a cada checkbox con el nombre que comienza con "calzados"
    $('input[type="checkbox"][name^="calzados"]').change(function() {
        // Obtén el ID del calzado correspondiente
        var calzadoId = $(this).attr('id').split('-')[1];

        // Obtén el campo de texto correspondiente y deshabilítalo si el checkbox está desmarcado
        $('#stock-' + calzadoId).prop('disabled', !$(this).prop('checked'));
        $("#stock_input").prop('readonly', true).val('');

        // Habilita o deshabilita el campo de texto según el estado del checkbox
        $('#precio-' + calzadoId).prop('disabled', !$(this).prop('checked'));
    
        // Agregar evento input al input de precio
        $('#precioFinal').on('input', function() {
            var precio = parseFloat($(this).val()); // Obtener el valor del input de precio

            $('#precio-' + calzadoId).val(precio);
    
        });
    });


    // Sumatoria para el stock, en caso de calzados
    $(".input-suma").on("input", function(){
        var suma = 0;
        $(".input-suma").each(function(){
            if(!isNaN(this.value) && this.value.length != 0) {
                suma += parseFloat(this.value);
            }
        });
        $("#stock_input").val(suma);
        $("#stock_input_ropa").val(suma);
    });


    
    // Mostrar u ocultar el boton busqueda de articulos deportivos
    $("#formulario").on("click", function() {
        $("#busqueda-calzados").hide();
        $("#busqueda-accesorios").hide();
    })
    $("#accesorios").on("click", function() {
        $("#busqueda-calzados").hide();
        $("#busqueda-accesorios").show();

    })
    $("#calzados").on("click", function() {
        $('#busqueda-calzados').css('display', 'block');
        $("#busqueda-accesorios").hide();
    })

    /* ---------------- Tabla accesorios ---------------- */

    var originalTable = $('#resultsTable').html();

    // Busqueda tipeando sin dar a buscar 
    $('#searchInput').on('input', function() {
        var searchTerm = $(this).val();

        // está vacío el input:search?
        if (searchTerm.trim() === '') {
            // Restaura la tabla original cuando el campo de búsqueda está vacío
            $('#resultsTable').html(originalTable);
            return;
        }
        else{
            $.ajax({
                url: '/accesorio',
                method: 'GET',
                data: {
                    searchTerm: searchTerm
                },
                success: function(response) {
                    // Elimina todas las filas de datos excepto la primera (encabezados)
                    $('#resultsTable tr:gt(0)').remove();
                    // Actualiza la tabla con los resultados de la búsqueda
                    $.each(response, function(index, resultado) {
                        // Formatear el precio con separadores de miles y el símbolo de peso
                        var precioFormateado = '$ ' + resultado.precio.toLocaleString();
                        var row = $('<tr>');

                        // Agregar la imagen como una nueva celda de la tabla
                        var imagen2 = $('<img>').attr('src', '/producto/' + resultado.foto).attr('alt', resultado.nombre).attr('width', '70px').attr('height', '70px');
                        var tdImagen = $('<td>').append(imagen2);
                        row.append(tdImagen);
                        $('<td>').text(resultado.id).appendTo(row);
                        $('<td>').text(resultado.nombre).appendTo(row);
                        $('<td>').text(precioFormateado).addClass('precio').appendTo(row);
                        $('<td>').text(resultado.marca).appendTo(row);
                        $('<td>').text(resultado.stock).appendTo(row);
                        

                        // Agregar las celdas para los botones
                        var tdBotones = $('<td>');

                        var botonEditar = $('<a>').attr('href', '/admin/articulo-deportivo/editar/' + resultado.id).addClass('btn btn-success btn-sm').attr('title', 'Editar').append($('<i>').addClass('fa-solid fa-pen-to-square'));
                        var botonEliminar = $('<button>').addClass('btn btn-danger btn-sm eliminar-btn mx-1').attr('data-id', resultado.id).attr('data-bs-toggle', 'modal').attr('data-bs-target', '#modalEliminar').append($('<i>').addClass('fa-solid fa-trash'));
                        var botonVer = $('<button>').addClass('btn btn-secondary btn-sm').append($('<i>').addClass('fa-solid fa-eye'));

                        // Añadir los botones a la celda correspondiente
                        tdBotones.append(botonEditar, botonEliminar, botonVer);

                        // Agregar la celda de botones a la fila
                        row.append(tdBotones);

                        row.appendTo($('#resultsTable'));

                        
                    });
                }
            });
        }

    });
    
    /* ---------------- Tabla Calzado ---------------- */

    var originalTable2 = $('#resultsTable2').html();

    // Busqueda tipeando sin dar a buscar 
    $('#searchInput2').on('input', function() {
        var searchTerm2 = $(this).val();

        // está vacío el input:search?
        if (searchTerm2.trim() === '') {
            // Restaura la tabla original cuando el campo de búsqueda está vacío
            $('#resultsTable2').html(originalTable2);
            return;
        }
        else{
            $.ajax({
                url: '/calzado',
                method: 'GET',
                data: {
                    searchTerm2: searchTerm2
                },
                success: function(response) {
                    // Elimina todas las filas de datos excepto la primera (encabezados)
                    $('#resultsTable2 tr:gt(0)').remove();
                    // Actualiza la tabla con los resultados de la búsqueda
                    $.each(response, function(index, resultado) {
                        // Formatear el precio con separadores de miles y el símbolo de peso
                        var precioFormateado = '$ ' + resultado.precio.toLocaleString();
                        var row = $('<tr>');

                        // Agregar la imagen como una nueva celda de la tabla
                        var imagen2 = $('<img>').attr('src', '/producto/' + resultado.foto).attr('alt', resultado.nombre).attr('width', '70px').attr('height', '70px');
                        var tdImagen = $('<td>').append(imagen2);
                        row.append(tdImagen);
                        $('<td>').text(resultado.id).appendTo(row);
                        $('<td>').text(resultado.nombre).appendTo(row);
                        $('<td>').text(precioFormateado).addClass('precio').appendTo(row);
                        $('<td>').text(resultado.marca).appendTo(row);
                        $('<td>').text(resultado.stock).appendTo(row);
                        
                        // Agregar las celdas para los botones
                        var tdBotones = $('<td>');
                        var botonEditar = $('<a>').attr('href', '/admin/articulo-deportivo/editar/' + resultado.id).addClass('btn btn-success btn-sm').attr('title', 'Editar').append($('<i>').addClass('fa-solid fa-pen-to-square'));
                        var botonEliminar = $('<button>').addClass('btn btn-danger btn-sm eliminar-btn mx-1').attr('data-id', resultado.id).attr('data-bs-toggle', 'modal').attr('data-bs-target', '#modalEliminar').append($('<i>').addClass('fa-solid fa-trash'));
                        var botonVer = $('<button>').addClass('btn btn-secondary btn-sm').append($('<i>').addClass('fa-solid fa-eye'));
                        
                        // Añadir los botones a la celda correspondiente
                        tdBotones.append(botonEditar, botonEliminar, botonVer);
                        // Agregar la celda de botones a la fila
                        row.append(tdBotones);
                        row.appendTo($('#resultsTable2'));

                        
                    });
                }
            });
        }

    });



    // Modal de "está seguro que quiere eliminarlo?"
    var modalEliminar = document.getElementById('modalEliminar');
    modalEliminar.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var form = document.getElementById('formEliminar');
        form.action = '/admin/articulo-deportivo/' + id; // Ruta de eliminación de productos en Laravel
    });



    // Calzados niños y adultos
    $('#publico-dirigido').change(function () {
        var opcion_elegida = $(this).val();

        if (opcion_elegida === "adultos"){
            $('#calzados-ninios').hide();
            $('#separador').hide();
            $('#calzados-adultos').show();
            $('#msj').hide();
        }else if(opcion_elegida === "niños"){
            $('#calzados-adultos').hide();
            $('#calzados-ninios').show();
            $('#msj').hide();
        }else if(opcion_elegida === "ambos"){
            $('#calzados-ninios').show();
            $('#separador').show();
            $('#calzados-adultos').show();
            $('#msj').hide();
        }else{
            $('#calzados-ninios').hide();
            $('#separador').hide();
            $('#calzados-adultos').hide();
            $('#msj').show();
        }

    });
    // Formulario 
    // Selecciona el tipo de producto
    $('#SelectTypeProduct').change(function () {
        var selectedOption = $(this).val();
        if (selectedOption === 'calzado') {
            // valor true
        
            // muestra el btn agregar calzados
            $('#agregar-calzados').show();

            // activa sólo lectura el stock principal 
            $("#stock_input").prop('readonly', true).val('');
            $("#stock_input").addClass('estilo-readonly');

            // dar un mensaje de que es normal el sólo lectura
            $("#stock_input").on("click", function() {
                // evalua si está en solo lectura
                if($(this).prop('readonly')){
    
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-bottom-center",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr["info"]("El campo STOCK es la sumatoria de todos los calzados, no se puede editar", "Información");
                }
            });


        } else {
            $('#agregar-calzados').hide();
            $("#stock_input").prop('readonly', false).val('');
            $("#stock_input").removeClass('estilo-readonly');
            $(".input-suma").val('');
        }

    });
});