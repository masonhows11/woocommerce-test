<div class="options-form">

    <fieldset class="posts-option-fieldset">
        <legend>متن ایمیل بعد از ثبت نام کاربر:</legend>


        <div class="form-row">
            <label for="email-title">عنوان ایمیل :</label>
            <input type="text"
                   name="new_user_email_title"
                   id="email-title"
                   value="<?php  echo isset($options['new_user_email_title']) ? $options['new_user_email_title'] : '';  ?>">
        </div>

        <div class="form-row">
            <label for="email-body">متن ایمیل :</label>
            <textarea rows="10" name="new_user_email_body" id="email-body"><?php  echo isset($options['new_user_email_body']) ? $options['new_user_email_body'] : ''  ?></textarea>
        </div>

        <div class="form-row">
            <button type="submit" class="button" name="save_options">ذخیره سازی</button>
        </div>
    </fieldset>

</div>
