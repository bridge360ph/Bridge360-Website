const showMap = () => {
    var daddr = `191 Salcedo St, Legaspi Village, Makati City 1229`;
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(data){
        if (data.coords) {
          window.open( 'https://maps.google.fr/maps?saddr=' + data.coords.latitude + ',' + data.coords.longitude + '&daddr=' + daddr, '_blank' );
        }
      });
    }
};

const setCurrentMenuItem = () => {
    var pathname = window.location.pathname,
        pathnameSplit = pathname.split(`/`),
        pathnameSplitLength = pathnameSplit.length,
        currentPage = pathnameSplit[ pathnameSplitLength-1 ].split(`.`)[0];
        
  var menuEl = $(`#site-nav`);
  
  menuEl.children().removeClass( `current-menu-item` );
  $( `#site-nav-${currentPage}` ).addClass( `current-menu-item` );
  $( `html head title` ).html( `Bridge360 - ${currentPage.toUpperCase()}` );

  if(currentPage == 'projects' || currentPage == 'services' || currentPage == 'blogs'){
    $('#regBtn').hide();
    $('#inBtn').hide();
    $('#logout').show();
  } else {
    $('#logout').hide();
    $('#regBtn').show();
    $('#inBtn').show();
  }
};



// ONLOAD
$( function() {
  setCurrentMenuItem();
} );



// GLOBAL FUNC
const notifyUser = ( icon, message, type ) => {
  $.notify( {
    icon: icon,
    message: message
  }, {
      type: type
  } );
};