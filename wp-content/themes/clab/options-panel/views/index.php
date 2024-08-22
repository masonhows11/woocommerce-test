<div class="wrap">
    <h2>تنظیمات قالب Clab</h2>
    <div class="container">

        <div class="options-menu">
            <ul>
                <li>
                    <a class="<?php echo  $current_tab === 'general' ? 'active' : '' ?>"
                       href="<?php echo add_query_arg(['tab' => 'general']) ?>">عمومی</a>
                </li>
                <li>
                    <a class="<?php echo  $current_tab === 'posts' ? 'active' : '' ?>"
                       href="<?php echo add_query_arg(['tab' => 'posts']) ?>">مطالب</a>
                </li>
                <li>
                    <a class="<?php echo  $current_tab === 'images' ? 'active' : '' ?>"
                       href="<?php echo add_query_arg(['tab' => 'images']) ?>">تصاویر</a>
                </li>
                <li>
                    <a class="<?php echo  $current_tab === 'notification' ? 'active' : '' ?>"
                       href="<?php echo add_query_arg(['tab' => 'notification']) ?>">اطلاع رسانی</a>
                </li>

            </ul>
        </div>

        <div class="options-content">
            <form action="" method="post">
                <?php include "$current_tab.php" ?>
            </form>

        </div>


    </div>
</div>
