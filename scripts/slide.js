$(document).ready(function() {
	// the array of images
	var images=[ 'images/slide1.jpg', 'images/slide2.jpg', 'images/slide3.jpg'];
	var piclink = ["url(" + images[0] + ")", "url(" + images[1] + ")", "url(" + images[2] + ")"];
	// current image index
	var backgroundImage = 2;

	// store the index of the first and last image
	var FIRST_IMAGE_INDEX = 0;
	var LAST_IMAGE_INDEX = piclink.length - 1;
  $('#section').css('backgroundImage', "url(" + images[1] + ")");
	$('#section').css('width', "100%");
	$('#section').css('height', "75vh");
	$('#section').css('backgroundSize', "cover");
	$('#section').css('backgroundRepeat', "no-repeat");
	//

	var images=[ 'images/slide1.jpg', 'images/slide2.jpg', 'images/slide3.jpg'];
	var url=1;
	setInterval(function(){
	   url+=1;
	  if(url==3){
	    url=0;
	  }
	  $('#section').css('backgroundImage', 'url('+ images[url] +')');
		$('#section').css('width', "100%");
		$('#section').css('height', "75vh");
		$('#section').css('backgroundSize', "cover");
		$('#section').css('backgroundRepeat', "no-repeat");
	},3200);
});
