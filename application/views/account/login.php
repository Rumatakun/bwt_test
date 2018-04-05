
<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Логин</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <form id="myform" action="/login">
            <div class = "input">
                <input type="text" name="email" id="email"  class="field" data-error="Email!" placeholder="Email">
                <div class="message"></div>
                <input type="text" name="password" id="password"  class="field" data-error="password!" placeholder="passowrd">
                <div class="message"></div>
<!--                <label for="inp2">Inp2</label>-->
<!--                <input type="text" name="inp2" id="inp2"  class="field" data-error="Limit!">-->
<!--                <div class="message"></div>-->
            </div>

            <button>Submit</button>
        </form>
<!--        <div class="col-lg-8 col-md-10 mx-auto">-->
<!--            <form action="/login" method="post">-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="email" class="form-control" name="email" placeholder="E-mail" required ></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="password" class="form-control" name="password" placeholder="password"  required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <br>-->
<!--                <div id="success"></div>-->
<!--                <div class="form-group">-->
<!--                    <button type="submit" class="btn btn-secondary" id="sendMessageButton">Отправить</button>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
    </div>
</div>