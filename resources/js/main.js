// COUNTER ARTICOLI PUBBLICATI
document.addEventListener('DOMContentLoaded', () => {
  const el    = document.querySelector('#article-count');
  const end  = parseInt(el.dataset.final, 10) || 0;
  const dur  = 1000;              // durata animazione in ms
  const step = Math.max(1, Math.floor(dur / end));
  let  i    = 0;

  const timer = setInterval(() => {
    el.textContent = i;
    if (i >= end) clearInterval(timer);
    i++;
  }, step);
});



// Accordion revisore

$(document).ready(function(){
	$(".sec").eq(0).click(function(){
		$(this).next(".collapsable").slideToggle();
		$(this).children(".section").text("Section 1");
		$(this).children(".fa").toggleClass("fa-minus");
		
	});
	$(".sec").eq(1).click(function(){
		$(this).next(".collapsable").slideToggle();
		$(this).children(".section").text("Section 2");
		$(this).children(".fa").toggleClass("fa-minus");
	});
	$(".sec").eq(2).click(function(){
		$(this).next(".collapsable").slideToggle();
		$(this).children(".section").text("Section 3");
		$(this).children(".fa").toggleClass("fa-minus");
	});
	$(".sec").mouseenter(function(){
		$(this).addClass("z-depth-4");
		$(this).children(".section").text("Click Me");
		$(this).next(".collapsable").css({"width":"110%"});
	});
	$(".sec").mouseleave(function(){
		$(this).removeClass("z-depth-4");
		$(".sec").eq(0).children(".section").text("Section 1");
		$(".sec").eq(1).children(".section").text("Section 2");
		$(".sec").eq(2).children(".section").text("Section 3");
		$(this).next(".collapsable").css({"width":"100%"});
	});

});







// PAGINATE----------------------------------------------

