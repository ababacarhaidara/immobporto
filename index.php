
<!--==============================header=================================-->
		<?php include("includes/header.php"); ?>
		<?php include("includes/annonce.php"); ?>		
<!--==============================aside================================-->
		<?php include("includes/aside.php"); ?>	
<!--==============================content================================-->
		<?php include("includes/article.php"); ?>	

<!--==============================footer=================================-->
		<?php include("includes/footer.php"); ?>
		<script type="text/javascript"> Cufon.now(); </script>
		<script type="text/javascript">
			$(window).load(function() {
				$('.slider')._TMS({
					duration:800,
					easing:'easeOutQuart',
					preset:'simpleFade',
					slideshow:8000,
					banners:false,
					pauseOnHover:true,
					waitBannerAnimation:false,
					prevBu:'.prev',
					nextBu:'.next'
				});
			});
		</script>
	</body>
</html>