<?
/**
 * The template displaying the posts-overview
 *
 * @author      Zsigmond Peternak
 * @version     1.4.1
 * @since       WPSeed 0.18
 */

?>

<? get_header(); ?>

<!-- content » blog home -->
      <?php

      $myposts = get_posts(array(
        'post_type' => 'featured_image',
        'posts_per_page'  => -1
        ));
      ?>

  <div class="content">
    <div class="fotorama" data-loop="true" data-autoplay="true" data-arrows="false" data-click="true" data-swipe="true">
    <?php foreach( $myposts as $post): setup_postdata($post); 
           $image = get_field('f_image');
           /*var_dump($f_image);*/
          if( !empty($image) ): 
           // vars
             $url = $image['url'];
             $title = $image['title'];
             $alt = $image['alt'];
 
             // thumbnail, medium, large, full or custom size
             $size = 'large';
             $thumb = $image['sizes'][ $size ];
             $width = $image['sizes'][ $size . '-width' ];
             $height = $image['sizes'][ $size . '-height' ];
             ?>


              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
         <?php endif; ?>
        <?php endforeach; ?>
        </div>
      <article>
      <strong>Snapdragon Face Painting</strong> provides the very best in creative, professional face and body art for <strong>events and parties</strong>. Highly regarded throughout London, we offer beautiful and original facepainting for <strong>children</strong>, and create striking art make-up designs for <strong>adults</strong>.

Art make-up for adults draws dramatic attention to everyone's best features....Our sparkling eye designs and beautifully embellished cheekbones are hotly in demand! We can even work our designs to <strong>fit your themed event</strong>.

All of our face and body painters are <strong>professionally trained artists</strong> and very highly skilled. With years of experience and holding full Public Liability insurance as well as enhanced CRB certificates, we are friendly, talented and reliable... The perfect complement to your event!
<ul>
  <li>Children's Birthday Parties</li>
  <li>Art / Extreme Make-Up</li>
  <li>Film Premiere Events</li>
  <li>Private Screenings</li>
  <li>Bars and Clubs</li>
  <li>Corporate Events</li>
  <li>Book Signings</li>
  <li>Launch Events</li>
  <li>Halloween Parties</li>
  <li>Fancy Dress Parties</li>
  <li>Team Building Events</li>
  <li>Christmas Parties</li>
  <li>Themed Entertainment</li>
  <li>Adult Face Painting</li>
  <li>Live Performance</li>
  <li>Carnival Make-Up</li>
</ul>
    
      </article>
      <?php wp_reset_postdata(); ?>

  </div>

<? get_footer(); ?>
