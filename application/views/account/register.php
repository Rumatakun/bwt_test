
<header class="masthead" style="">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Регистрация</h1>
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
                        <input type="text" class="form-control field" id="email" name="email" placeholder="email" data-error="email!" >
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
                        <input type="text" class="form-control field" id="password2" name="password2" placeholder="repeat password" data-error="repeat password!" >
                        <div class="message"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="name" name="name" placeholder="name" data-error="name!" >
                        <div class="message"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="surname" name="surname" placeholder="surname" data-error="surname!" >
                        <div class="message"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="radio" name="gender" id="gender" value="male" name="gender" data-error="gender!"> Male
                        <input type="radio" name="gender" id="gender" value="female" name="gender" data-error="gender!"> Female
                        <div class="message"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input form-group floating-label-form-group controls">
                        <input type="text" class="form-control field" id="birthday" name="birthday" placeholder="birthday" data-error="birthday!" >
                        <div class="message"></div>
                    </div>
                </div>

<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="text" class="form-control" name="name" placeholder="Имя"  ></p>-->
<!--                        <div class="message"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="text" class="form-control" name="surname" placeholder="Фамилия" ></p>-->
<!--                        <div class="message"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <input type="email" id="email" class="inp1 form-control" name="email" placeholder="E-mail" data-error="Email!">-->
<!--                        <div class="message"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <input type="password" class="form-control" name="password" placeholder="password"  data-error="password!">-->
<!--                        <div class="message"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="password" class="form-control" name="password2" placeholder="repeat password"  ></p>-->
<!--                        <div class="message"></div>-->
<!--                    </div>-->
<!--                </div>-->
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary name='do_signup' id="sendMessageButton">Зарегестрироваться</button>
                </div>
            </form>
        </div>
    </div>
</div>