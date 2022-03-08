$(function () {

    

    //  Developed By Frederick Ennin (CEO of Dollarsoft ) 
    // Contact: +233556676471
    // Email: dollarsoft463@gmail.com
    // Website: http://www.dollarstir.com
    // Youtube: http://www.youtube.com/DollarsoftCorporation
    // Started on: saturday 11th April, 2020

    $("#loadee").hide();



    // handling the calculations

    $("#p1").val(0);
    $("#p2").val(0);
    $("#p3").val(0);
    $("#p4").val(0);
   
    var t1 = 0;
    var t2 = 0;
    var t3 = 0;
    var t4 = 0;
    var q1 = 0;
    var q2 = 0;
    var q3 = 0;
    var q4 = 0;
     $("#fin").val(0);

     



    var ovtt = 0;
    

    

        $("#s1").change(function () {
            $("#q1").val("");
            $("#p1").val(0);

            $("#q1").keyup(function(){
          
                if ($("#s1").val()=="Small-fridge") {
                  
                   
    
                    q1 = $("#q1").val()
    
                    t1 = 30*q1;
                    $("#p1").val(t1);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s1").val()=="Large-fridge") {
                  
                   
    
                    q1 = $("#q1").val()
    
                    t1 = 35*q1;
                    $("#p1").val(t1);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
                if ($("#s1").val()=="Small-jutebag") {
                  
                   
    
                    q1 = $("#q1").val()
    
                    t1 = 20*q1;
                    $("#p1").val(t1);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
    
                if ($("#s1").val()=="Large-jutebag") {
                  
                   
    
                    q1 = $("#q1").val()
    
                    t1 = 25*q1;
                    $("#p1").val(t1);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s1").val()=="Small-luggage") {
                  
                   
    
                    q1 = $("#q1").val()
    
                    t1 = 25*q1;
                    $("#p1").val(t1);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s1").val()=="large-luggage") {
                  
                   
    
                    q1 = $("#q1").val()
    
                    t1 = 30*q1;
                    $("#p1").val(t1);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
    
                
    
    
    
             })
            
        })




        //  Item 2

        $("#s2").change(function() {
            $("#q2").val("");
            $("#p2").val(0);

            $("#q2").keyup(function(){
          
                if ($("#s2").val()=="Small-fridge") {
                  
                   
    
                    q2 = $("#q2").val()
    
                    t2 = 30*q2;
                    $("#p2").val(t2);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s2").val()=="Large-fridge") {
                  
                   
    
                    q2 = $("#q2").val()
    
                    t2 = 35*q2;
                    $("#p2").val(t2);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
                if ($("#s2").val()=="Small-jutebag") {
                  
                   
    
                    q2 = $("#q2").val()
    
                    t2 = 20*q2;
                    $("#p2").val(t2);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
    
                if ($("#s2").val()=="Large-jutebag") {
                  
                   
    
                    q2 = $("#q2").val()
    
                    t2 = 25*q2;
                    $("#p2").val(t2);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s2").val()=="Small-luggage") {
                  
                   
    
                    q2 = $("#q2").val()
    
                    t2 = 25*q2;
                    $("#p2").val(t2);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s2").val()=="large-luggage") {
                  
                   
    
                    q2 = $("#q2").val()
    
                    t2 = 30*q2;
                    $("#p2").val(t2);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
    
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
    
                
    
    
    
             })
            
        })

        // ends item 2


        // item 3

        $("#s3").change(function(){
            $("#q3").val("");
            $("#p3").val(0);

            $("#q3").keyup(function(){
          
                if ($("#s3").val()=="Small-fridge") {
                  
                   
    
                    q3 = $("#q3").val()
    
                    t3 = 30*q3;
                    $("#p3").val(t3);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s3").val()=="Large-fridge") {
                  
                   
    
                    q3 = $("#q3").val()
    
                    t3 = 35*q3;
                    $("#p3").val(t3);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
                if ($("#s3").val()=="Small-jutebag") {
                  
                   
    
                    q3 = $("#q3").val()
    
                    t3 = 20*q3;
                    $("#p3").val(t3);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
    
                if ($("#s3").val()=="Large-jutebag") {
                  
                   
    
                    q3 = $("#q3").val()
    
                    t3 = 25*q3;
                    $("#p3").val(t3);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s3").val()=="Small-luggage") {
                  
                   
    
                    q3 = $("#q3").val()
    
                    t3 = 25*q3;
                    $("#p3").val(t3);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s3").val()=="large-luggage") {
                  
                   
    
                    q3= $("#q3").val()
    
                    t3 = 30*q3;
                    $("#p3").val(t3);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
    
                
    
    
    
             })
        })

        // ends item 3



        // item 4

        $("#s4").change(function () {

            $("#q4").val("");
            $("#p4").val(0);

            $("#q4").keyup(function(){
          
                if ($("#s4").val()=="Small-fridge") {
                  
                   
    
                    q4 = $("#q4").val()
    
                    t4 = 30*q4;
                    $("#p4").val(t4);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s4").val()=="Large-fridge") {
                  
                   
    
                    q4 = $("#q4").val()
    
                    t4 = 35*q4;
                    $("#p4").val(t4);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
                if ($("#s4").val()=="Small-jutebag") {
                  
                   
    
                    q4 = $("#q4").val()
    
                    t4 = 20*q4;
                    $("#p4").val(t4);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
    
                if ($("#s4").val()=="Large-jutebag") {
                  
                   
    
                    q4 = $("#q4").val()
    
                    t4 = 25*q4;
                    $("#p4").val(t4);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s4").val()=="Small-luggage") {
                  
                   
    
                    q4 = $("#q4").val()
    
                    t4 = 25*q4;
                    $("#p4").val(t4);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
                if ($("#s4").val()=="large-luggage") {
                  
                   
    
                    q4 = $("#q4").val()
    
                    t4 = 30*q4;
                    $("#p4").val(t4);
                    ovtt = t1 + t2 + t3 + t4;
    
                    
                   
                    $("#ov").html(ovtt);
                     $("#fin").val(ovtt);
                    
                }
                else{
    
                }
    
    
    
                
    
    
    
             })
            
        })

        // End item 4
       
        
    

    // alert("hi");
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
            beforeSend: function () {
                $("#loadee").show();
                
            },
            success: resp
        }
        $.ajax(regopt);
    });

    $("#logfrm").submit(function(e){


        e.preventDefault();

        var loginopt= {
            url: "dollarsoft.php?dollar=login",
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData:false,
            beforeSend: function () {
                $("#loadee").show();
                
            },
            success: resp
        }
        $.ajax(loginopt);
    });


    $("#resetfrm").submit(function(e){

        e.preventDefault();
        var resetopt = {
            url: 'dollarsoft.php?dollar=resetpassword',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#loadee").show();
                
            },
            success: resp

        }

        $.ajax(resetopt);
    })


    $("#verifrm").submit(function(e){

        e.preventDefault();
        var veritopt = {
            url: 'dollarsoft.php?dollar=verification',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#loadee").show();
                
            },
            success: resp

        }

        $.ajax(veritopt);
    })


    $("#setpass").submit(function(e){

        e.preventDefault();
        var setopt = {
            url: 'dollarsoft.php?dollar=setnewpass',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#loadee").show();
                
            },
            success: resp

        }

        $.ajax(setopt);
    })


   

    $("#basicfrm").submit(function(e){

        e.preventDefault();
        var basicopt = {
            url: 'dollarsoft.php?dollar=getinvoice',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#loadee").show();
                
            },
            success: resp

        }

        $.ajax(basicopt);
    })
    
})