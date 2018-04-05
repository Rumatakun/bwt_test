<header class="masthead"">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h1>Погода</h1>
                <span class="subheading"></span>
            </div>
        </div>
    </div>
</div>
</header>
<class="container">
    <p><?php  echo $Night_temp;
    //foreach ($this->model->weather as weather):debug($weather);
       // debug( $this-> ;
        //debug(weather);
    ?></p>
    <div>
        <table>
            <thead>
            <tr>
                <th></th>
                <th>Характеристики погоды, атмосферные явления</th>
                <th>Tемпература воздуха, °C</th>
                <th>Атм. давл., мм рт. ст.</th>
                <th>Ветер,
                    м/с</th>
                <th></th>
                <th>Влажность воздуха, %</th>
                <th>Ощущается, °C</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Ночь</th>
                    <td><?php echo $Night_clouds ?></td>
                    <td><?php echo $Night_temp ?></td>
                    <td><?php echo $Night_pressure ?></td>
                    <td><?php echo $Night_wind_direction ?></td>
                    <td><?php echo $Night_wind_speed ?></td>
                    <td><?php echo $Night_moisture ?></td>
                    <td><?php echo $Night_Feels ?></td>
                </tr>
                <tr>
                    <th>Утро</th>
                    <td><?php echo $Morning_clouds ?></td>
                    <td><?php echo $Morning_temp ?></td>
                    <td><?php echo $Morning_pressure ?></td>
                    <td><?php echo $Morning_wind_direction ?></td>
                    <td><?php echo $Morning_wind_speed ?></td>
                    <td><?php echo $Morning_moisture ?></td>
                    <td><?php echo $Morning_Feels ?></td>
                </tr>
                <tr>
                    <th>День</th>
                    <td><?php echo $Day_clouds ?></td>
                    <td><?php echo $Day_temp ?></td>
                    <td><?php echo $Day_pressure ?></td>
                    <td><?php echo $Day_wind_direction ?></td>
                    <td><?php echo $Day_wind_speed ?></td>
                    <td><?php echo $Day_moisture ?></td>
                    <td><?php echo $Day_Feels ?></td>
                </tr>
                <tr>
                    <th>Вечер</th>
                    <td><?php echo $Evening_clouds ?></td>
                    <td><?php echo $Evening_temp ?></td>
                    <td><?php echo $Evening_pressure ?></td>
                    <td><?php echo $Evening_wind_direction ?></td>
                    <td><?php echo $Evening_wind_speed ?></td>
                    <td><?php echo $Evening_moisture ?></td>
                    <td><?php echo $Evening_Feels ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>