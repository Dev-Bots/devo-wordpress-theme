<?php
/**
 * @package rad-theme-development
 */
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( ( 'Permalink to %s', 'devo' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
 
        <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <?php devo_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->
 
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
        <?php the_content( ( 'Continue reading <span class="meta-nav">&rarr;</span>', 'devo' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . ( 'Pages:', 'devo' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>
 
    <footer class="entry-meta">
        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( ( ', ', 'devo' ) );
                if ( $categories_list && devo_categorized_blog() ) :
            ?>
            <span class="cat-links">
                <?php printf( ( 'Posted in %1$s', 'devo' ), $categories_list ); ?>
            </span>
            <?php endif; // End if categories ?>
 
            <?php
                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list( '', ( ', ', 'devo' ) );
                if ( $tags_list ) :
            ?>
            <span class="sep"> | </span>
            <span class="tag-links">
                <?php printf( ( 'Tagged %1$s', 'devo' ), $tags_list ); ?>
            </span>
            <?php endif; // End if $tags_list ?>
        <?php endif; // End if 'post' == get_post_type() ?>
 
        <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
        <span class="sep"> | </span>
        <span class="comments-link"><?php comments_popup_link( ( 'Leave a comment', 'devo' ), ( '1 Comment', 'devo' ), ( '% Comments', 'devo' ) ); ?></span>
        <?php endif; ?>
 
        <?php edit_post_link( __( 'Edit', 'devo' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->