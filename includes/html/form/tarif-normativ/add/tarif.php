<?php
$data=$_POST;
$ADD_TARIF=<<<HTML
<form action="$address/system-messages/add-tarif.php" method="post">
    <div class="form-group">
        <table style="width: 100%;" border=0>
            <tr>
                <td>
                    Плата за жилое помещение
                    <input type="text" name="tarif_plata_z_z_p_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="tarif_plata_z_z_p_old" class="form-control" value="$CORE_tarif[0]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    ХВС
                    <input type="text" name="tarif_kholodnoye_v_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="tarif_kholodnoye_v_old" class="form-control" value="$CORE_tarif[2]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    Отведение сточных вод
                    <input type="text" name="tarif_otvedeniye_s_v_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="tarif_otvedeniye_s_v_old" class="form-control" value="$CORE_tarif[4]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    ГВС (куб. м)
                    <input type="text" name="tarif_gvs_cude_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="tarif_gvs_cude_old" class="form-control" value="$CORE_tarif[6]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    ГВС (Гкал)
                    <input type="text" name="tarif_gvs_gkal_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="tarif_gvs_gkal_old" class="form-control" value="$CORE_tarif[8]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    Отопление
                    <input type="text" name="tarif_otopleniye_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="tarif_otopleniye_old" class="form-control" value="$CORE_tarif[10]" readonly>
                </td>
            </tr>
        </table>
    </div>
    <button type="submit" name="button_add_tarif" class="btn btn-primary btn-lg btn-block">
      <span class="bigger-110">ADD TARIF</span>
    </button>
</form>
HTML;
?>
