<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>

<!-- Tracking Pixel 1 - Sept 22 2015 Continued Below -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
_fbq.push(['addPixelId', '413091568816130']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>

<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,
e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("ebcf2905959ab33d0ea231e0af477876");</script><!-- end Mixpanel -->

</head>
<body<?php print $attributes;?>>



<div id="fb-root"></div>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?> 
<script src="http://visalus.com/sites/all/themes/vi/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" >
	$(document).ready(function () {
		$("a[rel^='prettyPhoto']").prettyPhoto();
	})
</script>



<!-- Google Code for Remarketing tag -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1005534105;
var google_conversion_label = "xWCcCL__7gMQmfe83wM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1005534105/?value=0&amp;label=xWCcCL__7gMQmfe83wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- retargeting pixel  -->
<img width="1" height="1" src="//u.optorb.com/m?p=1&r=OAubzrVQNn6hQwI">
<!-- retargeting pixel  -->

<!-- Tracking Pixel 1 - Sept 22 2015 Continued Above -->
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=413091568816130&amp;ev=PixelInitialized" /></noscript>

</body>
</html>