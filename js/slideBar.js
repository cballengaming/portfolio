
jQuery(document).ready(function(){
 jQuery('.skills').each(function(){
 jQuery(this).find('.skills-bar').animate({
 width:jQuery(this).attr('data-percent')
 },5000);
 });
});// JavaScript Document