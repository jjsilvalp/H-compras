var inc = 0;

function openProductPopup(inc) {
    console.log(inc);
    var popupRequestData = {
        "call_back_function": "set_return",
        "form_name": "form_ SubpanelQuickCreate_SCO_Productos",
        "field_to_name_array": {
            "sco_productos_sco_productoscomprassco_productoscompras_ida": "0-" + inc,
            "name": "1-" + inc,
        }
    };
    open_popup("SCO_ProductosCompras", 600, 400, "2", true, false, popupRequestData, true);
}
//Ajax de carga masiva
function buscap(nomp, row) {
    $.ajax({
        type: 'get',
        url: 'index.php?to_pdf=true&module=SCO_Productos&action=buscap',
        data: {
            nomp
        },
        success: function(data) {
            //debugger;
            var sqlprod = $.parseJSON(data);
            if (Object.keys(sqlprod) != '') {
                $('#1-' + row).text(sqlprod['proge_nompro']);
                $('#2-' + row).text(sqlprod['proge_unidad']);
                $('#9-' + row).text(sqlprod['id']);
                //$('#4-'+row).text(sqlprod['proge_preciounid']);
                $('#0-' + row).css({
                    'background': '#FFF',
                    'color': '#000'
                });
            } else {
                $('#0-' + row).css({
                    'background': '#d9534f',
                    'color': '#FFF'
                });
                $('#1-' + row).text('');
                $('#2-' + row).text('');
                $('#4-' + row).text('');
            }
        }
    });
    return (false);
}

function buscaproy(nomproy, row) {
    $.ajax({
        type: 'get',
        url: 'index.php?to_pdf=true&module=SCO_Productos&action=buscaproy',
        data: {
            nomproy
        },
        success: function(data) {
            var sqlproy = $.parseJSON(data);
            if (Object.keys(sqlproy) != '') {
                debugger;
                $('#10-' + row).text(sqlproy['id']);
                $('#11-' + row).text(sqlproy['proyc_tipo']);
                $('#8-' + row).css({
                    'background': '#FFF',
                    'color': '#000'
                });
                //$('.action_buttons #SCO_Productos_subpanel_save_button').attr('disabled', false);              
            } else {
                $('#8-' + row).css({
                    'background': '#d9534f',
                    'color': '#FFF'
                });
            }
        }
    });
    return (false);
}
//Ajax de carga individual
function buscaind(pronum) {
    var nomp = document.getElementById('pro_nombre' + pronum).value;
    $.ajax({
        type: 'get',
        url: 'index.php?to_pdf=true&module=SCO_Productos&action=buscap',
        data: {
            nomp
        },
        success: function(data) {
            var sqlprod = $.parseJSON(data);
            if (Object.keys(sqlprod) != '') {
                //debugger;
                $('#producto_id' + pronum).val(sqlprod['id']);
                $('#pro_unidad' + pronum).val(sqlprod['proge_unidad']);
                $('#pro_descripcion' + pronum).val(sqlprod['proge_nompro']);
                $('#pro_nombre' + pronum).css({
                    'background': '#FFF',
                    'color': '#000'
                });
                $('#pro_unidad' + pronum).css({
                    'background': '#FFF',
                    'color': '#000'
                });
                $('#pro_descripcion' + pronum).css({
                    'background': '#FFF',
                    'color': '#000'
                });
            } else {
                $('#producto_id' + pronum).val('');
                $('#pro_unidad' + pronum).val('');
                $('#pro_descripcion' + pronum).val('');
                $('#pro_nombre' + pronum).css({
                    'background': '#d9534f',
                    'color': '#FFF'
                });
                $('#pro_unidad' + pronum).css({
                    'background': '#d9534f',
                    'color': '#FFF'
                });
                $('#pro_descripcion' + pronum).css({
                    'background': '#d9534f',
                    'color': '#FFF'
                });
            }
        }
    });
}

function buscaindpy(pronum) {
    var nomproy = document.getElementById('pory_cod' + pronum).value;
    $.ajax({
        type: 'get',
        url: 'index.php?to_pdf=true&module=SCO_Productos&action=buscaproy',
        data: {
            nomproy
        },
        success: function(data) {
            debugger;
            var sqlproy = $.parseJSON(data);
            if (Object.keys(sqlproy) != '') {
                $('#proy_id' + pronum).val(sqlproy['id']);
                $('#tipo_proy' + pronum).val(sqlproy['proyc_tipo']);
                $('#pory_cod' + pronum).css({
                    'background': '#FFF',
                    'color': '#000'
                });
                //$('.action_buttons #SCO_Productos_subpanel_save_button').attr('disabled', false);              
            } else {
                $('#proy_id' + pronum).val('');
                $('#pory_cod' + pronum).css({
                    'background': '#d9534f',
                    'color': '#FFF'
                });
            }
        }
    });
}