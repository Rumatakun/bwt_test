
<header class="masthead" style="">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">

                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form id="myform" action="/singup" method="post">
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="email" name="email" placeholder="email" value="<?php echo @$data['email']?>" >
                        <div class="message"><?php echo @$errors['email']?></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="password" name="password" placeholder="password"  >
                        <div class="message"><?php echo @$errors['password']?></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="password2" name="password2" placeholder="repeat password"  >
                        <div class="message"><?php echo @$errors['password2']?></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="name" name="name" placeholder="name" value="<?php echo @$data['name']?>" >
                        <div class="message"><?php echo @$errors['name']?></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="surname" name="surname" placeholder="surname" value="<?php echo @$data['surname']?>" >
                        <div class="message"><?php echo @$errors['surname']?></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <select name="gender" id="gender" class="form-control field">
                            <<option value="male" selected="selected" disabled>Choose your gender</option>
                            <<option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="message"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="birthday" name="birthday" placeholder="birthday yyyy-mm-dd" value="<?php echo @$data['birthday']?>" >
                        <div class="message"><?php echo @$errors['birthday']?></div>
                    </div>
                </div>
                <input type="hidden"  id="js" name="js" value="off">
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" name='do_signup' id="sendMessageButton">Зарегестрироваться</button>
                </div>
            </form>
        </div>
    </div>
</div>