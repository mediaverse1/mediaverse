
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
        .invoice-box{
            max-width:800px;
            margin:auto;
            padding:30px;
            border:1px solid #eee;
            box-shadow:0 0 10px rgba(0, 0, 0, .15);
            font-size:16px;
            line-height:24px;
            font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color:#555;
        }

        .footer li{
            display: inline-block;
            padding: 1px 5px;
            /*border-left: 1px solid #333333;*/
            font-size: 12px;
        }

        .footer li:first-child{
            border: none;
        }

        .invoice-box table{
            width:100%;
            line-height:inherit;
            text-align:left;
        }

        .invoice-box table td{
            padding:5px;
            vertical-align:top;
        }

        .invoice-box table tr td:nth-child(2){
            text-align:right;
        }

        .invoice-box table tr.top table td{
            padding-bottom:20px;
        }

        .invoice-box table tr.top table td.title{
            font-size:45px;
            line-height:45px;
            color:#333;
        }

        .invoice-box table tr.information table td{
            padding-bottom:40px;
        }

        .invoice-box table tr.heading td{
            background:#eee;
            border-bottom:1px solid #ddd;
            font-weight:bold;
        }

        .invoice-box table tr.details td{
            padding-bottom:20px;
        }

        .invoice-box table tr.item td{
            border-bottom:1px solid #eee;
        }

        .invoice-box table tr.item.last td{
            border-bottom:none;
        }

        .invoice-box table tr.total td:nth-child(2){
            border-top:2px solid #eee;
            font-weight:bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td{
                width:100%;
                display:block;
                text-align:center;
            }

            .invoice-box table tr.information table td{
                width:100%;
                display:block;
                text-align:center;
            }
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            Mediaverse
                        </td>

                        <td>
                            Factuur #: 20161101<br>
                            Datum: {{$order['date']}}<br>
                            {{--Te betalen voor: February 1, 2015--}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            Mediaverse.<br>
                            Pieter coeckestraat 14<br>
                            5643VK, Eindhoven
                        </td>

                        <td>
                            {{$order['business']}}.<br>
                            {{$order['name']}}.<br>
                            {{$order['adres']}}<br>
                            {{$order['postcode']}}, {{$order['stad']}}
                        </td>
                    </tr>
                </table>
                <b>Bedankt voor uw aankoop.</b>
                <hr>
                <p>
                    <b>Instructies</b><br>
                    Gelieve het totaalbedrag binnen 14 dagen te voldoen op rekening NL42 ABNA 0594 0761 10 T.N.V. D Reniers.
                </p>
            </td>
        </tr>
    </table>
    <table>
        <tr class="heading">
            <td>
                Product
            </td>
            <td style="padding-right: 40px;">
                Aantaal
            </td>
            <td>
                Prijs
            </td>
        </tr>
        @foreach($order['items'] as $item)
            <tr class="item">
                <td>
                    {{$item['name']}}
                </td>
                <td style="padding-right: 40px;">
                    {{$item['amount']}}x
                </td>
                <td>
                    € {{number_format($item['price'], 2)}}
                    {{--€{{number_format($item['price'] - (($item['price'] / 100) * 21), 2)}}--}}
                </td>
            </tr>
        @endforeach

        <tr class="">
            <td></td>
            <td></td>
            <td>
                <br>
            </td>
        </tr>
    </table>



    <div class="pull-right">
        <small class="text-left">Subtotaal: </small> <small class="text-right"> € {{number_format(collect($order['items'])->sum('price'), 2)}} </small><br>
        <small class="text-left"> BTW 21%: </small> <small class="text-right">€ {{number_format(collect($order['items'])->sum('price') * 0.21, 2)}} </small><br>
        <b class="text-left"> Totaal:  </b> <b class="text-right"> € {{number_format(collect($order['items'])->sum('price') + collect($order['items'])->sum('price') * 0.21, 2)}}</b>
    </div>

    <br>
    <br>
    <br>
    <br>

    <table>
        <center>
            <ul class="footer">
                <li>KVK: 58808442</li> |
                <li>BTW: NL212068842B01</li> |
                <li>BIC: INGBNL2A</li> |
                <li>IBAN: NL42 ABNA 0594 0761 10</li> |
                <li>Tel: 0653779761</li>
                <li>E-mail: info@mediaverse.nl</li>|
                <li>Web: www.mediaverse.nl</li>
            </ul>
        </center>
    </table>
</div>
</body>
</html>