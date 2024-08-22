<div class="options-form">

    <div class="form-row">
        <label for="site-title">عنوان سایت :</label>
        <input type="text" name="site_title" id="site-title" value="<?php  echo esc_attr(!empty($options['site_title']) ? $options['site_title'] : '');  ?>" placeholder="عنوان سایت را وارد کنید">
    </div>

    <div class="form-row">
        <label for="home-posts-count">تعداد مطالب در صفحه اول :</label>
        <input type="number" name="home_posts_count" min="1" max="100" value="<?php echo esc_attr(!empty($options['home_posts_count']) ? $options['home_posts_count'] : ''); ?>" id="home-posts-count" placeholder="تعداد را وارد کنید">
    </div>

    <div class="form-row">
         <button type="submit" class="button" name="save_options">ذخیره سازی</button>
    </div>

</div>