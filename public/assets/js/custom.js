$(document).ready(function () {
    $("#searchprod").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: baseurl + '/product/findProduct',
                type: 'post',
                dataType: "json",
                data: {
                    key: request.term
                },
                success: function (data) {
                    response(
                        $.map(data.product, function (item) {
                            return {
                                label: item.name,
                                value: item.id_prod
                            }
                        }));
                },
            });
        },
        select: function (event, ui) {
            $('#searchprod').val(ui.item.label);
            $('#prod_id').val(ui.item.value);
            // setProductList(ui.item.value);
            return false;
        },
        focus: function (event, ui) {
            $("#searchprod").val(ui.item.label);
            return false;
        },
    });

    $("#searchcus").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: baseurl + '/customer/findCustomer',
                type: 'post',
                dataType: "json",
                data: {
                    key: request.term
                },
                success: function (data) {
                    response(
                        $.map(data.customer, function (item) {
                            return {
                                label: item.company_name,
                                value: item.id_customer
                            }
                        }));
                },
            });
        },
        select: function (event, ui) {
            $('#searchcus').val(ui.item.label);
            $('#cus_id').val(ui.item.value);
            return false;
        },
        focus: function (event, ui) {
            $("#searchcus").val(ui.item.label);
            return false;
        },
    });
});

$("#addproduct").click(function () {

    let input_prod = $('#searchprod');
    let hidden_prod = $('#prod_id');
    let inqty = $("#qty");

    let qty = $("#qty").val();
    let id_prod = $("#prod_id").val();
    let id_cus = $("#cus_id").val();

    $.ajax({
        url: baseurl + '/order/getData',
        type: "POST",
        data: {
            id_prod: id_prod,
            id_cus: id_cus
        },
        dataType: "JSON",
        success: function (data) {
            pname = data.product.name;
            pid = data.product.id_prod;
            pwidth = data.product.width;
            pweight = data.product.weight;
            pdepth = data.product.depth;
            pheight = data.product.height;
            baseprice = data.product.price;
            price = data.customer.rate * baseprice / 100;
            sub = baseprice * qty;
            id_cus = data.customer.id_customer;

            const markup = "<tr><td><input type='hidden' name='product_id[]' value='" +
                pid + "'>" +
                "<input type='hidden' name='width[]' value='" +
                pwidth + "'>" +
                "<input type='hidden' name='weight[]' value='" +
                pweight + "'>" +
                "<input type='hidden' name='depth[]' value='" +
                pdepth + "'>" +
                "<input type='hidden' name='height[]' value='" +
                pheight + "'>" +
                "<input type='hidden' name='total_price[]' value='" +
                sub + "'>" +
                "<input type='hidden' name='id_cus[]' value='" +
                id_cus + "'>" +
                pname + "</td><td><input type='hidden' name='qty[]' value='" +
                qty + "'>" + qty + "</td><td>" +
                baseprice + "</td><td>" + price + "</td><td class='sub_total'>" + sub + "</td></tr>";

            $("table tbody#product_list").append(markup);

           
                var sum = 0;
                $(".sub_total").each(function () {
                    var value = $(this).text();
                    // add only if the value is number
                    if (!isNaN(value) && value.length != 0) {
                        sum += parseFloat(value);
                    }
                });
                // console.log(sum);
                $('#total_price').text(sum);

                input_prod.val("");
                hidden_prod.val("");
                inqty.val("");
        }
    });
});