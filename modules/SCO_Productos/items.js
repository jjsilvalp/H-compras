var ln = 0;
var pronum = 0;
var grupo = 0;

function openProductPopup(ln) {
    console.log(ln);
    var popupRequestData = {
        "call_back_function": "set_return",
        "form_name": "formPro",
        "field_to_name_array": {
            //"id": "sco_productos_sco_productoscomprassco_productoscompras_ida" + ln,
            "id": "producto_id" + ln,
            "name": "pro_nombre" + ln,
            "proge_unidad": "pro_unidad" + ln,
            "proge_nompro": "pro_descripcion" + ln,
            //"proge_descripcion": "pro_descripcion" + ln,
            "proge_preciounid": "pro_precio" + ln,
        }
    };
    open_popup('SCO_ProductosCompras', 600, 400, '', true, false, popupRequestData, true);
}

function openProyPopup(ln) {
    var popupRequestData = {
        "call_back_function": "set_return",
        "form_name": "formPro",
        "field_to_name_array": {
            "id": "proy_id" + ln,
            "name": "pory_cod" + ln,
            "proyc_tipo": "tipo_proy" + ln,
        }
    };
    open_popup('SCO_ProyectosCO', 600, 400, '', true, false, popupRequestData, true);
}

function insertarProductos() {
    var tablapr = document.getElementById("idprod");
    var x = tablapr.insertRow(-1);
    x.id = 'producto' + pronum;
    var b1 = x.insertCell(0);
    b1.innerHTML = "<input class='sqsEnabled product_part_number yui-ac-input ' style='width:178px;' onblur='buscaind(" + pronum + "); 'autocomplete='off' type='text' name='pro_nombre" + pronum + "' id='pro_nombre" + pronum + "' maxlength='50' value='' tabindex='116' placeholder='Cod Prov'><input type='hidden' name='producto_id" + pronum + "' id='producto_id" + pronum + "' size='20' maxlength='50' value=''>";
    var b2 = x.insertCell(1);
    b2.innerHTML = "<button style='border-radius:10%;border-color: #269abc;' title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' tabindex='116' class='button' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' name='btn1' onclick='openProductPopup(" + pronum + ");'><img src='themes/default/images/id-ff-select.png' alt='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "'></button>";
    var b3 = x.insertCell(2);
    b3.innerHTML = "<textarea id='pro_descripcion" + pronum + "' name='pro_descripcion" + pronum + "' rows='1' cols='35' placeholder='Descripcion'></textarea>";
    var b = x.insertCell(3);
    b.innerHTML = "<input style='width:100px;' autocomplete='off' type='text' name='pro_unidad" + pronum + "' id='pro_unidad" + pronum + "' maxlength='50' tabindex='116' value='' placeholder='Pro Unidad'>";
    var c = x.insertCell(4);
    c.innerHTML = "<input onblur='mulpro(" + pronum + ");fntotal(" + pronum + ");' style='text-align: right; width:75px;' type='text' name='pro_cant" + pronum + "' id='pro_cant" + pronum + "' size='11' maxlength='50' value='' tabindex='116' placeholder='Cantidad'>";
    var c = x.insertCell(5);
    c.innerHTML = "<input onblur='mulpro(" + pronum + ");fntotal(" + pronum + ");' style='text-align: right; width:75px;' type='text' name='pro_precio" + pronum + "' id='pro_precio" + pronum + "' size='11' maxlength='50' value='' tabindex='116' placeholder='Precio U'>";
    var d = x.insertCell(6);
    d.innerHTML = "<input type='text' onblur='dp(" + pronum + ");' style='text-align: right; width:75px;' name='pro_descpor" + pronum + "' id='pro_descpor" + pronum + "' size='12' maxlength='50' value='' tabindex='116' placeholder='Desc %'>";
    var e = x.insertCell(7);
    e.innerHTML = "<input type='text' onblur='dv(" + pronum + ");' style='text-align: right; width:75px;' name='pro_descval" + pronum + "' id='pro_descval" + pronum + "' size='11' maxlength='50' value='' tabindex='116' placeholder='Desc Valor'>";
    var g = x.insertCell(8);
    g.innerHTML = "<input type='text' style='text-align: right; width:75px;' name='pro_total" + pronum + "' id='pro_total" + pronum + "' size='11' maxlength='50' value='' tabindex='116' readonly='readonly' placeholder='Total'>";
    var i = x.insertCell(9);
    i.innerHTML = "<input style='width:100px;' autocomplete='off' type='text' name='pory_cod" + pronum + "' onblur='buscaindpy(" + pronum + ")' id='pory_cod" + pronum + "' maxlength='50' tabindex='116' value='' placeholder='Proyecto'><input type='hidden' name='proy_id" + pronum + "' id='proy_id" + pronum + "' size='20' maxlength='50' value=''><input type='hidden' name='tipo_proy" + pronum + "' id='tipo_proy" + pronum + "' size='20' maxlength='50' value=''>";
    var i2 = x.insertCell(10);
    i2.innerHTML = "<button style='border-radius:10%;border-color: #269abc;' title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' tabindex='116' class='button' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' name='btn1' onclick='openProyPopup(" + pronum + ");'><img src='themes/default/images/id-ff-select.png' alt='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "'></button>";
    var h = x.insertCell(11);
    h.innerHTML = "<button type='button' style='border-radius:10%;background-color: #d9534f;border-color: #ac2925'id='product_delete_line" + pronum + "' class='button'  tabindex='116' onclick='elimiarfilapro(" + pronum + ")'><img src='themes/SuiteR/images/id-ff-clear.png' align='absmiddle' alt='" + SUGAR.language.get(module_sugar_grp1, 'LBL_REMOVE_PRODUCT_LINE') + "'></button><br>";
    pronum++;
    return pronum - 1;
}

function insertarServicio() {
    var tablapr = document.getElementById("idser");
    var x = tablapr.insertRow(-1);
    x.id = 'servicio' + pronum;
    var b1 = x.insertCell(0);
    b1.innerHTML = "<input   type='hidden' name='pro_nombre" + pronum + "' id='pro_nombre" + pronum + "' maxlength='50' value='Servicio'><input type='hidden' name='producto_id" + pronum + "' id='producto_id" + pronum + "' size='20' maxlength='50' value='Servicio" + pronum + "'>";
    var b3 = x.insertCell(1);
    b3.innerHTML = "<textarea id='pro_descripcion" + pronum + "' name='pro_descripcion" + pronum + "' rows='1' cols='80' placeholder='Nombre Servicio'></textarea>";
    var b = x.insertCell(2);
    b.innerHTML = "<input style='width:100px;' autocomplete='off' type='hidden' name='pro_unidad" + pronum + "' id='pro_unidad" + pronum + "' maxlength='50' tabindex='116' value='-' placeholder='Pro Unidad'>";
    var c = x.insertCell(3);
    c.innerHTML = "<input onblur='mulpro(" + pronum + ");fntotal(" + pronum + ");' style='text-align: right; width:75px;' type='text' name='pro_cant" + pronum + "' id='pro_cant" + pronum + "' size='11' maxlength='50' value='' tabindex='116' placeholder='Cantidad'>";
    var c = x.insertCell(4);
    c.innerHTML = "<input onblur='mulpro(" + pronum + ");fntotal(" + pronum + ");' style='text-align: right; width:75px;' type='text' name='pro_precio" + pronum + "' id='pro_precio" + pronum + "' size='11' maxlength='50' value='' tabindex='116' placeholder='Precio U'>";
    var d = x.insertCell(5);
    d.innerHTML = "<input type='text' onblur='dp(" + pronum + ");' style='text-align: right; width:75px;' name='pro_descpor" + pronum + "' id='pro_descpor" + pronum + "' size='12' maxlength='50' value='' tabindex='116' placeholder='Desc %'>";
    var e = x.insertCell(6);
    e.innerHTML = "<input type='text' onblur='dv(" + pronum + ");' style='text-align: right; width:75px;' name='pro_descval" + pronum + "' id='pro_descval" + pronum + "' size='11' maxlength='50' value='' tabindex='116' placeholder='Desc Valor'>";
    var g = x.insertCell(7);
    g.innerHTML = "<input type='text' style='text-align: right; width:75px;' name='pro_total" + pronum + "' id='pro_total" + pronum + "' size='11' maxlength='50' value='' tabindex='116' readonly='readonly' placeholder='Total'>";
    var i = x.insertCell(8);
    i.innerHTML = "<input style='width:100px;' autocomplete='off' type='text' name='pory_cod" + pronum + "' onblur='buscaindpy(" + pronum + ")' id='pory_cod" + pronum + "' maxlength='50' tabindex='116' value='' placeholder='Proyecto'><input type='hidden' name='proy_id" + pronum + "' id='proy_id" + pronum + "' size='20' maxlength='50' value=''><input type='hidden' name='tipo_proy" + pronum + "' id='tipo_proy" + pronum + "' size='20' maxlength='50' value=''>";
    var i2 = x.insertCell(9);
    i2.innerHTML = "<button style='border-radius:10%;border-color: #269abc;' title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' tabindex='116' class='button' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' name='btn1' onclick='openProyPopup(" + pronum + ");'><img src='themes/default/images/id-ff-select.png' alt='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "'></button>";
    var h = x.insertCell(10);
    h.innerHTML = "<button type='button' style='border-radius:10%;background-color: #d9534f;border-color: #ac2925'id='product_delete_line" + pronum + "' class='button'  tabindex='116' onclick='elimiarfilaser(" + pronum + ")'><img src='themes/SuiteR/images/id-ff-clear.png' align='absmiddle' alt='" + SUGAR.language.get(module_sugar_grp1, 'LBL_REMOVE_PRODUCT_LINE') + "'></button><br>";
    pronum++;
    return pronum - 1;
}

function insertarNuevoProd() {
    var tablapr = document.getElementById("idnewpro");
    var x = tablapr.insertRow(-1);
    x.id = 'newpro' + pronum;
    var b1 = x.insertCell(0);
    b1.innerHTML = "<input style='width:178px;' autocomplete='off' type='text' name='pro_nombre" + pronum + "' id='pro_nombre" + pronum + "' maxlength='50' value='' tabindex='116' value=''>";
    var b3 = x.insertCell(1);
    b3.innerHTML = "<textarea id='pro_descripcion" + pronum + "' name='pro_descripcion" + pronum + "' rows='2' cols='30'></textarea>";
    var b = x.insertCell(2);
    b.innerHTML = "<input style='width:100px;' autocomplete='off' type='text' name='pro_unidad" + pronum + "' id='pro_unidad" + pronum + "' maxlength='50' tabindex='116' value=''>";
    var c = x.insertCell(3);
    c.innerHTML = "<input style='text-align: right; width:115px;' type='text' name='pro_precio" + pronum + "' id='pro_precio" + pronum + "' size='11' maxlength='50' value='' tabindex='116'>";
    var d = x.insertCell(4);
    d.innerHTML = "<input type='text' style='text-align: right; width:90px;' name='pro_desc" + pronum + "' id='pro_desc" + pronum + "' size='12' maxlength='50' value='' tabindex='116'>";
    var e = x.insertCell(5);
    e.innerHTML = "<input type='text' style='text-align: right; width:75px;' name='pro_subtotal" + pronum + "' id='pro_subtotal" + pronum + "' size='11' maxlength='50' value='' tabindex='116'>";
    var g = x.insertCell(6);
    g.innerHTML = "<input type='text' style='text-align: right; width:75px;' name='pro_total" + pronum + "' id='pro_total" + pronum + "' size='11' maxlength='50' value='' tabindex='116' readonly='readonly'>";
    var i = x.insertCell(7);
    i.innerHTML = "<input style='width:100px;' autocomplete='off' type='text' name='pory_cod" + pronum + "' id='pory_cod" + pronum + "' maxlength='50' value='' tabindex='116' value=''><input type='hidden' name='proy_id" + pronum + "' id='proy_id" + pronum + "' size='20' maxlength='50' value=''>";
    var i2 = x.insertCell(8);
    i2.innerHTML = "<button style='border-radius:10%;border-color: #269abc;' title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' tabindex='116' class='button' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' name='btn1' onclick='openProyPopup(" + pronum + ");'><img src='themes/default/images/id-ff-select.png' alt='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "'></button>";
    var h = x.insertCell(9);
    h.innerHTML = "<button type='button' style='border-radius:10%;background-color: #d9534f;border-color: #ac2925'id='product_delete_line" + pronum + "' class='button'  tabindex='116' onclick='elimiarNuevProd(" + pronum + ")'><img src='themes/SuiteR/images/id-ff-clear.png' align='absmiddle' alt='" + SUGAR.language.get(module_sugar_grp1, 'LBL_REMOVE_PRODUCT_LINE') + "'></button><br>";
    pronum++;
    return pronum - 1;
}

function elimiarfilapro(pronum) {
    $("#producto" + pronum).remove();
    var total = 0;
    var prec_total = $("#formPro input[name^='pro_total']");
    for (var i = 0; i < prec_total.length; i++) {
        total += parseFloat(prec_total[i].value);
    }
    $("#subtotal").val(total.toFixed(2));
    $("#total").val(total.toFixed(2));
}

function elimiarfilaser(pronum) {
    $("#servicio" + pronum).remove();
    var total = 0;
    var prec_total = $("#formPro input[name^='pro_total']");
    for (var i = 0; i < prec_total.length; i++) {
        total += parseFloat(prec_total[i].value);
    }
    $("#subtotal").val(total.toFixed(2));
    $("#total").val(total.toFixed(2));
}

function elimiarNuevProd(pronum) {
    //document.getElementsById(productos).deleteRow('productos' + pronum);
    $("#newpro" + pronum).remove();
}

function eleminartodo() {
    $("#idser tbody tr").each(function() {
        $(this).remove();
    });
}

function mulpro(pronum) {
    var num1 = $("#pro_cant" + pronum).val();
    var num2 = $("#pro_precio" + pronum).val();
    var subtotal = num1 * num2;
    if ($("#pro_descpor" + pronum).val() == '' || $("#pro_descval" + pronum).val() == '') {
        $("#pro_total" + pronum).val(subtotal.toFixed(2));
        $("#pro_descval" + pronum).val((0).toFixed(2));
        $("#pro_descpor" + pronum).val((0).toFixed(2));
    } else {
        var descpor = $("#pro_descpor" + pronum).val();
        var descvalor = (subtotal.toFixed(2) * parseFloat(descpor)) / 100;
        var subtotal = subtotal.toFixed(2) - parseFloat(descvalor);
        $("#pro_descval" + pronum).val(descvalor.toFixed(2));
        $("#pro_total" + pronum).val(subtotal.toFixed(2));
    }
}

function fntotal(pronum) {
    var total = 0;
    var prec_total = $("#formPro input[name^='pro_total']");
    for (var i = 0; i < prec_total.length; i++) {
        total += parseFloat(prec_total[i].value);
    }
    $("#subtotal").val(total.toFixed(2));
    $("#decval").val((0).toFixed(2));
    $("#descpor").val((0).toFixed(2));
    $("#total").val(total.toFixed(2));
}

function dp(pronum) {
    var cant = $("#pro_cant" + pronum).val();
    var prec = $("#pro_precio" + pronum).val();
    var subtotal = cant * prec;
    $("#pro_total" + pronum).val(subtotal.toFixed(2));
    var descp = $("#pro_descpor" + pronum).val();
    var descv = $("#pro_descval" + pronum).val();
    if (descp <= 100) {
        if (descp === null) {
            $("#pro_descpor" + pronum).val((0).toFixed(2));
        }
        var desc = $("#pro_descval" + pronum).val();
        if (descv === null) {
            $("#pro_descval" + pronum).val((0).toFixed(2));
        }
        var subtotal2 = (subtotal * descp) / 100;
        $("#pro_descval" + pronum).val(subtotal2.toFixed(2));
        var totalp = subtotal - subtotal2;
        $("#pro_total" + pronum).val(totalp.toFixed(2));
        var total = 0;
        var prec_total = $("#formPro input[name^='pro_total']");
        for (var i = 0; i < prec_total.length; i++) {
            total += parseFloat(prec_total[i].value);
        }
        $("#subtotal").val(total.toFixed(2));
        $("#total").val(total.toFixed(2));
    } else {
        alert("El % no debe ser mayor que 100");
        $("#pro_descpor" + pronum).val((0).toFixed(2));
    }
}

function dv(pronum) {
    var cant = $("#pro_cant" + pronum).val();
    var prec = $("#pro_precio" + pronum).val();
    var subtotal = cant * prec;
    $("#pro_total" + pronum).val(subtotal.toFixed(2));
    var descp = $("#pro_descpor" + pronum).val();
    var descv = $("#pro_descval" + pronum).val();
    if (descv <= subtotal) {
        if (descp === null) {
            $("#pro_descpor" + pronum).val((0).toFixed(2));
        }
        var desc = $("#pro_descval" + pronum).val();
        if (descv === null) {
            $("#pro_descval" + pronum).val((0).toFixed(2));
        }
        var subtotal2 = subtotal - descv;
        descp = (100 * descv) / subtotal;
        $("#pro_descpor" + pronum).val(descp.toFixed(2));
        $("#pro_total" + pronum).val(subtotal2.toFixed(2));
        var total = 0;
        var prec_total = $("#formPro input[name^='pro_total']");
        for (var i = 0; i < prec_total.length; i++) {
            total += parseFloat(prec_total[i].value);
        }
        $("#subtotal").val(total.toFixed(2));
        $("#total").val(total.toFixed(2));
    } else {
        alert("El Descueto no debe ser mayor a " + subtotal);
        $("#pro_descval" + pronum).val((0).toFixed(2));
    }
}

function descvalor() {
    var subtotal = $("#subtotal").val();
    var desval = $("#decval").val();
    if (desval <= parseFloat(subtotal)) {
        desval = (parseFloat(desval) * 100) / parseFloat(subtotal);
        $("#descpor").val(desval.toFixed(2));
        desval = parseFloat(subtotal) - parseFloat($("#decval").val());
        $("#total").val(desval.toFixed(2));
    } else {
        alert("El Descueto no debe ser mayor a " + subtotal);
        $("#decval").val((0).toFixed(2));
    }
}

function descporc() {
    var subtotal = $("#subtotal").val();
    var despor = $("#descpor").val();
    if (despor <= 100) {
        p = (parseFloat(despor) * subtotal) / 100;
        despor = subtotal - p;
        $("#decval").val(p.toFixed(2));
        $("#total").val(despor.toFixed(2));
    } else {
        alert("El % no debe ser mayor que 100");
        $("#descpor").val((0).toFixed(2));
    }
}