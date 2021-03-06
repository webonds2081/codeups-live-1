<?php get_header(); ?>

<?php
$home = esc_url( home_url( '/' ) );
$about = esc_url( home_url( '/about/' ) );
$works = esc_url( home_url( '/works/' ) );
$culture = esc_url( home_url( '/culture/' ) );
$topics = esc_url( home_url( '/topics/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>


<div class="l-mv p-mv js-mv">
  <picture class="p-mv__img">
    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/img_top-pc.jpg" media="(min-width: 768px)" />
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/img_top-sp.jpg" alt="">
  </picture>
  <div class="p-mv__block">
    <span class="p-mv__subtitle">デザインで人を笑顔にする会社</span>
    <span class="p-mv__subtitle--en">DIGSMILE INC.</span>
    <h2 class="p-mv__title">DESIGN<br>FOR<br>SMILE.</h2>
  </div>
</div>


<section class="l-top-about p-about">
  <div class="p-about__inner">
    <div class="p-about__content">
      <?php $about_title = get_field('about_title', 7); ?>
      <?php $about_description = get_field('about-description', 7); ?>

      <h2 class="c-section-title"><?php the_field('about_title'); ?></h2>
      <div class="p-about__box">
        <p class="p-about__text"><?php echo $about_description;?></p>
      </div>
      <div class="p-about__btn">
        <a href="<?php echo $about ?>" class="c-btn">read more</a>
      </div>
    </div>
  </div>
</section>

<div class="l-top-bgGray">
  <div class="l-top-bgGray__inner">
    <section class="l-top-box1 p-box1">
      <div class="p-box1__inner l-inner">
        <h2 class="c-section-title">works</h2>
        <div class="p-box1__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/works_1.jpg" alt="">
        </div>
        <div class="p-box1__body">
          <p class="c-text">DIGSMILEの制作実績を紹介します。</p>
          <div class="p-box1__btn">
            <a href="<?php echo $works ?>" class="c-btn">read more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="l-top-box1 p-box1">
      <div class="p-box1__inner l-inner">
        <h2 class="c-section-title">culture</h2>
        <div class="p-box1__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/culture_1.jpg" alt="">
        </div>
        <div class="p-box1__body">
          <p class="c-text">DIGSMILEの社内文化について紹介します。</p>
          <div class="p-box1__btn">
            <a href="<?php echo $culture ?>" class="c-btn">read more</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<section class="l-topics p-topics">
  <div class="l-inner">
    <h2 class="c-section-title">latest topics</h2>
    <div class="p-topics__items">


      <?php
        $topic_query = new WP_Query(
          array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            )
          );
          ?>
      <?php if ( $topic_query->have_posts() ) : ?>
      <?php while ( $topic_query->have_posts() ) : ?>
      <?php $topic_query->the_post(); ?>


      <div class="p-topics__item p-topic-info">
        <time datetime="<?php the_time( 'c' );?>" class="p-topic-info__date"><?php the_time('Y.m.d'); ?></time>
        <a href="<?php the_permalink();?>" class="p-topic-info__text"> <?php the_title(); ?></a>
      </div>


      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

    </div>

    <div class="p-topics__btn">
      <a href="<?php echo $topics ?>" class="c-btn">read more</a>
    </div>
  </div>
</section>

<section class="l-contact p-contact">
  <div class="l-inner">
    <div class="p-contact__wrapper">
      <div class="p-contact__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/contact.jpg" alt="お問い合わせ画像">
      </div>
      <div class="p-contact__body">
        <?php $contact_title = get_field('contact_title', 7); ?>
        <?php $contact_description = get_field('contact-description', 7); ?>
        <h2 class="c-section-title"><?php echo $contact_title;?></h2>
        <div class="p-contact__text">
          <p class="c-text"><?php echo $contact_description;?></p>
          <div class="p-contact__btn">
            <a href="<?php echo $contact ?>" class="c-btn">read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>