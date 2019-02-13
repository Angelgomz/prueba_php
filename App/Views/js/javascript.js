 $(document).ready(function(){
            $('.slider').slider();
            $("#ex2").slider({});
            $('#modal').hide();
                $('.slider').on('slide', function (ev) {
                    var range=$('#ex2').val();
                    var valores=range.split(",");
   });

   

      $('form').on('submit',function(e){
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