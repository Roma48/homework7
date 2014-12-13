

<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 12/11/14
 * Time: 6:11 PM
 */


/*
Plugin Name: Post type template Widget
Plugin URI:
Description: Random Post Widget grabs a random post and the associated thumbnail to display on your sidebar
Author: Paliy Roman
Version: 1
Author URI:
*/


class RandomPostWidget extends WP_Widget
{
    function RandomPostWidget()
    {
        $widget_ops = array('classname' => 'RandomPostWidget', 'description' => 'Displays a random post with thumbnail' );
        $this->WP_Widget('RandomPostWidget', 'Random Post and Thumbnail', $widget_ops);
    }

    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
        $title = $instance['title'];
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
    <?php
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        return $instance;
    }

    function widget($args, $instance)
    {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);



        if (!empty($title))
            echo $before_title . $title . $after_title;;

        // WIDGET CODE GOES HERE
        $args = array( 'post_type' => 'post-type-template', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            echo '<div class="lead">';
            the_title( '<h1 class="lead"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
            echo '</div>';

            echo '<div class="">';
            echo '<em>';
            the_content();
            echo '</em>';
            the_post_thumbnail();
            echo '</div>';
        endwhile;


        echo $after_widget;
    }

}
add_action( 'widgets_init', create_function('', 'return register_widget("RandomPostWidget");') );?>