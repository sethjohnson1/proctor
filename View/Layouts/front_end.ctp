<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>

<link rel="icon" sizes="196x196" href="http://collections.centerofthewest.org/img/truckerhat.png">


<meta name="viewport" content="width=device-width,user-scalable=1, minimum-scale=1.0, maximum-scale=4.0">




<?php 

	echo $this->Html->charset(); 
	echo $this->Html->meta('icon', $this->Html->url('http://collections.centerofthewest.org/img/truckerhat.ico'));
	

	echo $this->Html->script('jquery.min');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->css('bootstrap.min');
	
	//custom Proctor CSS without getting into COTW too deep
	echo $this->Html->css('proctor_overrides.css');



	//my script uses jQuery, so it only works when loaded AFTER!
	//cookie1 is the bulk of everything, although some other scripts are referenced inline still maybe
	//echo $this->Html->script('sj_cookie1');	
	
	
	echo $this->Html->meta('icon');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css('center_of_the_west');
	
?>

<?php 
	//if(!empty($TheTitle))	
	//	echo '<title>'.$TheTitle.'</title>';
	//else 
		echo '<title>Proctor Online Catalog</title>';
	
//$TheDescription="hello";	
	if(!empty($TheDescription))	
		echo '<meta name="description" content="'.$TheDescription.'" />';
	else
		echo '<meta name="description" content="The Buffalo Bill Center of the West presents the Proctor Collection - free to the public online!" />';

	

	
?>
<script type="text/javascript">
var _gas = _gas || [];
_gas.push(['_setAccount', 'UA-46559601-1']); 
_gas.push(['_setDomainName', '.centerofthewest.org']);
_gas.push(['_require', 'inpage_linkid','//www.google-analytics.com/plugins/ga/inpage_linkid.js']);
_gas.push(['_trackPageview']);
_gas.push(['_gasTrackForms']);
_gas.push(['_gasTrackOutboundLinks']);
_gas.push(['_gasTrackMaxScroll']);
_gas.push(['_gasTrackDownloads']);
_gas.push(['_gasTrackVideo']); _gas.push(['_gasTrackAudio']);
_gas.push(['_gasTrackYoutube', {force: true}]);
_gas.push(['_gasTrackMailto']);

(function() {
var ga = document.createElement('script');
ga.id = 'gas-script';
ga.setAttribute('data-use-dcjs', 'true'); // CHANGE TO TRUE FOR DC.JS SUPPORT
ga.type = 'text/javascript';
ga.async = true;
ga.src = '//cdnjs.cloudflare.com/ajax/libs/gas/1.11.0/gas.min.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
</script>
<script>
$(document).ready(function(){
//smooth scrolling, easy copy-paste! - makes modal not work if applied globally
$(function() {
  $('a[href*=#search-results]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
});
</script>
<?
	if(!empty($FeaturedImage))	echo '<meta property="og:image" content="'.$FeaturedImage.'=?v=2" />';
?>
</head>
<body class="page page-id-10546 page-template-default logged-in admin-bar no-customize-support header-image altsidebar-content" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<script>
</script>
<div class="site-container">


<header class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader"><div class="wrap"><div class="title-area"><p class="site-title" itemprop="headline"><a href="http://centerofthewest.org/" title="Buffalo Bill Center of the West" >Buffalo Bill Center of the West</a></p></div><aside class="widget-area header-widget-area"></aside>

<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"><ul id="menu-top-menu" class="menu genesis-nav-menu menu-primary"><li id="menu-item-8279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8279">

<?=$this->Html->link('Home',array('controller'=>'artworks','action'=>'front'))?>


</li>
<li id="menu-item-8282" class="split-nav-dropdown menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8282">

<?=$this->Html->link('Essays',array('controller'=>'castings','action'=>'essays'))?>

</li>
<li id="menu-item-8283" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8283">

<?=$this->Html->link('Search All Castings',array('controller'=>'castings','action'=>'front'))?>

</li>
<li id="menu-item-8200" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8200">

<?=$this->Html->link('About/Help',array('controller'=>'castings','action'=>'about'))?>

</li>
</ul></nav></div></header>


<div class="site-inner"><div class="wrap"><div class="content-sidebar-wrap"><main class="content" role="main" itemprop="mainContentOfPage"><article class="post-10546 page type-page status-draft entry" itemscope="itemscope" itemtype="http://schema.org/CreativeWork"><header class="entry-header">
</header>
<div class="entry-content" itemprop="text">
<?php echo $this->Session->flash(); ?>

<?php echo $this->fetch('content'); ?>
</div></article></main></div>

<script>
$(document).ready(function() {
var stickyNavTop = $('.mnav').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.mnav').addClass('sticky');
} else {
    $('.mnav').removeClass('sticky'); 
}
};
 
stickyNav();
 
$(window).scroll(function() {
    stickyNav();
});


});
</script>
<div id="mobilebuttons" class="row mnav">

<div class="col-xs-12">
<div class="btn-group btn-group-justified" role="group">
<div class="btn-group" role="group">
<button type="button" class="orange btn btn-lg btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-hamburger"></span><span class="caret"></span>
A.P. Proctor Selected Bronzes</button>
<ul class="dropdown-menu mobile-drop" role="menu">
<?=$this->element('default_menu')?>
<?//=$this->element('default_browse-menu')?>
</ul>
</div>


</div>
</div>

</div><!-- /mobile-menu row -->
<?if (isset($left_nav_menu)):?>
<aside class="sidebar-secondary hidden-xs hidden-sm" style="margin-top:10px;">

<h1 class="OC-header"><?php echo $this->Html->link('A.P. Proctor Selected Bronzes', array('action'=>'front','controller'=>'artworks')); ?></h1>


<section id="nav_menu-7" class="widget widget_nav_menu">
<div class="widget-wrap">
<div id="mainmenu">
	
<ul class="menu">

<?=$this->element('default_menu')?>

</ul>
<ul class="browse-menu">
        
<?//=$this->element('default_browse-menu')?>
    
		
</ul>
  
  </div><!-- /mainmenu -->
  </div></section>
 </aside>
 
 <?else:?>
 <style>
 .altsidebar-content .content {
	width: 100%;
	float: none;
 }
 </style>
 <?endif?>
 </div></div>  

  
  
<div class="hidden-xs hidden-sm" style="margin-top:100px"></div>
  
  
  <div class="footer-top-bar hidden-sm hidden-xs">
		<div class="wrap">
			<div class="our-blogs">Our Blogs: <a href="http://centerofthewest.org/center-west-blogs/">View all the blogs from the Center of the West</a></div>
			<ul class="social-links">
				<li class="social-icon facebook"><a href="http://www.facebook.com/pages/Cody-WY/Buffalo-Bill-Historical-Center/237069925589/">Like Us on Facebook</a></li>
				<li class="social-icon twitter"><a href="http://twitter.com/centerofthewest/">Follow Us on Twitter</a></li>
				<li class="social-icon youtube"><a href="http://www.youtube.com/user/atBBHC/">Subscribe to us on Youtube</a></li>
				<li class="social-icon flickr"><a href="http://www.flickr.com/groups/buffalo_bill_historical_center/pool/">View our photos on flickr</a></li>
			</ul>
		</div>
	</div> 

<div class="footer-widgets hidden-sm hidden-xs">
<div class="wrap"><div class="footer-widgets-1 widget-area"><section id="text-6" class="widget widget_text">
<div class="widget-wrap"><h4 class="widget-title widgettitle">location</h4>
			<div class="textwidget">Buffalo Bill Center of the West&nbsp;&nbsp;<a href="mailto:info@centerofthewest.org"><img src="http://centerofthewest.org/wp-content/uploads/2013/11/envelope-icon.png" width="14px" height="10px"></a><br>
720 Sheridan Avenue
Cody, Wyoming 82414<br>
+1 307-587-4771</div>
		</div></section>
</div><div class="footer-widgets-2 widget-area"><section id="nav_menu-2" class="widget widget_nav_menu"><div class="widget-wrap"><h4 class="widget-title widgettitle"><a href="http://centerofthewest.org/explore/exhibitions/">Exhibitions</a></h4>
<div class="menu-exhibitions-footer-container"><ul id="menu-exhibitions-footer" class="menu"><li id="menu-item-8324" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8324"><a href="http://centerofthewest.org/explore/exhibitions/current-exhibitions/">Current Exhibitions<small class="nav-desc"> </small></a></li>
<li id="menu-item-8326" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8326"><a href="http://centerofthewest.org/explore/exhibitions/upcoming-exhibitions/">Upcoming Exhibitions<small class="nav-desc"> </small></a></li>
<li id="menu-item-8327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8327"><a href="http://centerofthewest.org/explore/exhibitions/past-exhibitions/">Past Exhibitions<small class="nav-desc"> </small></a></li>
<li id="menu-item-8488" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8488"><a href="http://centerofthewest.org/explore/beyond-our-walls/">Beyond Our Walls<small class="nav-desc"> </small></a></li>
</ul></div></div></section>
</div><div class="footer-widgets-3 widget-area"><section id="nav_menu-3" class="widget widget_nav_menu"><div class="widget-wrap"><h4 class="widget-title widgettitle"><a href="http://centerofthewest.org/calendar/">Calendar of Events</a></h4>
<div class="menu-events-footer-container"><ul id="menu-events-footer" class="menu"><li id="menu-item-9732" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9732"><a href="http://centerofthewest.org/ai1ec_event/buffalo-bill-birthday-celebration/?instance_id=74">Buffalo Bill’s Birthday</a></li>
<li id="menu-item-9730" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9730"><a href="http://centerofthewest.org/ai1ec_event/plains-indian-museum-powwow/?instance_id=54">Powwow</a></li>
<li id="menu-item-9731" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9731"><a href="http://centerofthewest.org/ai1ec_event/patrons-ball/?instance_id=69">Patrons Ball</a></li>
<li id="menu-item-9729" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9729"><a href="http://centerofthewest.org/ai1ec_event/holiday-open-house/?instance_id=79">Holiday Open House</a></li>
</ul></div></div></section>
</div><div class="footer-widgets-4 widget-area"><section id="nav_menu-4" class="widget widget_nav_menu"><div class="widget-wrap"><h4 class="widget-title widgettitle"><a href="http://centerofthewest.org/online-collections/">Online Collections</a></h4>
<div class="menu-online-collections-footer-container"><ul id="menu-online-collections-footer" class="menu"><li id="menu-item-8234" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8234"><a href="http://library.centerofthewest.org/">Photographs</a></li>
<li id="menu-item-8235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8235"><a href="http://collections.centerofthewest.org/treasures/index/bbm:1/wg:0/cfm:0/pim:0/dmnh:0">Buffalo Bill</a></li>
<li id="menu-item-8236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8236"><a href="http://collections.centerofthewest.org/treasures/index/bbm:0/wg:0/cfm:1/pim:0/dmnh:0">Firearms</a></li>
<li id="menu-item-8237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8237"><a href="http://collections.centerofthewest.org/treasures/index/bbm:0/wg:0/cfm:0/pim:1/dmnh:0">Plains Indians</a></li>
<li id="menu-item-8238" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8238"><a href="http://collections.centerofthewest.org/treasures/index/bbm:0/wg:1/cfm:0/pim:0/dmnh:0">Western Art</a></li>
<li id="menu-item-8238" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8238"><a href="http://collections.centerofthewest.org/treasures/index/bbm:0/wg:0/cfm:0/pim:0/dmnh:1">Natural History</a></li>
</ul></div></div></section>
</div><div class="footer-widgets-5 widget-area"><section id="nav_menu-5" class="widget widget_nav_menu"><div class="widget-wrap"><h4 class="widget-title widgettitle"><a href="http://centerofthewest.org/get-involved/">Support</a></h4>
<div class="menu-get-involved-footer-container"><ul id="menu-get-involved-footer" class="menu"><li id="menu-item-8328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8328"><a href="http://centerofthewest.org/get-involved/membership-support/">Membership</a></li>
<li id="menu-item-8476" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8476"><a href="http://centerofthewest.org/get-involved/make-a-gift/">Give Today<small class="nav-desc"> </small></a></li>
<li id="menu-item-8497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8497"><a href="http://centerofthewest.org/get-involved/planned-giving/">Planned Giving<small class="nav-desc"> </small></a></li>
<li id="menu-item-8330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8330"><a href="http://centerofthewest.org/get-involved/volunteering/">Volunteer<small class="nav-desc"> </small></a></li>
</ul></div></div></section>
</div><div class="footer-widgets-6 widget-area"><section id="nav_menu-6" class="widget widget_nav_menu"><div class="widget-wrap"><h4 class="widget-title widgettitle"><a href="http://centerofthewest.org/about-us/">About Us</a></h4>
<div class="menu-about-us-footer-container"><ul id="menu-about-us-footer" class="menu">
<li id="menu-item-8233" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8233"><a href="http://centerofthewest.org/about-us/mission/">Our Mission</a></li>
<li id="menu-item-8233" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8233"><a href="http://centerofthewest.org/category/newsroom/">Newsroom</a></li>
<li id="menu-item-8303" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8303"><a href="http://centerofthewest.org/about-us/employment/">Employment<small class="nav-desc"> </small></a></li>
<li id="menu-item-8316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8316"><a href="http://centerofthewest.org/about-us/staff-directory/">Staff Directory<small class="nav-desc"> </small></a></li>
<li id="menu-item-8498" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8498"><a href="http://centerofthewest.org/get-involved/annual-reports/">Annual Reports<small class="nav-desc"> </small></a></li>
<li id="menu-item-8474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8474"><a href="http://centerofthewest.org/about-us/terms-and-policies/">Terms and Policies<small class="nav-desc"> </small></a></li>

</ul></div></div></section>
</div></div></div>
	

<footer class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">


<div class="wrap"><p><span class="creds">©&nbsp;<?php echo date("Y"); ?> Buffalo Bill Center of the West. All rights reserved.</span>
 	<span class="smithsonian">Smithsonian Affiliations</span>
 	<span class="aam"><abbr title="The American Alliance of Museums">AAM</abbr></span></p></div></footer>    
  </div>

<script>
//call this after the menu is drawn, this is for mobile slide-out menu
//var jPM = $.jPanelMenu();
/* causes too many problems, mainly kills the sticky header nav, so 86'd
var jPM = $.jPanelMenu({
    menu: '#mainmenu',
    trigger: '.toggle-button',
	excludedPanelContent: '#mobilebuttons'
});
jPM.on();
*/
</script>
<style>
.btn-social{
	width:100%;
	color: white !important;
	margin:0 0 10px 0;
}

.btn-facebook{
	background-color: #415e9b;
}
.btn-gplus{
	background-color: #d73d32;
}
.btn-twitter{
	background-color: #54abed;
}
.btn-email{
	background-color: #bd4f19;
}
.btn-icons{
	//padding-right:20px;
	float: right;
}
</style>
<!-- Social login modal -->
<div class="modal fade" id="login-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button style="color:red" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></span></button>
		<h3 style="text-align:center">Super-easy Login</h3>
		<p>Log-in to share, comment, interact!</p>
      </div>
      <div class="modal-body">
        <div class="row">
		<div class="col-xs-12">
		<?
		$fb=$this->Html->image('white-facebook.svg',array('class'=>'btn-icons'));
		$gp=$this->Html->image('white-googleplus.svg',array('class'=>'btn-icons'));
		$tw=$this->Html->image('white-twitter.svg',array('class'=>'btn-icons'));
		
		?>
		
		<?=$this->Html->link($fb.'Facebook',array('plugin'=>'users','controller'=>'users','action'=>'auth_login','Facebook'),array('class'=>'btn btn-social btn-facebook btn-lg','role'=>'button','escape'=>false))?>
		<?=$this->Html->link($gp.'Google',array('plugin'=>'users','controller'=>'users','action'=>'gauth'),array('class'=>'btn btn-social btn-gplus btn-lg','role'=>'button','escape'=>false))?>
		<?=$this->Html->link($tw.'Twitter',array('plugin'=>'users','controller'=>'users','action'=>'auth_login','Twitter'),array('class'=>'btn btn-social btn-twitter btn-lg','role'=>'button','escape'=>false))?>
		<p style="text-align: center;"> - OR - </p>
		<?=$this->Html->link('<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="float: right"></span> E-mail',array('plugin'=>'users','controller'=>'users','action'=>'login'),array('class'=>'btn btn-social btn-email btn-lg','role'=>'button','escape'=>false))?>
		</div>
		</div>
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
      
      </div>
    </div>
  </div>
</div> 
  </body>