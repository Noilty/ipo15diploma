<?php
$PROFILE_TABLE_INFO_USER=<<<HTML
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

    <div class="card">
      	<div class="card-body">
        		<div class="row">
          			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            				<div class="media influencer-profile-data d-flex align-items-center p-2">
              					<div class="mr-4">
                            <img src="$address/assets/images/avatars/no_avatar.png" alt="User Avatar" class="user-avatar-lg">
              					</div>
              					<div class="media-body">
                						<h3 class="m-b-10">$CORE_user_surname $CORE_user_name $CORE_user_patronymic</h3>
                						<p>
                							<span class="m-r-20">ID #$CORE_user_profile_id</span>
                							<span class="m-r-20">Группа <b>$CORE_profile_group</b></span>
                						</p>
              					</div>
            				</div>
          			</div>
        		</div>
      	</div>
      	<div class="border-top card-footer p-0">
        		<div class="campaign-metrics d-xl-2inline-block" style="padding: 0px;">
          			  <table class="table" style="width: -webkit-fill-available;">
            				  <tr>
              					  <td class="right">Логин:</td>
              					  <td class="left">$CORE_user_login</td>
            				  </tr>
            				  <tr>
              					  <td class="right">Серия и Номер паспорта:</td>
              					  <td class="left">$CORE_passport_series $CORE_passport_number</td>
            				  </tr>
            				  <tr>
              					  <td class="right">Адрес проживания:</td>
              					  <td class="left">$CORE_residential_address, дом $CORE_house_number, квартира $CORE_apartment_number</td>
            				  </tr>
            				  <tr>
              					  <td class="right">Номер лицевого счёта:</td>
              					  <td class="left">$CORE_personal_account_number</td>
            				  </tr>
                      <tr>
              					  <td class="right">Количество граждан, зарегистрированных по адресу:</td>
              					  <td class="left">$CORE_quantity_citizens_registered_at</td>
            				  </tr>
                      <tr>
              					  <td class="right">Количество граждан, на которых осуществляется начисление платы за коммунальные услуги/фактически проживающих:</td>
              					  <td class="left">$CORE_quantity_citizens_registered_fees</td>
            				  </tr>
                      <tr>
              					  <td class="right">Вид собственности:</td>
              					  <td class="left">$CORE_type_property</td>
            				  </tr>
            				  <tr>
              					  <td class="right">Общая площадь помещений по лицевому счету:</td>
              					  <td class="left">$CORE_total_area_premises</td>
            				  </tr>
                      <tr>
              					  <td class="right">Размер платы за жилое помещение:</td>
              					  <td class="left">$CORE_amount_payment_residential_premises</td>
            				  </tr>
            				  <tr>
              					  <td class="right">Контактный телефон:</td>
              					  <td class="left">$CORE_contact_phone_number</td>
            				  </tr>
            				  <tr>
              					  <td class="right">Контактный E-mail:</td>
              					  <td class="left">$CORE_contact_email</td>
            				  </tr>
            				  <tr>
              					  <td class="right">Дата регистрации в системе:</td>
              					  <td class="left">$CORE_user_registration_date</td>
            				  </tr>
          			  </table>
        		</div>
      	</div>
    </div>

</div>
HTML;
?>
<style media="screen">
/*ipo15diploma*/
.info-user-cropped {
object-fit: none; /* Do not scale the image */
object-position: top; /* Center the image within the element */
height: 200px;
width: 135px;
}
td{width: 50%;}
.left{
  text-align: left;
}
.right{
  text-align: right;
}
/*end ipo15diploma*/
</style>
