$(document).ready(function(){
      $('.slider').slider();
});

$(document).ready(function(){
    $('.carousel').carousel({
    	padding: 450,
    	dist: -300,
    	duration: 200
    });
});

$('#prev').on('click',function(){
// Next slide
$('.carousel').carousel('prev');
});

$('#next').on('click',function(){
// Previous slide
$('.carousel').carousel('next');
});

$('.carousel.carousel-slider').carousel({fullWidth: true});

$(document).ready(function prev(){
	$('.carousel').carousel('prev');
});

$(document).ready(function(){
    $('.modal').modal();
 });

function load(){
  document.getElementById("trigger").click();
}

//carousel
var instance = M.Carousel.getInstance(elem);

function next(){
	instance.next();
}

function prev(){
	instance.prev();
}

//trigger do modal do contato
function msgSubmit(){
    document.getElementById("trigger_contato").click();
}


//guardar informações da tela de contato
function save(){
    nome = document.getElementById("first_name").value;
    sobrenome = document.getElementById("last_name").value;
    email = document.getElementById("email").value;
    msg = document.getElementById("mensagem").value;
}
