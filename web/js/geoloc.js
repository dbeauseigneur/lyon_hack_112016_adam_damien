/**
 * Created by damien on 09/11/16.
 */
/*document.getElementById("contact_submit_forms").addEventListener("mouseover", myFunction);*/


function inform(position) {
    $('#lat').val(position.coords.latitude);
    $('#lng').val(position.coords.longitude);

    dist = distance(45.7542305, 4.8386187,position.coords.latitude,position.coords.longitude,'M' ) ;
    if (dist <= 40) {
        $('#localized').val('arrivé')  ;
    } else {
        $('#localized').val('localisé')  ;
    }
}

function distance(lat1, lon1, lat2, lon2, unit) {
    var radlat1 = Math.PI * lat1/180
    var radlat2 = Math.PI * lat2/180
    var theta = lon1-lon2
    var radtheta = Math.PI * theta/180
    var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
    dist = Math.acos(dist)
    dist = dist * 180/Math.PI
    dist = dist * 60 * 1.1515
    if (unit=="K") { dist = dist * 1.609344 }
    if (unit=="M") { dist = dist * 1609.344 }
    if (unit=="N") { dist = dist * 0.8684 }
    return dist
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



function error(msg) {
    var s = document.querySelector('#status');
    s.innerHTML = typeof msg == 'string' ? msg : "failed";
    s.className = 'fail';

    // console.log(arguments);
}

if (navigator.geolocation) {
    navigator.geolocation.watchPosition(inform, error,{maximumAge:0,enableHighAccuracy:true});
} else {
    error('not supported');
}
;