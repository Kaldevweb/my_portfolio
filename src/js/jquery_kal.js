(function($){

	// ********************************FONCTION SIMPLE LIFE****************************//

		// Display button home
		function showBtnAccueil(){
			$('.btnRetourAcc').fadeIn(1000).addClass("btnRetourAccPop").removeClass("flipFlop");
		}

		//Hide button contact
		function hideBtnContact(){
			$('#btnOpenContact, .ico_envelope').fadeOut(500);
		}

		//Hide #id in url
		$("a[href^='#']").click(function(e){
		  e.preventDefault();
		  var elem = $($(this).attr('href'));
		});

	// ********************************FONCTION LOADING PAGE****************************//

	function unDisplayLoading() {
		setTimeout(function(){
			var loadingPage = $('#loadingPage').fadeOut('fast');
		}, 3000);
	}

	//Timer for displaying elements in introduction page
	setTimeout(function(){
		$('#containerLeftFlex, #containerLeftFlex h1').velocity('transition.shrinkIn', { stagger: 400});
		$('#containerRightFlex, #containerRightFlex h1').velocity('transition.shrinkIn', { stagger: 400});
		$('#btnOpenContact').velocity('transition.fadeIn');
		$('.logo_svg').velocity('transition.fadeIn');
	}, 3500)

	unDisplayLoading();

	/*Get size screen*/
	var size_width_screen = $(window).width();
	var size_height_screen = $(window).height();

	// Size for icon contact in footer
	$('.ico_contact').css("font-size","32px");

	//Get a background image if the video is not load
	$('#bg_video_pro').css({"background-image" : "url(../video/coding.jpg)"});
	$('#bg_video_perso').css({"background-image" : "url(../video/stone.jpg)"});

	// Enable plugin video (COREVID)
	$('.covervid-video-perso').coverVid(1920, 1080);
	$('.covervid-video-pro').coverVid(1920, 1080);

	/*Open left window*/
	$('#open_left').click(function(){
		$('#containerRightFlex').css("display","none");
	    $('.page_left').animate({width:"100%"}, 500);
	    $('.page_right').animate({width: "0%", display: "none"}, 500, function(){$('.page_right').css("display","none"),$('#profil_personnel').css({"display":"block"}),$("#vidBgPerso").fadeIn(1800);});
	    $('.page_left').animate({left:size_width_screen}, 600, function(){$('.page_left, #accueil_portfolio').css("display","none")});

	    showBtnAccueil();
	    hideBtnContact();
	});

	/*Open right window*/
	$('#open_right').click(function(){
		$('#containerLeftFlex').css("display","none");
	    $('.page_right').animate({width:"100%"}, 500);
	    $('.page_left').animate({width: "0%", display: "none"}, 500, function(){$('.page_left').css("display","none"),$('#profil_professionnel').css({"display":"block"}),$("#vidBgPro").fadeIn(1800);;});
	    $('.page_right').animate({right:size_width_screen}, 600, function(){$('.page_right, #accueil_portfolio').css("display","none")});
	    $('.retour-accueil').css("display","block");

	    showBtnAccueil();
	    hideBtnContact();
	});



	// Display contact page
	$('#btnOpenContact').click(function(){
		$('#pageContact').velocity('transition.flipBounceYIn').velocity({width:"100%", height:"100%"}, {duration: 500, display: 'block', complete: function(){$('#contenuContact, #test12').fadeIn(500);$('#pageContact').css("overflow","auto");showBtnAccueil();}});

		hideBtnContact();

		$('#accueil_portfolio').css('display','none')
		$('#liste_contact').velocity('transition.swoopIn', {delay : 1400, display: 'table-cell'});

		if (window.matchMedia("(max-width: 959px)").matches) {
			$('#formulaire_contact').velocity('transition.swoopIn', {delay : 1400, display: 'block'});
		}
		else {
			$('#formulaire_contact').velocity('transition.swoopIn', {delay : 1400, display: 'table-cell'});
		}

		$('#coordGlobal:first-child').velocity('transition.bounceLeftIn', {delay : 1500, display: 'table-cell'});
		$('#coordGlobal:nth-child(2)').velocity('transition.slideUpIn', {delay : 1500, display: 'table-cell'});
		$('#coordGlobal:nth-child(3)').velocity('transition.bounceRightIn', {delay : 1500, display: 'table-cell'});
	});



	/*Back Home*/
	$('.btnRetourAcc').click(function(){
	    $('.page_left').css({"width":"50%", "left":"0"}).fadeIn(500);
	    $('.page_right').css({"width":"50%", "right":"0"}).fadeIn(500);
	    $('.container').css({"overflow":"hidden"});
	    $('#profil_personnel, #profil_professionnel').css({"display":"none"});
	    $('#pageContact, #contenuContact, #vidBgPerso, #vidBgPro').css({"display":"none"});
	    $('#accueil_portfolio').fadeIn(500);
	    $(this).fadeOut(1200).addClass("flipFlop").removeClass("btnRetourAccPop");
	    $('#btnOpenContact, .ico_envelope').fadeIn(500);
	    $('#containerLeftFlex, #containerLeftFlex h1').velocity('transition.shrinkIn', { stagger: 400});
	    $('#containerRightFlex, #containerRightFlex h1').velocity('transition.shrinkIn', { stagger: 400});
	    $('#btnOpenContact').velocity('transition.fadeIn');
	});

	//Open the section for the details for each project
	$('.infoMask').click(function(e){
		var idProjet = $(this).val();
		$("html, body").animate({
			scrollTop:$('#projetDetails').offset().top
		},500);

        $.ajax({
		  type: "POST",
		  url: "realisation.php",
		  data: "id=" + idProjet,
		  dataType:"html",
		  error:function(msg){
			alert( "Error !: " + msg );
		  },
		  success:function(data){
		  	$('#targetProjet').html(data).fadeIn(1000);
		  	$('#targetProjet, .btnRetourReal').css('display','block');
        }}); //FIN AJAX
	});

	//Close the section for the details for each project
	$('.btnRetourReal').click(function(){
		$('#targetProjet, .btnRetourReal').fadeOut(1000);
		$("html, body").animate({
			scrollTop:$('#headerArticle_realisation').offset().top
		},500);
	});

	//Animations for elements with viewportchecker
	$('#open_left').mouseenter(function(){
		$('#containerLeftFlex #separateTitle').velocity('callout.bounce')
	})
	$('#open_right').mouseenter(function(){
		$('#containerRightFlex #separateTitle').velocity('callout.bounce')
	})
	$('#portraitAnim').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated rollInMove',
		removeClassAfterAnimation: false,
		offset: 100,
	});


	$('.blockContenu_proUn').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated lightSpeedIn',
		removeClassAfterAnimation: false,
		offset: 100,
	});


	$('.blockContenu_proDeux').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated lightSpeedInG',
		removeClassAfterAnimation: false,
		offset: 100,
	});


	$('.blockContenu_proTrois').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated lightSpeedIn',
		removeClassAfterAnimation: false,
		offset: 100,
	});


	$('.btnCv').addClass("").viewportChecker({
		classToAdd: 'visible animated fadeIn',
		removeClassAfterAnimation: false,
		offset: 100,
	});


	$('.blockCompetence:first').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated rollIn',
		removeClassAfterAnimation: false,
		offset: 400
	});


	$('.blockCompetence:nth-child(2)').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated rotateInDownRight',
		removeClassAfterAnimation: false,
		offset: 400,
	});


	$('.blockCompetence:nth-child(3)').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated rotateInDownLeft',
		removeClassAfterAnimation: false,
		offset: 420,
	});


	$('.blockCompetence:nth-child(4)').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated rotateInDownRight',
		removeClassAfterAnimation: false,
		offset: 100,
	});


	$('.realisationBlock').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated fadeInLeft',
		removeClassAfterAnimation: false,
		repeat: false,
		offset: 400,
	});

})(jQuery);





