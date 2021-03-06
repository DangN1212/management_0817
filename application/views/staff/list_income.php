<div class="container">
    <div class="row">
    <h5 class="center-align">Xem thu nhập</h4>
        <ul id="tabs-swipe-data" class="tabs">
    <li class="tab col s4"><a href="#data_box01">Xem tất cả</a></li>
    <li class="tab col s4"><a class="active" href="#data_box02">Xem theo thời gian</a></li>
  </ul>
  <div id="data_box01" class="col s12">
      <div class="box-data center-align">
              <div class="row text_b">
                <p class="col s2">Ngày</p>
                <p class="col s2">Loại</p>
                <p class="col s5">Chi tiết</p>
                <p class="col s2">Giá</p>
              </div>
                <?php
                if (!$listAllBill) {
                    ?>
                    <div class="row">
                      <p class="col s12">Không có dữ liệu.</p>
                    </div>
                    <?php
                } else {
                    foreach ($listAllBill as $key => $value) {
                        ?>
                        <div class="row">
                            <p class="col s2"><?= $value->dateInput ?></p>
                            <p title="<?= $value->bill_type_description ?><?php echo ($value->bill_type_2_description) ? " | ".$value->bill_type_2_description : "" ?>" class="col s2"><?= $value->bill_type_name ?><?php echo ($value->bill_type_2_name) ? " | ".$value->bill_type_2_name : "" ?></p>
                            <p class="col s5"><?= $value->description ?></p>
                            <p class="col s2"><?= $value->value ?></p>
                            <p class="col s1"> <a class="btn-floating btn-small waves-effect waves-light red" href="<?= base_url() ?>staff/add_income"><i class="material-icons">edit</i></a></p>
                        </div>
                        <?php
                    }
                }
                ?>
    </div>
  </div>
  <div id="data_box02" class="col s12">
        <form action="" method="get" accept-charset="utf-8">
          <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                  <input required="true" value="<?= $params["from"] ?>" name="from" type="text" class="dateInput" id="date1" placeholder="Năm/Tháng/Ngày">
                  <label for="date1">Từ ngày</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                  <input required="true" value="<?= $params["to"] ?>" name="to" type="text" class="dateInput" id="date2" placeholder="Năm/Tháng/Ngày">
                  <label for="date2">Đến ngày</label>
            </div>
          </div>
          <div class="row center-align">
            <button class="btn waves-effect waves-light" type="submit">Xem <i class="material-icons right">send</i></button>
          </div>
        </form>
          <div class="box-data center-align">
              <div class="row text_b">
                <p class="col s2">Ngày</p>
                <p class="col s2">Loại</p>
                <p class="col s5">Chi tiết</p>
                <p class="col s2">Giá</p>
              </div>
                <?php
                if (!$listBill) {
                ?>
                    <div class="row">
                      <p class="col s12">Không có dữ liệu.</p>
                    </div>
                <?php
                } else {
                    foreach ($listBill as $key => $value) {
                        ?>
                    <div class="row">
                        <p class="col s2"><?= $value->dateInput ?></p>
                        <p title="<?= $value->bill_type_description ?><?php echo ($value->bill_type_2_description) ? " | ".$value->bill_type_2_description : "" ?>" class="col s2"><?= $value->bill_type_name ?><?php echo ($value->bill_type_2_name) ? " | ".$value->bill_type_2_name : "" ?></p>
                        <p class="col s5"><?= $value->description ?></p>
                        <p class="col s2"><?= $value->value ?></p>
                        <p class="col s1"> <a class="btn-floating btn-small waves-effect waves-light red" href="<?= base_url() ?>staff/add_income"><i class="material-icons">edit</i></a></p>
                    </div>
                        <?php
                    }
                }
                ?>
          </div>
  </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var cleave = new Cleave('#date1', {
            date: true,
            datePattern: ['Y', 'm', 'd']
        });

        var cleave = new Cleave('#date2', {
            date: true,
            datePattern: ['Y', 'm', 'd']
        });
    });
</script>