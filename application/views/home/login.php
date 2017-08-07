    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="box-login col s4 push-s4 center-align">
                    <h4>Đăng nhập</h4>
                    <div class="row">
                        <div class="input-field col s12">
                            <p> <font color="red"> <?= $error ?> </font></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input name="username" id="user" type="text" class="validate" required="true">
                            <label for="user" data-error="Tên đăng nhập không đúng">Tên đăng nhập</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">https</i>
                            <input name="password" id="password" type="password" class="validate" required="true">
                            <label for="password" data-error="Sai mật khẩu">Mật khẩu</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Đăng nhập
                        <i class="material-icons right">send</i>
                </div>
        </div>
        </form>
    </div>