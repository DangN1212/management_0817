<div class="container addStaff">
    <div class="row">
        <h4 class="center-align">Thêm hóa đơn</h4>
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
                <div id="bill_type_2_content" style="display: none" class="col push-s2 s10">
                    <select id="bill_type_2" name="bill_type_2" class="select-02">
                    </select>
                </div>
                <div id="bill_type_2_content"  class="col push-s2 s10">
                    <select id="bill_name" name="bill_name" class="select-02">
                    <option value="0" disabled selected>Chọn tên hóa đơn</option>
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
              <i class="material-icons prefix">mode_edit</i><input name="money" id="money" type="number" class="validate" autocomplete="off" required="true">
              <label id="lb_description" for="money">Giá tiền</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i><input name="money02" id="money02" type="number" class="validate" autocomplete="off" required="true">
              <label id="lb_description" for="money02">Tỷ giá</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i><input name="value" id="value" type="number" class="validate" value="<?= $params["value"] ?>" required="true">
              <label id="lb_value" for="value">Thành tiền(Tỷ giá * Giá tiền)</label>
            </div>
          </div>
          <div class="center-align">
          <button class="btn_reset btn waves-effect waves-light" type="reset" name="action">Xóa
    <i class="material-icons right">send</i>
  </button>
          <button class="btn_submit btn waves-effect waves-light" type="submit">Thêm
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
        }),
            btnSubmit = $('.btn_submit');
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
       $("#money,#money02").keyup(function(){
        var total = $('#money').val()  * $('#money02').val();
        $('#lb_value').addClass('active');
        $('#value').val(total);
    });
    });
</script>