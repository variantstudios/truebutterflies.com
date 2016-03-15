<div id="background">
<div class="site-width">
  
  <header id="masthead" class="site-width">
    <?php if($page['slider']): ?>
	      <div id="slider">
	        <?php print render($page['slider']); ?>
	      </div><!-- /#slider -->
	    <?php endif; ?>
	    
    <?php if($site_name): ?>
      <h1 id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span class="tuck"></span></a>
      </h1><!-- /#site-name -->
    <?php endif; ?>
 
 
 </header><!-- /#masthead -->
 	    
  <div id="page-wrapper">
  
  <nav id="main-nav">
    <?php print theme('links__system_main_menu', array(
      'links' => $main_menu,
      'attributes' => array(
        'id' => 'main-menu',
        'class' => array('links', 'clearfix', 'site-width',)
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ))); ?>
  </nav><!-- /#main-nav -->
   
  <div id="main-wrapper" class="site-width clearfix">   
    <section id="primary-content">

      <a id="main-content"></a>
     <div class="not-found-404">
      <article>

   <h1>Not Found</h1>

    <h2>
      These are not the nodes you are looking for
    </h2>

    <p>Sorry, but the page you were trying to view does not exist.</p>
    <p>It looks like this was the result of either:</p>
    <ul>
      <li>a mistyped address</li>
      <li>an out-of-date link</li>
    </ul>

    <a href="/search/">search ?</a>

    <script>
      var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
    </script>
    <script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
</article>
     </div>
      <?php if (isset($tabs)): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php if($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print $messages; ?>
	    <?php print render($page['help']); ?>
	    
	    <?php if($page['highlighted']): ?>
	      <div id="highlighted">
	        <?php print render($page['highlighted']); ?>
	      </div><!-- /#highlighted -->
	    <?php endif; ?>
	    
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </section><!-- /#primary-content -->

    <?php if($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside><!--/#sidebar-first -->
    <?php endif; ?>
    
    <?php if($page['sidebar_second']): ?>
      <aside id="sidebar-second" class="column sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
    
  </div><!--/#main-wrapper -->
  

    
  <footer id="credits">
  <div id="footer-bar">
    <?php if($page['footer']): ?>
	    <div id="footer-blocks" class="site-width">
	      <?php print render($page['footer']); ?>
	    </div><!-- /#footer-blocks -->
	  <?php endif; ?>
    
     <?php if($page['footer_left']): ?>
      <aside id="footer_left">
        <?php print render($page['footer_left']); ?>
      </aside><!--/#footer_left -->
    <?php endif; ?>
    
    <?php if($page['footer_center']): ?>
      <aside id="footer_center">
        <?php print render($page['footer_center']); ?>
      </aside><!--/#footer_center -->
    <?php endif; ?>
    
      <?php if($page['footer_right']): ?>
      <aside id="footer_right">
        <?php print render($page['footer_right']); ?>
      </aside><!--/#footer_right -->
    <?php endif; ?>
    
    </div><!-- /#footer-bar -->
   
    <div id="copyright" class="site-width">
    
       <div id="devs">
	      Site by: <a href="http://www.variantstudios.com" target="_blank" rel="author"><span class="tuck">Variant Studios, Inc.</span></a>
	    </div><!-- /#devs -->
	    
	    <div id="client">
	      &copy;<?php print date('Y'); ?> <?php print $site_name; ?>
	    </div><!-- /#client -->
	    
	 
	  </div><!-- /#copyright -->
  </footer> <!-- /#credits -->
</div> <!-- /#page-wrapper -->
</div><!-- /.site-width  -->
</div>

