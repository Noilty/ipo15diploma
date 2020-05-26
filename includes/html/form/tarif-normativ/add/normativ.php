<?php
$data=$_POST;
$ADD_NORMATIV=<<<HTML
<form action="$address/system-messages/add-normativ.php" method="post">
    <div class="form-group">
        <table style="width: 100%;" border=0>
            <tr>
                <td>
                    ХВС
                    <input type="text" name="normativ_kholodnoye_v_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="normativ_kholodnoye_v_old" class="form-control" value="$CORE_normativ[2]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    Отведение сточных вод
                    <input type="text" name="normativ_otvedeniye_s_v_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="normativ_otvedeniye_s_v_old" class="form-control" value="$CORE_normativ[4]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    ГВС (куб. м)
                    <input type="text" name="normativ_gvs_cude_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="normativ_gvs_cude_old" class="form-control" value="$CORE_normativ[6]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    ГВС (Гкал)
                    <input type="text" name="normativ_gvs_gkal_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="normativ_gvs_gkal_old" class="form-control" value="$CORE_normativ[8]" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    Отопление
                    <input type="text" name="normativ_otopleniye_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                </td>
                <td>
                    <br>
                    <input type="text" name="normativ_otopleniye_old" class="form-control" value="$CORE_normativ[10]" readonly>
                </td>
            </tr>
        </table>
    </div>
    <button type="submit" name="button_add_normativ" class="btn btn-primary btn-lg btn-block">
      <span class="bigger-110">ADD NORMATIV</span>
    </button>
</form>
HTML;
?>
