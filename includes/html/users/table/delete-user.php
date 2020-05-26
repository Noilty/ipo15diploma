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
              <td><a href='#' data-toggle='modal' data-target='#exampleModal".$row['db_user_profile_id']."delete'>Удалить</a></td>
          </tr>
          <div style='padding-right: 0px;' class='modal fade' id='exampleModal".$row['db_user_profile_id']."delete' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
              <div style='max-width: 660px;' class='modal-dialog' role='document'>
                  <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' data-toggle='tooltip' data-placement='right' title='NaN'>
                          ".$row['db_user_surname'].' '.$row['db_user_name'].' '.$row['db_user_patronymic']."
                        </h5>
                      </div>
                      <div class='modal-body' style='text-align: center;'>
                          <div class='alert alert-info' role='alert' style='text-align: center;'>Обратите внимание что удаление пользователя на данный момент не обратимое действие</div>
                          <h3>Удалить пользователя <b>".$row['db_user_surname'].' '.$row['db_user_name'].' '.$row['db_user_patronymic']."</b>?</h3>
                      </div>
                      <div class='modal-footer'>
                          <a href='#' class='btn btn-success' data-dismiss='modal'>Удалить</a>
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
