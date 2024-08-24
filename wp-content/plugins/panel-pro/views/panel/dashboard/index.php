<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading"><strong>داشبورد</strong></div>
        <div class="panel-body">
            <p><?php echo $current_user->display_name ?></p>
            <p>خوش آمدید</p>
            <div class="user-state">
                <p>
                    <span>تعداد مطالب نوشته شده :</span>
                    <span><?php echo $user_posts_count?></span>
                </p>
                <p>
                    <span>تعداد کامنت های تایید شده :</span>
                    <span><?php echo $user_comments_count ?></span>
                </p>
            </div>
        </div>
        <div class="panel-footer"></div>
    </div>
</div>