$(document).ready(function () {
      $('.modal').on('hidden.bs.modal', function (e)  {
        refresh ($(".yt-player-1 iframe"))
        refresh ($(".yt-player-2 iframe"))
        refresh ($(".yt-player-3 iframe"))
        refresh ($(".yt-player-4 iframe"))
        refresh ($(".yt-player-5 iframe"))
        refresh ($(".yt-player-6 iframe"))
        })

       function refresh (first) {
        $(first).attr("src", $(first).attr("src"));
       }

       $('.navbar-toggler').click( function () {
         $('.bg-dark').toggleClass('bg-dark-header-home')
       })



      //  if (localStorage.getItem('commertialShowed')) {

      //  } else {
      //   setTimeout(function(){
      //     $('.commertial').modal('show')
      //     localStorage.setItem('commertialShowed', '1')
      //   }, 2000);
      //  }

  
 });





 