
<div class="main-content" id="section-ballon">
	<div id="scene">
	  <div data-depth="0.2" class="par-icon par-icon-1"><img src="<?= base_url() ?>assets/wedding/img/icon/1.png"></div>
	  <div data-depth="0.6" class="par-icon par-icon-2"><img src="<?= base_url() ?>assets/wedding/img/icon/2.png"></div>
	  <div data-depth="0.3" class="par-icon par-icon-3"><img src="<?= base_url() ?>assets/wedding/img/icon/3.png"></div>
	  <div data-depth="0.8" class="par-icon par-icon-4"><img src="<?= base_url() ?>assets/wedding/img/icon/4.png"></div>
	  <div data-depth="0.5" class="par-icon par-icon-5"><img src="<?= base_url() ?>assets/wedding/img/icon/5.png"></div>
	  <div data-depth="0.4" class="par-icon par-icon-6"><img src="<?= base_url() ?>assets/wedding/img/icon/6.png"></div>
	  <div data-depth="0.3" class="par-icon par-icon-7"><img src="<?= base_url() ?>assets/wedding/img/icon/7.png"></div>
	</div>
	<div class="border-frame"></div>
	<div class="frame-content">
		<div id="section-1">
			<div class="main-ballon wow zoomIn">
		    Hi, Are You <br>free on <br>
		    13.10.18?
		  </div>
		  <div class="option-ballon option-ballon-yes wow fadeInLeft" id="section-1-yes">
		    Yes
		  </div>
		  <div class="option-ballon option-ballon-no wow fadeInRight" id="section-1-no">
		    Maybe
		  </div>
		</div>
		<div id="section-2" class="u-visibility-hidden">
			<div class="title-ballon wow fadeInDown">Nice!</div>
			<div class="main-ballon wow zoomIn">
		    Do you like eat and drink?
		  </div>
		  <div class="option-ballon option-ballon-yes wow fadeInLeft" id="section-2-yes">
		    Of course
		  </div>
		  <div class="option-ballon option-ballon-no wow fadeInRight" id="section-2-no">
		    No
		  </div>
		</div>
		
	</div>
</div>

<main class="cd-image-mask-effect wow fadeIn u-visibility-hidden" id="section-invitation">

	
	
	<section class="project-1 cd-project-mask" id="section-invitation-mask">
		<!-- <div class="letter-border letter-border-top"></div>
		<div class="letter-border letter-border-bottom"></div>
		<div class="letter-border letter-border-left"></div>
		<div class="letter-border letter-border-right"></div> -->


		<div id="scene2">
		  <div data-depth="0.2" class="par-icon par-icon-1"><img src="<?= base_url() ?>assets/wedding/img/icon/5.png"></div>
		  <div data-depth="0.6" class="par-icon par-icon-2"><img src="<?= base_url() ?>assets/wedding/img/icon/6.png"></div>
		  <div data-depth="0.3" class="par-icon par-icon-3"><img src="<?= base_url() ?>assets/wedding/img/icon/1.png"></div>
		  <div data-depth="0.8" class="par-icon par-icon-4"><img src="<?= base_url() ?>assets/wedding/img/icon/2.png"></div>
		  <div data-depth="0.5" class="par-icon par-icon-5"><img src="<?= base_url() ?>assets/wedding/img/icon/3.png"></div>
		  <div data-depth="0.4" class="par-icon par-icon-6"><img src="<?= base_url() ?>assets/wedding/img/icon/7.png"></div>
		  <div data-depth="0.3" class="par-icon par-icon-7"><img src="<?= base_url() ?>assets/wedding/img/icon/4.png"></div>
		</div>

		<div class="border-frame"></div>
		<h1 id="section-invitation-title">AWESOME!<BR>Let there be <span class="ballon-green-text">cake</span>. <br> and <span class="ballon-green-text">drink</span></h1>
		<div class="featured-image wow fadeIn" style="background: url('<?= base_url() ?>assets/wedding/img/background/<?= rand(1, 6) ?>.jpg') no-repeat top center; background-size: cover;"></div>
		<div class="overlay-image"></div>
		<div class="mask">
			<img src="assets/wedding/img/logo.png" alt="mask">
			<span class="mask-border mask-border-top"></span>
			<span class="mask-border mask-border-bottom"></span>
			<span class="mask-border mask-border-left"></span>
			<span class="mask-border mask-border-right"></span>
		</div>

		<a href="#0" class="project-trigger option-ballon option-ballon-yes">You are invited!</a>

		<a href="#0" class="cd-scroll cd-img-replace">Scroll down</a>

		<div class="cd-project-info" data-url="description">
			<!-- content loaded using js -->
		</div>

		<a href="#0" class="project-close cd-img-replace">Close Project</a>
	</section> 

</main>


<script type="text/javascript">
	var scene = document.getElementById('scene');
	var parallaxInstance = new Parallax(scene);

	var scene2 = document.getElementById('scene2');
	var parallaxInstance = new Parallax(scene2);
</script>
