<?php
$sql_request = "SELECT * FROM db_users";
$request_result = mysqli_query($link, $sql_request);
$row = mysqli_fetch_array($request_result);
do {
  printf("
  <!--USER #".$row['db_user_profile_id']."-->
  <div class='card mb-2'>
      <div class='card-header' id='heading3_".$row['db_user_profile_id']."'>
          <h5 class='mb-0'>
             <button class='btn btn-link collapsed' data-toggle='collapse' data-target='#collapse3_".$row['db_user_profile_id']."' aria-expanded='false' aria-controls='collapse3_".$row['db_user_profile_id']."'>
                <span class='fas fa-angle-down mr-3'></span>".$row['db_user_surname'].' '.$row['db_user_name'].' '.$row['db_user_patronymic']."</b>
             </button>
         </h5>
      </div>
      <div id='collapse3_".$row['db_user_profile_id']."' class='collapse' aria-labelledby='heading3_1' data-parent='#accordion3'>
          <div class='card-body'>

          <!--INFA USER-->
          <div class='card'>
              <div class='card-body'>
                  <div class='row'>
                      <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                          <div class='media influencer-profile-data d-flex align-items-center p-2'>
                              <div class='mr-4'>
                                    <img src='$address/assets/images/avatars/no_avatar.png' alt='User Avatar' class='user-avatar-lg'>
                              </div>
                              <div class='media-body'>
                                <h3 class='m-b-10'>".$row['db_user_surname'].' '.$row['db_user_name'].' '.$row['db_user_patronymic']."</h3>
                                  <p>
                                    <span class='m-r-20'>ID #<b>".$row['db_user_profile_id']."</b></span>
                                    <span class='m-r-20'>Группа <b>NaN</b></span>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class='border-top card-footer p-0'>
                  <div class='campaign-metrics d-xl-2inline-block' style='padding: 0px;'>
                      <table class='table' style='width: -webkit-fill-available;;'>
                          <tr>
                              <td class='right'>Логин:</td>
                              <td class='left'>".$row['db_user_login']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Серия и Номер паспорта:</td>
                              <td class='left'>".$row['db_user_passport_series'].' '.$row['db_user_passport_number']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Адрес проживания:</td>
                              <td class='left'>".$row['db_user_residential_address'].', дом '.$row['db_user_house_number'].', квартира '.$row['db_user_apartment_number']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Номер лицевого счёта:</td>
                              <td class='left'>".$row['db_user_personal_account_number']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Количество граждан, зарегистрированных по адресу:</td>
                              <td class='left'>".$row['db_user_quantity_citizens_registered_at']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Количество граждан, на которых осуществляется начисление платы за коммунальные услуги/фактически проживающих:</td>
                              <td class='left'>".$row['db_user_quantity_citizens_registered_fees']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Вид собственности:</td>
                              <td class='left'>".$row['db_user_type_property']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Общая площадь помещений по лицевому счету:</td>
                              <td class='left'>".$row['db_user_total_area_premises']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Размер платы за жилое помещение:</td>
                              <td class='left'>".$row['db_user_amount_payment_residential_premises']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Контактный телефон:</td>
                              <td class='left'>".$row['db_user_contact_phone_number']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Контактный E-mail:</td>
                              <td class='left'>".$row['db_user_contact_email']."</td>
                          </tr>
                          <tr>
                              <td class='right'>Дата регистрации в системе:</td>
                              <td class='left'>".$row['db_user_registration_date']."</td>
                          </tr>
                      </table>
                  </div>
              </div>

          </div>
          <!--end INFA USER-->

          </div>
      </div>
  </div>
  <!--end USER #".$row['db_user_profile_id']."-->
  ");
} while ($row=mysqli_fetch_array($request_result));
?>
