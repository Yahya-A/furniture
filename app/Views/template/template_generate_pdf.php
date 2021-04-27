<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <title>A simple, clean, and responsive HTML invoice template</title> -->

    <!-- Favicon -->
    <!-- <link rel="icon" href="./images/favicon.png" type="image/x-icon" /> -->

    <!-- Invoice styling -->
    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #777;
        }

        body h1 {
            font-weight: 300;
            margin-bottom: 0px;
            padding-bottom: 0px;
            color: #000;
        }

        body h3 {
            font-weight: 300;
            margin-top: 10px;
            margin-bottom: 20px;
            font-style: italic;
            color: #555;
        }

        body a {
            color: #06f;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table>
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <h3>Furniture</h3>
                            </td>

                            <td>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                <!-- Sparksuite, Inc.<br />
                                12345 Sunny Road<br />
                                Sunnyville, TX 12345 -->
                            </td>

                            <td>
                                No Order #: <?= $order[0]['no_order']?><br />
                                Order Date: <?= $order[0]['date_order']?><br />
                                Created: <?= $create?><br />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Product</td>
                <td>Qty </td>
                <td width="200" style="text-align:right">Price</td>
            </tr>

            <tr class="details">
                <td> <?= $order[0]['name']?></td>

                <td style="text-align: right"><?= $order[0]['qty']?></td>
                <td style="text-align: right">$ <?= $order[0]['price']?></td>
            </tr>
            <tr class="total">
                <td></td>

                <td colspan="2">Total: $ <?= $order[0]['total_price']?></td>
            </tr>
            <tr class="heading">
                <td colspan=3>Detail</td>
            </tr>

            <tr class="item">
                <td width="200">Item Code</td>
                <td colspan="2"><?= $order[0]['item_code']?></td>
            </tr>
            <tr class="item">
                <td width="200">Supplier</td>
                <td colspan="2"><?= $order[0]['supplier']?></td>
            </tr>
            <tr class="item">
                <td width="200">
                    Measurment
                    <table>
                        <tr>
                            <td>Width (Lebar)</td>
                        </tr>
                        <tr>
                            <td>Depth (Dalam)</td>
                        </tr>
                        <tr>
                            <td>Height (Tinggi)</td>
                        </tr>
                    </table>
                </td>
                <td colspan="2">Standard
                <table style="text-align: right">
                        <tr>
                            <td><?= $order[0]['width']?> "</td>
                        </tr>
                        <tr>
                            <td><?= $order[0]['depth']?> "</td>
                        </tr>
                        <tr>
                            <td><?= $order[0]['height']?> "</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="item">
                <td colspan>Spesification

                </td>
                <td colspan="2" style="text-align: justify"><?= $order[0]['spesification']?></td>
            </tr>

            <tr class="item last">
                <td>Note</td>

                <td colspan="2" style="text-align: justify"><?= $order[0]['note']?></td>
            </tr>
        </table>
    </div>
</body>

</html>