// activate feather icons
feather.replace();

$(function() {


//  ---------- products ----------

// display results integer of total-posters at top of page
$("#resultsUpdate-top").append($("#resultsUpdate-end").html());


// replace img cover by img back view on mousenter
$(".product-card img").mouseenter(function(){
    $(this).attr("src", function(index, attr){
        return attr.replace("img/cover/", "img/back/");
    });
    $(this).removeClass("img-fluid");
    $(this).addClass("img-back");
});

$(".product-card img").mouseleave(function(){
    $(this).attr("src", function(index, attr){
        return attr.replace("img/back/", "img/cover/");
    });
    $(this).addClass("img-fluid");
    $(this).removeClass("img-back");

});



//  ---------- wishlist ----------

// wishlist icon : toggle fill color on click
$('.feather.feather-heart').click(function(){
    $(this).toggleClass("red");
});

// activate plugin (toastem)
toastem.normal("Wishlist is updated!");



//  ---------- filters and sort options ----------


// Load filters on click

  var trigger = $('.filter-button'),
      container = $('#area');

  // Fire on click
  trigger.on('click', function(){

    // Set $this for re-use. Set target from data attribute
    var $this = $(this),
      target = $this.data('target');

    // Load target page into container
    container.load( target + '.php');

    return false;

  });

  // Close filters on double click
  trigger.on('dblclick', function() {
    container.slideToggle( "slow" );
  })

  // filters - chevrons up and down

  $.fn.selectFilter = function () {

    $(this).mouseenter(function() {
      $('img').attr("src", function(index, attr){
        return attr.replace("img/chevron-down", "img/chevron-up");
      });
    });

    $(this).mouseleave(function() {
      $('img').attr("src", function(index, attr){
          return attr.replace("img/chevron-up", "img/chevron-down");
      });
    });


}
$('.filter-button').selectFilter();



//  ---------- plugins ----------

// Autocomplete options and activate

var options = {

	url: "json/data.json",

	getValue: "title",

  template: {
  type: "description",
  fields: {
      description: "artist"
    }
  }

};

$("#provider-json").easyAutocomplete(options);



}); // END
