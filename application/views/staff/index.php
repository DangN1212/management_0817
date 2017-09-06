<p class="fixed-action-btn logout-btn"><a href="<?= base_url("/home/logout") ?>" class="waves-effect waves-light btn btn-floating"><i class="material-icons">power_settings_new</i></a></p>
<p class="fixed-action-btn"><a href="<?= base_url() ?>" class="waves-effect waves-light btn btn-floating"><i class="material-icons">home</i></a></p>
<div class="row">
<p class="name col s4 offset-s2">Hi, Đăng Nguyễn</p>
</div>
<div class="index container">
    <div class="row">
        <div class="col s3">
            <h5 class="text_title">Số tiền đầu tư: <span><?= $totalInvest ?> vnđ</span></h5>
            <div class="box_btn">
                <a href="<?= base_url() ?>admin/invest" class="iframe btn waves-effect waves-light">Thêm</a>
            </div>
            <div class="box_btn">
                <a href="<?= base_url() ?>admin/invest" class="iframe btn waves-effect waves-light">Xem/Sửa</a>
            </div>
        </div>
        <div class="col s3">
            <h5 class="text_title">Số tiền thu nhập: <br><span><?= $totalIncome ?> vnđ</span></h5>
            <div class="box_btn">
                <a href="<?= base_url() ?>staff/add_income" class="iframe btn waves-effect waves-light">Thêm</a>
            </div>
            <div class="box_btn">
                <a href="<?= base_url() ?>staff/list_income" class="iframe btn waves-effect waves-light">Xem/Sửa</a>
            </div>

        </div>
        <div class="col s3">
            <h5 class="text_title">Số tiền chi tiêu: <br><span><?= $totalOutcome ?> vnđ</span></h5>
            <div class="box_btn">
                <a href="<?= base_url() ?>staff/add_outcome" class="iframe btn waves-effect waves-light">Thêm</a>
            </div>
            <div class="box_btn">
                <a href="<?= base_url() ?>staff/list_outcome" class="iframe btn waves-effect waves-light">Xem/Sửa</a>
            </div>

        </div>
        <div class="col s3">
            <h5 class="text_title">Nhân viên</h5>
            <div class="box_btn">
                <a href="<?= base_url() ?>admin/create_staff/" class="iframe btn waves-effect waves-light">Thêm</a>
            </div>
           
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script src="<?php echo publicUrl("/js/jquery.fancybox-1.3.4.js") ?>"></script>
<script>
$("a.iframe").fancybox({
    width: '100%',
    height: '100%'
});
</script>