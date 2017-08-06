<div class="container addStaff">
    <div class="row">
        <h4 class="center-align">Thêm nhân viên</h4>
        <form class="col s6 offset-s3" method="post" accept-charset="utf-8">
	          <div class="row">
	            <div class="input-field col s12">
	              <i class="material-icons prefix">mode_edit</i><input id="name" type="text" name="fullname" value="<?= $params["fullname"] ?>" class="validate" required="true">
	              <label id="lb_fullname" for="name">Họ tên</label>
	            </div>
	          </div>
	          <div class="row">
	              <div class="input-field col s12">
	              <i class="material-icons prefix">mode_edit</i><input id="username" type="text" name="username" value="<?= $params["username"] ?>" class="validate" required="true">
	              <label id="lb_username" for="username">Tên đăng nhập</label>
	            </div>
	          </div>
	          <div class="row">
	            <div class="input-field col s12">
	              <i class="material-icons prefix">https</i><input id="password" type="password" name="password" value="<?= $params["password"] ?>" class="validate" required="true">
	              <label id="lb_password" for="password">Mật khẩu</label>
	            </div>
	          </div>
	          <div class="row">
	            <div class="input-field col s12">
	              <i class="material-icons prefix">https</i><input id="password_r" type="password" name="password_r" value="<?= $params["password_r"] ?>" class="validate" required="true">
	              <label id="lb_password_r" for="password_r">Nhập lại mật khẩu</label>
	            </div>
	          </div>
	          <div class="row">
	            <div class="input-field col s12">
	              <i class="material-icons prefix">mail_outline</i><input id="email" type="email" name="email" value="<?= $params["email"] ?>" class="validate" required="true">
	              <label id="lb_email" for="email" data-error="wrong" data-success="right">Email</label>
	            </div>
	          </div>
	          <div class="row">
	              	<div class="input-field col s12">
		              <i class="material-icons prefix">mode_edit</i>
		                <select name="type" required="true">
			              <option value="2" <?php echo ($params["type"] == 2) ? "selected" : "" ?> >Staff</option>
			              <option value="1" <?php echo ($params["type"] == 1) ? "selected" : "" ?> >Manager</option>
			            </select>
		            	<label id="lb_type">Loại tài khoản</label>
		          	</div>
	          </div>
	          <div class="row">
	            <div class="input-field col s12">
	              <i class="material-icons prefix">contact_phone</i><input id="tel" type="tel" name="tel" value="<?= $params["tel"] ?>" class="validate" required="true">
	              <label  id="lb_tel" for="tel">Số điện thoại</label>
	            </div>
	          </div>
	          <div class="row">
	            <div class="input-field col s12">
	              <i class="material-icons prefix">my_location</i><input id="address" type="text" name="address" value="<?= $params["address"] ?>" value="<?= $params["address"] ?>" class="validate" required="true">
	              <label id="lb_address" for="address">Địa chỉ</label>
	            </div>
	          </div>
	        <div class="center-align">
		        <button class="btn waves-effect waves-light" type="submit" name="submit" value="true">Thêm<i class="material-icons right">send</i>
				</button>
  			</div>
    </form>

    </div>
</div>
<script>
   $( document ).ready(function() {
   		isScroll = 0;
       	$('select').material_select();
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