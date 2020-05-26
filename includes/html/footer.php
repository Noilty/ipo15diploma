<?php
//include 'modal-window.php';
$today = date("Y");
$FOOTER=<<<HTML
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" style="text-align: left;">Copyright © 2019<br />
        <a href="http://ipo15diploma.ezyro.com/"><b class="text-success">ipo15diploma.com</b></a> or <a href="https://ipo15diploma.000webhostapp.com/"><b class="text-success">ipo15diploma.com</b></a> Template by <a href="https://colorlib.com/wp/">Colorlib</a>.
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="text-md-right footer-links d-none d-sm-block">
            <a href="#" data-toggle="modal" data-target="#exampleModal">О системе</a>
            <a href="javascript: void(0);">Служба поддержки</a><br />
            <a href="javascript: void(0);">Форма обратной связи</a>
        </div>
    </div>
</div>
<div style="padding-right: 0px;" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div style="max-width: 660px;" class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" data-toggle="tooltip" data-placement="right" title="$system_name $type">О системе: $CORE_system_name_type</h5>
            </div>
            <div class="modal-body" style="text-align: left;">
                NaN
                <p>Версия: $system_version</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary" data-dismiss="modal">Закрыть</a>
            </div>
        </div>
    </div>
</div>
HTML;
?>
