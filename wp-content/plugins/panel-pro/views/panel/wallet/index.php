<div class="row">

    <div class="col-lg-12 panel-form-edit-info">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">کیف پول</h3>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading"><strong>کیفا پول کاربر</strong></div>
                <div class="panel-body">
                    <p>موجودی کیف پول <span> <?php echo $user_wallet ?> </span></p>
                </div>

                <div class="container">
                    <div class="row">

                        <form class="form-horizontal" action="?action=payForWallet" method="post">

                            <div class="form-group">
                                <label for="amount" class="col-sm-2 control-label">مبلغ مورد نظر</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="amount"
                                           placeholder="مبلغ را وارد کنید">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <button type="submit" class="btn btn-success">پرداخت</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>