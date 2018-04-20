<header class="masthead"">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading text-center">
                <h1>Погода в Запорожье</h1>
                <span class="subheading font-weight-bold"><?='на'.(date(' Y.m.d')) ?></span>
            </div>
        </div>
    </div>
</div>
</header>
<class="container">
    <div>
        <table class="table table-dark text-center">
            <thead >
            <tr>
                <th scope="col"></th>
                <th scope="col" ">Характеристики погоды, атмосферные явления</th>
                <th scope="col">Tемпература воздуха, °C</th>
                <th scope="col">Атм. давл., мм рт. ст.</th>
                <th scope="col" colrow="2">Ветер, м/с</th>
                <th></th>
                <th>Влажность воздуха, %</th>
                <th>Ощущается, °C</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">Ночь</th>
                    <td scope="row"><?php echo $Night_clouds ?></td>
                    <td scope="row"><?php echo $Night_temp ?></td>
                    <td scope="row"><?php echo $Night_pressure ?></td>
                    <td scope="row"><?php echo $Night_wind_direction ?></td>
                    <td scope="row"><?php echo $Night_wind_speed ?></td>
                    <td scope="row"><?php echo $Night_moisture ?></td>
                    <td scope="row"><?php echo $Night_Feels ?></td>
                </tr>
                <tr>
                    <th scope="col">Утро</th>
                    <td scope="row"><?php echo $Morning_clouds ?></td>
                    <td scope="row"><?php echo $Morning_temp ?></td>
                    <td scope="row"><?php echo $Morning_pressure ?></td>
                    <td scope="row"><?php echo $Morning_wind_direction ?></td>
                    <td scope="row"><?php echo $Morning_wind_speed ?></td>
                    <td scope="row"><?php echo $Morning_moisture ?></td>
                    <td scope="row"><?php echo $Morning_Feels ?></td>
                </tr>
                <tr>
                    <th scope="col">День</th>
                    <td scope="row"><?php echo $Day_clouds ?></td>
                    <td scope="row"><?php echo $Day_temp ?></td>
                    <td scope="row"><?php echo $Day_pressure ?></td>
                    <td scope="row"><?php echo $Day_wind_direction ?></td>
                    <td scope="row"><?php echo $Day_wind_speed ?></td>
                    <td scope="row"><?php echo $Day_moisture ?></td>
                    <td scope="row"><?php echo $Day_Feels ?></td>
                </tr>
                <tr>
                    <th scope="col">Вечер</th>
                    <td scope="row"><?php echo $Evening_clouds ?></td>
                    <td scope="row"><?php echo $Evening_temp ?></td>
                    <td scope="row"><?php echo $Evening_pressure ?></td>
                    <td scope="row"><?php echo $Evening_wind_direction ?></td>
                    <td scope="row"><?php echo $Evening_wind_speed ?></td>
                    <td scope="row"><?php echo $Evening_moisture ?></td>
                    <td scope="row"><?php echo $Evening_Feels ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>