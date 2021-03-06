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
              <i class="material-icons prefix">mode_edit</i><input name="nameClient" id="nameClient" type="text" class="validate" autocomplete="off" value="<?= $params["description"] ?>" required="true">
              <label id="lb_description" for="nameClient">Tên người mua</label>
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
                <div id="bill_type_2_content" style="display: none" class="col push-s2 s10">
                    <select id="bill_type_2" name="bill_type_2" class="select-02">
                    </select>
                </div>
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
       billTypeSelector = $("#bill_type");
       billTypeSelector.on('change', function(event) {
         event.preventDefault();
         /* Act on the event */
         $.ajax({
           url: '<?= base_url() ?>home/ajax_getBillType2/'+billTypeSelector.val(),
           type: 'GET',
           dataType: 'json',
           success:function(data){
            if (data.length > 0) {
              optionData = '<option value="" disabled selected>Chọn loại hóa đơn</option>';
              for (var i = 0; i < data.length; i++) {
                optionData += '<option value="'+data[i].pk+'">'+data[i].name+'</option>';
              }
              $("#bill_type_2").html(optionData);
              $("#bill_type_2").material_select();
              $("#bill_type_2_content").show();
            } else {
              $("#bill_type_2").html("");
              $("#bill_type_2").material_select();
              $("#bill_type_2_content").hide();
            }
           }
         });
       });
    });
</script>