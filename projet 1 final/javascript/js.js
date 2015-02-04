
/*javascript pour la page accueil*/
$('#video_prince_none').hide();

	$('.image_descript').click(function(){
		var $attribut_alt = $(this).attr('alt')
		var $poster = $(this).attr('src')
		$('#video_prince_none').attr({
			'src':$attribut_alt,
			'poster':$poster,
		})
		$('#video_prince_none').fadeIn(1500);
	})
	$('.image_img').mouseover(function(){
		$(this).css({
			'opacity':'1',
		})
	})
	$('.image_img').mouseout(function(){
		$(this).css({
			'opacity':'0.9',
		})
	})
/*js de la page song individuel*/
	$('.position_audio_name p').click(function(){
		var lire_son = $(this).val()
		$('#play_song').attr({
		'src':'../audios/FrenchMontanaCokeBoys/'+lire_son,
		})
	})
