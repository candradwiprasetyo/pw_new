
 <section class="portfolio" id="portfolio">
 	 <div class="background_portfolio">
      <div class="title text-center wow animated fadeInUp"><h1>My Latest <strong>Projects</strong></h1></div>
      
      <div class="title text-center wow animated fadeInUp">
      <div class="container">
      	
        <div class="portfoliofilter">
          <a href="javascript:void(0)" data-filter="*" class="current" style="outline:none;">
            <div class="def-btn filterbutton">All Categories</div>
          </a>
          <a href="javascript:void(0)" data-filter=".website" style="outline:none;">
            <div class="def-btn filterbutton">Website</div>
          </a>
          <a href="javascript:void(0)" data-filter=".webdesign" style="outline:none;">
            <div class="def-btn filterbutton">Web Design</div> 
          </a>
          
           <a href="javascript:void(0)" data-filter=".mobileapplication" style="outline:none;">
            <div class="def-btn filterbutton">Mobile Application</div> 
          </a>
        </div><!--/.portfoliofilter -->
      </div><!--/.container -->
      </div>

      
      <div class="title text-center wow animated fadeInUp">
   
<div class="grid"> <div class="portfoliocontent">
				<?php
				$nama_por = array(
								'',
								'',
								'',
								'',
								'',
								'Occhio',
								'PIF Ventures',
								'8Bulbs',
								'News DDTC',
								'Ciayo',
								'DPM PTSP Jawa Timur',
								'Haveel',
								'Sahabat Cipta',
								'Rocket Shake',
								'BukaNonton',
								'Pregnancy Partner',
								'Bukalapak Career',
								'Pitch Foundation',
								'Rasikh Morani',
								'Perpajakan DDTC',
								'Academy DDTC',
								'CPOPC DigiApp',
								'CPOPC Event Management',
								'Rapor Pendidikan',
								'The Garden Landing Page',
								);
					$ket_por = array(
								'',
								'',
								'',
								'',
								'',
								'Web Design',
								'Website',
								'Web Design',
								'Website',
								'Virtual Social Media',
								'Website',
								'Website',
								'Website',
								'Game Mobile',
								'Web Mobile',
								'Website',
								'Website',
								'Website',
								'Website',
								'Website',
								'Website',
								'Mobile Application',
								'Website',
								'Website',
								'Website',
								);
					$filter_por = array(
								'',
								'',
								'',
								'',
								'',
								'webdesign',
								'website',
								'webdesign',
								'website',
								'website',
								'website',
								'website',
								'website',
								'mobileapplication',
								'mobileapplication',
								'website',
								'website',
								'website',
								'website',
								'website',
								'website',
								'mobileapplication',
								'website',
								'website',
								'website',
								);

					$date_por = array(
								'',
								'',
								'',
								'',
								'',
								'',
								'',
								'16 Nov 2013',
								'2 Jun 2018',
								'25 Oct 2017',
								'21 Feb 2013',
								'3 Jun 2014',
								'1 Mar 2017',
								'1 August 2019',
								'5 Apr 2019',
								'20 Sept 2020',
								'',
								'',
								'',
								'',
								'',
								'',
								'',
								'',
								'',
								);
				$jml_por = count($date_por) - 1;
                for($i=$jml_por;$i>4;$i--){
							// if($i!=17 && $i!=7) {
				?>
              	
				<figure class="effect-milo <?php echo $filter_por[$i]; ?>">
				<a id="js_portfolio_<?= $i ?>" title="<?= $nama_por[$i] ?>"><img src="<?= base_url() ?>assets/images/portofolio_new/<?= $i ?>.jpg" alt="img<?= $i ?>"/>
					<figcaption>
						
                        <div class="portofolio_putih">
                        <div class="portofolio_putih_title"><?= $nama_por[$i] ?></div>
                        <div class="portofolio_putih_kecil"><?= $ket_por[$i] ?></div>
                        <div class="portofolio_kiri">
												
												</div>
                        <div class="portofolio_kanan">
                        	<?php 
                        	switch($filter_por[$i]){ 
                        		case 'website': echo "WEBSITE"; break; 
                        		case 'mobileapplication': echo "MOBILE APPLICATION"; break; 
                        		case 'webdesign': echo "WEB DESIGN"; break; 
                        	}
                        	?></div>
                       
						</div>
                        <!--<span class="figure_date"><?= $date_por[$i] ?></span>-->
						<p class="portofolio_icon">
                   
                        </p>
						
					</figcaption>	   
          	</a>

          	

				</figure>           
                <?php
							}
					
				// }
			   ?>
			</div>
        </div>
            </div>
        </div>
            </section>
            <?php $this->load->view('home/homepage/portfolio/5'); ?>
            <?php $this->load->view('home/homepage/portfolio/6'); ?>
						<?php $this->load->view('home/homepage/portfolio/7'); ?>
            <?php $this->load->view('home/homepage/portfolio/8'); ?>
            <?php $this->load->view('home/homepage/portfolio/9'); ?>
            <?php $this->load->view('home/homepage/portfolio/10'); ?>
            <?php $this->load->view('home/homepage/portfolio/11'); ?>
            <?php $this->load->view('home/homepage/portfolio/12'); ?>
            <?php $this->load->view('home/homepage/portfolio/13'); ?>
            <?php $this->load->view('home/homepage/portfolio/14'); ?>
            <?php $this->load->view('home/homepage/portfolio/15'); ?>
            <?php $this->load->view('home/homepage/portfolio/16'); ?>
            <?php $this->load->view('home/homepage/portfolio/17'); ?>
            <?php $this->load->view('home/homepage/portfolio/18'); ?>
            <?php $this->load->view('home/homepage/portfolio/19'); ?>
            <?php $this->load->view('home/homepage/portfolio/20'); ?>
            <?php $this->load->view('home/homepage/portfolio/21'); ?>
            <?php $this->load->view('home/homepage/portfolio/22'); ?>
            <?php $this->load->view('home/homepage/portfolio/23'); ?>
            <?php $this->load->view('home/homepage/portfolio/24'); ?>

            <div style="clear:both;"></div>


 <script type="text/javascript">
 	<?php
	for($j=$jml_por;$j>4;$j--){
	?>
 	$("#js_portfolio_<?= $j ?>").on('click', function() {
 		
	  $.fancybox.open({
			src  : $('#divForm_<?= $j ?>'),
			type : 'html',
		},{
			touch : false
		});


	 //  $.fancybox.open({
		// 	src  : '<?= base_url() ?>home/portfolio/<?= $j ?>',
		// 	type : 'html',
		// },{
		// 	touch : false
		// });

	  
	});
	<?php
	}
  ?>

 </script>