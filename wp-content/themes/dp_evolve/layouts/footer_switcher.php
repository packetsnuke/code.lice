<?php 
	
	/**
	 *
	 * Template footer
	 *
	 **/
	
	// create an access to the template main object
	global $dynamo_tpl, $post;
	// disable direct access to the file	
	defined('DYNAMO_WP') or die('Access denied');
	
?>
<div id="dp-footer-wrap" >
<?php if(dp_is_active_sidebar('footer')) : ?>
<div id="dp-footer" class="dp-page widget-area">
	<?php dp_dynamic_sidebar('footer'); ?>
</div>
<?php endif; ?>
<div id="dp-footer" class="dp-page widget-area">	
<div class="one_fourth no-margin-right">
<?php if(dp_is_active_sidebar('footer1')) : ?>
<div id="dp-footer" class="dp-page widget-area">
	<?php dp_dynamic_sidebar('footer1'); ?>
</div>
<?php endif; ?>
</div>
<div class="one_half no-margin-right">
<?php if(dp_is_active_sidebar('footer2')) : ?>
<div id="dp-footer" class="dp-page widget-area">
	<?php dp_dynamic_sidebar('footer2'); ?>
</div>
<?php endif; ?>
</div>
<div class="one_fourth  no-margin-right">
<?php if(dp_is_active_sidebar('footer3')) : ?>
<div id="dp-footer" class="dp-page widget-area">
	<?php dp_dynamic_sidebar('footer3'); ?>
</div>
<?php endif; ?>

</div>
<div class="clearboth"></div>
</div>    
    </div>
<div id="dp-copyright" class="dp-page">
    <div id="dp-copyright-inner">
        <div class="dp-copyrights">        <?php if(get_option($dynamo_tpl->name . "_social_icons_bottom_state") == 'Y') { ?>
        <ul id="footer-social-bar">
        <?php if(get_option($dynamo_tpl->name . "_social_facebook") != '') : ?>        
        <li><a href="<?php  echo get_option($dynamo_tpl->name . "_social_facebook")?>"class="dp-tipsy1 facebook" data-tipcontent="Facebook"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_twitter") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_twitter")  ?>" class="dp-tipsy1 twitter" data-tipcontent="Twitter"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_linkedin") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_linkedin") ?>" class="dp-tipsy1 linkedin" data-tipcontent="Linkedin"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_dribbble") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_dribbble") ?>" class="dp-tipsy1 dribbble" data-tipcontent="Dribble"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_pinterest") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_pinterest") ?>" class="dp-tipsy1 pinterest" data-tipcontent="Pinterest"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_flickr") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_flickr") ?>" class="dp-tipsy1 flickr" data-tipcontent="Flickr"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_youtube") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_youtube") ?>" class="dp-tipsy1 youtube" data-tipcontent="Youtube"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_vimeo") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_vimeo") ?>" class="dp-tipsy1 vimeo" data-tipcontent="Vimeo"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_rss") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_rss") ?>" class="dp-tipsy1 rss" data-tipcontent="RSS"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_steam") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_steam") ?>" class="dp-tipsy1 steam" data-tipcontent="Steam"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_tumblr") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_tumblr") ?>" class="dp-tipsy1 tumblr" data-tipcontent="Tumblr"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_github") != '') : ?>           
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_github") ?>" class="dp-tipsy1 github" data-tipcontent="Github"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_delicious") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_delicious") ?>" class="dp-tipsy1 delicious" data-tipcontent="Delicious"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_reddit") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_reddit") ?>" class="dp-tipsy1 reddit" data-tipcontent="Reddit"></a></li> 
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_lastfm") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_lastfm") ?>" class="dp-tipsy1 lastfm" data-tipcontent="Lastfm"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_digg") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_digg") ?>" class="dp-tipsy1 digg" data-tipcontent="Digg"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_forrst") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_forrst") ?>" class="dp-tipsy1 forrst" data-tipcontent="Forrst"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_stumbleupon") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_stumbleupon")  ?>" class="dp-tipsy1 stumbleupon" data-tipcontent="Stumbleupon"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_instagram") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_instagram")  ?>" class="dp-tipsy1 instagram" data-tipcontent="Instagram"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_viadeo") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_viadeo")  ?>" class="dp-tipsy1 viadeo" data-tipcontent="Viadeo"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_xing") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_xing")  ?>" class="dp-tipsy1 xing" data-tipcontent="Xing"></a></li>
        <?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . "_social_googleplus") != '') : ?>
        <li><a href="<?php echo get_option($dynamo_tpl->name . "_social_googleplus")  ?>" class="dp-tipsy1 gplus" data-tipcontent="Google+"></a></li>
        <?php endif; ?>
        </ul>
        <?php } ?>

        <?php if(get_option($dynamo_tpl->name . '_template_footer_logo') == 'css') : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/branding-logo.png" class="dp-copyright-logo css" alt="" />
		<?php endif; ?>
        <?php if(get_option($dynamo_tpl->name . '_template_footer_logo') == 'image' && get_option($dynamo_tpl->name . '_template_footer_logo_image') !='') : ?>
        <?php echo '<img src="'.get_option($dynamo_tpl->name . "_template_footer_logo_image", '').'" alt="" width="'.get_option($dynamo_tpl->name . "_footer_logo_image_width", 128).'" height="'.get_option($dynamo_tpl->name . "_footer_logo_image_height", 128).'" class="dp-copyright-logo" />'; ?>
		<?php endif; ?>
        <div class="dp-copyrights-text"><?php echo str_replace('\\', '', htmlspecialchars_decode(get_option($dynamo_tpl->name . '_template_copyright_text', ''))); ?></div>
        <div class="dp-designedby-text"><?php echo str_replace('\\', '', htmlspecialchars_decode(get_option($dynamo_tpl->name . '_template_designedby_text', ''))); ?></div>
        </div>
	</div>
    </div>
    </div>
    <div id="back-to-top"></div>
<div id="dpToolbar">
                <div>
                    <span id="dpToolbarButton"><i class="icon-cog-6"></i></span>
                    
                    <div class="toolbar-title" >Select Theme Color</div>
                        <div>
                        <div class="section-title" >Layout Style</div>
          <div class="layout-style">
               <select id="layout-style">
                    <option value="1">Wide</option>
                    <option value="2">Boxed</option>
               </select>
          </div>
          <div class="section-title" >Predefined colors</div>
                            <div id="dp-style-area">
                                <div class="dp-style-switcher-color">
                                    <a href="#style0.css" id="dp-color-0" title="Gray Blue">style0</a>
                                    <a href="#style1.css" id="dp-color-1" title="Orange">style1</a>
                                    <a href="#style2.css" id="dp-color-2" title="Green">style2</a>
                                    <a href="#style3.css" id="dp-color-3" title="Blue">style3</a>
                                    <a href="#style4.css" id="dp-color-4" title="Yellow">style4</a>
                                    <a href="#style5.css" id="dp-color-5" title="Navy">style5</a>
                                    <a href="#style6.css" id="dp-color-6" title="Beige">style6</a>
                                    <a href="#style7.css" id="dp-color-7" title="Red">style7</a>
                                    <a href="#style8.css" id="dp-color-8" title="Cyan">style8</a>
                                    <a href="#style9.css" id="dp-color-9" title="Pink">style9</a>
                                    <a href="#style10.css" id="dp-color-10" title="Brown">style10</a>
                                    <a href="#style11.css" id="dp-color-11" title="Olive">style11</a>
                                    <a href="#style12.css" id="dp-color-12" title="Puple">style12</a>
                                    <a href="#style13.css" id="dp-color-13" title="Gray">style13</a>
                                </div>
                            </div>
                           <div class="section-title" >Background image</div>
							<div id="dp-bg-area">
                                <div class="dp-style-switcher-bg">
                                    <a href="#" id="bg1" title="">style0</a>
                                    <a href="#" id="bg2" title="">style1</a>
                                    <a href="#" id="bg3" title="">style2</a>
                                    <a href="#" id="bg4" title="">style3</a>
                                    <a href="#" id="bg5" title="">style4</a>
                                    <a href="#" id="bg6" title="">style5</a>
                                    <a href="#" id="bg7" title="">style6</a>
                                    <a href="#" id="bg8" title="">style7</a>
                                    <a href="#" id="bg9" title="">style8</a>
                                    <a href="#" id="bg10" title="">style9</a>
                                    <a href="#" id="bg11" title="">style10</a>
                                    <a href="#" id="bg12" title="">style11</a>
                                    <a href="#" id="bg13" title="">style12</a>
                                    <a href="#" id="bg14" title="">style13</a>
                                </div>
                            </div>
                       </div>
                </div>
        </div>
        <?php dp_load('social'); ?>
	<?php dp_load('login'); ?>
	<?php do_action('dynamowp_footer'); ?>
	
	<?php 
		echo stripslashes(
			htmlspecialchars_decode(
				str_replace( '&#039;', "'", get_option($dynamo_tpl->name . '_footer_code', ''))
			)
		); 
	?>
    
	<?php do_action('dynamowp_ga_code'); ?>
    <?php wp_footer(); ?>
</div>
</div>
<div id="dp-mobile-menu">
<i id="close-mobile-menu" class="icon-cancel-circle-1"></i>
				<?php dynamo_menu_mobile('mainmenu', 'dp-main-menu', array('walker' => new DPMenuWalkerMobile()),'aside-menu'); ?>
                </div>
</body>
</html>
