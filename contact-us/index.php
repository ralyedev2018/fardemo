<?php
   $result="";
   if(isset($_POST['submit'])){
   	require 'phpmailer/PHPMailerAutoload.php';
   	$mail = new PHPMailer;
   	
   	$mail->Host='smtp.gmail.com';
   	$mail->Port=587;
   	$mail->SMTPAuth=true;
   	$mail->SMTPSecure='tls';
   	
   	
   	$mail->setFrom($_POST['email'], $_POST['name']);
   	$mail->addAddress('admin@farringtonbridges.com');
   	$mail->addReplyTo($_POST['email'], $_POST['name']);
   	$mail->isHTML(true);
   	$mail->Subject='Form Submission: '.$_POST['email'];
   	$mail->Body='<h1>Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h1>';
   	
   	if(!$mail->send()){
   		$result="Something went wrong, Please refresh page.";
   	}
   	else{
   		$result="We'll get back to you soon ".$_POST['name']." Thank you!";
   	}
   	
   	
   }
   
?>
<!DOCTYPE html>
<html class="html" lang="en-US" itemscope itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <title>CONTACT US – Farrington Bridges</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="dns-prefetch" href="//s.w.org">
      <link rel="stylesheet" id="wp-block-library-css" href="https://farringtonbridges.com/wp-includes/css/dist/block-library/style.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="wp-block-library-theme-css" href="https://farringtonbridges.com/wp-includes/css/dist/block-library/theme.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="sticky-header-oceanwp-style-css" href="https://farringtonbridges.com/wp-content/plugins/sticky-header-oceanwp//style.css" type="text/css" media="all">
      <link rel="stylesheet" id="font-awesome-css" href="https://farringtonbridges.com/wp-content/themes/oceanwp/assets/css/third/font-awesome.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="simple-line-icons-css" href="https://farringtonbridges.com/wp-content/themes/oceanwp/assets/css/third/simple-line-icons.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="magnific-popup-css" href="https://farringtonbridges.com/wp-content/themes/oceanwp/assets/css/third/magnific-popup.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="slick-css" href="https://farringtonbridges.com/wp-content/themes/oceanwp/assets/css/third/slick.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="oceanwp-style-css" href="https://farringtonbridges.com/wp-content/themes/oceanwp/assets/css/style.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="elementor-icons-css" href="https://farringtonbridges.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="elementor-animations-css" href="https://farringtonbridges.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="elementor-frontend-css" href="https://farringtonbridges.com/wp-content/plugins/elementor/assets/css/frontend.min.css" type="text/css" media="all">
      <link rel="stylesheet" id="elementor-global-css" href="https://farringtonbridges.com/wp-content/uploads/elementor/css/global.css" type="text/css" media="all">
      <link rel="stylesheet" id="elementor-post-28-css" href="https://farringtonbridges.com/wp-content/uploads/elementor/css/post-28.css" type="text/css" media="all">
      <link rel="stylesheet" id="oe-widgets-style-css" href="https://farringtonbridges.com/wp-content/plugins/ocean-extra/assets/css/widgets.css" type="text/css" media="all">
      <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&ver=5.2.1" type="text/css" media="all">
      
	  <script type="text/javascript" src="https://farringtonbridges.com/wp-includes/js/jquery/jquery.js"></script>
      <script type="text/javascript" src="https://farringtonbridges.com/wp-includes/js/jquery/jquery-migrate.min.js"></script>
      <script type="text/javascript" src="https://farringtonbridges.com/wp-content/plugins/sticky-header-oceanwp//main.js"></script>
      <script>var sticky_header_style = "";</script>		
      <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
      <style type="text/css">
         /* Header CSS */#site-logo #site-logo-inner,.oceanwp-social-menu .social-menu-inner,#site-header.full_screen-header .menu-bar-inner,.after-header-content .after-header-content-inner{height:64px}#site-navigation-wrap .dropdown-menu >li >a,.oceanwp-mobile-menu-icon a,.after-header-content-inner >a{line-height:64px}#site-header.has-header-media .overlay-header-media{background-color:rgba(0,0,0,0.5)}#site-logo #site-logo-inner a img,#site-header.center-header #site-navigation-wrap .middle-site-logo a img{max-width:150px}@media (max-width:480px){#site-logo #site-logo-inner a img,#site-header.center-header #site-navigation-wrap .middle-site-logo a img{max-width:200px}}#site-header #site-logo #site-logo-inner a img,#site-header.center-header #site-navigation-wrap .middle-site-logo a img{max-height:300px}#site-navigation-wrap .dropdown-menu >li >a{padding:0 20px}.dropdown-menu .sub-menu{min-width:200px}
      </style>
   </head>
   <body class="page-template-default page page-id-28 wp-custom-logo wp-embed-responsive oceanwp-theme dropdown-mobile no-header-border default-breakpoint content-full-width content-max-width page-header-disabled no-margins elementor-default elementor-page elementor-page-28">
      <div id="outer-wrap" class="site clr">
         <div id="wrap" class="clr">
            <header id="site-header" class="minimal-header effect-one clr" data-height="64" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
               <div id="site-header-inner" class="clr container">
                  <div id="site-logo" class="clr has-responsive-logo" itemscope itemtype="http://schema.org/Brand">
                     <div id="site-logo-inner" class="clr">
                        <a href="https://farringtonbridges.com/" class="custom-logo-link" rel="home"><img width="332" height="56" src="https://farringtonbridges.com/wp-content/uploads/2019/05/cropped-Rb_logo.png" class="custom-logo" alt="Reddington Bridges" srcset="https://farringtonbridges.com/wp-content/uploads/2019/05/cropped-Rb_logo.png 1x,https://farringtonbridges.com/wp-content/uploads/2019/05/Rb_logo.png 2x"></a><a href="https://farringtonbridges.com/" class="responsive-logo-link" rel="home"><img src="https://farringtonbridges.com/wp-content/uploads/2019/05/Untitled-5.png" class="responsive-logo" width="92" height="56" alt=""></a>
                     </div>
                  </div>
                  <div id="site-navigation-wrap" class="no-top-border clr">
                     <nav id="site-navigation" class="navigation main-navigation clr" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <ul id="menu-main_menu" class="main-menu dropdown-menu sf-menu">
                           <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-33"><a href="https://farringtonbridges.com/" class="menu-link"><span class="text-wrap">HOME</span></a></li>
                           <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="https://farringtonbridges.com/about-us/" class="menu-link"><span class="text-wrap">ABOUT US</span></a></li>
                           <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-35 nav-no-click">
                              <a href="https://ralyedev2018.github.io/fardemo/services/" class="menu-link"><span class="text-wrap">SERVICES <span class="nav-arrow fa fa-angle-down"></span></span></a>
                              <ul class="sub-menu">
                                 <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="https://ralyedev2018.github.io/fardemo/business-growth/" class="menu-link"><span class="text-wrap">BUSINESS GROWTH</span></a></li>
                                 <li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="https://ralyedev2018.github.io/fardemo/product-solutions/" class="menu-link"><span class="text-wrap">PRODUCT SOLUTIONS</span></a></li>
                                 <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="https://ralyedev2018.github.io/fardemo/liabilities-management/" class="menu-link"><span class="text-wrap">LIABILITIES MANAGEMENT</span></a></li>
                                 <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="https://ralyedev2018.github.io/fardemo/research-strategy/" class="menu-link"><span class="text-wrap">RESEARCH & STRATEGY</span></a></li>
                                 <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="https://ralyedev2018.github.io/fardemo/transition-services/" class="menu-link"><span class="text-wrap">TRANSITION SERVICES</span></a></li>
                                 <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><a href="https://ralyedev2018.github.io/fardemo/clearing-execution/" class="menu-link"><span class="text-wrap">CLEARING & EXECUTION</span></a></li>
                              </ul>
                           </li>
                           <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="https://ralyedev2018.github.io/fardemo/team-profiles/" class="menu-link"><span class="text-wrap">TEAM PROFILES</span></a></li>
                           <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="https://ralyedev2018.github.io/fardemo/resources/" class="menu-link"><span class="text-wrap">RESOURCES</span></a></li>
                           <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-28 current_page_item menu-item-44"><a href="https://ralyedev2018.github.io/fardemo/contact-us/" class="menu-link"><span class="text-wrap">CONTACT US</span></a></li>
                        </ul>
                     </nav>
                  </div>
                  <div class="oceanwp-mobile-menu-icon clr mobile-right">
                     <a href="#" class="mobile-menu">
                     <i class="fa fa-bars"></i>
                     </a>
                  </div>
               </div>
               <div id="mobile-dropdown" class="clr">
                  <nav class="clr" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                     <div id="mobile-nav" class="navigation clr">
                        <ul id="menu-main_menu-1" class="menu">
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-33"><a href="https://farringtonbridges.com/">HOME</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="https://ralyedev2018.github.io/fardemo/about-us/">ABOUT US</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-35">
                              <a href="https://ralyedev2018.github.io/fardemo/services/">SERVICES</a>
                              <ul class="sub-menu">
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="https://ralyedev2018.github.io/fardemo/business-growth/">BUSINESS GROWTH</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="https://ralyedev2018.github.io/fardemo/product-solutions/">PRODUCT SOLUTIONS</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="https://ralyedev2018.github.io/fardemo/liabilities-management/">LIABILITIES MANAGEMENT</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="https://ralyedev2018.github.io/fardemo/research-strategy/">RESEARCH & STRATEGY</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="https://ralyedev2018.github.io/fardemo/transition-services/">TRANSITION SERVICES</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><a href="https://ralyedev2018.github.io/fardemo/clearing-execution/">CLEARING & EXECUTION</a></li>
                              </ul>
                           </li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="https://ralyedev2018.github.io/fardemo/team-profiles/">TEAM PROFILES</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="https://ralyedev2018.github.io/fardemo/resources/">RESOURCES</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-28 current_page_item menu-item-44"><a href="https://ralyedev2018.github.io/fardemo/contact-us/" aria-current="page">CONTACT US</a></li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </header>
            <main id="main" class="site-main clr">
               <div id="content-wrap" class="container clr">
                  <div id="primary" class="content-area clr">
                     <div id="content" class="site-content clr">
                        <article class="single-page-article clr">
                           <div class="entry clr" itemprop="text">
                              <div data-elementor-type="post" data-elementor-id="28" class="elementor elementor-28" data-elementor-settings="[]">
                                 <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                       <section class="elementor-element elementor-element-56c015a0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="56c015a0" data-element_type="section">
                                          <div class="elementor-container elementor-column-gap-no">
                                             <div class="elementor-row">
                                                <div class="elementor-element elementor-element-f7f6495 elementor-column elementor-col-100 elementor-top-column" data-id="f7f6495" data-element_type="column">
                                                   <div class="elementor-column-wrap  elementor-element-populated">
                                                      <div class="elementor-widget-wrap">
                                                        
                                                         <div class="elementor-element elementor-element-7535aa5a elementor-widget elementor-widget-heading" data-id="7535aa5a" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                               <h3 class="elementor-heading-title elementor-size-default">FLEISCHMARKT, VIENNA INNERE STADT, 1010</h3>
                                                            </div>
                                                         </div>
                                                         <div class="elementor-element elementor-element-5ddd0fd8 elementor-widget elementor-widget-google_maps" data-id="5ddd0fd8" data-element_type="widget" data-widget_type="google_maps.default">
                                                            <div class="elementor-widget-container">
                                                               <div class="elementor-custom-embed"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Fleischmarkt%2C%20Vienna%20Innere%20Stadt%2C%201010&t=m&z=17&output=embed&iwloc=near" aria-label="Fleischmarkt, Vienna Innere Stadt, 1010"></iframe></div>
                                                            </div>
															
                                                         </div>
														 
														  <div class="elementor-element elementor-element-260e4515 elementor-widget elementor-widget-heading" data-id="260e4515" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                               <h6 class="elementor-heading-title elementor-size-large">contact us!</h6>
															<br/><br/>
                                                            </div>
                                                         </div>
														 
														 <div class="container">
																<div class="row justify-content-center">
																  <div class="col-md-10 mt-10 bg-light rounded">
																	<h1 class="text-center font-weight-bold text-primary"></h1>
																	<hr class="bg-light">
																	<h3 align="center"><?=$result; ?></h3>
																	<form action="" method="post" id="form-box" class="p-2">
																	  <div class="form-group input-group">
																		<div class="input-group-prepend">
																		  <span class="input-group-text"></span>
																		</div>
																		<input type="text" name="name" class="form-control" placeholder="Enter your name" required>
																	  </div>
																	  <div class="form-group input-group">
																		<div class="input-group-prepend">
																		  <span class="input-group-text"></span>
																		</div>
																		<input type="email" name="email" class="form-control" placeholder="Enter your email" required>
																	  </div>
																	  <div class="form-group input-group">
																		<div class="input-group-prepend">
																		  <span class="input-group-text"></span>
																		</div>
																		<input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
																	  </div>
																	  <div class="form-group input-group">
																		<div class="input-group-prepend">
																		  <span class="input-group-text"></span>
																		</div>
																		<textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
																	  </div>
																	  <div class="form-group">
																		<input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
																	  </div>
																	</form>
																  </div>
																</div>
															  </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </main>
            <footer id="footer" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
               <div id="footer-inner" class="clr">
                  <div id="footer-bottom" class="clr no-footer-nav">
                     <div id="footer-bottom-inner" class="container clr">
                        <div id="copyright" class="clr" role="contentinfo">
                           © Farrington Bridges 2019			
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <a id="scroll-top" class="scroll-top-right" href="#"><span class="fa fa-arrow-up"></span></a>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-includes/js/imagesloaded.min.js"></script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-content/themes/oceanwp/assets/js/third/magnific-popup.min.js"></script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-content/themes/oceanwp/assets/js/third/lightbox.min.js"></script>
      <script type="text/javascript">
         /* <![CDATA[ */
         var oceanwpLocalize = {"isRTL":"","menuSearchStyle":"disabled","sidrSource":null,"sidrDisplace":"1","sidrSide":"right","sidrDropdownTarget":"icon","verticalHeaderTarget":"icon","customSelects":".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select","ajax_url":"https:\/\/farringtonbridges.com\/wp-admin\/admin-ajax.php"};
         /* ]]> */
      </script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-content/themes/oceanwp/assets/js/main.min.js"></script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-content/plugins/elementor/assets/js/frontend-modules.min.js"></script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-includes/js/jquery/ui/position.min.js"></script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js"></script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js"></script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js"></script>
      <script type="text/javascript">
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.5.16","urls":{"assets":"https:\/\/farringtonbridges.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_enable_lightbox_in_editor":"yes"}},"post":{"id":28,"title":"CONTACT US","excerpt":""}};
      </script>
      <script type="text/javascript" src="https://ralyedev2018.github.io/fardemo/wp-content/plugins/elementor/assets/js/frontend.min.js"></script>
   </body>
</html>