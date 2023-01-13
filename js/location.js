$(document).ready(function(){ 

    if (navigator.geolocation) { 

        navigator.geolocation.getCurrentPosition(showLocation); 

    } else { 

        $('#location').php('Geolocation is not supported by this browser.'); 

    } 

}); 

function showLocation(position) { 

    var latitude = position.coords.latitude; 

    var longitude = position.coords.longitude; 

     

    $.ajax({ 

        type:'POST', 

        url:'getLocation.php', 

        data:'latitude='+latitude+'&longitude='+longitude, 

        success:function(msg){ 

            if(msg){ 

                $("#location").php(msg); 

            }
            else{ 

                $("#location").php('Not Available'); 

            } 

        } 

    }); 

}