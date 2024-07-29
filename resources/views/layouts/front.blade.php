


<!DOCTYPE html>
<html lang="en-US"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Exchange | TBC009</title>
    <meta name="description" content="TBC009 Exchange add-on with our system today!">
    <link rel="stylesheet" href="/themekit/css/bootstrap-grid.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themekit/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="/skin.css?v=4" type="text/css" media="all">
    <link rel="shortcut icon" href="/media/icon.svg">
    <script id="boxcoin" src="/admin_exchange/js/client.js"></script>
    <style>
        body {
            text-align: center;
        }

        #boxcoin-exchange {
            margin: 0 auto 60px auto;
            text-align: left;
        }

        .logo {
            max-width: 200px;
            margin: 60px auto 0 auto;
        }
    </style>
<link href="/admin_exchange/css/client.css?v=1.2.4" type="text/css" rel="stylesheet">

<script>
var BXC_TRANSLATIONS = {};
var BXC_URL = "/admin_exchange/";
var BXC_SETTINGS = {"qr_code_color":"23413e","countdown":60,"webhook":false,"redirect":false,"vat_validation":false,"names":{"btc":["bitcoin","Bitcoin"],"btc_ln":["bitcoinlightningnetwork","Bitcoin Lightning Network"],"eth":["ethereum","Ethereum"],"xrp":["xrp","XRP"],"doge":["dogecoin","Dogecoin"],"algo":["algorand","Algorand"],"usdt":["tether","Tether"],"usdt_tron":["tether","Tether"],"usdt_bsc":["tether","Tether"],"usdc":["usdcoin","USD Coin"],"link":["chainlink","Chainlink"],"shib":["shibainu","Shiba Inu"],"bat":["basicattentiontoken","Basic Attention Token"],"busd":["binanceusd","Binance USD"],"bnb":["bnb","BNB"],"ltc":["litecoin","Litecoin"],"bch":["bitcoincash","Bitcoin Cash"],"trx":["tron","Tron"],"bsc":["binancechain","Binance Chain"]},"cryptocurrencies":{"BTC":["btc"],"ETH":["eth","usdt","usdc","link","shib","bat"],"TRX":["usdt_tron"],"BSC":["bnb","busd","usdt_bsc"],"XRP":["xrp"],"LTC":["ltc"],"DOGE":["doge"],"BCH":["bch"],"ALGO":["algo"]},"exchange":{"identity_type":false,"email_verification":false,"testnet_btc":false,"testnet_eth":false,"texts":["The payment of {amount} will be sent to the provided payment details:"],"url_rewrite_checkout":false}};
</script>
<link href="admin_exchange/apps/exchange/exchange.css?v=1.2.4" type="text/css" rel="stylesheet">
<script src="admin_exchange/apps/exchange/exchange.js?v=1.2.4" type="text/javascript"></script>
</head>
<body data-new-gr-c-s-check-loaded="14.1189.0" data-gr-ext-installed="">
    <a href="/">
        <img class="logo" src="/media/logo.svg" alt="logo">
    </a>



    @yield('contents')

    <script>
        (function () {
             let body = _query(document.body);
             body.on('click', '#bxc-get [data-crypto]', function () {
                 if (_query(this).data('value') != 'btc') {
                     alert('Sorry! In the demo version, only Bitcoin BTC is available for selection.');
                     _query('#bxc-get .bxc-1').html('<input id="bxc-get-amount" type="number" autocomplete="false"><div data-crypto="true" data-value="btc" data-network="btc" data-name="Bitcoin"><img src="/admin/media/icon-btc.svg" alt="btc"><span>btc</span></div>');
                 }
             });
             document.addEventListener('BXCInit', function () {
                 setTimeout(function () {
                     if (_query('#bxc-panel-start.bxc-active').e.length) {
                         let input = body.find('#bxc-send-amount');
                         if (!input.val()) {
                             BOXCoin.ajax('get-network-fee', { cryptocurrency_code: 'btc', returned_currency_code: 'usd' }, (response) => {
                                 input.val(response + 5);
                                 input.e[0].dispatchEvent(new Event('input', { bubbles: true }));
                             });
                         }
                     }
                 }, 500);
             });
         }());
     </script>

 </body>
 </html>
