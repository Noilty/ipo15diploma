<!--TABLE-->
<table class="table">
    <thead>
        <tr style="border-top: hidden;">
            <th>Наименование</th>
            <th>Серийный номер</th>
            <th>Дата следующей поверки</th>
            <th><span class="badge badge-pill badge-success">&nbsp;&nbsp;</span></th>
            <th><span class="badge badge-pill badge-brand">&nbsp;&nbsp;</span></th>
            <th>Расход</th>
            <th>Дата показаний</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>ХВС КруглоСут<br />П00000000 </th>
            <td>00000000</td>
            <td>21.12.2022</td>
            <td><?php echo $CORE_penance[2]; ?></td>
            <td><?php echo $CORE_penance[3]; ?></td>
            <td>
              <div class="text-<?php echo $CORE_raznitsa_kholodnoye_v_penance[0]; ?> font-weight-bold">
                <span class="icon-circle-small icon-box-xs text-<?php echo $CORE_raznitsa_kholodnoye_v_penance[0]; ?> bg-<?php echo $CORE_raznitsa_kholodnoye_v_penance[0]; ?>-light">
                  <i class="fa fa-fw fa-arrow-<?php echo $CORE_raznitsa_kholodnoye_v_penance[1]; ?>"></i></span><span class="ml-1"><?php echo $CORE_raznitsa_kholodnoye_v_penance[2]; ?></span>
              </div>
            </td>
            <td><?php echo $CORE_penance[13]; ?></td>
        </tr>
        <tr>
            <th scope="row">ГВС КруглоСут<br />П00000000</th>
            <td>00000000</td>
            <td>21.12.2022</td>
            <td><?php echo $CORE_penance[6]; ?></td>
            <td><?php echo $CORE_penance[7]; ?></td>
            <td>
              <div class="text-<?php echo $CORE_raznitsa_gvs_penance[0]; ?> font-weight-bold">
                <span class="icon-circle-small icon-box-xs text-<?php echo $CORE_raznitsa_gvs_penance[0]; ?> bg-<?php echo $CORE_raznitsa_gvs_penance[0]; ?>-light">
                  <i class="fa fa-fw fa-arrow-<?php echo $CORE_raznitsa_gvs_penance[1]; ?>"></i></span><span class="ml-1"><?php echo $CORE_raznitsa_gvs_penance[2]; ?></span>
              </div>
            </td>
            <td><?php echo $CORE_penance[13]; ?></td>
        </tr>
    </tbody>
</table>
<!--end TABLE-->
