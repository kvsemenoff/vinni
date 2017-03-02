<section class="section section_padding dfbgphoto">
<div class=" container">
	<div class="row">
		<div class="col-md-12">
			<div class="dfphotos">
				<h4 class="dfcapph">- А фотки садика есть?</h4>
				<h3 class="dfshoreeee">- Конечно!</h3>
				<div class="dfblockphotos dfoverflow">
					<div class="dfphimg"><a href="img/photo1.jpg" rel="group"><img src="img/photo1.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo2.jpg" rel="group"><img src="img/photo2.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo3.jpg" rel="group"><img src="img/photo3.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo4.jpg" rel="group"><img src="img/photo4.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo5.jpg" rel="group"><img src="img/photo5.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo6.jpg" rel="group"><img src="img/photo6.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo7.jpg" rel="group"><img src="img/photo7.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo8.jpg" rel="group"><img src="img/photo8.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo9.jpg" rel="group"><img src="img/photo9.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo1.jpg" rel="group"><img src="img/photo1.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo2.jpg" rel="group"><img src="img/photo2.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/photo3.jpg" rel="group"><img src="img/photo3.jpg" alt=""></a></div>
				</div>
				<a href="#" class="dfseemore">больше фотографий</a>
				<a href="#" class="jshide">скрыть фотографии</a>
			</div>
		</div>
	</div>
</div>
</section>
<script>
	 	$('.jshide').hide();
		$('.dfseemore').on('click', function(e){
			e.preventDefault();
			$('.dfblockphotos').removeClass('dfoverflow');
			$(this).hide();
			$('.jshide').show();				
		});		
		$('.jshide').on('click', function(e){
			e.preventDefault();
			$('.dfblockphotos').addClass('dfoverflow');	
			$(this).hide();
			$('.dfseemore').show();		
		});


    $("a[rel=group]").fancybox({
      'transitionIn' : 'none',
      'transitionOut' : 'none',
      'titlePosition' : 'over',
      'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
       return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
       }
    });
</script>