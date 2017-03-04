<section class="section section_padding dfbgphoto">
<div class=" container">
	<div class="row">
		<div class="col-md-12">
			<div class="dfphotos">
				<h4 class="dfcapph">- А фотки садика есть?</h4>
				<h3 class="dfshoreeee">- Конечно!</h3>
				<div class="dfblockphotos dfoverflow">
					<div class="dfphimg"><a href="img/bigimg/bigimg_11.jpg" rel="group"><img src="img/photo1.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_1.jpg" rel="group"><img src="img/photo2.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_13.jpg" rel="group"><img src="img/photo3.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_7.jpg" rel="group"><img src="img/photo4.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_12.jpg" rel="group"><img src="img/photo5.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_6.jpg" rel="group"><img src="img/photo6.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_18.jpg" rel="group"><img src="img/photo7.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_4.jpg" rel="group"><img src="img/photo8.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_14.jpg" rel="group"><img src="img/photo9.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_3.jpg" rel="group"><img src="img/photo10.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_10.jpg" rel="group"><img src="img/photo11.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_16.jpg" rel="group"><img src="img/photo12.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_8.jpg" rel="group"><img src="img/photo13.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_9.jpg" rel="group"><img src="img/photo14.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_15.jpg" rel="group"><img src="img/photo15.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_2.jpg" rel="group"><img src="img/photo16.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_5.jpg" rel="group"><img src="img/photo17.jpg" alt=""></a></div>
					<div class="dfphimg"><a href="img/bigimg/bigimg_17.jpg" rel="group"><img src="img/photo18.jpg" alt=""></a></div>
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