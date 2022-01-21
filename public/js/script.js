/*.............carousel................*/
$(".center").slick({
  dots: true,
  infinite: true,
  centerMode: true,
  slidesToShow: 5,
  slidesToScroll: 3
});

/*........search..............*/

$(document).ready(function(){
    $('a[href="#search"]').on('click', function(event) {                    
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });            
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });            
});

/*.....................  ..............*/


$(document).ready(function () {
  // Add minus icon for collapse element which is open by default
  $(".collapse.show").each(function () {
    $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
  });

  // Toggle plus minus icon on show hide of collapse element
  $(".collapse").on('show.bs.collapse', function () {
    $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
  }).on('hide.bs.collapse', function () {
    $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
  });
});


window.onscroll = function() {myFunction()};

var navbar = document.getElementById("main_navigation");
var sticky = main_navigation.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    main_navigation.classList.add("sticky")
  } else {
    main_navigation.classList.remove("sticky");
  }
}




// ........wow animation........//

new WOW().init();