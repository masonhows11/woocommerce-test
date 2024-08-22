<div class="options-form">

    <div class="form-row">
        <label for="default_image_size">انداره پیش فرض تصاویر :</label>
        <select name="default_image_size" id="default_image_size">
            <?php foreach ($images_sizes as $item): ?>
                <option value="<?php echo $item ?>" >  <?php echo $item ?> </option>
            <?php endforeach; ?>
        </select>
    </div>



    <div class="form-row">
        <button type="submit" class="button" name="save_options">ذخیره سازی</button>
    </div>

</div>
