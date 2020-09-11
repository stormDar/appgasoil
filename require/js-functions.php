<!-- Codigo Js para Datepicker en español -->

<script>
	$.datepicker.regional['es'] = {
	closeText: 'Cerrar',
	prevText: '< Ant',
	nextText: 'Sig >',
	currentText: 'Hoy',
	monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
	monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
	dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
	dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
	dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
	weekHeader: 'Sm',
	dateFormat: 'yy-mm-dd',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
	};
	$.datepicker.setDefaults($.datepicker.regional['es']);
	$(function () {
	$("#Fecha").datepicker();
    $("#Fechafin").datepicker();
    $("#Fechaini").datepicker();
	});
</script>

<!-- Script para confirmar el borrado -->
<script>
	function confirmar()
{
	if(confirm('¿Estas seguro de borrar el registro?'))
		return true;
	else
		return false;
}
</script>
	
	
<!-- Menu responsive -->
<script>
function myFunction(){
    var x = document.getElementById("menu-top-id");
    if (x.className === "menu-top") {
        x.className += " responsive";
    } else {
        x.className = "menu-top";
    }
}
</script>

<!-- Script para abrir el nuevo stock ingresado en una ventana emergente -->

<script>
// usamos onload para asegurarnos que existan los elementos en nuestro DOM
        window.onload = function() {
            var nuevo = document.getElementById("nuevo");         
            
            // le asociamos el evento a nuestro elemento para tener un codigo 
            // html mas limpio y manejar toda la interaccion
            // desde nuestro script
            nuevo.onclick = function() {
                // una variable donde pongo la url a donde quiera ir, 
                //podria estar de mas pero asi queda mas limpio la funcion window.open()
                var url = "nuevostock.php";
                var ancho= (window.screen.width /2) - 400;
                window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=480, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
            };
        }
</script>

<!-- Script para abrir el editar stock  en una ventana emergente -->
<script>
        
    function editarsalida(codigo)
        {
        	var url = "editmaterial.php?cod="+codigo+"";
            var ancho= (window.screen.width /2) - 400;
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=500, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
        }

</script>

<!-- Script para abrir el editar stock comprado  en una ventana emergente -->
<script>
        
    function editarcomprado(codigo)
        {
            var url = "editmaterialcomprado.php?cod="+codigo+"";
            var ancho= (window.screen.width /2) - 400;
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=500, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
        }

</script>

<!-- Script para borrar los movimientos en una ventana emergente -->
<script>
        
    function borramaterial(codigo)
        {
        
        var url = "borramaterial.php?cod="+codigo+"";
        var ancho= (window.screen.width /2) - 250;

        if(confirm('¿Estas seguro de borrar el registro?'))
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=500, height=400, top=170 , left='+ancho); 
        else
            return false;   
        }

</script>

<!-- Script para abrir el editar stock  en una ventana emergente -->
<script>
        
    function compramaterial()
        {
        	var url = "compramaterial.php";
            var ancho= (window.screen.width /2) - 400;
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=300, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
        }

</script>

<!-- Script para confirmar el borrado -->
	<script>
	function confirmar()
{
	if(confirm('¿Estas seguro de borrar el registro?'))
		return true;
	else
		return false;
}
</script>

<!-- Script para borrar los movimientos en una ventana emergente -->
<script>
        
    function borragasoil(codigo)
        {
        
        var url = "borragasoil.php?cod="+codigo+"";
        var ancho= (window.screen.width /2) - 250;

        if(confirm('¿Estas seguro de borrar el registro?'))
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=500, height=400, top=170 , left='+ancho); 
        else
            return false;   
        }

</script>

<!-- Script para abrir el editar stock  en una ventana emergente -->
<script>
        
    function editagasoil(codigo)
        {
            var url = "editgasoil.php?cod="+codigo+"";
            var ancho= (window.screen.width /2) - 400;
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=700, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
        }

</script>

<!-- Script para abrir el suministrar gasoil en una ventana emergente -->
<script>
        
    function suministragasoil()
        {
            var url = "nuevasalidagasoil.php";
            var ancho= (window.screen.width /2) - 400;
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=300, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
        }

</script>

<!-- Script para abrir el Comprar gasoil en una ventana emergente -->
<script>
    
    function reponergasoil()
    {
        var url= "compragasoil.php";
        var ancho = (window.screen.width /2) -400;
        window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=300, top=70 , left='+ancho);

        return false;
    }
</script>

<!-- Script para borrar los rellenados en una ventana emergente -->
<script>
        
    function borrarellenagasoil(codigo)
        {
        
        var url = "borrarellenagasoil.php?cod="+codigo+"";
        var ancho= (window.screen.width /2) - 250;

        if(confirm('¿Estas seguro de borrar el registro?'))
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=500, height=400, top=170 , left='+ancho); 
        else
            return false;   
        }

</script>

<!-- Script para abrir el editar el llenado de gasoil  en una ventana emergente -->
<script>
        
    function editrellenagasoil(codigo)
        {
            var url = "editrellenagasoil.php?cod="+codigo+"";
            var ancho= (window.screen.width /2) - 400;
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=700, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
        }

</script>

<script>
        
    function informgasoilfecha()
        {
            var url = "GasoilFecha.php";
            var ancho= (window.screen.width /2) - 200;
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=400, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
        }

</script>

<script>
        
    function informgasoilobra()
        {
            var url = "GasoilObra.php";
            var ancho= (window.screen.width /2) - 200;
            window.open(url, "_blank",'resizable=no, scrollbars=no, toolbar=no, location=no, menubar=no, width=800, height=400, top=70 , left='+ancho); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
        }

</script>

<!-- Cerrar ventana automáticamente -->
<script>
    function cierraventana()
    {
        window.setTimeout("window.close('_self','','')",200);
    }
</script>