<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <script src="{{ asset('admin/dist/js/sweetalert.min.js') }}"></script>
	 <script type="text/javascript">
           
                validarDocumento = function () {

                numero = document.getElementById('documento').value;
                /* alert(numero); */
                var suma = 0;
                var residuo = 0;
                var pri = false;
                var pub = false;
                var nat = false;
                var numeroProvincias = 22;
                var modulo = 11;

                /* Verifico que el campo no contenga letras */
                var ok = 1;
                for (i = 0; i < numero.length && ok == 1; i++) {
                    var n = parseInt(numero.charAt(i));
                    if (isNaN(n))
                        ok = 0;
                }
                if (ok == 0) {

    
                     swal("No puede ingresar caracteres solo numeros ", "click en ok para cerrar!", "warning");
                     $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });

                    return false;
                }

                if (numero.length < 10) {
                        swal("El número ingresado no es válido", "click en ok para cerrar!", "warning");

                         $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });
                    
                    return false;
                }

                /* Los primeros dos digitos corresponden al codigo de la provincia */
                provincia = numero.substr(0, 2);
                if (provincia < 1 || provincia > numeroProvincias) {
                    alert('El código de la provincia (dos primeros dígitos) es inválido');
                     $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });
                    return false;
                }
                /* Aqui almacenamos los digitos de la cedula en variables. */
                d1 = numero.substr(0, 1);
                d2 = numero.substr(1, 1);
                d3 = numero.substr(2, 1);
                d4 = numero.substr(3, 1);
                d5 = numero.substr(4, 1);
                d6 = numero.substr(5, 1);
                d7 = numero.substr(6, 1);
                d8 = numero.substr(7, 1);
                d9 = numero.substr(8, 1);
                d10 = numero.substr(9, 1);

                /* El tercer digito es: */
                /* 9 para sociedades privadas y extranjeros   */
                /* 6 para sociedades publicas */
                /* menor que 6 (0,1,2,3,4,5) para personas naturales */
                if (d3 == 7 || d3 == 8) {
                     swal("El tercer dígito ingresado es inválido", "click en ok para cerrar!", "warning");
                     $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });	
                    return false;
                }

                /* Solo para personas naturales (modulo 10) */
                if (d3 < 6) {
                    nat = true;
                    p1 = d1 * 2;
                    if (p1 >= 10)
                        p1 -= 9;
                    p2 = d2 * 1;
                    if (p2 >= 10)
                        p2 -= 9;
                    p3 = d3 * 2;
                    if (p3 >= 10)
                        p3 -= 9;
                    p4 = d4 * 1;
                    if (p4 >= 10)
                        p4 -= 9;
                    p5 = d5 * 2;
                    if (p5 >= 10)
                        p5 -= 9;
                    p6 = d6 * 1;
                    if (p6 >= 10)
                        p6 -= 9;
                    p7 = d7 * 2;
                    if (p7 >= 10)
                        p7 -= 9;
                    p8 = d8 * 1;
                    if (p8 >= 10)
                        p8 -= 9;
                    p9 = d9 * 2;
                    if (p9 >= 10)
                        p9 -= 9;
                    modulo = 10;
                }
                /* Solo para sociedades publicas (modulo 11) */
                /* Aqui el digito verficador esta en la posicion 9, en las otras 2 en la pos. 10 */
                else if (d3 == 6) {
                    pub = true;
                    p1 = d1 * 3;
                    p2 = d2 * 2;
                    p3 = d3 * 7;
                    p4 = d4 * 6;
                    p5 = d5 * 5;
                    p6 = d6 * 4;
                    p7 = d7 * 3;
                    p8 = d8 * 2;
                    p9 = 0;
                }

                /* Solo para entidades privadas (modulo 11) */
                else if (d3 == 9) {
                    pri = true;
                    p1 = d1 * 4;
                    p2 = d2 * 3;
                    p3 = d3 * 2;
                    p4 = d4 * 7;
                    p5 = d5 * 6;
                    p6 = d6 * 5;
                    p7 = d7 * 4;
                    p8 = d8 * 3;
                    p9 = d9 * 2;
                }

                suma = p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8 + p9;
                residuo = suma % modulo;
                /* Si residuo=0, dig.ver.=0, caso contrario 10 - residuo*/
                digitoVerificador = residuo == 0 ? 0 : modulo - residuo;
                /* ahora comparamos el elemento de la posicion 10 con el dig. ver.*/
                if (pub == true) {
                    if (digitoVerificador != d9) {
                         swal("El ruc de la empresa del sector público es incorrecto.", "click en ok para cerrar!", "warning");
                      	 $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });
                        return false;
                    }
                    /* El ruc de las empresas del sector publico terminan con 0001*/
                    if (numero.substr(9, 4) != '0001') {
                           swal("El ruc de la empresa del sector público debe terminar con 0001", "click en ok para cerrar!", "warning");
                        	 $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });
                        return false;
                    }
                } else if (pri == true) {
                    if (digitoVerificador != d10) {
                         swal("El ruc de la empresa del sector privado es incorrecto.", "click en ok para cerrar!", "warning");
                       	 $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });
                        return false;
                    }
                    if (numero.substr(10, 3) != '001') {
                         swal("El ruc de la empresa del sector privado debe terminar con 001", "click en ok para cerrar!", "warning");
                      	 $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });
                        return false;
                    }
                } else if (nat == true) {
                    if (digitoVerificador != d10) {
                         swal("El número de cédula de la persona natural es incorrecto.", "click en ok para cerrar!", "warning");
                         $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });
                        return false;
                    }
                    if (numero.length > 10 && numero.substr(10, 3) != '001') {
                         swal("El ruc de la persona natural debe terminar con 001", "click en ok para cerrar!", "warning");
                            $(document).ready(function(){
			                	$("#Guardar").attr('disabled','disabled');
			                });
                        return false;
                    }
                }
                $(document).ready(function(){
                	$("#Guardar").removeAttr('disabled');
                });
    }

    
        function esfechavalida() {
      var fecha = document.getElementById('fecha').value;

      // La longitud de la fecha debe tener exactamente 10 caracteres
      if ( fecha.length !== 10 )
         error = true;

      // Primero verifica el patron
      if ( !/^\d{4}\/\d{1,2}\/\d{1,2}$/.test(fecha) )
         error = true;

      // Mediante el delimitador "/" separa dia, mes y año
    var fecha = fecha.split("-");
     var year = parseInt(fecha[0]);
       if(year < 1800){
      swal("Fecha Inválida: * La Fecha minima es 1800.\n", "click en ok para cerrar!", "warning");
        return false;
     }
      if(year > 2005){
      swal("Fecha Inválida: * La Fecha maxima es 2005.\n", "click en ok para cerrar!", "warning");
        return false;
     }
     var month = parseInt(fecha[1]);
      
      var day = parseInt(fecha[2]);

      // Verifica que dia, mes, año, solo sean numeros
      error = ( isNaN(day) || isNaN(month) || isNaN(year) );

      // Lista de dias en los meses, por defecto no es año bisiesto
      var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
      if ( month === 1 || month > 2 )
         if ( day > ListofDays[month-1] || day < 0 || ListofDays[month-1] === undefined )
            error = true;

      // Detecta si es año bisiesto y asigna a febrero 29 dias
      if ( month === 2 ) {
         var lyear = ( (!(year % 4) && year % 100) || !(year % 400) );
         if ( lyear === false && day >= 29 )
            error = true;
         if ( lyear === true && day > 29 )
            error = true;
      }

      if ( error === true ) {
         swal("Fecha Inválida: * La Fecha debe tener el formato: aaaa-mm-dd (año-mes-dia).\n", "click en ok para cerrar!", "warning");
       
         return false;
      }
      else
         alert("Fecha Válida\n");

      return true;
   }
        </script>
</body>
</html>