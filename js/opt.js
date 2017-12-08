(function ($) {
	"use strict";
	
	$(document).ready(function(){
		$('a#headerlogo01').on('click',function(e){

			e.preventDefault();

			var logoUpload = wp.media({
				'title'		: 'Select Logo',
				'button'	: {
					'text'		: 'Insert Logo'
				}

			});

			logoUpload.open();

			logoUpload.on('select',function(){


				var imageupload = logoUpload.state().get('selection').first().toJSON();

				$('input#loadupload01').val(imageupload.url);

				$('img#imgupload01').attr('src',imageupload.url);
				

			});


		});


		$('a#headerlogo02').on('click',function(e){

			e.preventDefault();

			var logoUpload2 = wp.media({
				'title'		: 'Select Logo',
				'button'	: {
					'text'		: 'Insert Logo'
				}

			});

			logoUpload2.open();

			logoUpload2.on('select',function(){


				var imageupload2 = logoUpload2.state().get('selection').first().toJSON();

				$('input#loadupload02').val(imageupload2.url);

				$('img#imgupload02').attr('src',imageupload2.url);
				

			});


		});



		$('a#footerlogo01').on('click',function(e){

			e.preventDefault();

			var footerlogo01 = wp.media({
				'title'		: 'Select Logo',
				'button'	: {
					'text'		: 'Insert Logo'
				}

			});

			footerlogo01.open();

			footerlogo01.on('select',function(){


				var fimageup1 = footerlogo01.state().get('selection').first().toJSON();

				$('input#flogoupload01').val(fimageup1.url);

				$('img#floaoup01').attr('src',fimageup1.url);
				

			});


		});


		$('a#footerlogo02').on('click',function(e){

			e.preventDefault();

			var footerlogo02 = wp.media({
				'title'		: 'Select Logo',
				'button'	: {
					'text'		: 'Insert Logo'
				}

			});

			footerlogo02.open();

			footerlogo02.on('select',function(){


				var fimageup2 = footerlogo02.state().get('selection').first().toJSON();

				$('input#flogoupload02').val(fimageup2.url);

				$('img#floaoup02').attr('src',fimageup2.url);
				

			});


		});



	$('a#footerlogo03').on('click',function(e){

			e.preventDefault();

			var footerlogo03 = wp.media({
				'title'		: 'Select Logo',
				'button'	: {
					'text'		: 'Insert Logo'
				}

			});

			footerlogo03.open();

			footerlogo03.on('select',function(){


				var fimageup3 = footerlogo03.state().get('selection').first().toJSON();

				$('input#flogoupload03').val(fimageup3.url);

				$('img#floaoup03').attr('src',fimageup3.url);
				

			});


		});



	$('a#footerlogo04').on('click',function(e){

			e.preventDefault();

			var footerlogo04 = wp.media({
				'title'		: 'Select Logo',
				'button'	: {
					'text'		: 'Insert Logo'
				}

			});

			footerlogo04.open();

			footerlogo04.on('select',function(){


				var fimageup4 = footerlogo04.state().get('selection').first().toJSON();

				$('input#flogoupload04').val(fimageup4.url);

				$('img#floaoup04').attr('src',fimageup4.url);
				

			});


		});


		$('a.close01').click(function(){

			 $('img#imgupload01').attr('src','');
			 $('input#loadupload01').val('');
			 $(this).hide();

		});
		$('a.close02').click(function(){

			 $('img#imgupload02').attr('src','');
			 $('input#loadupload02').val('');
			 $(this).hide();

		});


	$('a.floaoup01').click(function(){

			 $('img#floaoup01').attr('src','');
			 $('input#flogoupload01').val('');
			 $(this).hide();

		});
	$('a.floaoup02').click(function(){

			 $('img#floaoup02').attr('src','');
			 $('input#flogoupload02').val('');
			 $(this).hide();

		});



	$('a.floaoup03').click(function(){

			 $('img#floaoup03').attr('src','');
			 $('input#flogoupload03').val('');
			 $(this).hide();

		});

	$('a.floaoup04').click(function(){

			 $('img#floaoup04').attr('src','');
			 $('input#flogoupload04').val('');
			 $(this).hide();

		});


	});
	



	
}(jQuery));