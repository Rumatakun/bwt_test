
<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Напишите мне</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form id="myform" action="/contact" method="post">
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="name" name="name" placeholder="name" value="<?php echo @$data['name']?>" >
                        <div class="message"><?php echo @$errors['name']?></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="email" name="email" placeholder="email" value="<?php echo @$data['email']?>" >
                        <div class="message"><?php echo @$errors['email']?></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <textarea rows="5" type="text" class="form-control field" id="text" name="message" placeholder="message"><?php echo @$data['message']?></textarea>
                        <div class="message"><?php echo @$errors['message']?></div>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="sendMessageButton">Отправить</button>
                </div>
                <img src="public/scripts/capcha.php" />
                <div class="control-group">
                    <input class="input" class="form-control field" type="text" name="code" id='code' />
                    <div class="message"><?php echo @$errors['code']?></div>
                </div>
<!--                <a href="javascript:void(0);" onclick="document.getElementById('code').src='public/scripts/capcha.php?rnd=' + Math.random();">Обновить капчу</a>-->

            </form>
            <form method="post" >

            </form>
        </div>
    </div>
</div>