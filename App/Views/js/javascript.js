 $(document).ready(function(){
            $('.slider').slider();
            $("#ex2").slider({});
            $('#modal').hide();
                $('.slider').on('slide', function (ev) {
                    var range=$('#ex2').val();
                    var valores=range.split(",");
   });
   // Validacion solo letras.
        $('#nombre').keypress(function(e){
          if(!/[A-z]/.test(e.key)){
            Swal.fire({
              title: 'Oops.',
              text: 'Asegurate de solo ingresar letras',
              heightAuto:'false',
              confirmButtonColor:'#BF11BD',
              position:'top-end'
            })
              return false;
          }
        });
        $('#apellido').keypress(function(e){
          if(!/[A-z]/.test(e.key)){
            Swal.fire({
              title: 'Oops.',
              text: 'Asegurate de solo ingresar letras',
              heightAuto:'false',
              confirmButtonColor:'#BF11BD',
              position:'top-end'
            })
              return false;
          }
        });
  // Validacion de email 
        $('#email').change(function(e){
            var valemail = $(this).val();
            if(!/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(valemail)){
              Swal.fire({
                title: 'Oops.',
                text: 'Asegurate de ingresar una direccion email valida.',
                heightAuto:'false',
                confirmButtonColor:'#BF11BD',
                position:'top-end'
              })
              return false;
            }
        });
  // Validacion de contrase;a, alfanumerica, admite caracteres especiales, puede tener entre 4 y 12 caracteres.
        $('#password').change(function(e){
          var valpassword = $('#password').val();
          if(!/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{4,12}$/.test(valpassword)){
            Swal.fire({
              title: 'Oops.',
              text: 'Asegurate de ingresar una clave alfanumerica, con al menos una letra mayuscula o minuscula.',
              heightAuto:'false',
              confirmButtonColor:'#BF11BD',
              position:'top-end'
            })
              return false;
            }
        });

        $('#user').change(function(e){
          var valuser = $('#user').val();
          if(!/^[a-z0-9_-]{3,16}$/.test(valuser)){
            Swal.fire({
              title: 'Oops.',
              text: 'Tu username debe tener entre 3 y 16 caracteres. Se admiten guiones y underscores.',
              heightAuto:'false',
              confirmButtonColor:'#BF11BD',
              position:'top-end'
            })
              return false;
            }
        });
        $('#repetirpassword').change(function(e){
            if($(this).val() != $('#password').val()){
              Swal.fire({
              title: 'Oops.',
              text: 'Deben coincidir las dos contrase;as',
              heightAuto:'false',
              confirmButtonColor:'#BF11BD',
              position:'top-end'
            })
                return false;
            }
        
        });
        $( "#enviarregistro").click(function(e) {
            e.preventDefault();
            var nombre = $('#nombre').val();
            var apellido = $('#apellido').val();
            var user = $('#user').val();
            var password = $('#password').val();
            var email = $('#email').val();
            var bandera = 1;
            $.ajax
            ({
              type:"POST",
              url:'../public/index.php',
              data:{
                'nombre':nombre,
                'apellido':apellido,
                'user':user,
                'password':password,
                'email':email,
                'bandera':bandera
              },
              success:function(resp){
                console.log(resp);
              } 
            });
      });
       
      $('#formulario').on('submit',function(e){
              e.preventDefault();
              var form =$('#formulario');
              var url = $('#formulario').attr('action');
            $.ajax({                        
            type:"POST",                 
            url:url,                    
            data:form.serialize(),
            dataType:'json',
            success:function(resp){
              if(Object.keys(resp).length == 0)
              {
                Swal.fire({
                  title: 'Error!',
                  text: 'No hay coincidencia de juegos.',
                  type: 'error',
                  confirmButtonText: 'Cool'
                })
                  return false;
              }
                $.each(resp,function(i,item){
                    $('#table > #tbody').append('<tr>\
                      <td align="center">' + item.titulo + '</td>'+
                    '<td align="center">' + item.consola + '</td>'+
                    '<td align="center">' + item.precio + '</td>'+'</tr>');
               });
                $('#modal').click();
              }
          });

        });
});