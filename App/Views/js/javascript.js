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
              // var resp = JSON.stringify(resp);

var array = (JSON.parse(resp) );

 $.each(array ,function(i,item){
 $('#table > #tbody').append('<tr>\
  <td align="center">' + item.titulo + '</td>'+
'<td align="center">' + item.consola + '</td>'+
'<td align="center">' + item.precio + '</td>'+'</tr>');

 });

/*
   var $tr = $('#table>tbody').append(
                        '<td align="center" style="display: none;">' + item.titulo + '</td>'+
                        '<td align="center" style="display: none;">' + item.consola + '</td>'+
                        '<td align="center" style="display: none;">' + item.precio + '</td>'+'</tr>');
*/
/*
                  $.each(JSON.parse(resp),function(i,item){
                      var $tr = $('#table>tbody').append(
                        '<td align="center" style="display: none;">' + item.titulo + '</td>'+
                        '<td align="center" style="display: none;">' + item.consola + '</td>'+
                        '<td align="center" style="display: none;">' + item.precio + '</td>'+'</tr>');
                     //.appendTo('#records_table');
               
              });

*/
            /* $("#table").append('<tr><td>Titulo</td>'+
             '<td>Consola</td>' + 
             '<td>Precio</td>');
             for (i=0; i<json.length; i++){
                  $("#table>tbody").append('<tr>' + 
                  '<td align="center" style="display: none;">' + json[i].titulo + '</td>'+
                  '<td align="center" style="display: none;">' + json[i].consola + '</td>'+
                  '<td align="center" style="display: none;">' + json[i].precio + '</td>'+'</tr>');
                  }

            */
            $('#modal').click();
            }
         });
          });
});