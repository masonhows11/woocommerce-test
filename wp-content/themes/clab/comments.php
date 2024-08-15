<section class="section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!--comments area start-->
                <div class="comments">
                    <h2 class="comments-title"> نظرات</h2>
                    <ul>
                        <?php wp_list_comments([
                            'type' => 'comment',
                            'style' => 'ul',
                           // 'callback' => 'calb_comment'
                        ], get_comments(['post_id' => get_the_ID()])); ?>
                        <!-- <li class="comment ">
                             <article class="comment-body">
                                 <footer class="comment-meta">
                                     <div class="comment-author">
                                         <img alt="" src="assets/img/team/t-1.jpg" class="">
                                         <b class="fn">
                                             <a href="#" rel="external nofollow" class="url">
                                                 کریس امز
                                             </a>
                                         </b>
                                         <span class="says">گفته:</span>
                                     </div>


                                     <div class="comment-metadata">
                                         <a href="#">
                                             <time datetime="2018-09-02T12:17:07+00:00">
                                                 1398 فروردین
                                             </time>
                                         </a>
                                     </div>

                                 </footer>

                                 <div class="comment-content">
                                     <p>سلام، این یک دیدگاه میباشد.<br>
                                         لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<br>
                                         زندگی را زیبا کنید <a href="#">مدرن</a>.</p>
                                 </div>

                                 <div class="reply">
                                     <a rel="nofollow" class="comment-reply-link" href="#" >پاسخ</a>
                                 </div>
                             </article>
                             <ul class="children">
                                 <li class="comment ">
                                     <article class="comment-body">
                                         <footer class="comment-meta">
                                             <div class="comment-author ">
                                                 <img alt="" src="assets/img/team/t-2.jpg" class="" >
                                                 <b class="fn">
                                                     <a href="#" rel="external nofollow" class="url">جانس برونس</a>
                                                 </b>
                                                 <span class="says">گفته:</span>
                                             </div>

                                             <div class="comment-metadata">
                                                 <a href="#">
                                                     <time datetime="2018-10-16T13:13:25+00:00">
                                                         1398 فروردین
                                                     </time>
                                                 </a>
                                             </div>

                                         </footer>

                                         <div class="comment-content">
                                             <p>سلام، این یک دیدگاه میباشد.<br>
                                                 لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<br>
                                                 زندگی را دوست داشته باشید</p>
                                         </div>

                                         <div class="reply">
                                             <a rel="nofollow" class="comment-reply-link" href="#">پاسخ</a>
                                         </div>
                                     </article>
                                 </li>
                             </ul>
                         </li>-->
                    </ul>
                </div>
                <!--comments area end-->

                <!--comment form start-->
                <div class="comment-respond">
                    <h3 class="comment-reply-title mb-lg-5 mb-4">
                        پیام بگذارید
                    </h3>
                    <?php comment_form([
                        'fields' => [
                            'author' => '<div class="row"><div class=" col-md-4">
                                <div class="form-group">
                                    <input type="text" name="author" class="form-control" placeholder="نام*" required="">
                                </div>
                            </div>',
                            'email' => '<div class=" col-md-4">
                                <div class="form-group ">
                                    <input type="email" name="email" class="form-control" placeholder="ایمیل*" required="">
                                </div>
                            </div>',
                            'url' => '<div class=" col-md-4">
                                <div class="form-group ">
                                    <input type="text" name="url" class="form-control" placeholder="وب سایت" >
                                </div>
                             </div> </div> ',
                        ],
                        'comment_field' =>
                        '<div class="form-group">
                            <div class="controls">
                                <textarea name="comment" id="message" rows="5" placeholder="نظر*" class="form-control" required=""></textarea>
                            </div>
                        </div> ',
                        'title_reply' => '',
                        'submit_field' => '<div class="text-center mt-md-5">%1$s %2$s</div>',
                        'submit_button' => '<button type="submit" class="btn btn-theme">ارسال</button>',
                    ]); ?>
                </div>
                <!--comment form end-->
            </div>
        </div>
    </div>
</section>