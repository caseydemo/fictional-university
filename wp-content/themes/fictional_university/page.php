<?php
get_header();
while( have_posts() ) {
  the_post();?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url( <? echo get_theme_file_uri( 'images/ocean.jpg' ) ?> );"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><? the_title() ?></h1>
      <div class="page-banner__intro">
        <p>Learn how the school of your dreams got started.</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">

    <?
      $parent_id = wp_get_post_parent_id( get_the_ID());
      if( $parent_id != 0 ) { ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<? echo get_permalink( $parent_id );?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <? echo get_the_title( $parent_id ); ?></a> <span class="metabox__main"><? echo the_title(); ?></span></p>
    </div>

  <? }

    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if( $parent_id || $testArray ) {
    ?>
        <div class="page-links">
          <h2 class="page-links__title"><a href="<? echo get_permalink( $parent_id ) ?>"><? echo get_the_title( $parent_id ) ?></a></h2>
          <ul class="min-list">
            <?  if( $parent_id ) {
                  $findChildrenOf = $parent_id;
                }
                else {
                  $findChildrenOf = get_the_ID();
                }
                wp_list_pages( array(
                    'title_li' => NULL,
                    'child_of' => $findChildrenOf
                ));
            ?>
          </ul>
        </div>
    <? } ?>

    <div class="generic-content">
      <p><? the_content() ?></p>
    </div>

  </div>

<? }
get_footer();

?>
