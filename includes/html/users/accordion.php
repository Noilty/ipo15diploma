<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

    <div class="accrodion-regular">
        <div id="accordion1">

            <div class="card mb-2">
                <div class="card-header" id="headingEight1">
                    <h5 class="mb-0">
                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight1" aria-expanded="false" aria-controls="collapseEight">
                         <span class="fas fa-angle-down mr-3"></span>Список <b>Пользователей</b>
                     </button>
                   </h5>
                </div>
                <div id="collapseEight1" class="collapse" aria-labelledby="headingEight" data-parent="#accordion1">
                    <div class="card-body">

                      <!--accordion #3-->
                      <div class="accrodion-regular">
                          <div id="accordion3">

                              <?php require_once 'table/all-users.php'; ?>

                          </div>
                      </div>
                      <!--end accordion #3-->

                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-header" id="headingEight2">
                    <h5 class="mb-0">
                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight2" aria-expanded="false" aria-controls="collapseEight">
                         <span class="fas fa-angle-down mr-3"></span>Управление <b>Пользователями</b>
                     </button>
                   </h5>
                </div>
                <div id="collapseEight2" class="collapse" aria-labelledby="headingEight" data-parent="#accordion1">
                    <div class="card-body">

                          <div class="accrodion-regular">
                              <div id="accordion2">

                                  <div class="card mb-2">
                                      <div class="card-header" id="headingEight3">
                                          <h5 class="mb-0">
                                             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight3" aria-expanded="false" aria-controls="collapseEight">
                                               <span class="fas fa-angle-down mr-3"></span>Добавить <b>Пользователя</b>
                                           </button>
                                         </h5>
                                      </div>
                                      <div id="collapseEight3" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                          <div class="card-body">

                                              <?php echo $REGISTER_USER; ?>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="card mb-2">
                                      <div class="card-header" id="headingEight4">
                                          <h5 class="mb-0">
                                             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight4" aria-expanded="false" aria-controls="collapseEight">
                                               <span class="fas fa-angle-down mr-3"></span>Редактировать <b>Пользователя</b>
                                           </button>
                                         </h5>
                                      </div>
                                      <div id="collapseEight4" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                          <div class="card-body">

                                              <?php require_once 'table/edit-users.php'; ?>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="card mb-2">
                                      <div class="card-header" id="headingEight5">
                                          <h5 class="mb-0">
                                             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight5" aria-expanded="false" aria-controls="collapseEight">
                                               <span class="fas fa-angle-down mr-3"></span>Удалить <b>Пользователя</b>
                                           </button>
                                         </h5>
                                      </div>
                                      <div id="collapseEight5" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                          <div class="card-body">

                                              <?php require_once 'table/delete-user.php'; ?>

                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<style media="screen">
  td{width: 50%;}
  .left{
    text-align: left;
  }
  .right{
    text-align: right;
  }
</style>
