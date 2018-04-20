
<header class="masthead">
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
            <form id="myform" action="/login" method="post">
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="email" name="email" placeholder="email" value="<?php echo @$data['email']?>" >
                        <div class="message"></div>
                        <div class="message error"><?php echo @$errors['email']?></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="password" name="password" placeholder="password"  >
                        <div class="message"></div>
                        <div class="message "><?php echo @$errors['password']?></div>
                    </div>
                </div>
                <input type="hidden"  id="js" name="js" value="off">
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary"  id="sendMessageButton">Log in</button>
                </div>
                <?php

                ?>
            </form>
        </div>
    </div>
</div>