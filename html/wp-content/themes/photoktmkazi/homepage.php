<?php
/**
 * Template Name: Homepage
 *
 * Description: Homepage Template for Photo Kathmandu
 *
 * @package photoKTM
 * @since photoKTM 1.0
 */

get_header(); ?>
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/patandurbarsquare.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" style="width:300px;"/></h1>
            <p class="animated fadeInRightBig">November 3-9 2015</p>
          </div>
        </div>
      </div>
      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand scroll" href="#home">
            <h1><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-pktmlogo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active hidden"><a href="#home">HOME</a></li>
            <li class="scroll"><a href="#services">ABOUT</a></li> 
            <li class="scroll"><a href="#submit-form">SUBMIT</a></li>                     
            <li class="scroll"><a href="#visit-kathmandu">VISIT KATHMANDU</a></li>
            <li class="scroll"><a href="#support">SUPPORT</a></li>
            <li class="scroll"><a href="#about-us">SCHEDULE</a></li>
            <li class="scroll"><a href="#blog">BLOG</a></li>
            <li class="scroll"><a href="#contact-us">CONTACT</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                <h2>About</h2>
              </div>
          </div>
          <div class="row">
            <div class="col-md-5"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic1.jpg" /></div>
            <div class="col-md-7">
              <h3>Photo Kathmandu</h3>
              <p>Photo Kathmandu, the newest addition to the international photography festival circuit, is launching in November, 2015. The first edition of the festival aims to serve as a platform for interaction between photography, history, anthropology and a wide array of the arts. The festival will host exhibitions, slide shows, artist talks, workshops and other events, working primarily in public spaces in and around the city. Photo Kathmandu will be running concurrently to, and in collaboration with, Jazzmandu — a unique jazz festival that has been a pillar in contemporary Nepali cultural celebrations for the past decade. This collaboration is but a small aspect of the multidisciplinary spirit of the festival. </p>
              <p>Photo Kathmandu is organized by photo.circle, a vibrant platform for photography founded in 2007. </p>
              <h3>THEME: TIME </h3>
              <p>A photograph, created in a fraction of a second, can embrace years and decades, and sometimes immeasurable expanses of time. Time that is gained or lost; time that records and repeats, challenges and celebrates. Time that is sometimes still and sometimes racing. The first edition of Photo Kathmandu will work closely with a range of family, community and institutional archives, that present the Nepali past through images, memories and stories, juxtaposing the past, the present, and thefuture. </p>
            </div>
          </div>  <!-- /.row -->
      </div><!-- /.container -->
  </section><!--/#services-->
  <section id="submit-form">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-8">
                <h2>Submit</h2>             
                <p>Photo Kathmandu invites photographers, curators, photo-based artists, historians, anthropologists and other practitioners working with photography to submit their works for digital projections. Works should relate to the theme of TIME. Works can be archival, contemporary, or mixed. Mix-media works are also welcome. The festival curatorial team will review the submitted works and contact the submitters with questions or proposals. </p>
                <h2>General information:</h2>
                <ul>
                  <li>Submissions are free. </li>
                  <li>Submissions are open to all ages and nationalities. </li>
                  <li> Submissions should be a cohesive body of work including minimum 15 images. There is no limit to maximum number of images at this stage. </li>
                  <li> Multimedia submissions should be maximum 15 minutes in length and can be submitted as a Vimeo, YouTube or equivalent link. </li>
                  <li> Single images will not be accepted. </li>
                  <li> Submissions close on 1st September 2015. </li>
                </ul>
                <h2>To submit, please send us a folder that includes:</h2>
                <ul>
                  <li>1.  Image files renamed as your firstname_lastname_01.jpg eg; john_doe_01.jpg. Images should be 800 pixels on the longest side with caption/text included in file info. </li>
                  <li>2.  An introduction or artist statement in English not exceeding 1000 words. </li>
                  <li>3.  A short bio of of the individual or information about the submitting institution not exceeding 300 words. </li>
                  <li>4.  Please zip the folder, name it your firstname_lastname and email to submissions@photoktm.com  with subject line: Submission_firstname_lastname </li>
                  <li> Single images will not be accepted. </li>
                  <li> Submissions close on 1st September 2015. </li>
                </ul>

              </div>
              <div class="col-md-4">
                <h2>Apply here</h2>
                <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                  <form id="main-contact-form" name="contact-form" method="post" action="#">
                    <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                    </div>
                    <div class="form-group">
                      <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                    </div>                        
                    <div class="form-group">
                      <button type="submit" class="btn-submit">Send Now</button>
                    </div>
                  </form>   
                </div>
              </div>
            </div>
          </div>
      </div>
    </div> <!-- /.container -->
  </section> <!-- /.submit-form -->
  <section id="visit-kathmandu" class="parallax">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="about-info wow fadeInUp col-md-8" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h2>Visit Kathmandu</h2>
              <h5>Come visit! </h5>
              <p></p>
              <p>Kathmandu is a smorgasbord of sights, sounds and cultures. November offers beautiful weather and JAZZ! The festival is a good excuse to discover the city, seek inspiration, make new friends. </p>
              <p>By visiting the festival, you will directly contribute towards the post-earthquake rebuilding of the Nepali economy. </p>
              <h2>Why you should visit Nepal: </h2>
              <ul>
                <li>Ethical tourism provides one of the largest sources of foreign revenue to Nepal. So, keeping the revenue flowing is key to rebuilding and survival.</li>
                <li>A very large percentage of tourism jobs are held by people from earthquake affected areas, and it is estimated that one visiting tourist provides nine people with jobs.</li>
                <li>A multitude of individuals in varying roles are sustained by tourists: those in hotels, transport companies, restaurants, airports, taxis, gear shops, souvenir stalls, not to mention the farmers who grow the food to supply the industry.</li>
                <li>The multiplier effect of every dollar spent on travel in Nepal is immense.</li>
                <li>Jobs and currency are the most needed long-term items for sustainable rebuilding.</li>
              </ul>
            </div>
          </div>
       </div>
      </div>
    </div> <!-- /.container -->
  </section><!--/#visit-kathmandu -->
  <section id="support">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic2.jpg" />
          <div class="entry-header">
            <span class="cetagory">nepalphotoproject<br /> Laxmi Narayan Shilpakar, the "flag bearer of Basantapur", stands amidst the ruins and continues to hold the flag of Nepal, swaying it proudly with a smile on his face. Photo by @raine1090</span>
          </div>
        </div>
        <div class="col-md-6">
          <h2>Support</h2>
          <p>The city of Patan, where Photo Kathmandu 2015 will be anchored, has lost many important heritage sites in the April 2015 earthquakes. The first edition of the festival wishes to pay homage to its beautiful host city and celebrate its history and resilience. </p>
          <p>Photo Kathmandu will promote a special fund-raising Print Sale to contribute towards the rebuilding of heritage sites in Patan. This fund-raising Print Sale will be managed pro bono by photo.circle. Kathmandu Valley Preservation Trust (KVPT) will be the implementing partner. </p>
          <p>Please support this effort by buying a print and telling your friends about it! </p>
          <p><a href="#" class="btn btn-lg btn-primary">BUY A PRINT</a></p>
          <h2>About Kathmandu Valley Preservation Trust </h2>
          <p>
            The Kathmandu Valley Preservation Trust (KVPT) was founded in 1991 with the mission to safeguard the extraordinary and threatened architectural heritage of the Kathmandu Valley in Nepal. Over the past two decades, KVPT has saved over 50 historic buildings including temples, step-wells, monasteries, palaces, and homes, and has launched three major campaigns for preservation on an urban scale. KVPT collaborates with community groups, local and international specialists, educational institutions, and the Department of Archaeology of the Government of Nepal. Restoration and conservation operations have initiated key research and training programs, and the KVPT office in Patan Darbar Square has become a resource center for architecture and urbanism in Nepal.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="blog-posts">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/1.jpg" alt=""></a> 
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/2.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/1.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/3.jpg" alt=""></a>
                  </div>
                </div>                               
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>                            
              
              
            </div> 
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/3.jpg" alt=""></a>
            </div>
          </div>                    
        </div>               
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </section><!--/#support-->
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp animated"> 
              <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <br /><br /><br />
                <h2>FESTIVAL SCHEDULE</h2>
                <p>We are putting together an exciting festival program. Stay tuned! </p>
                <p>If you have programming or other ideas for collaborations, please email us mail@photoktm.com and we will be more than happy to discuss them with you.</p>
                <h2>PARTNERS</h2>
                <ul>
                  <li>Jazzmandu</li>
                  <li>KVPT </li>
                  <li>Kazi Studios </li>
                  <li>SPONSOR </li>
                  <li>CKU</li>
                </ul>
              </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->
  <section id="blog">
    <div class="container">
      <div class="row">  
        <div class="blog-posts">
          <div class="row">
            <div class="col-md-12">
              <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="post-thumb">
                  <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a> 
                  <div class="post-meta">
                    <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                    <span><i class="fa fa-heart"></i> 0 Likes</span> 
                  </div>
                  <div class="post-icon">
                    <i class="fa fa-pencil"></i>
                  </div>
                </div>
                <div class="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span class="date">June 26, 2014</span>
                  <span class="cetagory">in <strong>Photography</strong></span>
                </div>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div>
              <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="post-thumb">
                  <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#post-carousel" data-slide-to="1"></li>
                      <li data-target="#post-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a>
                      </div>
                      <div class="item">
                        <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a>
                      </div>
                      <div class="item">
                        <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a>
                      </div>
                    </div>                               
                    <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                  </div>                            
                  <div class="post-meta">
                    <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                    <span><i class="fa fa-heart"></i> 0 Likes</span> 
                  </div>
                  <div class="post-icon">
                    <i class="fa fa-picture-o"></i>
                  </div>
                </div>
                <div class="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span class="date">June 26, 2014</span>
                  <span class="cetagory">in <strong>Photography</strong></span>
                </div>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div>
              <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
                <div class="post-thumb">
                  <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a>
                  <div class="post-meta">
                    <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                    <span><i class="fa fa-heart"></i> 0 Likes</span> 
                  </div>
                  <div class="post-icon">
                    <i class="fa fa-video-camera"></i>
                  </div>
                </div>
                <div class="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span class="date">June 26, 2014</span>
                  <span class="cetagory">in <strong>Photography</strong></span>
                </div>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div>
              <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="post-thumb">
                  <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a> 
                  <div class="post-meta">
                    <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                    <span><i class="fa fa-heart"></i> 0 Likes</span> 
                  </div>
                  <div class="post-icon">
                    <i class="fa fa-pencil"></i>
                  </div>
                </div>
                <div class="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span class="date">June 26, 2014</span>
                  <span class="cetagory">in <strong>Photography</strong></span>
                </div>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div>
              <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="post-thumb">
                  <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#post-carousel" data-slide-to="1"></li>
                      <li data-target="#post-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a>
                      </div>
                      <div class="item">
                        <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a>
                      </div>
                      <div class="item">
                        <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a>
                      </div>
                    </div>                               
                    <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                  </div>                            
                  <div class="post-meta">
                    <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                    <span><i class="fa fa-heart"></i> 0 Likes</span> 
                  </div>
                  <div class="post-icon">
                    <i class="fa fa-picture-o"></i>
                  </div>
                </div>
                <div class="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span class="date">June 26, 2014</span>
                  <span class="cetagory">in <strong>Photography</strong></span>
                </div>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div>
              <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
                <div class="post-thumb">
                  <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic4.jpg" alt=""></a>
                  <div class="post-meta">
                    <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                    <span><i class="fa fa-heart"></i> 0 Likes</span> 
                  </div>
                  <div class="post-icon">
                    <i class="fa fa-video-camera"></i>
                  </div>
                </div>
                <div class="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span class="date">June 26, 2014</span>
                  <span class="cetagory">in <strong>Photography</strong></span>
                </div>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /.container -->
  </section><!--/#blog-->
  <section id="contact-us" class="parallax">
    <!-- <iframe width='100%' height='350px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/rohitmalakar.mfkhcmii/attribution,share.html?access_token=pk.eyJ1Ijoicm9oaXRtYWxha2FyIiwiYSI6ImI2ZTY1ZjA5NzRjMTUwYWUyZTgzMDJjN2I2NzY4NDY4In0.NP9ZlfPAEYnDHeUFTfUC9A'></iframe> -->
    <div id="google-map" class="wow fadeIn" data-latitude="27.68054" data-longitude="85.310415" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading col-md-6 col-md-offset-5 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-md-6 col-md-offset-5">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul class="address">
                  <li><strong>Photo Kathmandu</strong></li>
                  <li>
                    <i class="fa fa-map-marker"></i> <span> Address:</span> GPO Box: 8975 EPC 1516 <br>Arun Thapa Chowk, Jhamsikhel, Lalitpur <br>
                    Kathmandu, Nepal 
                  </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +977 1 5013501  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:mail@photocircle.com.np">mail@photocircle.com.np</a></li>
                  <!-- <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li> -->
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section><!--/#Contact Us-->
  
<?php get_footer(); ?>
