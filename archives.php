<?php
/*

	Template Name: Archives

*/
?>
<?php 
	get_header();
?>
		<div class="wrapper">
			<div class="pos-center"> 
				<section  class="content">
					<?php the_post(); ?>
				    <h1><?php the_title(); ?> </h1>                        
                    <?php the_content(); ?>
				
				</section>
				<section  class="side">  
					<?php get_sidebar(); ?>
                    <!--<div class="widget">
                        <h2>Polecamy:</h2>
                        <ul class="menu-side">
                            <li><a href="#">Maszyny A</a></li>
                            <li><a href="#">Maszyny B</a></li>
                            <li><a href="#">Maszyny C</a></li>
                            <li><a href="#">Maszyny D</a></li>
                            <li><a href="#">Materiały eksploatacyjne</a></li>
                        </ul>
                    </div> 
					<div class="widget">
                        <h2>Nowości:</h2>
                        <img src="<?php //echo AWMPACK_THEME_URL; ?>img/logo_bvm.jpg" style="width: 100%; height: auto;" />
						<p>Od 2 maja 2013 r nasza firma została oficjalnym dystrybutorem maszyn firmy BVM na Polskę. </p>
						<p>Zapraszamy Państwa do naszego salonu w Warszawie na prezentację najnowszej generacji automatu BVM Compacta 5022 z tunelem obkurczającym SC 4530 SD do pakowania w folię.
						Na miejscu oferujemy możliwość przeprowadzenie prób jakościowo - wydajnościowych pakowania Państwa produktów. </p>
						<p>Salon czynny od poniedziałku do piątku w godzinach od 9 do 17.</p>
						<p>Zainteresowanych prosimy o wcześniejsze umówienie terminu. Serdecznie zapraszamy !</p>
                    </div>					
					<div class="widget">
                        <h2>Partnerzy:</h2>
                        <img src="<?php //echo AWMPACK_THEME_URL; ?>img/logo_bvm.jpg" style="width: 100%; height: auto;" />
                        <img src="<?php //echo AWMPACK_THEME_URL; ?>img/Logo_Verpama.jpg" style="width: 100%; height: auto;" />
                        <img src="<?php //echo AWMPACK_THEME_URL; ?>img/logo_smipack.png" style="width: 100%; height: auto;" />
                        <img src="<?php //echo AWMPACK_THEME_URL; ?>img/logo_videojet.png" style="width: 100%; height: auto;" />
                       
                        <img src="<?php// echo AWMPACK_THEME_URL; ?>img/logo2.jpg" style="width: 100%; height: auto;" />
                    </div> -->					
				</section>
			</div>
		</div>
<?php get_footer(); ?>

