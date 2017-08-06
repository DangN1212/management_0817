<div class="container addStaff">
    <div class="row">
        <h4 class="center-align">Thêm thu nhập</h4>
        <form class="col s6 offset-s3" method="post" accept-charset="utf-8">
          <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                  <input name="dateInput" type="text" class="dateInput" id="dateInput" placeholder="Năm/Tháng/Ngày" value="<?= $params["dateInput"] ?>" required="true">
                  <label id="lb_dateInput" for="dateInput">Thời gian</label>
            </div>
          </div>

          <div class="row">
              <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
                <select id="bill_type" name="bill_type">
                    <option value="0" disabled selected>Chọn loại chi phí</option>
                    <?php
                    foreach ($listTypeIncome as $key => $value) {
                        ?>
                        <option value="<?= $value->pk ?>" <?php echo ($params["bill_type"] == $value->pk) ? "selected" : "" ?> ><?= $value->name ?></option>
                        <?php
                    }
                    ?>
                </select>
                <label id="lb_bill_type">Loại hóa đơn</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i><input name="description" id="description" type="text" class="validate" autocomplete="off" value="<?= $params["description"] ?>" required="true">
              <label id="lb_description" for="description">Thông tin chi tiết</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i><input name="value" id="value" type="number" class="validate" value="<?= $params["value"] ?>" required="true">
              <label id="lb_value" for="value">Đơn giá</label>
            </div>
          </div>
          <div class="center-align">
          <button class="btn waves-effect waves-light" type="reset" name="action">Xóa
    <i class="material-icons right">send</i>
  </button>
          <button class="btn waves-effect waves-light" type="submit" name="submit">Thêm
    <i class="material-icons right">send</i>
  </button>
  </div>
    </form>

    </div>
</div>
<script>
   $( document ).ready(function() {
        var cleave = new Cleave('.dateInput', {
            date: true,
            datePattern: ['Y', 'm', 'd']
        });
       $('select').material_select();
       isScroll = 0;
       <?php
        if ($error) {
            foreach ($error as $key => $value) {
                ?>
                console.log(isScroll);
                    console.log(<?=$key?>);
                if (isScroll === 0) {

                    $('html, body').animate({
                        scrollTop: $("#<?= $key ?>").offset().top - 20
                    }, 1000);
                    isScroll = 1;
                }
                $("#<?= $key ?>").addClass('invalid');
                $("#lb_<?= $key ?>").addClass('active');
                $("#lb_<?= $key ?>").attr('data-error', '<?= $value ?>');
            <?php
            }
       }
       ?>
    });
</script>