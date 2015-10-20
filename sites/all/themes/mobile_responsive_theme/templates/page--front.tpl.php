<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>


<div class="user-menu-wrapper">
  <div class="full-wrap">
    <?php print render($page['user_menu']) ?>
  </div>
</div>



<div id="header_wrapper">

  <header id="header" role="banner">
    <div class="top_left">
      <?php if ($logo): ?>
        <div id="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>"/></a>
        </div>
      <?php endif; ?>

      <h1 id="site-title">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        <div id="site-description"><?php print $site_slogan; ?></div> 
      </h1>
    </div>

    <div class="top_right">
      <nav id="main-menu"  role="navigation">
        <a class="nav-toggle" href="#">Menu</a>
        <div class="menu-navigation-container">
          <?php $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            print drupal_render($main_menu_tree);
          ?>
		  <?php print render($page['top_message']) ?>
        </div>
        <div class="clear"></div>
      </nav>
    </div>

    <div class="clear"></div>

  </header>

</div>

<div id="page-wrap">
  
  <div id="container">
    <div class="container-wrap">
      <div class="content-sidebar-wrap">
        <div id="content">
			<section class="mt5">

            <div class="p8">
               <div class="responsive_banner slick-initialized slick-slider">

               <div class="slick-list draggable" tabindex="0">
					<div class="slick-track" >
						<div class="item slick-slide slick-cloned" > 
							<a href="http://ratrichero.apk.vn/app/download/com.qihoo.security.lite.html?source=home">
								<img width ="100%" class="index_img" src="http://cn.apk.vn/images/ads/banner/2015/10/05/1444017688/480x240.jpg">
							</a> 
						</div>
               </div>

            </div>
         </section>
		 <section class="mt5">
               <a data-hover="app_list_head_hover" class="app_list_head p8" href="http://ratrichero.apk.vn/ung-dung-de-xuat.html">
                  <div class="clearfix">
                     <h2 class="app_list_head_tit fl">Top miễn phí tải nhiều</h2>
                     <div class=" fr">
                         <span class="btn_more fr">Xem thêm</span>
                     </div>

                  </div>

               </a>
               <div class="p8">
                <!-- clearfix slider responsive2 -->
                  <?php print render($page['top_download']); ?>
               </div>
            </section>
          <section class="mt5">
               <a data-hover="app_list_head_hover" class="app_list_head p8" href="http://ratrichero.apk.vn/ung-dung-de-xuat.html">
                  <div class="clearfix">
                     <h2 class="app_list_head_tit fl">Top miễn phí tải nhiều</h2>
                     <div class=" fr">
                         <span class="btn_more fr">Xem thêm</span>
                     </div>

                  </div>

               </a>
               <div class="p8">
                <!-- clearfix slider responsive2 -->
                  <ul class="app_list_a ">

                   <ul class="app_list_a clearfix">  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.yologame.congthanhxungde.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/2015/01/16/1421373502/1421373502.jpg"> <p class="app_list_a_tit">Bá Chủ Tam Quốc</p>42.15 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.yologame.congthanhxungde.html" data-name="com.yologame.congthanhxungde" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.yologame.congthanhxungde.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.lazada.android.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/2014/11/30/1417360711/1417360711.jpg"> <p class="app_list_a_tit">Lazada</p>7.10 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.lazada.android.html" data-name="com.lazada.android" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.lazada.android.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.qihoo.security.lite.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/thumbnail/2015/10/02/1443774235/200.jpg"> <p class="app_list_a_tit">360 Security Lite</p>4.40 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.qihoo.security.lite.html" data-name="com.qihoo.security.lite" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.qihoo.security.lite.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.vng.tlbb3dm.vn.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/thumbnail/2015/09/23/1442990617/tlbb.png"> <p class="app_list_a_tit">Thiên Long Bát Bộ 3D</p>0 bytes </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.vng.tlbb3dm.vn.html" data-name="com.vng.tlbb3dm.vn" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.vng.tlbb3dm.vn.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.shere.easytouch.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/thumbnail/2015/10/02/1443780901/200x200px1426649525.png"> <p class="app_list_a_tit">Easy Touch</p>3.00 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.shere.easytouch.html" data-name="com.shere.easytouch" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.shere.easytouch.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.as.ytb.downloader.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/thumbnail/2015/06/08/1433737063/icon.png"> <p class="app_list_a_tit">Xem video tốc độ miễn phí</p>917.00 KB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.as.ytb.downloader.html" data-name="com.as.ytb.downloader" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.as.ytb.downloader.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.gameloft.android.ANMP.GloftA8HM.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/2014/11/06/1415257578/dua.png"> <p class="app_list_a_tit">Đua xe: Asphalt 8 - Airborne</p>1.42 GB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.gameloft.android.ANMP.GloftA8HM.html" data-name="com.gameloft.android.ANMP.GloftA8HM" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.gameloft.android.ANMP.GloftA8HM.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.qihoo.security.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/2015/01/14/1421249271/1421249271.jpg"> <p class="app_list_a_tit">360 Mobile Security Antivirus</p>8.95 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.qihoo.security.html" data-name="com.qihoo.security" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.qihoo.security.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.ingvn.publish.rxxj.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/thumbnail/2015/08/12/1439348486/22.png"> <p class="app_list_a_tit">Tru Tiên</p>47.00 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.ingvn.publish.rxxj.html" data-name="com.ingvn.publish.rxxj" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.ingvn.publish.rxxj.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.erosnow.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/2015/08/03/1438589802/1438589802.jpg"> <p class="app_list_a_tit">Eros Now: Xem Phim Ấn Độ</p>9.63 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.erosnow.html" data-name="com.erosnow" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.erosnow.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/net.one97.paytm.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/2015/08/03/1438577767/1438577767.jpg"> <p class="app_list_a_tit">Recharge, Shop and Wallet</p>7.71 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/net.one97.paytm.html" data-name="net.one97.paytm" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/net.one97.paytm.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.pocketgames.tqc.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/thumbnail/2015/07/02/1435817776/200x200.png"> <p class="app_list_a_tit">Tam Quốc Bùm Chíu</p>47.00 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.pocketgames.tqc.html" data-name="com.pocketgames.tqc" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.pocketgames.tqc.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.apusapps.launcher.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/thumbnail/2015/07/09/1436405653/Ce2Z_rgJ_ZaAwfjfUmVearT-WcRuvd8qHAm0P-Y0ulw8qzCJTvNyzROGg9jwM2eaL_A=w300.png"> <p class="app_list_a_tit">APUS Launcher - Nhanh, nhẹ, tiết kiệm pin</p>2.12 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.apusapps.launcher.html" data-name="com.apusapps.launcher" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.apusapps.launcher.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.uc.browser.en.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/2014/12/26/1419603248/1419603248.jpg"> <p class="app_list_a_tit">UC Browser Mini for Android</p>1.08 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.uc.browser.en.html" data-name="com.uc.browser.en" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.uc.browser.en.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li>  <li><div class="app_list_a_cnt"> <a data-hover="app_list_a_link_hover" class="app_list_a_link" href="http://ratrichero.apk.vn/ung-dung/com.halo.wifikey.wifilocating.html?source=home"><img class="app_list_a_img" src="http://cn.apk.vn/images/2015/03/13/1426248906/1426248906.jpg"> <p class="app_list_a_tit">WiFi Master</p>11.25 MB </a> <a class="btn_download" data-href="http://ratrichero.apk.vn/app/download/com.halo.wifikey.wifilocating.html" data-name="com.halo.wifikey.wifilocating" data-pub="ratrichero" onclick="return market_download(this);" href="http://ratrichero.apk.vn/app/download/com.halo.wifikey.wifilocating.html?source=home"><span class=" flaticon-tab3"></span></a>  </div></li></ul>


                  </ul>
               </div>
            </section>
        </div>
      
        <?php if ($page['sidebar_first']): ?>
          <aside id="sidebar-first" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>
      
        </div>

        <?php if ($page['sidebar_second']): ?>
          <aside id="sidebar-second" role="complementary">
            <?php print render($page['sidebar_second']); ?>
          </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>
    </div>
  </div>

</div>



<div id="footer">
  <div id="footer_wrapper">
    <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_forth']): ?> 
      <div id="footer-area" class="clearfix">
        <?php if ($page['footer_first']): ?>
        <div class="column"><?php print render($page['footer_first']); ?></div>
        <?php endif; ?>
        <?php if ($page['footer_second']): ?>
        <div class="column"><?php print render($page['footer_second']); ?></div>
        <?php endif; ?>
        <?php if ($page['footer_third']): ?>
        <div class="column"><?php print render($page['footer_third']); ?></div>
        <?php endif; ?>
        <?php if ($page['footer_forth']): ?>
        <div class="column"><?php print render($page['footer_forth']); ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="footer_credit">
      
    <div id="copyright">
      <p class="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?></p> 

      <!-- Social Links -->
      <?php if (theme_get_setting('social_links', 'mobile_responsive_theme')): ?>
        <span class="social-icons">
         <ul>
          <li><a class="rss" href="<?php print $front_page; ?>rss.xml"><i class="fa fa-rss"></i></a></li>
          <li><a class="fb" href="<?php echo theme_get_setting('facebook_profile_url', 'mobile_responsive_theme'); ?>" target="_blank" rel="me"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="<?php echo theme_get_setting('twitter_profile_url', 'mobile_responsive_theme'); ?>" target="_blank" rel="me"><i class="fa fa-twitter"></i></a></li>
          <li><a class="gplus" href="<?php echo theme_get_setting('gplus_profile_url', 'mobile_responsive_theme'); ?>" target="_blank" rel="me"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="linkedin" href="<?php echo theme_get_setting('linkedin_profile_url', 'mobile_responsive_theme'); ?>" target="_blank" rel="me"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="pinterest" href="<?php echo theme_get_setting('pinterest_profile_url', 'mobile_responsive_theme'); ?>" target="_blank" rel="me"><i class="fa fa-pinterest"></i></a></li>
          <li><a class="youtube" href="<?php echo theme_get_setting('youtube_profile_url', 'mobile_responsive_theme'); ?>" target="_blank" rel="me"><i class="fa fa-youtube"></i></a></li>
         </ul>
        </span>
      <?php endif; ?>

      <p class="credits"> <?php print t('Design by'); ?>  <a href="http://www.freebiezz.com">FreeBiezz</a></p>
      <div class="clear"></div>
    </div>
  </div>

</div>

<?php print render($page['banner_bottom']); ?>
	
