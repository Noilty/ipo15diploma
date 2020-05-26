<table class="table">
    <thead>
        <tr>
            <th style="width: 100%;">Пользователь</th>
            <th>Действие</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql_request = "SELECT * FROM db_users";
        $request_result = mysqli_query($link, $sql_request);
        $row = mysqli_fetch_array($request_result);
        do {
          printf("
          <tr>
              <td>".$row['db_user_surname'].' '.$row['db_user_name'].' '.$row['db_user_patronymic']."</td>
              <td><a href='#' data-toggle='modal' data-target='#exampleModal".$row['db_user_profile_id']."edit'>Редактировать</a></td>
          </tr>
          <div style='padding-right: 0px;' class='modal fade' id='exampleModal".$row['db_user_profile_id']."edit' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
              <div style='max-width: 660px;' class='modal-dialog' role='document'>
                  <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' data-toggle='tooltip' data-placement='right' title='NaN'>
                          ".$row['db_user_surname'].' '.$row['db_user_name'].' '.$row['db_user_patronymic']."
                        </h5>
                      </div>
                      <div class='modal-body' style='text-align: left;'>

                          <form id='login' action='$address/#' method='post'>
                              <!--Фамилия-->
                              <div class='form-group'>
                                  <input class='form-control' style='text-align: center;' placeholder='Фамилия' name='user_surname' type='text'>
                              </div>
                              <!--Имя-->
                              <div class='form-group'>
                                  <input class='form-control' style='text-align: center;' placeholder='Имя' name='user_name' type='text'>
                              </div>
                              <!--Отчество-->
                              <div class='form-group'>
                                  <input class='form-control' style='text-align: center;' placeholder='Отчество' name='user_patronymic' type='text'>
                              </div>
                              <div class='form-group'>
                                  <div class='row'>
                                      <!--Серия/Номер паспорта-->
                                      <div class='col-xl-6  form-group' style='padding: 0px 5px 0px 15px;'>
                                          <input id='passport_series' class='form-control' style='text-align: center;' placeholder='Серия паспорта' name='passport_series' type='text'>
                                      </div>
                                      <div class='col-xl-6' style='padding: 0px 15px 0px 5px;'>
                                          <input id='passport_number' class='form-control' style='text-align: center;' placeholder='Номер паспорта' name='passport_number' type='text'>
                                      </div>
                                      <div class='col-xl-6' style='padding: 0px 5px 0px 15px;'>
                                          <input id='house_number' class='form-control' style='text-align: center;' placeholder='Номер Дома' name='house_number' type='text'>
                                      </div>
                                      <div class='col-xl-6' style='padding: 0px 15px 0px 5px;'>
                                          <input id='apartment_number' class='form-control' style='text-align: center;' placeholder='Номер Квартиры' name='apartment_number' type='text'>
                                      </div>
                                  </div>
                              </div>
                              <!--Адрес проживания-->
                              <div class='form-group'>
                                  <select name='select_residential_address' class='form-control'>
                                      <optgroup label='Адрес проживания'>
                                          <option value='Братск, ул. Вокзальная'>Братск, ул. Вокзальная</option>
                                      </optgroup>
                                  </select>
                              </div>
                              <!--Номер лицевого счёта-->
                              <div class='form-group'>
                                  <input type='text' name='personal_account_number' id='personal_account_number' class='form-control' style='text-align: center;' placeholder='Номер лицевого счёта (Обычно совпадает с номером квартиры)'>
                              </div>
                              <!--Количество граждан, зарегистрированных по адресу-->
                              <div class='form-group'>
                                  <input type='text' name='quantity_citizens_registered_at' class='form-control' style='text-align: center;' placeholder='Количество граждан, зарегистрированных по адресу' onkeyup='this.value = this.value.replace (/[^0-9+.]/, '')'>
                              </div>
                              <!--Количество граждан, на которых осуществляется начисление платы за коммунальные услуги/фактически проживающих-->
                              <div class='form-group'>
                                  <input type='text' name='quantity_citizens_registered_fees' class='form-control' style='text-align: center;' placeholder='Количество граждан, на которых осуществляется начисление платы за коммунальные услуги/фактически проживающих' onkeyup='this.value = this.value.replace (/[^0-9+.]/, '')'>
                              </div>
                              <!--Вид собственности-->
                              <div class='form-group'>
                                  <select name='select_type_property' class='form-control'>
                                      <optgroup label='Вид собственности'>
                                          <option value='Приватизированная'>Приватизированная</option>
                                      </optgroup>
                                  </select>
                              </div>
                              <!--Общая площадь помещений по лицевому счёту-->
                              <div class='form-group'>
                                  <input type='text' name='total_area_premises' class='form-control' style='text-align: center;' placeholder='Общая площадь помещений по лицевому счёту' onkeyup='this.value = this.value.replace (/[^0-9+.]/, '')'>
                              </div>
                              <!--Размер платы за жилое помещение-->
                              <div class='form-group'>
                                  <input type='text' name='amount_payment_residential_premises' class='form-control' style='text-align: center;' placeholder='Размер платы за жилое помещение' onkeyup='this.value = this.value.replace (/[^0-9+.]/, '')'>
                              </div>
                              <!--Контактный телефон-->
                              <div class='form-group'>
                                  <input type='text' name='contact_phone_number' id='contact_phone_number' class='form-control' style='text-align: center;' placeholder='Контактный телефон'>
                              </div>
                              <!--E-mail-->
                              <div class='form-group'>
                                  <input type='email' name='contact_email' class='form-control' style='text-align: center;' placeholder='E-mail' im-insert='true'>
                              </div>
                              <!--Пароль-->
                              <div class='form-group'>
                                  <input type='password' name='user_password' class='form-control' style='text-align: center;' placeholder='Пароль'>
                              </div>
                              <!--Ведите пароль снова-->
                              <div class='form-group'>
                                  <input type='password' name='re_password' class='form-control' style='text-align: center;' placeholder='Ведите пароль снова'>
                              </div>
                          </form>

                      </div>
                      <div class='modal-footer'>
                          <a href='#' class='btn btn-success' data-dismiss='modal'>Сохранить изменения</a>
                          <a href='#' class='btn btn-secondary widthBTN' data-dismiss='modal'>Закрыть</a>
                      </div>
                  </div>
              </div>
          </div>
          ");
        } while ($row=mysqli_fetch_array($request_result));
        ?>

    </tbody>
</table>
