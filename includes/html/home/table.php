<?php
$TABLE_TARIFF=<<<HTML
<div class="col-lg-6">
    <div class="card">
        <h5 class="card-header">Тариф</h5>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th scope="col">Наименование</th>
                      <th scope="col" style="width: 15%;text-align: center;"><span class="badge badge-pill badge-success">&nbsp;&nbsp;</span></th>
                      <th scope="col" style="width: 15%;text-align: center;"><span class="badge badge-pill badge-brand">&nbsp;&nbsp;</span></th>
                      <th scope="col" style="width: 16%;text-align: center;">Разница</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">Плата за жилое помещение</th>
                      <td style="text-align: center;">$CORE_tarif[0]</td>
                      <td style="text-align: center;">$CORE_tarif[1]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_plata_z_z_p_tarif[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_plata_z_z_p_tarif[0] bg-$CORE_raznitsa_plata_z_z_p_tarif[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_plata_z_z_p_tarif[1]"></i></span><span class="ml-1">$CORE_raznitsa_plata_z_z_p_tarif[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row"><a title="ХОЛОДНОЕ ВОДОСНАБЖЕНИЕ">ХВС</a></th>
                      <td style="text-align: center;">$CORE_tarif[2]</td>
                      <td style="text-align: center;">$CORE_tarif[3]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_tarif[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_tarif[0] bg-$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_tarif[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_tarif[1]"></i></span><span class="ml-1">$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_tarif[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">Отведение сточных вод</th>
                      <td style="text-align: center;">$CORE_tarif[4]</td>
                      <td style="text-align: center;">$CORE_tarif[5]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_otvedeniye_s_v_tarif[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_otvedeniye_s_v_tarif[0] bg-$CORE_raznitsa_otvedeniye_s_v_tarif[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_otvedeniye_s_v_tarif[1]"></i></span><span class="ml-1">$CORE_raznitsa_otvedeniye_s_v_tarif[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row"><a title="ГОРЯЧЕЕ ВОДОСНАБЖЕНИЕ">ГВС (куб. м)</a></th>
                      <td style="text-align: center;">$CORE_tarif[6]</td>
                      <td style="text-align: center;">$CORE_tarif[7]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_gvs_cude_tarif[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_gvs_cude_tarif[0] bg-$CORE_raznitsa_gvs_cude_tarif[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_gvs_cude_tarif[1]"></i></span><span class="ml-1">$CORE_raznitsa_gvs_cude_tarif[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row"><a title="ГОРЯЧЕЕ ВОДОСНАБЖЕНИЕ">ГВС (Гкал)</a></th>
                      <td style="text-align: center;">$CORE_tarif[8]</td>
                      <td style="text-align: center;">$CORE_tarif[9]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_gvs_gkal_tarif[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_gvs_gkal_tarif[0] bg-$CORE_raznitsa_gvs_gkal_tarif[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_gvs_gkal_tarif[1]"></i></span><span class="ml-1">$CORE_raznitsa_gvs_gkal_tarif[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">Отопление</th>
                      <td style="text-align: center;">$CORE_tarif[10]</td>
                      <td style="text-align: center;">$CORE_tarif[11]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_otopleniye_tarif[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_otopleniye_tarif[0] bg-$CORE_raznitsa_otopleniye_tarif[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_otopleniye_tarif[1]"></i></span><span class="ml-1">$CORE_raznitsa_otopleniye_tarif[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th style="text-align-last: center;" colspan="4">UPDATE: $CORE_tarif[12]</th>
                  </tr>
              </tbody>
          </table>
    </div>
</div>
HTML;
$TABLE_NORMATIV=<<<HTML
<div class="col-lg-6">
    <div class="card">
        <h5 class="card-header">Норматив</h5>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th scope="col">Наименование</th>
                      <th scope="col" style="width: 15%;text-align: center;"><span class="badge badge-pill badge-success">&nbsp;&nbsp;</span></th>
                      <th scope="col" style="width: 15%;text-align: center;"><span class="badge badge-pill badge-brand">&nbsp;&nbsp;</span></th>
                      <th scope="col" style="width: 16%;text-align: center;">Разница</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">&nbsp;</th>
                      <td style="text-align: center;">&nbsp;</td>
                      <td style="text-align: center;">&nbsp;</td>
                      <td style="text-align: center;">&nbsp;</td>
                  </tr>
                  <tr>
                      <th scope="row"><a title="ХОЛОДНОЕ ВОДОСНАБЖЕНИЕ">ХВС</a></th>
                      <td style="text-align: center;">$CORE_normativ[2]</td>
                      <td style="text-align: center;">$CORE_normativ[3]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_normativ[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_normativ[0] bg-$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_normativ[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_$CORE_raznitsa_kholodnoye_v_normativ[1]"></i></span><span class="ml-1">$CORE_raznitsa_kholodnoye_v_normativ[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">Отведение сточных вод</th>
                      <td style="text-align: center;">$CORE_normativ[4]</td>
                      <td style="text-align: center;">$CORE_normativ[5]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_otvedeniye_s_v_normativ[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_otvedeniye_s_v_normativ[0] bg-$CORE_raznitsa_otvedeniye_s_v_normativ[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_otvedeniye_s_v_normativ[1]"></i></span><span class="ml-1">$CORE_raznitsa_otvedeniye_s_v_normativ[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row"><a title="ГОРЯЧЕЕ ВОДОСНАБЖЕНИЕ">ГВС (куб. м)</a></th>
                      <td style="text-align: center;">$CORE_normativ[6]</td>
                      <td style="text-align: center;">$CORE_normativ[7]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_gvs_cude_normativ[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_gvs_cude_normativ[0] bg-$CORE_raznitsa_gvs_cude_normativ[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_gvs_cude_normativ[1]"></i></span><span class="ml-1">$CORE_raznitsa_gvs_cude_normativ[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row"><a title="ГОРЯЧЕЕ ВОДОСНАБЖЕНИЕ">ГВС (Гкал)</a></th>
                      <td style="text-align: center;">$CORE_normativ[8]</td>
                      <td style="text-align: center;">$CORE_normativ[9]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_gvs_gkal_normativ[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_gvs_gkal_normativ[0] bg-$CORE_raznitsa_gvs_gkal_normativ[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_gvs_gkal_normativ[1]"></i></span><span class="ml-1">$CORE_raznitsa_gvs_gkal_normativ[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">Отопление</th>
                      <td style="text-align: center;">$CORE_normativ[10]</td>
                      <td style="text-align: center;">$CORE_normativ[11]</td>
                      <td style="text-align: center;">
                        <div class="text-$CORE_raznitsa_otopleniye_normativ[0] font-weight-bold">
                          <span class="icon-circle-small icon-box-xs text-$CORE_raznitsa_otopleniye_normativ[0] bg-$CORE_raznitsa_otopleniye_normativ[0]-light">
                            <i class="fa fa-fw fa-arrow-$CORE_raznitsa_otopleniye_normativ[1]"></i></span><span class="ml-1">$CORE_raznitsa_otopleniye_normativ[2]</span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th style="text-align-last: center;" colspan="4">UPDATE: $CORE_normativ[12]</th>
                  </tr>
              </tbody>
          </table>
    </div>
</div>
HTML;
?>
