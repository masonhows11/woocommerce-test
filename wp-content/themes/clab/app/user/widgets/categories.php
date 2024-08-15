<?php

class Clab_categories_widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(false, 'ابزارک دسته بندی ها');
    }


    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title',$instance['title']);
        echo $args['after_title'];
        $categories = get_categories();
        ?>
        <div class="list-group list-group-right-arrow">
            <?php foreach ($categories as $category): ?>
            <a href="#" class="list-group-item">
                <?php echo $category->name ?> (<?php echo $category->count; ?>)
            </a>
            <?php endforeach; ?>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : 'دسته بندی ها';
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">عنوان :</label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        return $instance;
    }

}

function register_clab_categories_widget()
{
    register_widget('Clab_categories_widget');
}

add_action('widgets_init', 'register_clab_categories_widget');
