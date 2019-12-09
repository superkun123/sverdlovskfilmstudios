$(document).ready(function () {
      $('.modal').on('hidden.bs.modal', function (e)  {
        refresh ($(".yt-player-1 iframe"))
        refresh ($(".yt-player-2 iframe"))
        refresh ($(".yt-player-3 iframe"))
        refresh ($(".yt-player-4 iframe"))
        })

       function refresh (first) {
        $(first).attr("src", $(first).attr("src"));
       }
 });






 