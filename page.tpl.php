<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--Google Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27422749-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--End Google Analytics-->

</head>
<body>
<div id="bodywrapper"> 
	<!-- start bodywapper -->
		<div id="bodymain"> 
    	<!-- start bodymain -->

			<div id="usunavwrapper"> 
			<!-- start usunavwrapper -->
				<div id="usunavbox"> 
					<!-- start usunavbox -->
				</div>
				<!-- end usunavbox --> 

      
				<div id="bannerimagebox"> 
					<!-- start usunavimage --> 
					<?php print render($page['logo']); ?>
                    <?php print render($page['header']); ?>

	  			</div>
				<!-- end usunavimage --> 
    		</div>
     		<!-- end usunavwrapper --> 
 
			<div id="libnavwrapper"> 
            <!-- start libnavwrapper -->
            	<div id="libnavbox">
        		<!-- start libnavbox -->
				<?php print render($page['navigation']); ?> 
				</div>
                <!-- end libnavbox --> 
			</div>
			<!-- end libnavwrapper --> 
 
			<div id="bannerwapper"> 
			<!-- start bannerwrapper -->
				<div id="bannerbox"> 
				<!-- start bannerbox --> 
         		<?php print render($page['banner']); ?> 
                </div>
                <!-- end bannerbox --> 
        	</div>
        	<!-- end bannerwrapper --> 
		
        <div id="contentwrapper"> 
			<!-- start contentwrapper -->
    	<div id="contentbox2">
      	<?php print $breadcrumb; ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1><?php print $title; ?></h1>
      <?php endif; ?>
      <br />
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
                </div>
        </div>
			<!-- end contentwrapper -->

			
<div class="clear">&nbsp;</div>
    
   	</div>
	<!-- end bodymain --> 

	</div>
	<!-- end bodywrapper --> 
    
<div id="footerwrapper">
<!-- start footerwrapper" -->
	<div id="footerbox">
	<!-- start footerbox --> 

       <ul>
		   <li><?php print render($page['footer']); ?></li>
	   </ul>
     	
    </div>
	<!-- end footerbox -->
    
</div>
<!-- end footerwrapper -->

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1518716-1";
urchinTracker();
</script></body>
</html>