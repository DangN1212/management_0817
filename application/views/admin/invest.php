    <div class="container">
        <div class="row">
            <h4 class="center-align">Xem đầu tư</h4>
            <ul id="tabs-swipe-data" class="tabs">
                <li class="tab col s3"><a href="#data-swipe-1">Thêm</a></li>
                <li class="tab col s3"><a class="active" href="#data-swipe-2">Xem tất cả</a></li>
                <li class="tab col s3"><a  href="#data-swipe-3">Xem theo thời gian</a></li>
            </ul>
            <div id="data-swipe-1" class="col s12">
                <form action="" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <input required="true" name="dateInput" type="text" class="dateInput" id="dateInput" placeholder="Năm/Tháng/Ngày">
                            <label for="dateInput">Thời gian</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input required="true" name="description" id="name" type="text" class="validate">
                            <label for="name">Chi tiết</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input required="true" name="value" id="value" type="number" min="0" class="validate">
                            <label for="price">Số tiền</label>
                        </div>
                    </div>
                    <div class="row center-align">
                        <button type="submit" name="submit" class="btn waves-effect waves-light">Thêm <i class="material-icons right">send</i></button>
                    </div>
                </form>
            </div>
            <div id="data-swipe-2" class="col s12">
                <div class="box-data center-align">
                    <div class="row text_b">
                        <p class="col s3">Ngày</p>
                        <p class="col s7">Chi tiết</p>
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
                                <p class="col s3"><?= $value->dateInput ?></p>
                                <p class="col s7"><?= $value->description ?></p>
                                <p class="col s2"><?= $value->value ?></p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div id="data-swipe-3" class="col s12">
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
                        <p class="col s3">Ngày</p>
                        <p class="col s7">Chi tiết</p>
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
                                <p class="col s3"><?= $value->dateInput ?></p>
                                <p class="col s7"><?= $value->description ?></p>
                                <p class="col s2"><?= $value->value ?></p>
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
    $(document).ready(function() {
        var cleave = new Cleave('#date1', {
            date: true,
            datePattern: ['Y', 'm', 'd']
        });

        var cleave = new Cleave('#date2', {
            date: true,
            datePattern: ['Y', 'm', 'd']
        });

        var cleave = new Cleave('#dateInput', {
            date: true,
            datePattern: ['Y', 'm', 'd']
        });
    });
    </script>