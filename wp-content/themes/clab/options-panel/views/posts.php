<div class="options-form">

    <div class="form-row">
        <label for="show_category">نمایش دسته بندی :</label>
        <input type="checkbox" name="show_category" id="show_category" <?php checked($options['show_category'] > 0 ) ?> >
    </div>

    <div class="form-row">
        <label for="show_excerpt">نمایش خلاصه مطلب :</label>
        <input type="checkbox" name="show_excerpt" id="show_excerpt" <?php checked($options['show_excerpt'] > 0 ) ?> >
    </div>

    <div class="form-row">
        <button type="submit" class="button" name="save_options">ذخیره سازی</button>
    </div>

</div>
