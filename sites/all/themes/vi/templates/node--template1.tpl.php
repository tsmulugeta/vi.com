<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  
<section>
  <article class="grid-12 alpha omega center-align">
    <header>
      <hgroup>
        <h1><strong><?php print $node-> title ?></strong></h1>
        <h2>subheader</h2>
      </hgroup>
    </header>
  </article>

  <article class="grid-12 alpha omega">
    <header>
      <hgroup>
        <h3><strong><?php print $node-> field_member_title['und']['0']['value']?></strong></h3>
      </hgroup>
    </header>
    
    <div class="line-separator">&nbsp;</div>  
    <div class="grid-6 alpha">
    <p><?php print $node-> body['und']['0']['value']?></p>
    <a href="<?php print $node-> field_link1['und']['0']['url']?>" class="green-button"><?php print $node-> field_link1['und']['0']['title']?></a>
    <a href="<?php print $node-> field_link1['und']['1']['url']?>" class="green-button"><?php print $node-> field_link1['und']['1']['title']?></a>
    </div>
    <div class="grid-6 omega scale-with-grid">
      <div class="block-margin"><img src="http://visalus.com/sites/default/files/template1/images/<?php print $node-> field_home_page_banner_image['und']['0']['filename']?>"></div>
<div>
    <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style "><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a><a class="addthis_button_tweet"></a><a class="addthis_button_pinterest_pinit"></a><a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4fa98f0f0a30a29e"></script>
<!-- AddThis Button END -->
</div>

    </div>
  </article>
  
</section> 
  <div class="scale-with-grid add-bottom"><img src="/img/ChallengeShowdown/line_break.jpg"></div>
  
  <div class="grid-12 alpha omega">
    <div class="grid-6 alpha scale-with-grid"><iframe width="640" height="360" frameborder="0" allowfullscreen="" src="<?php print $node-> field_video_link['und']['0']['video_url']?>?width=640&amp;height=360&amp;autoplay=0&amp;hd=1&amp;rel=0&amp;autohide=2&amp;showinfo=1&amp;modestbranding=0&amp;theme=dark&amp;start=0&amp;wmode=opaque"></iframe>
    </div>
    
    <div class="grid-6 omega">
        <h3><strong><?php print $node-> field_member_title['und']['0']['value']?></strong></h3>
      <div class="box">
        <?php print $node-> body['und']['0']['value']?>
      </div>
    </div>
  </div>
  
  <div class="scale-with-grid add-bottom"><img src="/img/ChallengeShowdown/line_break.jpg"></div>
    
  <div class="grid-12 alpha omega">
    <h3><strong><?php print $node-> field_member_title['und']['0']['value']?></strong></h3>
    <div class="greenbox box">
      <p><?php print $node-> body['und']['0']['value']?></p>
    </div>
  </div>
  
  <div class="grid-12 alpha omega"><pre><?php print_r($node);?></pre></div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>