@extends('layouts.front')

@section('contents')
<hr class="space">
    <div id="boxcoin-exchange-init">    <div id="boxcoin-exchange" class="bxc-box">
        <div id="bxc-panel-start" class="bxc-panel bxc-active">
            <div class="bxc-title">
                You send<i id="bxc-invert" class="bxc-icon-shuffle bxc-active"></i>
            </div>
            <div id="bxc-send" class="bxc-input bxc-input-select bxc-active">
                <div class="bxc-1">
                    <input id="bxc-send-amount" type="number" autocomplete="one-time-code">
                    <div data-value="btc" data-crypto="true" data-network="btc" data-name="Bitcoin">
                        <img src="https://boxcoin.dev/demo/admin_exchange/media/icon-btc.svg" alt="btc">
                        <span>btc</span>
                    </div>
                </div>
                <div class="bxc-2">
                    <div class="bxc-2-1">
                        <i class="bxc-icon-search"></i>
                        <input class="bxc-search-input" type="text" name="bxc-search" placeholder="Search..." autocomplete="one-time-code">
                        <i class="bxc-icon-close"></i>
                    </div>
                    <div class="bxc-2-2 bxc-scrollbar">
                        <span class="bxc-title-ul bxc-title-cryptocurrencies">
                            Cryptocurrencies                        </span>
                        <div class="bxc-select-ul"><div data-value="btc" data-crypto="true" data-network="btc" data-name="Bitcoin" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-btc.svg" alt="btc"><div><span>Bitcoin</span><span>BTC • Bitcoin</span></div></div><div data-value="eth" data-crypto="true" data-network="eth" data-name="Ethereum" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-eth.svg" alt="eth"><div><span>Ethereum</span><span>ETH • Ethereum</span></div></div><div data-value="usdt" data-crypto="true" data-network="eth" data-name="Tether" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-usdt.svg" alt="usdt"><div><span>Tether</span><span>USDT • Ethereum</span></div></div><div data-value="usdc" data-crypto="true" data-network="eth" data-name="USD Coin" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-usdc.svg" alt="usdc"><div><span>USD Coin</span><span>USDC • Ethereum</span></div></div><div data-value="link" data-crypto="true" data-network="eth" data-name="Chainlink" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-link.svg" alt="link"><div><span>Chainlink</span><span>LINK • Ethereum</span></div></div><div data-value="shib" data-crypto="true" data-network="eth" data-name="Shiba Inu" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-shib.svg" alt="shib"><div><span>Shiba Inu</span><span>SHIB • Ethereum</span></div></div><div data-value="bat" data-crypto="true" data-network="eth" data-name="Basic Attention Token" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-bat.svg" alt="bat"><div><span>Basic Attention Token</span><span>BAT • Ethereum</span></div></div><div data-value="usdt_tron" data-crypto="true" data-network="trx" data-name="Tether" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-usdt_tron.svg" alt="usdt_tron"><div><span>Tether</span><span>USDT • Tron</span></div></div><div data-value="bnb" data-crypto="true" data-network="bsc" data-name="BNB" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-bnb.svg" alt="bnb"><div><span>BNB</span><span>BNB • Binance Chain</span></div></div><div data-value="busd" data-crypto="true" data-network="bsc" data-name="Binance USD" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-busd.svg" alt="busd"><div><span>Binance USD</span><span>BUSD • Binance Chain</span></div></div><div data-value="usdt_bsc" data-crypto="true" data-network="bsc" data-name="Tether" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-usdt_bsc.svg" alt="usdt_bsc"><div><span>Tether</span><span>USDT • Binance Chain</span></div></div><div data-value="xrp" data-crypto="true" data-network="xrp" data-name="XRP" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-xrp.svg" alt="xrp"><div><span>XRP</span><span>XRP • XRP</span></div></div><div data-value="ltc" data-crypto="true" data-network="ltc" data-name="Litecoin" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-ltc.svg" alt="ltc"><div><span>Litecoin</span><span>LTC • Litecoin</span></div></div><div data-value="doge" data-crypto="true" data-network="doge" data-name="Dogecoin" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-doge.svg" alt="doge"><div><span>Dogecoin</span><span>DOGE • Dogecoin</span></div></div><div data-value="bch" data-crypto="true" data-network="bch" data-name="Bitcoin Cash" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-bch.svg" alt="bch"><div><span>Bitcoin Cash</span><span>BCH • Bitcoin Cash</span></div></div><div data-value="algo" data-crypto="true" data-network="algo" data-name="Algorand" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-algo.svg" alt="algo"><div><span>Algorand</span><span>ALGO • Algorand</span></div></div></div>                        <span class="bxc-title-ul bxc-title-currencies">
                            Currencies                        </span>
                        <div class="bxc-select-ul"><div data-value="aed" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ae.svg" alt="AED"><div><span>United Arab Emirates Dirham</span><span>AED</span></div></div><div data-value="afn" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/af.svg" alt="AFN"><div><span>Afghan Afghani</span><span>AFN</span></div></div><div data-value="all" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/al.svg" alt="ALL"><div><span>Albanian Lek</span><span>ALL</span></div></div><div data-value="amd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/am.svg" alt="AMD"><div><span>Armenian Dram</span><span>AMD</span></div></div><div data-value="ang" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/an.svg" alt="ANG"><div><span>Netherlands Antillean Guilder</span><span>ANG</span></div></div><div data-value="aoa" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ao.svg" alt="AOA"><div><span>Angolan Kwanza</span><span>AOA</span></div></div><div data-value="ars" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ar.svg" alt="ARS"><div><span>Argentine Peso</span><span>ARS</span></div></div><div data-value="aud" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/au.svg" alt="AUD"><div><span>Australian Dollar</span><span>AUD</span></div></div><div data-value="awg" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/aw.svg" alt="AWG"><div><span>Aruban Florin</span><span>AWG</span></div></div><div data-value="azn" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/az.svg" alt="AZN"><div><span>Azerbaijani Manat</span><span>AZN</span></div></div><div data-value="bam" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ba.svg" alt="BAM"><div><span>Bosnia-Herzegovina Convertible Mark</span><span>BAM</span></div></div><div data-value="bbd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bb.svg" alt="BBD"><div><span>Barbadian Dollar</span><span>BBD</span></div></div><div data-value="bdt" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bd.svg" alt="BDT"><div><span>Bangladeshi Taka</span><span>BDT</span></div></div><div data-value="bgn" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bg.svg" alt="BGN"><div><span>Bulgarian Lev</span><span>BGN</span></div></div><div data-value="bif" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bi.svg" alt="BIF"><div><span>Burundian Franc</span><span>BIF</span></div></div><div data-value="bmd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bm.svg" alt="BMD"><div><span>Bermudan Dollar</span><span>BMD</span></div></div><div data-value="bnd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bn.svg" alt="BND"><div><span>Brunei Dollar</span><span>BND</span></div></div><div data-value="bob" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bo.svg" alt="BOB"><div><span>Bolivian Boliviano</span><span>BOB</span></div></div><div data-value="brl" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/br.svg" alt="BRL"><div><span>Brazilian Real</span><span>BRL</span></div></div><div data-value="bsd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bs.svg" alt="BSD"><div><span>Bahamian Dollar</span><span>BSD</span></div></div><div data-value="bwp" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bw.svg" alt="BWP"><div><span>Botswanan Pula</span><span>BWP</span></div></div><div data-value="byn" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/by.svg" alt="BYN"><div><span>Belarusian Ruble</span><span>BYN</span></div></div><div data-value="bzd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/bz.svg" alt="BZD"><div><span>Belize Dollar</span><span>BZD</span></div></div><div data-value="cad" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ca.svg" alt="CAD"><div><span>Canadian Dollar</span><span>CAD</span></div></div><div data-value="cdf" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/cd.svg" alt="CDF"><div><span>Congolese Franc</span><span>CDF</span></div></div><div data-value="chf" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ch.svg" alt="CHF"><div><span>Swiss Franc</span><span>CHF</span></div></div><div data-value="clp" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/cl.svg" alt="CLP"><div><span>Chilean Peso</span><span>CLP</span></div></div><div data-value="cny" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/cn.svg" alt="CNY"><div><span>Chinese Yuan</span><span>CNY</span></div></div><div data-value="cop" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/co.svg" alt="COP"><div><span>Colombian Peso</span><span>COP</span></div></div><div data-value="crc" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/cr.svg" alt="CRC"><div><span>Costa Rican Colón</span><span>CRC</span></div></div><div data-value="cve" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/cv.svg" alt="CVE"><div><span>Cape Verdean Escudo</span><span>CVE</span></div></div><div data-value="czk" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/cz.svg" alt="CZK"><div><span>Czech Republic Koruna</span><span>CZK</span></div></div><div data-value="djf" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/dj.svg" alt="DJF"><div><span>Djiboutian Franc</span><span>DJF</span></div></div><div data-value="dkk" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/dk.svg" alt="DKK"><div><span>Danish Krone</span><span>DKK</span></div></div><div data-value="dop" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/do.svg" alt="DOP"><div><span>Dominican Peso</span><span>DOP</span></div></div><div data-value="dzd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/dz.svg" alt="DZD"><div><span>Algerian Dinar</span><span>DZD</span></div></div><div data-value="egp" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/eg.svg" alt="EGP"><div><span>Egyptian Pound</span><span>EGP</span></div></div><div data-value="etb" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/et.svg" alt="ETB"><div><span>Ethiopian Birr</span><span>ETB</span></div></div><div data-value="eur" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/eu.svg" alt="EUR"><div><span>Euro</span><span>EUR</span></div></div><div data-value="fjd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/fj.svg" alt="FJD"><div><span>Fijian Dollar</span><span>FJD</span></div></div><div data-value="fkp" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/fk.svg" alt="FKP"><div><span>Falkland Islands Pound</span><span>FKP</span></div></div><div data-value="gbp" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/gb.svg" alt="GBP"><div><span>British Pound Sterling</span><span>GBP</span></div></div><div data-value="gel" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ge.svg" alt="GEL"><div><span>Georgian Lari</span><span>GEL</span></div></div><div data-value="gip" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/gi.svg" alt="GIP"><div><span>Gibraltar Pound</span><span>GIP</span></div></div><div data-value="gmd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/gm.svg" alt="GMD"><div><span>Gambian Dalasi</span><span>GMD</span></div></div><div data-value="gnf" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/gn.svg" alt="GNF"><div><span>Guinean Franc</span><span>GNF</span></div></div><div data-value="gtq" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/gt.svg" alt="GTQ"><div><span>Guatemalan Quetzal</span><span>GTQ</span></div></div><div data-value="gyd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/gy.svg" alt="GYD"><div><span>Guyanaese Dollar</span><span>GYD</span></div></div><div data-value="hkd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/hk.svg" alt="HKD"><div><span>Hong Kong Dollar</span><span>HKD</span></div></div><div data-value="hnl" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/hn.svg" alt="HNL"><div><span>Honduran Lempira</span><span>HNL</span></div></div><div data-value="htg" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ht.svg" alt="HTG"><div><span>Haitian Gourde</span><span>HTG</span></div></div><div data-value="huf" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/hu.svg" alt="HUF"><div><span>Hungarian Forint</span><span>HUF</span></div></div><div data-value="idr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/id.svg" alt="IDR"><div><span>Indonesian Rupiah</span><span>IDR</span></div></div><div data-value="ils" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/il.svg" alt="ILS"><div><span>Israeli New Sheqel</span><span>ILS</span></div></div><div data-value="inr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/in.svg" alt="INR"><div><span>Indian Rupee</span><span>INR</span></div></div><div data-value="isk" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/is.svg" alt="ISK"><div><span>Icelandic Króna</span><span>ISK</span></div></div><div data-value="jmd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/jm.svg" alt="JMD"><div><span>Jamaican Dollar</span><span>JMD</span></div></div><div data-value="jpy" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/jp.svg" alt="JPY"><div><span>Japanese Yen</span><span>JPY</span></div></div><div data-value="kes" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ke.svg" alt="KES"><div><span>Kenyan Shilling</span><span>KES</span></div></div><div data-value="kgs" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/kg.svg" alt="KGS"><div><span>Kyrgystani Som</span><span>KGS</span></div></div><div data-value="khr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/kh.svg" alt="KHR"><div><span>Cambodian Riel</span><span>KHR</span></div></div><div data-value="kmf" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/km.svg" alt="KMF"><div><span>Comorian Franc</span><span>KMF</span></div></div><div data-value="krw" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/kr.svg" alt="KRW"><div><span>South Korean Won</span><span>KRW</span></div></div><div data-value="kyd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ky.svg" alt="KYD"><div><span>Cayman Islands Dollar</span><span>KYD</span></div></div><div data-value="kzt" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/kz.svg" alt="KZT"><div><span>Kazakhstani Tenge</span><span>KZT</span></div></div><div data-value="lak" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/la.svg" alt="LAK"><div><span>Laotian Kip</span><span>LAK</span></div></div><div data-value="lbp" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/lb.svg" alt="LBP"><div><span>Lebanese Pound</span><span>LBP</span></div></div><div data-value="lkr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/lk.svg" alt="LKR"><div><span>Sri Lankan Rupee</span><span>LKR</span></div></div><div data-value="lrd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/lr.svg" alt="LRD"><div><span>Liberian Dollar</span><span>LRD</span></div></div><div data-value="lsl" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ls.svg" alt="LSL"><div><span>Lesotho Loti</span><span>LSL</span></div></div><div data-value="mad" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ma.svg" alt="MAD"><div><span>Moroccan Dirham</span><span>MAD</span></div></div><div data-value="mdl" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/md.svg" alt="MDL"><div><span>Moldovan Leu</span><span>MDL</span></div></div><div data-value="mga" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mg.svg" alt="MGA"><div><span>Malagasy Ariary</span><span>MGA</span></div></div><div data-value="mkd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mk.svg" alt="MKD"><div><span>Macedonian Denar</span><span>MKD</span></div></div><div data-value="mmk" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mm.svg" alt="MMK"><div><span>Myanma Kyat</span><span>MMK</span></div></div><div data-value="mnt" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mn.svg" alt="MNT"><div><span>Mongolian Tugrik</span><span>MNT</span></div></div><div data-value="mop" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mo.svg" alt="MOP"><div><span>Macanese Pataca</span><span>MOP</span></div></div><div data-value="mur" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mu.svg" alt="MUR"><div><span>Mauritian Rupee</span><span>MUR</span></div></div><div data-value="mvr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mv.svg" alt="MVR"><div><span>Maldivian Rufiyaa</span><span>MVR</span></div></div><div data-value="mwk" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mw.svg" alt="MWK"><div><span>Malawian Kwacha</span><span>MWK</span></div></div><div data-value="mxn" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mx.svg" alt="MXN"><div><span>Mexican Peso</span><span>MXN</span></div></div><div data-value="myr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/my.svg" alt="MYR"><div><span>Malaysian Ringgit</span><span>MYR</span></div></div><div data-value="mzn" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/mz.svg" alt="MZN"><div><span>Mozambican Metical</span><span>MZN</span></div></div><div data-value="nad" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/na.svg" alt="NAD"><div><span>Namibian Dollar</span><span>NAD</span></div></div><div data-value="ngn" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ng.svg" alt="NGN"><div><span>Nigerian Naira</span><span>NGN</span></div></div><div data-value="nio" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ni.svg" alt="NIO"><div><span>Nicaraguan Córdoba</span><span>NIO</span></div></div><div data-value="nok" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/no.svg" alt="NOK"><div><span>Norwegian Krone</span><span>NOK</span></div></div><div data-value="npr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/np.svg" alt="NPR"><div><span>Nepalese Rupee</span><span>NPR</span></div></div><div data-value="nzd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/nz.svg" alt="NZD"><div><span>New Zealand Dollar</span><span>NZD</span></div></div><div data-value="pab" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/pa.svg" alt="PAB"><div><span>Panamanian Balboa</span><span>PAB</span></div></div><div data-value="pen" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/pe.svg" alt="PEN"><div><span>Peruvian Nuevo Sol</span><span>PEN</span></div></div><div data-value="pgk" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/pg.svg" alt="PGK"><div><span>Papua New Guinean Kina</span><span>PGK</span></div></div><div data-value="php" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ph.svg" alt="PHP"><div><span>Philippine Peso</span><span>PHP</span></div></div><div data-value="pkr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/pk.svg" alt="PKR"><div><span>Pakistani Rupee</span><span>PKR</span></div></div><div data-value="pln" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/pl.svg" alt="PLN"><div><span>Polish Zloty</span><span>PLN</span></div></div><div data-value="pyg" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/py.svg" alt="PYG"><div><span>Paraguayan Guarani</span><span>PYG</span></div></div><div data-value="qar" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/qa.svg" alt="QAR"><div><span>Qatari Rial</span><span>QAR</span></div></div><div data-value="ron" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ro.svg" alt="RON"><div><span>Romanian Leu</span><span>RON</span></div></div><div data-value="rsd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/rs.svg" alt="RSD"><div><span>Serbian Dinar</span><span>RSD</span></div></div><div data-value="rub" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ru.svg" alt="RUB"><div><span>Russian Ruble</span><span>RUB</span></div></div><div data-value="rwf" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/rw.svg" alt="RWF"><div><span>Rwandan Franc</span><span>RWF</span></div></div><div data-value="sar" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/sa.svg" alt="SAR"><div><span>Saudi Riyal</span><span>SAR</span></div></div><div data-value="sbd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/sb.svg" alt="SBD"><div><span>Solomon Islands Dollar</span><span>SBD</span></div></div><div data-value="scr" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/sc.svg" alt="SCR"><div><span>Seychellois Rupee</span><span>SCR</span></div></div><div data-value="sek" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/se.svg" alt="SEK"><div><span>Swedish Krona</span><span>SEK</span></div></div><div data-value="sgd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/sg.svg" alt="SGD"><div><span>Singapore Dollar</span><span>SGD</span></div></div><div data-value="sll" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/sl.svg" alt="SLL"><div><span>Sierra Leonean Leone</span><span>SLL</span></div></div><div data-value="sos" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/so.svg" alt="SOS"><div><span>Somali Shilling</span><span>SOS</span></div></div><div data-value="srd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/sr.svg" alt="SRD"><div><span>Surinamese Dollar</span><span>SRD</span></div></div><div data-value="szl" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/sz.svg" alt="SZL"><div><span>Swazi Lilangeni</span><span>SZL</span></div></div><div data-value="thb" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/th.svg" alt="THB"><div><span>Thai Baht</span><span>THB</span></div></div><div data-value="tjs" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/tj.svg" alt="TJS"><div><span>Tajikistani Somoni</span><span>TJS</span></div></div><div data-value="top" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/to.svg" alt="TOP"><div><span>Tongan Pa'anga</span><span>TOP</span></div></div><div data-value="try" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/tr.svg" alt="TRY"><div><span>Turkish Lira</span><span>TRY</span></div></div><div data-value="ttd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/tt.svg" alt="TTD"><div><span>Trinidad and Tobago Dollar</span><span>TTD</span></div></div><div data-value="twd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/tw.svg" alt="TWD"><div><span>New Taiwan Dollar</span><span>TWD</span></div></div><div data-value="tzs" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/tz.svg" alt="TZS"><div><span>Tanzanian Shilling</span><span>TZS</span></div></div><div data-value="uah" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ua.svg" alt="UAH"><div><span>Ukrainian Hryvnia</span><span>UAH</span></div></div><div data-value="ugx" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ug.svg" alt="UGX"><div><span>Ugandan Shilling</span><span>UGX</span></div></div><div data-value="usd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/us.svg" alt="USD"><div><span>United States Dollar</span><span>USD</span></div></div><div data-value="uyu" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/uy.svg" alt="UYU"><div><span>Uruguayan Peso</span><span>UYU</span></div></div><div data-value="uzs" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/uz.svg" alt="UZS"><div><span>Uzbekistan Som</span><span>UZS</span></div></div><div data-value="vnd" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/vn.svg" alt="VND"><div><span>Vietnamese Dong</span><span>VND</span></div></div><div data-value="vuv" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/vu.svg" alt="VUV"><div><span>Vanuatu Vatu</span><span>VUV</span></div></div><div data-value="wst" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ws.svg" alt="WST"><div><span>Samoan Tala</span><span>WST</span></div></div><div data-value="yer" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/ye.svg" alt="YER"><div><span>Yemeni Rial</span><span>YER</span></div></div><div data-value="zar" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/za.svg" alt="ZAR"><div><span>South African Rand</span><span>ZAR</span></div></div><div data-value="zmw" data-currency="true" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/flags/zm.svg" alt="ZMW"><div><span>Zambian Kwacha</span><span>ZMW</span></div></div></div>                    </div>
                </div>
            </div>
            <div id="bxc-error-pay" class="bxc-error"></div>
            <div class="bxc-title">
                You get            </div>
            <div id="bxc-get" class="bxc-input bxc-input-select bxc-active">
                <div class="bxc-1">
                    <input id="bxc-get-amount" type="number" autocomplete="one-time-code">
                    <div data-crypto="true" data-value="btc" data-network="btc" data-name="Bitcoin">
                        <img src="https://boxcoin.dev/demo/admin_exchange/media/icon-btc.svg" alt="btc">
                        <span>btc</span>
                    </div>
                </div>
                <div class="bxc-2">
                    <div class="bxc-2-1">
                        <i class="bxc-icon-search"></i>
                        <input class="bxc-search-input" type="text" name="bxc-search" placeholder="Search..." autocomplete="one-time-code">
                        <i class="bxc-icon-close"></i>
                    </div>
                    <div class="bxc-2-2 bxc-scrollbar">
                        <div class="bxc-select-ul"><div data-value="btc" data-crypto="true" data-network="btc" data-name="Bitcoin" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-btc.svg" alt="btc"><div><span>Bitcoin</span><span>BTC • Bitcoin</span></div></div><div data-value="eth" data-crypto="true" data-network="eth" data-name="Ethereum" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-eth.svg" alt="eth"><div><span>Ethereum</span><span>ETH • Ethereum</span></div></div><div data-value="usdt" data-crypto="true" data-network="eth" data-name="Tether" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-usdt.svg" alt="usdt"><div><span>Tether</span><span>USDT • Ethereum</span></div></div><div data-value="usdc" data-crypto="true" data-network="eth" data-name="USD Coin" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-usdc.svg" alt="usdc"><div><span>USD Coin</span><span>USDC • Ethereum</span></div></div><div data-value="link" data-crypto="true" data-network="eth" data-name="Chainlink" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-link.svg" alt="link"><div><span>Chainlink</span><span>LINK • Ethereum</span></div></div><div data-value="shib" data-crypto="true" data-network="eth" data-name="Shiba Inu" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-shib.svg" alt="shib"><div><span>Shiba Inu</span><span>SHIB • Ethereum</span></div></div><div data-value="bat" data-crypto="true" data-network="eth" data-name="Basic Attention Token" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-bat.svg" alt="bat"><div><span>Basic Attention Token</span><span>BAT • Ethereum</span></div></div></div>                    </div>
                </div>
            </div>
            <div class="bxc-title bxc-title-summary bxc-title-summary-start bxc-active">
                Summary<span id="bxc-quote-update" class="bxc-flex"><i class="bxc-icon-clock"></i>Quote updates in 3s</span>
            </div>
            <div id="bxc-summary" class="bxc-summary bxc-active">
                <div class="bxc-1">You get <b>0.0000327 BTC</b> for <b>0.00004577 BTC</b></div>
                <div class="bxc-2"><span class="bxc-flex"><span>0.0000327<i> @ 1 BTC</i></span><span>0.0000327 BTC</span></span><span class="bxc-flex"><span>Network fee <i class="bxc-icon-help bxc-toolip-cnt"><span class="bxc-toolip">The blockchain fee</span></i></span><span>0.00001078 BTC</span></span><span class="bxc-flex"><span>Processing fee <i class="bxc-icon-help bxc-toolip-cnt"><span class="bxc-toolip">The fee charged by us</span></i></span><span>0.00000228 BTC</span></span></div>
            </div>
            <div id="bxc-btn-exchange-1" class="bxc-btn bxc-icon-after bxc-btn-main">
                Continue            </div>
            <div class="bxc-footer">By continuing you agree to our <a href="https://boxcoin.dev/cookie" target="_blank">cookie policy</a>.</div>        </div>
                <div id="bxc-panel-address" class="bxc-panel">
            <div class="bxc-title"></div>
            <div id="bxc-get-address" class="bxc-input bxc-active">
                <input type="text" autocomplete="one-time-code">
                <img src="" alt="">
            </div>
            <div id="bxc-error-address" class="bxc-error"></div>
            <div class="bxc-text"></div>
            <div id="bxc-btn-exchange-2" class="bxc-btn bxc-icon-after bxc-btn-main bxc-disabled">
                Continue            </div>
            <div class="bxc-footer">By continuing you confirm that you own and have control of this wallet.</div>        </div>
                <div id="bxc-panel-payment" class="bxc-panel">
            <div class="bxc-title">
                You pay with<i data-back="address" class="bxc-icon-arrow-left"></i>
            </div>
            <div class="bxc-paymet-method">
                <div data-payment-method="stripe" class="bxc-flex bxc-active"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-cc.svg" alt="Credit or debit card"><span>Credit or debit card</span></div><div data-payment-method="paypal" class="bxc-flex"><img src="https://boxcoin.dev/demo/admin_exchange/media/icon-pp-2.svg" alt="PayPal"><span>PayPal</span></div>                <div data-payment-method="crypto" class="bxc-flex">
                    <img src="" alt="">
                    <div></div>
                </div>
            </div>
            <div id="bxc-payment-address-title" class="bxc-title"></div>
            <div id="bxc-payment-address" class="bxc-input bxc-active">
                <input type="text" disabled="">
                <img src="" alt="">
            </div>
            <div id="bxc-payment-address-fiat"></div>
            <div class="bxc-title bxc-title-summary bxc-title-summary-payment">
                Summary<span id="bxc-quote-update" class="bxc-flex"></span>
            </div>
            <div id="bxc-summary-payment" class="bxc-summary">
                <div class="bxc-1"></div>
                <div class="bxc-2"></div>
            </div>
            <div id="bxc-btn-exchange-3" class="bxc-btn bxc-icon-after bxc-btn-main bxc-disabled">
                Pay            </div>
            <div class="bxc-footer">By clicking Pay you agree to our <a href="https://boxcoin.dev/terms-of-service" target="_blank">Terms of Service</a> and <a href="https://boxcoin.dev/privacy" target="_blank">Privacy Policy</a>.</div>        </div>
        <div id="bxc-panel-processing" class="bxc-panel">
            <div class="bxc-loading"></div>
            <div class="bxc-title">
                We are confirming your payment...            </div>
            <div class="bxc-footer">Problems? Contact us at support@boxcoin.dev and send your Order ID.</div>            <div id="bxc-cancel-verify-payment" class="bxc-link">
                <div class="bxc-icon-close"></div>Cancel            </div>
        </div>
        <div id="bxc-panel-finish" class="bxc-panel">
            <div class="bxc-icon-check"></div>
            <div id="bxc-finish-text" class="bxc-title"></div>
            <a id="bxc-transaction-link" href="#" class="bxc-underline bxc-loading">
                View transaction            </a>
            <div class="bxc-footer">Problems? Contact us at support@boxcoin.dev and send your Order ID.</div>        </div>
            </div>
</div>

@endsection

