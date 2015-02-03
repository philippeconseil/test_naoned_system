// sur chargement de la page
$(window).load(function() {
	setNewsHeight();
});

// redimensionner les 2 premiers block sur la meme hauteur
function setNewsHeight(){
  var i = 0;
  var prevDiv = null;
  $( 'div.haut' ).each(function(){

  	if(i % 2 == 1){
  		var h1 = prevDiv.height();
  		var h2 = $(this).height();
  		if(h1 > h2){
  			$(this).height(h1);
  		}
  		else{
  			prevDiv.height(h2);
  		}
  	}
  	prevDiv = $(this);
  	i++;
  });
}

// redimensionnement des blocs lors de la modification de la taille de la page (je n'ai pas utilisé .row-same-height afin de gerer l'affichage)
$(window).resize(function(){
  if($("#target").is(":visible")){
    if ($(window).width() < 768){
       desactive_effet_floutage();
    }else{
      
  		$('#bg').blurjs({
  			source: 'body',
  			radius: 10,
  			overlay: 'rgba(0, 0, 0, .2)'
  		}); 
    }
  }
  setNewsHeight();
});

// ouverture de menu gauche et modification de l'icone
$(document).ready(function(){
  cacher_formulaire();
  ouverture_menu_gauche();
  desactive_effet_floutage();
  fermer_formulaire_popup_oui();
  fermer_formulaire_croix();
  ouvrir_formulaire_floutage();
  submit_formulaire();
});

// ouverture du menu de gauche
function ouverture_menu_gauche(){
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        var $el = $(this);
        $el.find('i').toggleClass('fa-bars fa-bars fa-rotate-90');
        $el.toggleClass('showArchieved');           
    });
}

// on desactive l'effet de floutage
function desactive_effet_floutage(){
	$('#bg').blurjs({
		source: 'body',
		radius: 0,
		overlay: 'rgba(0, 0, 0, 0)'
	});
};

// on cache le formulaire
function cacher_formulaire(){
  $('#target').toggle();
};

// fermeture du formulaire lorsqu'on clique sur le bouton OUI de la popup                      
function fermer_formulaire_popup_oui(){
    $("#btn-decline-yes").click(function(e) {    
      fermer_formulaire(e);            
    });
};

// fermeture du formulaire lorsqu'on clique sur la croix du formulaire  
function fermer_formulaire_croix(){
    $("#btn-fermer-form").click(function(e) {    
       fermer_formulaire(e);     
    });
};

// fonction de fermeture du formulaire + annulation du floutage du background
function fermer_formulaire(e){
  if($("#target").is(":visible")){
      e.preventDefault();           
      $('#target').toggle();
      
			$('#bg').blurjs({
				source: 'body',
				radius: 0,
				overlay: 'rgba(0, 0, 0, 0)'
			});
      
      $("#btn-accepter").css('color','#4e4e4e');
                
  } 
}

// ouverture du formulaire + floutage du background   
function ouvrir_formulaire_floutage(){
    $("#btn-accepter").click(function(e) {
      if(!$("#target").is(":visible")){
          e.preventDefault();           
          $('#target').toggle();            

          if ($(window).width() >= 768){
      			$('#bg').blurjs({
      				source: 'body',
      				radius: 10,
      				overlay: 'rgba(0, 0, 0, .2)'
      			}); 
          }
          
          $(this).css('color','#2196f3');    
      }        
    });
};

// controle et validation du forumaire
function submit_formulaire() {
	$('form').submit(function(event) {
		$('.form-group').removeClass('has-error'); 
		$('.help-block').remove(); 

		var formData = {
			'nom' 				        : $('input[name=nom]').val(),
      'prenom' 				      : $('input[name=prenom]').val(),
      'profession' 				  : $('input[name=profession]').val(),
      'langue' 				      : $('input[name=langue]').val(),
      'situation_familiale' : $('input[name=situation_familiale]').val(),
      'email' 				      : $('input[name=email]').val(),
			'telephone' 			    : $('input[name=telephone]').val()
		};

		$.ajax({
			type 		: 'POST', 
			url 		: 'valid-form.php',
			data 		: formData, 
			dataType 	: 'json', 
			encode 		: true
		})
			.done(function(data) {
				if ( ! data.success) {

					if (data.errors.nom) {
						$('#nom-group').addClass('has-error');
						$('#nom-group').append('<div class="help-block">' + data.errors.nom + '</div>');  
					}
          
					if (data.errors.prenom) {
						$('#prenom-group').addClass('has-error');
						$('#prenom-group').append('<div class="help-block">' + data.errors.prenom + '</div>'); 
					}
          
					if (data.errors.email) {
						$('#email-group').addClass('has-error');
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); 
					}                    
				} else {
					$('form').append('<div class="alert alert-success">' + data.message + '</div>');
				}
			})
			.fail(function(data) {
			});
		event.preventDefault();
	});
};