/* File Name: week4.js
Date: 04/23/2016
Programmer: Betsy Gascon */

$(document).ready(function(){
	$('body').removeClass('jsOff').addClass('jsOn');
	dynamicFAQ();
});

function dynamicFAQ() {
	$('dd').hide();
	$('dt').on('click', function(){
		$(this).toggleClass('open').next().slideToggle();
	});
}
