var primary = $("#carousel");

/* large/grey */
$(".carouselContainer").css('background-color', "black");
/* description */
$(".click").css('background-color', "#808080");

/*first half */

$(".feature").css('padding-top', '10%'); /* 100/250 */
$(".feature").css('padding-left', '22%');
$(".feature").css('color', 'white');
/* place a border around feature with circles
$(".feature").css('border', '1px solid white');
$(".feature").css('height', '100px');
$(".feature").css('width', '100px');
*/

/* second half */

$(".item").hide();
$(".item").first().show();


for (i = 0; i <4 ; i++){
  $("#feature-wrap").append("<button class='feature-button' id='"+i+"' style='margin:5px'>  </button>");

}
$('.feature-button').css('height', '25px');
$('.feature-button').css('border-radius', '25px');
$('#0').css('background-color', 'white');
$('#1').css('background-color', 'grey');
$('#2').css('background-color', 'grey');
$('#3').css('background-color', 'grey');
// $('.feature-button').css('background-color', 'grey');

$('.item').css('height', '350px');
$('#img-0').css('margin-top', '10px');
$('.feature-button').click(function(){
  $('.item').hide()
  $('#img-' + this.id).show()
  $('#img-' + this.id).css('margin-top', '10px');
  $('.feature-button').css('background-color', 'grey');
  $(this).css('background-color', 'white');
});

// var array=[
//   'Congrats to our All Region and All Freshamn Award Winners',
//   'hello',
//   'goodbye',
//   'hi'
// ]

// similar as above, same styling
$('.item').click(function(){
  $('.click').hide()
  $('#text-' + this.id).show()
  $('#text-' + this.id).css('width', "100%");
	$('#text-' + this.id).css('height', "300px");
  $('#text-' + this.id).css('padding-top', "20px;");
  $('#text-' + this.id).css('padding-left', "25px");
  /* be able to scroll to top of div */
  $(window).scrollTop($('#text-' + this.id).offset().top);
});


/*
$('#img-0').hover(function(){
console.log(this.id.slice(-2,-1))
  this.append("Congrats")
})
*/
