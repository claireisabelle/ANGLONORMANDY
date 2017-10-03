$(document).ready(function()
{

	// Sélectionne le premier mot du titre et le passe en marron
	$('.title-marron').html(function(i, html){
		return html.replace(/(\w+\s)/,'<span class="marron">$1</span>');
	});

	// Sélectionne le premier mot du titre et le passe en blanc
	$('.title-blanc').html(function(i, html){
		return html.replace(/(\w+\s)/,'<span class="blanc">$1</span>');
	});


	// Scroll en douceur
    $('a.scroll').on('click', function(evt){
       
       // bloquer le comportement par défaut: on ne rechargera pas la page
       evt.preventDefault(); 

       // enregistre la valeur de l'attribut  href dans la variable target
		var target = $(this).attr('href');
      
       /* le sélecteur $(html, body) permet de corriger un bug sur chrome 
       et safari (webkit) */
		$('html, body')
       // on arrête toutes les animations en cours 
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 1000 );
    });


});