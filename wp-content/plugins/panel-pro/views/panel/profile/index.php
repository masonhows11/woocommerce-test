<div class="row">

    <div class="col-lg-12 panel-form-edit-info">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">فرم ویرایش اطلاعات</h3>
            </div>
            <!-- /.box-header -->
            <?php echo $message ?>
            <!-- form start -->
            <form action="" method="post" class="form-horizontal">
                <div class="box-body">

                    <div class="form-group">
                        <label for="user_full_name" class="col-sm-2 control-label">نام و نام خانوادگی</label>
                        <div class="col-sm-10">
                            <input type="text" name="userFullName" class="form-control" id="user_full_name"
                                   value="<?php echo $current_user->display_name ?>" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">ایمیل</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email" value="<?php echo $current_user->user_email ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">رمز عبور</label>
                        <div class="col-sm-10">
                            <input type="password" name="userPassword" class="form-control" id="password" placeholder="رمز عبور">
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" class="btn btn-default">انصراف</button>
                    <button type="submit" name="saveData" class="btn btn-success pull-right">ذخیره</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
</div>