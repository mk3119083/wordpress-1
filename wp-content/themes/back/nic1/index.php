<?php
get_header();
?>

      <!--/.nav-wrapper-->
      <section class="wrapper banner-wrapper">
         <div id="flexSlider" class="flexslider">
            <ul class="slides">
               
               <li><img src="http://localhost/wordpress/wp-content/uploads/2024/08/imresizer-1722964159418.jpg" alt="Banner Image 2" title="Banner 2"></li>
				<li><img src="http://localhost/wordpress/wp-content/uploads/2024/08/imresizer-1722964543558.jpg" alt="Banner Image 2" title="Banner 2"></li>
               <li> <img src="http://localhost/wordpress/wp-content/uploads/2024/08/imresizer-1722965743126.jpg" alt="Banner Image 3" title="Banner 3"></li>
               <li> <img src="http://localhost/wordpress/wp-content/uploads/2024/08/imresizer-1722967696582.jpg" alt="Banner Image 4" title="Banner 4"></li>
               <li> <img src="<?php echo get_template_directory_uri(); ?>/theme/images/banner/slider-1.jpg" alt="Banner Image 5" title="Banner 5"></li>
               <li> <img src="<?php echo get_template_directory_uri(); ?>/theme/images/banner/slider-1.jpg" alt="Banner Image 6" title="Banner 6"></li>
               <li> <img src="<?php echo get_template_directory_uri(); ?>/theme/images/banner/slider-1.jpg" alt="Banner Image 7" title="Banner 7"></li>
               <li> <img src="<?php echo get_template_directory_uri(); ?>/theme/images/banner/slider-1.jpg" alt="Banner Image 8" title="Banner 8"></li>
            </ul>
         </div>
      </section>
      <div class="wrapper" id="skipCont"></div>
      <!--/#skipCont-->
      <section id="fontSize" class="wrapper body-wrapper ">
         <h2 style="display: none;">Body</h2>
         <div class="bg-wrapper top-bg-wrapper gray-bg padding-top-bott">
            <div class="container common-container four_content body-container top-body-container padding-top-bott2">
               <div class="minister clearfix">
                  <div class="minister-box clearfix">
                     <div class="minister-sub1 d-flex flex-wrap align-content-center">
                        <div class="minister-image"><img src="<?php echo get_template_directory_uri(); ?>/theme/images/minister1.jpg" alt="central minister" title="Hon’ble Minister"></div>
                        <div class="min-info">
                           <h4>Hon’ble Minister</h4>
                           <h3>Minister Name</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="left-block">
                  <h2><em>Welcome to </em><span>Ministry/Department</span></h2>
                  <p>The enactment of the 73rd and 74th constitutional amendments is the historic step in the evolution and development of the Panchayati Raj System and the Urban Lo al Bodies. The subsequent enactment of the Jharkhand Panchayati Raj Act, 1994, (Act II of 1994), the Jharkhand Municipal Amendment Act, 1994 and the Jharkhand Municipal Corporation Act, 1994 and the formulation of the Jharkhand Finance Commission Rules were a logical sequel to these constitutional amendments.
                  </p>
                  <p>An informative text section that outlines the work portfolio of the ministry and the initiatives/ schemes and other useful purpose that the ministry website serves.
                  </p>
                  <div class="view-footer"><a href="<?php echo site_url(); ?>/about-us" title="Read more"><span>Read More</span><i class="fa fa-arrow-right"></i></a></div>
               </div>
            </div>
         </div>
         <div class="wrapper home-banner">
            <div class="container common-container four_content banner-container">
               <div class="left-block">
                  <div class="left-col-2">                    
                  <div class="slide-content-header">
                     <h2>What's new </h2><p class="text-slide pause" onclick="changeClass()"></p>
                  </div>                  
                  <div class="scroll-text scroll-left">
                     <ul class="list">
                        <li><i class="fa fa-arrow-right"></i>
                           <div class="content">Title of schemes/ services/ event/ activity appears here. </div>
                        </li>
                        <li><i class="fa fa-arrow-right"></i>
                           <div class="content">How to lodge a grievance. </div>
                        </li>
                        <li><i class="fa fa-arrow-right"></i>
                           <div class="content">Activity  1 </div>
                        </li>
                        <li><i class="fa fa-arrow-right"></i>
                           <div class="content">Activity  2 </div>
                        </li>
                     </ul>
                  </div>
                  <div class="view-footer">
                        <a href="#" title="Know More About What's new"><span>More <i class="fa fa-arrow-right"></i></span></a>
                  </div>
                  </div>
                  <div class="left-col-2"> 
                     <div class="slide-content-header">
                        <h2>Press Releases </h2><p class="text-slide1 pause" onclick="changeClass1()"></p>
                     </div>  
                  <div class="scroll-text-1 scroll-left">
                     <ul class="list">
                        <li><i class="fa fa-arrow-right"></i>
                           <div class="content">Official notifications for the media about an event or an official documents adhering to the concern. </div>
                        </li>
                        <li><i class="fa fa-arrow-right"></i>
                           <div class="content">Press release 1 </div>
                        </li>
                        <li><i class="fa fa-arrow-right"></i>
                           <div class="content">Press release 2 </div>
                        </li>
                        <li><i class="fa fa-arrow-right"></i>
                           <div class="content">Press release 3 </div>
                        </li>
                     </ul>
                  </div>
                  <div class="view-footer"><a href="#" title="Know More About Press Releases"><span> More <i class="fa fa-arrow-right"></i></span></a></div>
                  </div>
               </div>
               <div class="banner-right-wrapper">
                  <div class="banner-box-wrapper">
                     <div class="banner-box banner-box-1">
                        <a href="#" title="External link that opens in new tab" target="_blank">
                           <h2>DEPARTMENT</h2>
                           <p>e-book</p>             
                        </a>
                     </div>
                     <div class="banner-box banner-box-2">                        
                        <a href="#" title="External link that opens in new tab" target="_blank">
                           <h2>Knowledge</h2>
                           <p>Repository</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="wrapper home-banner tab-section">
            <div class="container common-container four_content">
               <div class="page-tab clearfix">
                  <div class="page-tab-res clearfix">
                     <div id="parentHorizontalTab">
                        <ul class="resp-tabs-list hor_1">
                           <li><a href="#" id="tab-list-1">Achievements</a></li>
                           <li><a href="#">Circulars</a></li>
                           <li><a href="#">Annual Reports</a></li>
                           <li><a href="#">Downloads</a></li>
                        </ul>
                        <div class="resp-tabs-container hor_1" >

                           <div class="clearfix" id="hor_1_tab_item-0">
                              <div class="col-3">                                                               
                                 <ul>
                                    <li> 
                                       <a href="#" title="A pdf file">Achievements 1 <i class="fa fa-file-pdf-o"></i> (16.02Kb)</a>
                                    </li>
                                    <li>                                       
                                       <a href="#" title="A pdf file">Achievements 2 <i class="fa fa-file-pdf-o"></i> (44.09KB)</a>
                                    </li>
                                    <li>                                       
                                       <a href="#" title="A pdf file">Achievements 3 <i class="fa fa-file-pdf-o"></i> (18.06KB)</a>
                                    </li>
                                    <li>                                       
                                       <a href="#" title="A pdf file">Achievements 4 <i class="fa fa-file-pdf-o"></i> (54.8 KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Achievements 5 <i class="fa fa-file-pdf-o"></i> (37.01KB)</a>
                                    </li>
                                    <li>                                       
                                       <a href="#" title="A pdf file">Achievements 6 <i class="fa fa-file-pdf-o"></i> (23.12KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Achievements 7 <i class="fa fa-file-pdf-o"></i> (42.2KB)</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="col-3">
                                 <ul>
                                    <li>
                                       <a href="#" title="A pdf file">Achievements 8 <i class="fa fa-file-pdf-o"></i> (50.03KB)</a>
                                    </li>
                                    <li>                                       
                                       <a href="#" title="A pdf file">Achievements 9 <i class="fa fa-file-pdf-o"></i> (22.07Kb)</a>
                                    </li>
                                    <li>                                       
                                       <a href="#" title="A pdf file">Achievements 10 <i class="fa fa-file-pdf-o"></i> (45.03KB)</a>
                                    </li>
                                    <li>                                       
                                       <a href="#" title="A pdf file">Achievements 11 <i class="fa fa-file-pdf-o"></i> (36.08KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Achievements 12 <i class="fa fa-file-pdf-o"></i> (19.08Kb)</a>
                                    </li>
                                    <li>                                       
                                       <a href="#" title="A pdf file">Achievements 13 <i class="fa fa-file-pdf-o"></i> (28.05KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Achievements 14 <i class="fa fa-file-pdf-o"></i> (25.03KB)</a>
                                    </li>
                                 </ul>
                              </div>                                                  
                              <div class="view-footer-tab"> <a href="#" title="Click here to know more"> <span>Read more </span><i class="fa fa-angle-double-right"></i></a></div>
                           </div>

                           <div class="clearfix" id="hor_1_tab_item-1">
                              <div class="col-3">
                                 <ul>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 1 <i class="fa fa-file-pdf-o"></i> (16.02Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 2 <i class="fa fa-file-pdf-o"></i> (41.04Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 3 <i class="fa fa-file-pdf-o"></i> (86.22Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 4 <i class="fa fa-file-pdf-o"></i> (13.1Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 5 <i class="fa fa-file-pdf-o"></i> (43.1Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 6 <i class="fa fa-file-pdf-o"></i> (55.1Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 7 <i class="fa fa-file-pdf-o"></i> (55.1Kb)</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="col-3">
                                 <ul>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 8 <i class="fa fa-file-pdf-o"></i> (16.02Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 9 <i class="fa fa-file-pdf-o"></i> (41.04Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 10 <i class="fa fa-file-pdf-o"></i> (86.22Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 11 <i class="fa fa-file-pdf-o"></i> (13.1Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 12 <i class="fa fa-file-pdf-o"></i> (43.1Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 13 <i class="fa fa-file-pdf-o"></i> (55.1Kb)</a>
                                    </li>
                                    <li> 
                                       <a href="#" title="A pdf file">Circular 14 <i class="fa fa-file-pdf-o"></i> (55.1Kb)</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="view-footer-tab"> <a href="#" title="Click here to know more"> <span>Read more </span><i class="fa fa-angle-double-right"></i></a></div>
                           </div>

                           <div class="clearfix" id="hor_1_tab_item-2">
                              <div class="col-3">
                                 <ul>
                                    <li>
                                       <a href="#" title="A pdf file">Annual Report 1 <i class="fa fa-file-pdf-o"></i>(23.48KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Annual Report 2 <i class="fa fa-file-pdf-o"></i>(36.12KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Annual Report 3 <i class="fa fa-file-pdf-o"></i>(19.02KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Annual Report 4 <i class="fa fa-file-pdf-o"></i>(20.98KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Annual Report 5 <i class="fa fa-file-pdf-o"></i>(32.92KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Annual Report 6 <i class="fa fa-file-pdf-o"></i>(40.06KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Annual Report 7 <i class="fa fa-file-pdf-o"></i>(22.07KB)</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="col-3">
                                 <ul>
                                    <li>
                                       <a href="#" title="A pdf file">Annual Report 8 <i class="fa fa-file-pdf-o"></i>(23.48KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Annual Report 9 <i class="fa fa-file-pdf-o"></i>(36.12KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Annual Report 10 <i class="fa fa-file-pdf-o"></i>(19.02KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Annual Report 11 <i class="fa fa-file-pdf-o"></i>(20.98KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Annual Report 12 <i class="fa fa-file-pdf-o"></i>(32.92KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Annual Report 13 <i class="fa fa-file-pdf-o"></i>(40.06KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Annual Report 14 <i class="fa fa-file-pdf-o"></i>(22.07KB)</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="view-footer-tab"> <a href="#" title="Click here to know more"> <span>Read more </span><i class="fa fa-angle-double-right"></i></a></div>
                           </div>

                           <div class="clearfix" id="hor_1_tab_item-3">
                              <div class="col-3">
                                 <ul>
                                    <li>
                                       <a href="#" title="A pdf file">Download 1 <i class="fa fa-file-pdf-o"></i>(23.48KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Download 2 <i class="fa fa-file-pdf-o"></i>(36.12KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Download 3 <i class="fa fa-file-pdf-o"></i>(19.02KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Download 4 <i class="fa fa-file-pdf-o"></i>(20.98KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Download 5 <i class="fa fa-file-pdf-o"></i>(32.92KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Download 6 <i class="fa fa-file-pdf-o"></i>(40.06KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Download 7 <i class="fa fa-file-pdf-o"></i>(22.07KB)</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="col-3">
                                 <ul>
                                    <li>
                                       <a href="#" title="A pdf file">Download 8 <i class="fa fa-file-pdf-o"></i>(23.48KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Download 9 <i class="fa fa-file-pdf-o"></i>(36.12KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Download 10 <i class="fa fa-file-pdf-o"></i>(19.02KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Download 11 <i class="fa fa-file-pdf-o"></i>(20.98KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Download 12 <i class="fa fa-file-pdf-o"></i>(32.92KB)</a>
                                    </li>
                                    <li>                                      
                                       <a href="#" title="A pdf file">Download 13 <i class="fa fa-file-pdf-o"></i>(40.06KB)</a>
                                    </li>
                                    <li>
                                       <a href="#" title="A pdf file">Download 14 <i class="fa fa-file-pdf-o"></i>(22.07KB)</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="view-footer-tab"> <a href="#" title="Click here to know more"> <span>Read more </span><i class="fa fa-angle-double-right"></i></a></div>
                              
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="side-links clearfix">
                  <ul class="content_list date-list">
                     <li>
                        <a href="#" title="External link that opens in new tab">
                           <div class="date"><span><img src="<?php echo get_template_directory_uri(); ?>/theme/images/01.png" alt="Public Information"></span></div>
                           <div class="list-content">
                              <h3>Important information 1</h3>
                              <p>This is a reference text to see the layout. This may be replaced with relevant content.</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" title="External links that opens in new tab">
                           <div class="date"><span><img src="<?php echo get_template_directory_uri(); ?>/theme/images/02.png" alt="Data Product Generated by ESS0"></span></div>
                           <div class="list-content">
                              <h3>Important information 2</h3>
                              <p>This is a reference text to see the layout. This may be replaced with relevant content.</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" title="External link that opens in new tab">
                           <div class="date"><span><img src="theme/images/03.png" alt="Right to Information"></span></div>
                           <div class="list-content">
                              <h3>Important information 3</h3>
                              <p>This is a reference text to see the layout. This may be replaced with relevant content.</p>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="wrapper home-btm-slider">
            <div class="container common-container four_content gallery-container">
               <div class="gallery-area clearfix">
                  <div class="gallery-heading">
                     <h3>Photo Gallery</h3>
                     <a class="bttn-more bttn-view" href="#" title="View All About Photo Gallery"><span>View All</span></a> 
                  </div>
                  <div class="gallery-holder">
                     <div id="galleryCarousel" class="flexslider">
                        <ul class="slides">
                           <li data-thumb="<?php echo get_template_directory_uri(); ?>/theme/images/crousal/1.jpg" data-thumb-alt="slider1">
                              <img src="<?php echo get_template_directory_uri(); ?>/theme/images/crousal/1.jpg" alt="gallery1" />
                           </li>
                           <li data-thumb="<?php echo get_template_directory_uri(); ?>/theme/images/crousal/2.jpg" data-thumb-alt="slider2">
                              <img src="<?php echo get_template_directory_uri(); ?>/theme/images/crousal/2.jpg" alt="gallery2" />
                           </li>
                           <li data-thumb="<?php echo get_template_directory_uri(); ?>/theme/images/crousal/3.jpg" data-thumb-alt="slider3">
                              <img src="<?php echo get_template_directory_uri(); ?>/theme/images/crousal/3.jpg" alt="gallery3" />
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="gallery-right">
                  <div class="video-heading">
                     <h3>Video Gallery</h3>
                     <a class="bttn-more bttn-view" href="#" title="View All About video"><span>View All</span></a> 
                  </div>
                  <div class="video-wrapper">
                     <video src="#" poster="<?php echo get_template_directory_uri(); ?>/theme/images/poster.jpg">
                        <span>Your browser does not support HTML5 video.</span>
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/.body-wrapper-->
      <!--/.banner-wrapper-->
      <section class="wrapper carousel-wrapper">
         <h2 style="display: none;">Carousel</h2>
         <div class="container common-container four_content carousel-container">
            <div id="flexCarousel" class="flexslider carousel">
               <ul class="slides">
                  <li><a target="_blank" href="http://digitalindia.gov.in/" title="Digital India, External Link that opens in a new window"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/digital-india.png" alt="Digital India"></a></li>
                  <li><a target="_blank" href="http://www.makeinindia.com/" title="Make In India, External Link that opens in a new window"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/makeinindia.png" alt="Make In India"></a></li>
                  <li><a target="_blank" href="http://india.gov.in/" title="National Portal of India, External Link that opens in a new window"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/india-gov.png" alt="National Portal of India"></a></li>
                  <li><a target="_blank" href="http://goidirectory.nic.in/" title="GOI Web Directory, External Link that opens in a new window"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/goidirectory.png" alt="GOI Web Directory"></a></li>
                  <li><a target="_blank" href="https://data.gov.in/" title="Data portal, External Link that opens in a new window" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/data-gov.png" alt="Data portal"></a></li>
                  <li><a target="_blank" href="https://mygov.in/" title="MyGov, External Link that opens in a new window"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/mygov.png" alt="MyGov Portal"></a></li>
               </ul>
            </div>
         </div>
      </section>
      <!--/.carousel-wrapper-->
<?php
get_footer();
?>