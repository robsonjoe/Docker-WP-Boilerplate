<?php

class Custom_Widget extends WP_Widget
{
    public function __construct()
    {
        // actual widget processes
        parent::__construct(
            'custom_widget',
            'Custom_widget',
            ['description' => 'A custom widget'],
        );
    }

    public function widget($args, $instance)
    {
        // outputs the content of the widget
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $age = apply_filters('widget_age', $instance['age']);
        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        if (!empty($age)) {
            echo $age;
        }
        echo $after_widget;
    }

    public function form($instance)
    {
        // outputs the options form in the admin
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = '';
        }

        if (isset($instance['age'])) {
            $age = $instance['age'];
        } else {
            $age = '';
        }
?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name('age'); ?>"><?php _e('age:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('age'); ?>" name="<?php echo $this->get_field_name('age'); ?>" type="text" value="<?php echo esc_attr($age); ?>" />
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
        $instance = [];
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['age'] = (!empty($new_instance['age'])) ? strip_tags($new_instance['age']) : '';
        return $instance;
    }
}
