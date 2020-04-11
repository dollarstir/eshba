$(function () {

    //  Developed By Frederick Ennin (CEO of Dollarsoft ) 
    // Contact: +233556676471
    // Email: dollarsoft463@gmail.com
    // Website: http://www.dollarstir.com
    // Youtube: http://www.youtube.com/DollarsoftCorporation
    // Started on: saturday 11th April, 2020


    function resp(response){

        $(".repo").html(response);
        $("#mess").fadeOut(40000);
  }

    $("#regfrm").submit(function(e){


        e.preventDefault();

        var regopt= {
            url: "dollarsoft.php?dollar=reg",
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData:false,
            success: resp
        }
        $.ajax(regopt);
    });


    
    
})