<h1>Đây là trang thống kê nhưng chưa có giao diện</h1>
<a href="<?= base_url() ?>admin/create_staff/" title="">Add staff</a><br>
<a href="<?= base_url() ?>admin/invest" title="">List invest</a><br>
<div class="index container">
    <div class="row blue lighten-5">
        <div class="col s3">
            <h5 class="text_title">Số tiền đầu tư: <span><?= $totalInvest ?> vnđ</span></h5>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Thêm</a>
            </div>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Xem thống kê</a>
            </div>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Xóa</a>
            </div>
        </div>
        <div class="col s3">
            <h5 class="text_title">Số tiền thu nhập: <br><span><?= $totalIncome ?> vnđ</span></h5>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Thêm</a>
            </div>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Xem thống kê</a>
            </div>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Xóa</a>
            </div>
        </div>
        <div class="col s3">
            <h5 class="text_title">Số tiền chi tiêu: <br><span><?= $totalOutcome ?> vnđ</span></h5>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Thêm</a>
            </div>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Xem thống kê</a>
            </div>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Xóa</a>
            </div>
        </div>
        <div class="col s3">
            <h5 class="text_title">Nhân viên</h5>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Thêm</a>
            </div>
            <div class="box_btn">
                <a href="#" class="btn waves-effect waves-light">Xóa</a>
            </div>
        </div>
    </div>
</div>