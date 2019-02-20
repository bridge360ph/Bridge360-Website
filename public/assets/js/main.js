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

  // if(currentPage == 'projects' || currentPage == 'services' || currentPage == 'blogs'){
  //   $('#regBtn').hide();
  //   $('#inBtn').hide();
  //   $('#logout').show();
  // } else {
  //   $('#logout').hide();
  //   $('#regBtn').show();
  //   $('#inBtn').show();
  // }
};

const setScrollspy = () => {
  var pathname = window.location.pathname,
      pathnameSplit = pathname.split(`/`),
      pathnameSplitLength = pathnameSplit.length,
      currentPage = pathnameSplit[ pathnameSplitLength-1 ].split(`.`)[0];

  $(`body`).scrollspy( { target: `#scroll-list-${currentPage}` } );
  $( window ).on( `activate.bs.scrollspy`, function ( e, obj ) {
    var focusedItem = obj.relatedTarget;
    if( focusedItem === "#site-footer" )
      $(`#scroll-list-${currentPage}`).hide(`slow`);
    else
      $(`#scroll-list-${currentPage}`).show(`slow`);
  });
};

const contactUsEmail = () => {
  let message = document.forms["frmContact"]["message"].value;
  var contactLink = document.getElementById(`contact-link`);
    contactLink.setAttribute( `href`, `mailto:iambridge360@gmail.com?subject=Bridge360 Website&body=${message}` );
  contactLink.click();
};



// ONLOAD
$( function() {
  setCurrentMenuItem();
  setScrollspy();  
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

const toTitleCase = (phrase) => {
  return phrase
    .toLowerCase()
    .split(` `)
    .map(word => word.charAt(0).toUpperCase() + word.slice(1))
    .join(` `);
};