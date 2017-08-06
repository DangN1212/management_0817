<div class="container addStaff">
    <div class="row">
        <h3 class="center-align">Thêm thu nhập</h3>
        <form class="col s6 offset-s3">
          <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                  <input type="text" class="dateInput" id="dateInput" placeholder="Ngày/Tháng/Năm">
                  <label for="dateInput">Thời gian</label>
            </div>
          </div>

          <div class="row">
              <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
                <select>
              <option value="" disabled selected>Chọn loại chi phí</option>
              <option value="1">Chi phí mua hàng</option>
              <option value="2">Chi phí thuê lao động</option>
              <option value="3">Chi phí hoạt động</option>
            </select>
            <label>Loại hóa đơn</label>
          </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i><input id="name_bill" type="text" class="validate" autocomplete="off">
              <label for="name_bill">Thông tin chi tiết</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i><input id="price" type="number" class="validate">
              <label for="price">Đơn giá</label>
            </div>
          </div>
          <div class="center-align">
          <button class="btn waves-effect waves-light" type="reset" name="action">Xóa
    <i class="material-icons right">send</i>
  </button>
          <button class="btn waves-effect waves-light" type="submit" name="action">Thêm
    <i class="material-icons right">send</i>
  </button>
  </div>
    </form>

    </div>
</div>