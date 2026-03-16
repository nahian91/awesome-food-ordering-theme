<?php get_header(); ?>

<div class="breadcrumb-area bg-cover text-center text-light" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1><?php the_title(); ?></h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="blog-area blog-grid default-padding">
    <div class="container">
        <div class="blog-item-box">
            <div class="row">
                <?php
                // Adjust 'post_type' if you are using a custom post type like 'gallery'
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type'      => 'post', 
                    'posts_per_page' => 6,
                    'paged'          => $paged
                );

                $query = new WP_Query($args);

                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();
                ?>
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="home-blog-style-one-item">
                            <div class="thumb">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail('medium_large', ['alt' => get_the_title()]); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="No Image">
                                    <?php endif; ?>
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="info">
                                    <h4 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <ul class="meta-tags">
                                        <li><?php echo get_the_date(); ?></li>
                                        <li><?php the_author_posts_link(); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No items found.</p>';
                endif; 
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 pagi-area text-center">
                <nav aria-label="navigation">
                    <?php
                    echo paginate_links( array(
                        'total'        => $query->max_num_pages,
                        'current'      => $paged,
                        'type'         => 'list',
                        'prev_text'    => '<i class="fas fa-angle-double-left"></i>',
                        'next_text'    => '<i class="fas fa-angle-double-right"></i>',
                        'before_page_number' => '',
                    ) );
                    ?>
                </nav>
            </div>
        </div>
        </div>
</div>

<?php get_footer(); ?>