<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <!--accordion #1-->
    <div class="accrodion-regular">
        <div id="accordion1">
            <!--Состояние Cчётчиков-->
            <div class="card mb-2">
                <div class="card-header" id="headingEight1_1">
                    <h5 class="mb-0">
                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight1_1" aria-expanded="false" aria-controls="collapseEight">
                         <span class="fas fa-angle-down mr-3"></span>Состояние <b>Cчётчиков</b>
                     </button>
                   </h5>
                </div>
                <div id="collapseEight1_1" class="collapse" aria-labelledby="headingEight" data-parent="#accordion1">
                    <div class="card-body">
                        <p style="margin: 0px;text-align: center;">
                            <span class="badge badge-pill badge-success" style="padding: 5px;"><b>Новое ЗНАЧЕНИЕ</b></span>
                            <span class="badge badge-pill badge-brand" style="padding: 5px;"><b>Старое ЗНАЧЕНИЕ</b></span>
                        </p>
                        <hr style="margin: 20px 0px 0px 0px;" />
                        <?php include_once 'table/condition.php'; ?>
                        <hr />
                        <!--accordion #3-->
                        <div class="accrodion-regular">
                            <div id="accordion3">
                                <!--Внести показания-->
                                <div class="card mb-2">
                                    <div class="card-header" id="headingEight3_1">
                                        <h5 class="mb-0">
                                           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight3_1" aria-expanded="false" aria-controls="collapseEight">
                                             <span class="fas fa-angle-down mr-3"></span>Внести показания
                                         </button>
                                       </h5>
                                    </div>
                                    <div id="collapseEight3_1" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                        <div class="card-body">

                                            <?php echo $ADD_PENANCE; ?>
                                            <?php echo $mess_PENANCE; ?>

                                        </div>
                                    </div>
                                </div>
                                <!--end Внести показания-->
                            </div>
                        </div>
                        <!--end accordion #3-->

                    </div>
                </div>
            </div>
            <!--end Состояние Cчётчиков-->
            <!--История показаний Cчётчиков-->
            <div class="card mb-2">
                <div class="card-header" id="headingEight1_2">
                    <h5 class="mb-0">
                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight1_2" aria-expanded="false" aria-controls="collapseEight">
                         <span class="fas fa-angle-down mr-3"></span>История показаний <b>Cчётчиков</b>
                     </button>
                   </h5>
                </div>
                <div id="collapseEight1_2" class="collapse" aria-labelledby="headingEight" data-parent="#accordion1">
                    <div class="card-body">

                      <!--accordion #2-->
                      <div class="accrodion-regular">
                          <div id="accordion2">
                              <!--Показания в обработке-->
                              <div class="card mb-2">
                                  <div class="card-header" id="headingEight2_1">
                                      <h5 class="mb-0">
                                         <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight2_1" aria-expanded="false" aria-controls="collapseEight">
                                           <span class="fas fa-angle-down mr-3"></span>Показания в обработке
                                       </button>
                                     </h5>
                                  </div>
                                  <div id="collapseEight2_1" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                      <div class="card-body">

                                          <?php include_once 'table/processing.php'; ?>

                                      </div>
                                  </div>
                              </div>
                              <!--end Показания в обработке-->
                              <!--ХВС-->
                              <div class="card mb-2">
                                  <div class="card-header" id="headingEight2_2">
                                      <h5 class="mb-0">
                                         <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight2_2" aria-expanded="false" aria-controls="collapseEight">
                                           <span class="fas fa-angle-down mr-3"></span>ХВС
                                       </button>
                                     </h5>
                                  </div>
                                  <div id="collapseEight2_2" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                      <div class="card-body">

                                          <?php require_once 'table/penance-history/xvs.php'; ?>

                                      </div>
                                  </div>
                              </div>
                              <!--end ХВС-->
                              <!--ГВС-->
                              <div class="card mb-2">
                                  <div class="card-header" id="headingEight2_3">
                                      <h5 class="mb-0">
                                         <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight2_3" aria-expanded="false" aria-controls="collapseEight">
                                           <span class="fas fa-angle-down mr-3"></span>ГВС
                                       </button>
                                     </h5>
                                  </div>
                                  <div id="collapseEight2_3" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                      <div class="card-body">

                                          <?php require_once 'table/penance-history/gvs.php'; ?>

                                      </div>
                                  </div>
                              </div>
                              <!--end ГВС-->
                          </div>
                      </div>
                      <!--end accordion #2-->

                    </div>
                </div>
            </div>
            <!--end История показаний Cчётчиков-->
        </div>
    </div>
    <!--end accordion #1-->
</div>
