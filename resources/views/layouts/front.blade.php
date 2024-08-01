<!DOCTYPE html>
<html lang="en-US"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Exchange | TBC009</title>
    <meta name="description" content="Official TBC009 Exchange!">
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
            max-width: 100px;
            margin: 60px auto 0 auto;
        }
    </style>
<link href="/admin_exchange/css/client.css?v=1.2.4" type="text/css" rel="stylesheet">

<script>
var BXC_TRANSLATIONS = {};
var BXC_URL = "/admin_exchange/";
var BXC_SETTINGS = {"qr_code_color":"23413e","countdown":60,"webhook":false,"redirect":false,"vat_validation":false,"names":{"btc":["bitcoin","Bitcoin"],"btc_ln":["bitcoinlightningnetwork","Bitcoin Lightning Network"],"eth":["ethereum","Ethereum"],"xrp":["xrp","XRP"],"doge":["dogecoin","Dogecoin"],"algo":["algorand","Algorand"],"usdt":["tether","Tether"],"usdt_tron":["tether","Tether"],"usdt_bsc":["tether","Tether"],"usdc":["usdcoin","USD Coin"],"link":["chainlink","Chainlink"],"shib":["shibainu","Shiba Inu"],"bat":["basicattentiontoken","Basic Attention Token"],"busd":["binanceusd","Binance USD"],"bnb":["bnb","BNB"],"ltc":["litecoin","Litecoin"],"bch":["bitcoincash","Bitcoin Cash"],"trx":["tron","Tron"],"bsc":["binancechain","Binance Chain"]},"cryptocurrencies":{"BTC":["btc"],"ETH":["eth","usdt","usdc","link","shib","bat"],"TRX":["usdt_tron"],"BSC":["bnb","busd","usdt_bsc"],"XRP":["xrp"],"LTC":["ltc"],"DOGE":["doge"],"BCH":["bch"],"ALGO":["algo"]},"exchange":{"identity_type":false,"email_verification":false,"testnet_btc":false,"testnet_eth":false,"texts":["The payment of {amount} will be sent to the provided payment details:"],"url_rewrite_checkout":false}};
</script>
<link href="/admin_exchange/apps/exchange/exchange.css?v=1.2.4" type="text/css" rel="stylesheet">
<script src="/admin_exchange/apps/exchange/exchange.js?v=1.2.4" type="text/javascript"></script>

<!-- imported from user layout -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- material icon cdn --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    {{-- sweet alert css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    {{-- datatable cdn  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.7/css/scroller.dataTables.min.css">

    {{-- owl carrousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- End of imported from user layout -->

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

     <!-- Imported from user layouts -->

     {{-- all script placements --}}
     <script src="/code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>



     <!-- Include SweetAlert2 JavaScript file -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

     {{-- owl carrousel --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



     {{-- datatable --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
     <script
         src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fh-3.2.4/kt-2.7.0/r-2.3.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/datatables.min.js">
     </script>


     {{-- qrcode --}}
     <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
     {{-- main scripts --}}
     <script src="{{ asset('assets/scripts/cs.js') }}"></script>
     <script src="{{ asset('assets/scripts/main.js') }}"></script>


     @yield('scripts')

     <script>
         $(document).ready(function() {
             $('.datatable-skeleton-table').DataTable({
                 scrollX: true,
                 "sScrollXInner": "100%",
             });


         });
     </script>

     {{-- toast notification --}}
     @php
         if (session()->has('fail')) {
             $type = 'error';
             $message = session()->get('fail');
         } elseif (session()->has('success')) {
             $type = 'success';
             $message = session()->get('success');
         } else {
             $type = null;
             $message = null;
         }
     @endphp
     <script>
         var type = "{{ $type }}";
         var message = "{{ $message }}";
         if (type && message) {
             toastNotify(type, message);
         }
     </script>

     {{-- logout --}}
     <script>
         $(document).on('click', '.logout', function(e){
             html = `
                 <div class="mt-5 h-72 p-2 rounded-lg flex justify-center items-center">
                     <div>
                         <h2 class="text-center text-dark">Do you really want to Logout?</h2>
                         <form action="{{ route('user.logout') }}" class="mt-5 gen-form" data-action="redirect" data-url="{{ url('/') }}">
                             @csrf
                             <button type="submit" class="text-white mt-5 bg-red-500 px-2 py-1 rounded-full text-xs hover:scale-110 transition-all uppercase" type="submit">Yes,  Logout</button>
                         </form>

                     </div>
                 </div>
                 `;
             Swal.fire({
                 html: html,
                 toast: false,
                 background: 'rgb(255, 255, 255)',
                 showConfirmButton: false,
                 showCloseButton: true,
                 allowEscapeKey: false, // Prevent closing by escape key
                 allowOutsideClick: false, // Prevent closing by clicking backdrop
                 willClose: () => {
                     //delete the previously generated qrcode
                     // $('#single_wallet_qrcode').html('');
                 }
             });
         });
     </script>

     {{-- livechat --}}
     {!! json_decode(site('livechat')) !!}

     <!-- End of imported from user layouts -->

 </body>
 </html>
