function fn_open_pickpoint()
{
    var pickpoint_state = $('#elm_state').val();
    if (!('elm_city' in window)) {
        $.ceAjax('request', fn_url('pickpoint.pickpoint_city?to_state=' + pickpoint_state + '&country=' + 'RU'), {
            callback: function(data) {
                PickPoint.open(addressPostamatCart, { fromcity:pickpoint_state,city:data['pickpoint_city'] });
            }
        });

    } else {
        var pickpoint_city = $('#elm_city').val();
        PickPoint.open(addressPostamatCart, { fromcity:pickpoint_state,city:pickpoint_city });
    }

    return false;
}

(function(_, $) {
    addressPostamat = function(result) {
        $('#pickpoint_id').val(result['id']);
        $('#address_pickpoint').innerHTML = result['name'] + '<br />' + result['address'];

        params = [];
        parents = $('#shipping_rates_list');
        radio = $('input[type=radio]:checked', parents);

        $.each(radio, function(id, elm) {
            params.push({name: elm.name, value: elm.value});
        });

        url = fn_url('checkout.checkout');
        for (var i in params) {
            url += '&' + params[i]['name'] + '=' + escape(params[i]['value']);
        }

        $.ceAjax('request', url + '&pickpoint_id=' + result['id'] + '&address_pickpoint=' + result['name'] + ', ' + result['address'], {
            result_ids: 'shipping_rates_list,checkout_info_summary_*,checkout_info_order_info_*',
            method: 'get',
            full_render: true
        });
    }

    addressPostamatCart = function(result) {
        $('#pickpoint_id').val(result['id']);
        $('#address_pickpoint').innerHTML = result['name'] + '<br />' + result['address'];

        params = [];
        parents = $('#shipping_estimation');
        radio = $('input[type=radio]:checked', parents);

        $.each(radio, function(id, elm) {
            params.push({name: elm.name, value: elm.value});
        });

        params.push({name: $('#elm_country').prop('name'), value: $('#elm_country').val()});
        params.push({name: $('#elm_state').prop('name'), value: $('#elm_state').val()});
        params.push({name: $('#elm_zipcode').prop('name'), value: $('#elm_zipcode').val()});

        url = fn_url('checkout.shipping_estimation');
        if (('elm_city' in window)) {
            url += '&' + $('#elm_city').prop('name') + '=' + $('#elm_city').val();
        }

        for (i in params) {
            url += '&' + params[i]['name'] + '=' + escape(params[i]['value']);
        }

        $.ceAjax('request', url + '&pickpoint_id=' + result['id'] + '&address_pickpoint=' + result['name'] + ', ' + result['address'], {
            result_ids: 'shipping_estimation',
            method: 'post',
            full_render: true
        });
    }

    addressPostamatOrder = function(result) {
        $('#pickpoint_id').val(result['id']);
        $('#address_pickpoint').val(result['name'] + ', ' + result['address']);

        params = [];
        parents = $('#om_ajax_update_shipping');
        selected = $('option:selected', parents);

        $.each(selected, function(id, elm) {
            params.push({name: 'shipping_id', value: elm.value});
        });

        url = fn_url('order_management.update_shipping');
        for (var i in params) {
            url += '&' + params[i]['name'] + '=' + escape(params[i]['value']);
        }

        $.ceAjax('request', url + '&pickpoint_id=' + result['id'] + '&address_pickpoint=' + result['name'] + ', ' + result['address'], {
            result_ids: 'om_ajax_update_shipping,om_ajax_update_totals',
            method: 'post',
            full_render: true
        });
    }
}(Tygh, Tygh.$));

