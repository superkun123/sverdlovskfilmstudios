// Переправь удаление элемента на замену ссылки, очень толстый код получается

$(document).ready(function () {


      $('#exampleModalCenter').on('show.bs.modal', function (e) {
        $('.modal-body').append('<iframe class="trailer1" width="100%" height="100%" src="https://www.youtube.com/embed/3n-wdab41GE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
       })

       $('#exampleModalCenter').on('hide.bs.modal', function (e) {
        $('.trailer1').remove();
       })

       $('#exampleModalCenter2').on('hide.bs.modal', function (e) {
        $('.trailer2').remove();
       })
 
       $('#exampleModalCenter2').on('show.bs.modal', function (e) {
         $('.modal-body').append('<iframe class="trailer2" width="100%" height="100%" src="https://www.youtube.com/embed/BOMsHD5Xak4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        })


        $('#exampleModalCenter3').on('hide.bs.modal', function (e) {
            $('.trailer3').remove();
           })
     
           $('#exampleModalCenter3').on('show.bs.modal', function (e) {
             $('.modal-body').append('<iframe class="trailer3" width="100%" height="100%" src="https://www.youtube.com/embed/OQ99gY1NaMQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            })

  
            $('#exampleModalCenter5').on('hide.bs.modal', function (e) {
              $('.trailer5').remove();
             })

             $('#exampleModalCenter5').on('show.bs.modal', function (e) {
              $('.modal-body').append('<iframe class="trailer5" width="100%" height="100%" src="https://www.youtube.com/embed/aZhVYv2D_es" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
             })

  });



 