<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

    <div class="accrodion-regular">
        <!--accordion1-->
        <div id="accordion1">
            <!---->
            <div class="card mb-2">
                <div class="card-header" id="heading1_1">
                    <h5 class="mb-0">
                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1_1" aria-expanded="false" aria-controls="collapse1_1">
                         <span class="fas fa-angle-down mr-3"></span>Показания ожидающие обработки
                     </button>
                   </h5>
                </div>
                <div id="collapse1_1" class="collapse" aria-labelledby="heading1_1" data-parent="#accordion1">
                    <div class="card-body">

                        <!--accordion2-->
                        <div id='accordion2'>
                            <?php require_once 'processing-meter-all.php'; ?>
                        </div>
                        <!--end accordion2-->

                    </div>
                </div>
            </div>
            <!--end-->
            <!---->
            <div class="card mb-2">
                <div class="card-header" id="heading1_2">
                    <h5 class="mb-0">
                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1_2" aria-expanded="false" aria-controls="collapse1_2">
                         <span class="fas fa-angle-down mr-3"></span>Обработанные показания
                     </button>
                   </h5>
                </div>
                <div id="collapse1_2" class="collapse" aria-labelledby="heading1_2" data-parent="#accordion1">
                    <div class="card-body">

                      <!--accordion3-->
                      <div id='accordion3'>
                          <?php require_once 'processed-readings.php'; ?>
                      </div>
                      <!--end accordion3-->

                    </div>
                </div>
            </div>
            <!--end-->
        </div>
        <!--end accordion1-->
    </div>

</div>
