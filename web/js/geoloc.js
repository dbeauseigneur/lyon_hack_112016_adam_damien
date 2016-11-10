/**
 * Created by damien on 09/11/16.
 */
/*document.getElementById("contact_submit_forms").addEventListener("mouseover", myFunction);*/




function inform(position) {
    $('#lat').val(position.coords.latitude);
    $('#lng').val(position.coords.longitude);
    $('#localized').val('localisé')  ;

}

/*function erreurPosition(error) {
    var info = "Erreur lors de la géolocalisation : ";
    switch(error.code) {
        case error.TIMEOUT:
            info += "Timeout !";
            break;
        case error.PERMISSION_DENIED:
            info += "Vous n’avez pas donné la permission";
            break;
        case error.POSITION_UNAVAILABLE:
            info += "La position n’a pu être déterminée";
            break;
        case error.UNKNOWN_ERROR:
            info += "Erreur inconnue";
            break;
    }
    document.getElementById("infoposition").innerHTML = info;} */


function success(position) {
    var s = document.querySelector('#status');

    if (s.className == 'success') {
        // not sure why we're hitting this twice in FF, I think it's to do with a cached result coming back
        return;
    }

    s.innerHTML = "found you!";
    s.className = 'success';

    var mapcanvas = document.createElement('div');
    mapcanvas.id = 'mapcanvas';
    mapcanvas.style.height = '400px';
    mapcanvas.style.width = '560px';

    document.querySelector('article').appendChild(mapcanvas);

    var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeControl: false,
        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title:"You are here! (at least within a "+position.coords.accuracy+" meter radius)"
    });
}

function error(msg) {
    var s = document.querySelector('#status');
    s.innerHTML = typeof msg == 'string' ? msg : "failed";
    s.className = 'fail';

    // console.log(arguments);
}

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(inform, error);
} else {
    error('not supported');
}
;