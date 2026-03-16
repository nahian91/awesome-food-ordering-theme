<?php get_header(); ?>

<div class="blog-area single full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                        <div class="blog-style-two item">
                            <div class="blog-item-box">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="thumb">
                                        <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                    <i class="fas fa-user-circle"></i> <?php the_author(); ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <?php the_content(); ?>

                                    <?php 
                                    // Handle multi-page posts
                                    wp_link_pages( array(
                                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'textdomain' ),
                                        'after'       => '</div>',
                                        'link_before' => '<span class="page-number">',
                                        'link_after'  => '</span>',
                                    ) ); 
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="post-author">
                            <div class="thumb">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
                            </div>
                            <div class="info">
                                <h4><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></h4>
                                <p><?php the_author_meta( 'description' ); ?></p>
                            </div>
                        </div>

                        <div class="post-tags share">
                            <div class="tags">
                                <h4>Tags: </h4>
                                <?php the_tags('', ' ', ''); ?>
                            </div>
                            <div class="social">
                                <h4>Share:</h4>
                                <ul>
                                    <li><a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="post-pagi-area">
                            <div class="post-previous">
                                <?php previous_post_link('%link', '<div class="icon"><i class="fas fa-angle-double-left"></i></div> <div class="nav-title">Previous Post <h5>%title</h5></div>'); ?>
                            </div>
                            <div class="post-next">
                                <?php next_post_link('%link', '<div class="nav-title">Next Post <h5>%title</h5></div> <div class="icon"><i class="fas fa-angle-double-right"></i></div>'); ?>
                            </div>
                        </div>

                        <?php 
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif; 
                        ?>

                    <?php endwhile; endif; ?>
                </div>

                <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-50 mt-xs-50">
    <aside>
        <div class="sidebar-item search">
            <div class="sidebar-info">
                <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="text" placeholder="Enter Keyword" name="s" class="form-control" value="<?php echo get_search_query(); ?>">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>

        <div class="sidebar-item recent-post">
            <h4 class="title">Recent Post</h4>
            <ul>
                <?php
                $recent_posts = new WP_Query( array(
                    'posts_per_page' => 3,
                    'post__not_in'   => array( get_the_ID() ), // Skip current post
                ) );

                if ( $recent_posts->have_posts() ) :
                    while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                ?>
                    <li>
                        <div class="thumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( array(80, 80) ); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="Thumb">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="info">
                            <div class="meta-title">
                                <span class="post-date"><?php echo get_the_date('d M, Y'); ?></span>
                            </div>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
        </div>

        <div class="sidebar-item category">
            <h4 class="title">Category List</h4>
            <div class="sidebar-info">
                <ul>
                    <?php
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ) );

                    foreach ( $categories as $category ) :
                    ?>
                        <li>
                            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                                <?php echo esc_html( $category->name ); ?> 
                                <span><?php echo esc_html( $category->count ); ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="sidebar-item gallery">
            <h4 class="title">Gallery</h4>
            <div class="sidebar-info">
                <ul>
                    <?php
                    $gallery_query = new WP_Query( array(
                        'posts_per_page' => 6,
                        'post_type'      => 'post'
                    ) );

                    if ( $gallery_query->have_posts() ) :
                        while ( $gallery_query->have_posts() ) : $gallery_query->the_post();
                            if ( has_post_thumbnail() ) :
                    ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                            </a>
                        </li>
                    <?php 
                            endif;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
        </div>

        <div class="sidebar-item archives">
            <h4 class="title">Archives</h4>
            <div class="sidebar-info">
                <ul>
                    <?php
                    wp_get_archives( array(
                        'type'            => 'monthly',
                        'limit'           => 4,
                        'format'          => 'html',
                        'show_post_count' => false,
                    ) );
                    ?>
                </ul>
            </div>
        </div>

        <div class="sidebar-item tags">
            <h4 class="title">Tags</h4>
            <div class="sidebar-info">
                <ul>
                    <?php
                    $tags = get_tags();
                    if ( $tags ) :
                        foreach ( $tags as $tag ) :
                    ?>
                        <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </aside>
</div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>