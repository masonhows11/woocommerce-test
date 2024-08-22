<div class="options-form">
    <fieldset class="posts-option-fieldset">
        <legend> تنظیمات لیست های مطالب </legend>
        <div class="form-row">
            <label for="show_category">نمایش دسته بندی :</label>
            <input type="checkbox" name="show_category" id="show_category" <?php checked($options['show_category'] > 0 ) ?> >
        </div>

        <div class="form-row">
            <label for="show_excerpt">نمایش خلاصه مطلب :</label>
            <input type="checkbox" name="show_excerpt" id="show_excerpt" <?php checked($options['show_excerpt'] > 0 ) ?> >
        </div>

        <div class="form-row">
            <label for="select_font">فونت مطلب :</label>
            <select  name="select_font" id="select_font">
                <?php foreach ($font_list as $title => $name): ?>
                <option value="<?php echo $name ?>" >  <?php echo $title ?> </option>
                <?php endforeach; ?>
            </select>
        </div>


    </fieldset>

    <fieldset class="posts-option-fieldset" >
        <legend> تنظیمات نمایشتک مطلب </legend>
        <div class="form-row">
            <label for="show_comments">نمایش کامنت ها:</label>
            <input type="checkbox" name="show_comments" id="show_comments" <?php checked($options['show_comments'] > 0 ) ?> >
        </div>
    </fieldset>

    <div class="form-row">
        <button type="submit" class="button" name="save_options">ذخیره سازی</button>
    </div>

</div>
