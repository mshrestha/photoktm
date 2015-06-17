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
  <div class="row">
      <div class="col-md-3">
  
        <div class="main-nav">
              
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html">
                    <h1><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-sm.png" alt="logo"></h1>
                  </a>                    
                </div>
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-left">                 
                    
                    <li class="scroll"><a href="#services">About</a></li> 
                    <li class="scroll"><a href="#about-us">Festival Schedule</a></li>                     
                    <li class="scroll"><a href="#submit-form">Submit</a></li>
                    <li class="scroll"><a href="#support">Donate</a></li>
                    <li class="scroll"><a href="#visit-kathmandu">Visit Kathmandu</a></li>
                    <li class="scroll"><a href="#blog">Blog</a></li>
                    <li class="scroll"><a href="#contact-us">Contact</a></li>       
                  </ul>
                </div>
              
            </div><!--/#main-nav-->
          </div>
</div>
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/background.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" style="width:300px;"/></h1>
            <p class="animated fadeInRightBig">November 3-9 2015</p>
            
          </div>
        </div>
        
        
      </div>
      

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    
  </header><!--/#home-->
  <div class="row">
      <div class="col-md-3"></div>
  <div class="col-md-8">
    <section id="services">
    
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
            <div class="col-md-10">
              <h2>About</h2>
            </div>
        </div>
        <div class="row">
          <div class="col-md-5"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic1.jpg" /></div>
            <div class="col-md-7">
            <h3>Photo Kathmandu</h3>
              <p>Photo Kathmandu, the newest addition to the international photography festival circuit, is launching in November 2015. The festival aims to serve as a platform for interaction between photography and history, anthropology, education and a wide array of the arts. </p>

<p>The festival is organized by photo.circle and will take place in Nepal every two years.</p>



<h2>Theme: Time</h2>
<p>
A photograph, created in a fraction of a second, can embrace years and decades and sometimes immeasurable expanses of time. The first edition of Photo Kathmandu will work closely with a range of visual archives, presenting to us the Nepali past through images and memories, juxtaposing the then and now and years to come.</p>
            
          </div>
        </div> 
      </div>
    
  </section><!--/#services-->
    </div>
  </div>
  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-10">
      <section id="about-us" class="parallax">
        
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp animated">
          
              <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <br /><br /><br />
                <h2>Festival Schedule</h2>
                <p>We are putting together an exciting festival program. <br />Stay tuned : )</p>
    
                  <p>If you have ideas for programming collaboration, <br />please email is at festival@photocircle.com.np  </p>
              </div>
        </div>
      </section><!--/#about-us-->
   </div>
</div>
<div class="row">
    <section id="submit-form">
    
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-8">
                <div class="row">
                
                    <div class="col-md-5">
       <h2>Submit</h2>             
                    <p>Hello, dear photographer.</p>
    
    <p>Are you looking to share your work with an audience of fellow photographers and photography lovers? We can help with that. No matter what kind of photography you do: whether it’s documentary photography, landscape photography, fine art photography – we want to see your work. It’s the funniest part of our job!</p>
    
    <p>We have a soft spot for previously unseen work that can wow us and our readers. If you have just completed or are about to complete a new body of work, it can premiere in Fotografia as part of our recently launched series #FotoFirst!</p>
    
    <p>Get in touch. Now.</p>
    
    <p>Send us a link via email, in a message on our Facebook page, tweet it to @fotografiamagaz, or tag us on Instagram.  Whatever suits you best, just be sure to get in touch with us!</p>
    
    <p>Please, please, please excuse us if we don’t reply – we receive many submissions, and time isn’t always enough. Thank you!</p>
                    </div>
                    <div class="col-md-6">
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
    </section>
</div>
  <section id="support">
    <div class="container-1">
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-8">
          <div class="row">
              <div class="col-md-5">
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic2.jpg" />
                  <div class="entry-header">
                  <span class="cetagory">nepalphotoproject<br />
Laxmi Narayan Shilpakar, the "flag bearer of Basantapur", stands amidst the ruins and continues to hold the flag of Nepal, swaying it proudly with a smile on his face. Photo by @raine1090</span>
                  </div>
            </div>
              <div class="col-md-6">
                    <h2>Support</h2>
                  <p>
                    The old city of Patan, where Photo Kathmandu 2015 will be anchored, lost many important heritage sites in the April 2015 earthquakes. Photo Kathmandu wishes to pay homage to its beautiful host city and celebrate its history and resilience. Through a special print sales that we are launching, we hope to raise funds to contribute towards rebuilding some heritage sites in Patan. Funds will go to our partner Kathmandu Valley Preservation Trust.
                      </p>
                    <p>
        The Kathmandu Valley Preservation Trust (KVPT) was founded in 1991 with the mission to safeguard the extraordinary and threatened architectural heritage of the Kathmandu Valley in Nepal. Over the past two decades, KVPT has saved over 50 historic buildings including temples, step-wells, monasteries, palaces, and homes, and has launched three major campaigns for preservation on an urban scale. KVPT collaborates with community groups, local and international specialists, educational institutions, and the Department of Archaeology of the Government of Nepal. Restoration and conservation operations have initiated key research and training programs, and the KVPT office in Patan Darbar Square has become a resource center for architecture and urbanism in Nepal.  
                  </p>
              </div>
        </div>
              
              <div class="blog-posts">
        <div class="row">
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
      </div>
              
        </div>
      </div> 
    </div>
  </section><!--/#support-->
  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-10">
      <section id="visit-kathmandu" class="parallax">
          <div class="row">
              <div class="col-md-2"></div>
              <div class="about-info wow fadeInUp col-md-8" data-wow-duration="1000ms" data-wow-delay="300ms">
                  
                <h2>Visit Kathmandu</h2>
                <p>Kathmandu, a smorgasbord for the senses, a place that moves forward and backward, at once. The city welcomes visitors like no other; offering temptations and then throwing you to the wind. This year, Kathmandu can do with as many visitors as possible as the April earthquakes has caused tourism huge declines. For a country who’s economy is significantly dependent on tourism, this is of major concern. </p>

<p>By visiting the festival, you will be directly contributing to the rebuilding of the Nepali economy. Bring friends, come experience the mystique for yourselves. </p>
              </div>
              </div>
      </section><!--/#about-us-->
   </div>
</div>

  <section id="blog">
      <div class="row">  
      <div class="blog-posts">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8">
                
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
    </div>
  </section><!--/#blog-->
<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-10">
      <section id="contact-us" class="parallax">
        
        <div class="row">
                <div class="col-md-1"></div>
            <div class="col-md-5">
                        <h2>Contact Us</h2>
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
                    <div class="col-md-5">
       <h2>KTM Office</h2>             
                    
    
    <p>Our offices are located in Sanepa, Lalitpur. If you’d like to get in touch please feel free to write us or call.<br />

Office Number 09818 809 398<br />
General festival@photo.circle.com</p>
    <h2>US Office</h2>
    <p>Our offices are located in Sanepa, Lalitpur. If you’d like to get in touch please feel free to write us or call.<br />

Office Number 09818 809 398<br />
General festival@photo.circle.com</p>
    
    <p>Get in touch. Now.</p>
    
    <p>Send us a link via email, in a message on our Facebook page, tweet it to @fotografiamagaz, or tag us on Instagram.  Whatever suits you best, just be sure to get in touch with us!</p>
    
    <p>Please, please, please excuse us if we don’t reply – we receive many submissions, and time isn’t always enough. Thank you!</p>
                    </div>
                    
                </div>
      </section><!--/#Contact Us-->
   </div>
</div>
  
  

 

<?php get_footer(); ?>
