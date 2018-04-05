
<header class="masthead" style="background-image: url('/public/images/contact-bg.jpg')">
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
                        <input type="text" class="form-control field" id="name" name="name" placeholder="name" data-error="name!" >
                        <div class="message"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="password" name="password" placeholder="password" data-error="password!" >
                        <div class="message"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <textarea rows="5" type="text" class="form-control field" id="text" name="text" placeholder="message" data-error="message!" ></textarea>
                        <div class="message"></div>
                    </div>
                </div>
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="text" class="form-control" name="name" placeholder="Имя" required></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="email" class="form-control" name="email" placeholder="E-mail" required></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><textarea rows="5" class="form-control" name="text" placeholder="Сообщение" maxlength="350" required></textarea></p>-->
<!--                    </div>-->
<!--                </div>-->
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="sendMessageButton">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>