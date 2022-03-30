<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "icon" href = "{{ URL::asset('image/icon.png') }}" type = "image/x-icon">
    <title>Supermiya - O`zbekistondagi No1 (Mnemonika) Eslab Qolish Treningi</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/video.js@6.6.3/dist/video-js.css">
    <script src="https://cdn.jsdelivr.net/npm/video.js@6.6.3/dist/video.min.js"></script>
    <link href="//players.brightcove.net/videojs-live-dvrux/1/videojs-live-dvrux.min.css" rel="stylesheet">
    <script src="//players.brightcove.net/videojs-live-dvrux/1/videojs-live-dvrux.min.js"></script>
    <link href="//players.brightcove.net/videojs-quality-menu/1/videojs-quality-menu.css" rel="stylesheet">
    <script src="//players.brightcove.net/videojs-quality-menu/1/videojs-quality-menu.min.js"></script>
    <script src="https://cdn.streamroot.io/videojs-hlsjs-plugin/1/stable/videojs-hlsjs-plugin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/video.css') }}">
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '454903096105808');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=454903096105808&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
    <style>
        .video-js .vjs-tech {
            position: inherit !important;
        }
    </style>
</head>
<body>
    <section class="header">
        <h1>O`ZBEKISTONDAGI 
            <img width=36 height=26 draggable="false" role="img" loading="lazy"
            alt="Flag Uzbekistan" src="{{URL::asset("image/flag-uzb.svg")}}">
            #1 MNEMONIKA KURSI
        </h1>
    </section>
    <section class="hero">
        <div class="widget">
            <p>CHET TILINI O`RGANAYOTGANLAR VA ABITURIENTLAR DIQQATIGA:</p>
        </div>
        <h1>21 KUN ICHIDA ESLAB QOLISH QOBILIYATINGIZNI 10 BAROBARGA TEZLASHTIRING (XOTIRANGIZ SUST BO`LSA HAM) - NATIJA KAFOLATLANGAN!</h1>
                
        <?php $i=0;?>
        <div class="flex-container">
            <div class="flex-child">
                <video id="video{{$i++  }}" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" poster="https://vz-e119da89-d8b.b-cdn.net/d189270c-38f4-4bd2-83ef-a4a4bd4643a0/thumbnail.jpg" >
                    <source src="https://vz-e119da89-d8b.b-cdn.net/d189270c-38f4-4bd2-83ef-a4a4bd4643a0/playlist.m3u8" type="application/x-mpegURL">
                </video>
            </div>  
        </div>

        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a>
            </p>
        </div>
        <div class="sponsors">
                <div class="items">
                    <img  
                    src="{{URL::asset("image/zortv.png")}}" 
                    data-lazy-type="image"
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    loading="lazy">
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/sevimli.png")}}" 
                    data-lazy-type="image" 
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    loading="lazy">
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/kunuz.png")}}" 
                    data-lazy-type="image" 
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    loading="lazy">
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/my5.png")}}" 
                    data-lazy-type="image" 
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    loading="lazy">
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/perviykanal.png")}}" 
                    data-lazy-type="image" 
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    loading="lazy">
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/yamogu.png")}}" 
                    data-lazy-type="image" 
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    loading="lazy">
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/mfaktor.png")}}" 
                    data-lazy-type="image" 
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    loading="lazy">
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/osmondagibolalar.png")}}" 
                    data-lazy-type="image" 
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    loading="lazy">
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/homecreditbank.png")}}" 
                    data-lazy-type="image" 
                    loading="lazy"
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    >
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/kdbbank.png")}}" 
                    data-lazy-type="image" 
                    loading="lazy"
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    >
                </div>
                <div class="items">
                    <img  
                    src="{{URL::asset("image/modul5.png")}}" 
                    data-lazy-type="image" 
                    loading="lazy"
                    alt="Zo`r tv, Dovranbek Turdiev,, mnemonika, eslab qolish bo`yicha Rossiya rekordchisi" 
                    >
                </div>
        </div>
    </section>
    <section class="testimonials">
        <p class="title">“U O`ZINI USTIDA ISHLASHGA JUDAYAM QIZIQAR EKAN VA UNDA JUDAYAM KATTA NATIJALARI BOR EKAN”</p>
        <div class="flex-container">
            <div class="flex-child">
                <video id="video{{$i++  }}" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" poster="https://vz-e119da89-d8b.b-cdn.net/c47692c4-9552-4e14-9fd3-cfa8f8ed9697/thumbnail.jpg">
                    <source src="https://vz-e119da89-d8b.b-cdn.net/c47692c4-9552-4e14-9fd3-cfa8f8ed9697/playlist.m3u8" type="application/x-mpegURL">
                </video>
            </div>  
        </div>
   
        <script>
            for (i = 0; i < {{$i}}; ++i) {
                var options = {
                    plugins: {
                        // JSON config added by Brightcove player generator
                        streamrootHls: {
                            hlsjsConfig: {
                                // Your Hls.js config
                            },
                        },
                        qualityMenu: {
                            useResolutionLabels: true
                        }
                    }
                };
                var video = [
                    'https://vz-e119da89-d8b.b-cdn.net/d189270c-38f4-4bd2-83ef-a4a4bd4643a0/playlist.m3u8',
                    'https://vz-e119da89-d8b.b-cdn.net/c47692c4-9552-4e14-9fd3-cfa8f8ed9697/playlist.m3u8'
                ]
                var player = videojs('video'+i,options);
                player.qualityMenu();
                player.dvrux();
                player.src({ src: video[i] });
            }
        </script>
        <p class="name">JAKHONGIR PULATOV</p>
        <p class="name-info">“CAMBRIDGE” O`QUV MARKAZI ASOSCHISI</p>
    </section>
    <section class="main">
        <p class="title main-title">“SUPERMIYA – KATTA EHTIMOL BILAN ESLAB QOLISH VA XOTIRANI RIVOJLANTIRISH BO`YICHA O`ZBEK TILIDAGI ENG MUZOKARAGA BOY TRENING…”</p>

        <p class="text">Bundan 25 yil avval ikki do`stlar bir xil universitetni tamomlashdi.</p>
        
        <p class="sub-text">Ular aqlan va jismonan bir-biriga o`xshar edi.</p>
        <p class="sub-text">Ikkovi ham kelishgan, universitet o`rtacha talabalaridan aqlliroq, mas`uliyatli va har qanday oliygoh bitiruvchisi kabi orzu maqsadlarga boy edi.</p>
        <p class="sub-text">Yaqinda ular universitet tamomlaganlarini 25 yilligini nishonlash uchun universitetda yig`ilishdi.</p>
        <p class="sub-text">Ikkovi ham hozirgacha bir-biriga o`xshash, oila qurgan va 3 nafardan farzandi bor edi.</p>
        <p class="sub-text">Eng qizig`i ikkovi ham universitetni bitirgandan so`ng bir xil korxonaga ishga kirib, hozirgacha o`sha yerda ishlashayotgan ekan.</p>
        
        <p class="text">Lekin ular orasida katta bir farq bor edi.</p>
        <p class="sub-text">Ulardan biri kichik bir bo`limda ish boshqaruvchi bo`lsa, boshqasi korxona Direktori edi.</p>
        <p class="sub-text">Insonlar hayotida bunday farqlar nimani hisobiga bo`lishini hech o`ylab ko`rganmisiz?</p>
        <p class="sub-text">Bu tug`ma aql, talant yoki sodiqlik emas.</p>
        <p class="sub-text">Biri muvaffaqqiyatli bo`lishni xohlab, ikkinchisi xohlamaganligi ham emas. (Muvaffaqiyatli bo`lishni kim xohlamaydi?!)</p>
        
        <p class="text">Farq – inson qanday bilimlarga egaligi va ularni hayotda qo`llay olishidadir.</p>
        <p class="sub-text">Supermiya treningimni yaratishimdan maqsad:</p>
        <p class="sub-text">Ta`lim jarayoningizda haqiqatdan ham qo`llay oladigan bilimlarni o`rgatib, hayotdagi o`z o`rningizni tezroq topishingizga ko`maklashish.</p>
        <p class="sub-text">Keling endi sizni tezroq rivojlanishingizga to`sqinlik qilishi mumkin bo`lgan…</p>

        <p class="title main-title padding">MUAMMOLAR VA QIYINCHILIKLAR BILAN BIRMA-BIR TANISHIB CHIQSAK</p>
        <p class="sub-text">🔴 Yodlagan Chet tili so`zlaringizni tez unutib qo`yishingiz sababli <span class="text-bold">yangi tilni o`rganishga qiynalyapsizmi?</span></p>
        <p class="sub-text">🔴 Oliygoh imtihoniga ko`ngildakidek tayyorlana olmasdan, <span class="text-bold">imtihondan yiqilishdan qo`rqyapsizmi?</span></p>
        <p class="sub-text">🔴 Sahnadagi nutqingizni yod olishda qiynalib, <span class="text-bold">uyalib qolishdan xavotirdamisiz?</span></p>
        <p class="sub-text">🔴 Kitobda o`qigan ma`lumotlaringizni tezda unutib qo`yishingiz sababli, <span class="text-bold">ketgan vaqtingizga achinyapsizmi?</span></p>
        <p class="sub-text">🔴 Ish yoki o`qish vaqtida ko`p chalg`ishingiz sababli, <span class="text-bold">o`zingiz xohlagan natijaga erisha olmayapsizmi?</span></p>
        <p class="sub-text">🔴 Diqqat-e`tiboringiz sustligi sababli <span class="text-bold">muhim ish bilan uzoq vaqt mobaynida shug`ullana olmayapsizmi?</span></p>
        <p class="sub-text">🔴 Quvvatingiz kamligi sababli tez charchab qolyapsiz va <span class="text-bold">bu samaradorligingizni pasaytiryaptimi?</span></p>
        <p class="sub-text">🔴 Xotirangiz sustligi kelajagingizga ta`sir qilishini bilib <span class="text-bold">muvaffaqqiyatga erisha olmaslikdan qo`rqyapsizmi?</span></p>
        <p class="sub-text">Agar yuqoridagi savollardan hech bo`lmasa bittasiga “Ha” degan bo`lsangiz…</p>
        
        <p class="title main-title">O`ZINGIZNI ASLO AYBLAMANG</p>

        <p class="sub-text"><span class="text-bold">Bu sizni aybingiz emas.<span></p>
        <p class="sub-text">Maktab sizga o`rganishingiz kerak bo`lgan fanlarni ko`rsatgan, qanday qilib tez va samarali o`rganish usullarini emas.</p>
        <p class="sub-text">Quyidagi ikki savolga javob bering.</p>
        <p class="sub-text"><span class="symbol text-bold">>>></span> Uch g`ildirakli velosiped haydashni o`rgatishgani sabab ikki g`ildirakli velosiped hayday olmagan bolani ayblash kerakmi</p>
        <p class="sub-text"><span class="symbol text-bold">>>></span> Yoki ko`paytiruv jadvalini o`rgatishgani sabab ildiz osti misollar yecha olmagan o`quvchini ayblash kerakmi?</p>
        <p class="sub-text">Albatta yo`q – ularga shunchaki <span class="text-bold">yaxshiroq yo`lni ko`rsatishmagan!</span></p>
        <p class="sub-text">Lekin yaxshi yangilik shuki…</p>

        <p class="title main-title padding">ENDI SIZNING HAM TO`G`RI VA OSON YO`LNI KO`RSATADIGAN USTOZINGIZ BOR</p>

        <p class="person-img"><img src="{{URL::asset("image/DovranbekTurdiev.jpeg")}}" loading="lazy" alt="Dovronbek Turdiev"></p>
        <p class="sub-text text-bold">Mani ismim Dovranbek Turdiev.</p>
        <p class="sub-text">Mnemonika – Tasavvur orqali katta hajmdagi ma`lumotlarni eslab qolish usullari bilan 2014-yil tanishdim.</p>
        <p class="sub-text">4 yil o`tib, 2018-yil 18-fevral kuni 3250 ta raqamlar ketma-ketligini 100% aniqlik bilan eslab qolib Rossiya rekordini o`rnatdim.</p>
        <p class="sub-text">Undan keyin esa O`zbekiston Mnemonika Federatsiyasi Rahbari etib saylandim.</p>
        <p class="sub-text">Va odamlarga o`z bilganlarimni o`rgatish orqali Chet tilini tezroq o`rganishlariga va Oliygoh imtihonlarini a`lo darajada topshirishlariga yordam bera boshladim.</p>
        <p class="certificate-img"><img src="{{URL::asset("image/2018-mnemonikani-boshlaganim.png")}}" loading="lazy" alt="2018 mnemonikani boshlaganim"></p>
        <p class="sub-text">Rekord o`rnatganimdan so`ng 2 yil mobaynida o`quv markazda mnemonikadan dars berdim.
        <p class="sub-text">2020-yili pandemiya bo`lib hamma online ta`limga o`tganida O`zbekistonda eng tez rivojlanayotgan <span class="text-bold">Supermiya</span> mnemonika online kursimga asos soldim.
        <p class="sub-text">Ushbu kursni:</p>
        
        <table>
            <tr>
                <td>🟢 Chet tilini o`rganayotganlar </td>
                <td>🟢 Abiturientlar</td>
            </tr>
            <tr>
                <td>🟢 Tadbirkorlar </td>
                <td>🟢 O`qituvchilar</td>
            </tr>
            <tr>
                <td>🟢 Yuristlar</td>
                <td>🟢 Buxgalterlar</td>
            </tr>
            <tr>
                <td>🟢 Dasturchilar</td>
                <td>🟢 Shifokorlar</td>
            </tr>
            <tr>
                <td>🟢 Farmatsevtlar</td>
                <td>🟢 Psixologlar</td>
            </tr>
            <tr>
                <td>🟢 Iqtisodchilar</td>
                <td></td>
            </tr>
        </table>

        <p class="sub-text">Hamda o`z sohasi bo`yicha mutaxassis bo`lish uchun <span class="text-bold">miyasidan</span> va <span class="text-bold">aqlidan</span> foydalanishi kerak bo`lgan insonlar uchun yaratdim.
        <p class="sub-text">Hozir bu biroz noo`rin bo`lsada…
        <p class="sub-text">Supermiya treningimni tamomlagan o`quvchim fikri bilan o`rtoqlashmoqchiman…

        <p class="comment"><img src="{{URL::asset("image/comment-Azamat-Norimbatov.jpeg")}}" loading="lazy" alt="Izoh Azamat Norimbatov"></p>
        
        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a>
            </p>
        </div>
        <br>
    </section>

    <section class="main course">
        <p class="title main-title"><span>TANISHING:</span><br> “SUPERMIYA”<br> MNEMONIKA ONLINE <br> TRENINGIM</p>

        <p class="sub-text">Trening haqida ma`lumot berishimdan oldin bir narsani tushunishingizni xohlayman.</p>

        <p class="sub-text">Ushbu treningni bir kunda yaratib,<span class="text-bold"> natija berishiga umid qilib o`tirganim yo`q.</span></p>

        <p class="sub-text">Sizga o`rgatmoqchi bo`lgan metodikalarimni…</p>

        <p class="sub-text"><span class="symbol text-bold">>>></span> O`rganishga<br>
            <span class="symbol text-bold">>>></span> Sinovdan o`tkazishga<br>
            <span class="symbol text-bold">>>></span> Ishlamaydiganlarini chiqarishga<br>
            <span class="symbol text-bold">>>></span> Ishlaydiganlarini aniqlashga<br>
            <span class="symbol text-bold">>>></span> Va takomillashtirib sizga berishga…
        </p>

        <p class="sub-text"><span class="text-bold"> 100 million so`mdan ko`proq pulim</span> va undanda qimmatroq bo`lgan <span class="text-bold"> 8 yildan ko`p vaqtimni sarfladim.</span></p>

        <p class="sub-text">Lekin siz manga o`xshab bunchalik ko`p pul va vaqt sarflashingiz shart emas.</p>

        <p class="sub-text">8 yil mobaynida o`rgangan barcha:</p>

        <p class="sub-text"><span class="symbol text-bold">>>></span> Eslab qolish<br>
            <span class="symbol text-bold">>>></span> Dangasalikni yengish<br>
            <span class="symbol text-bold">>>></span> Diqqat-e`tiborni kuchaytirish<br>
            <span class="symbol text-bold">>>></span> Shaxsiy samaradorlikni oshirish
        </p>

        <p class="sub-text">Usullarimni, hamda umrim bayonida yiqqan barcha bilimlarim va tajribalarimni…</p>

        <p class="title main-title padding black">19-SENTABR BOSHLANADIGAN 21 KUNLIK ONLINE TRENINGDA O`RGATAMAN</p>
        <p class="sub-text text-bold center">21 KUNLIK DARSLAR ORQALI SIZ:<p>
        
        <div class="flex-container">
            <div class="flex-child">
                <svg width="100px" height="100px" viewBox="0 0 582.000000 580.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,580.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M2705 5769 c-563 -42 -1102 -252 -1565 -609 -122 -94 -386 -358 -480
                    -480 -439 -569 -658 -1268 -611 -1950 42 -605 241 -1131 611 -1610 94 -122
                    358 -386 480 -480 569 -439 1268 -658 1950 -611 605 42 1131 241 1610 611 122
                    94 386 358 480 480 439 569 658 1268 611 1950 -42 605 -241 1131 -611 1610
                    -94 122 -358 386 -480 480 -582 449 -1281 662 -1995 609z m605 -193 c721 -113
                    1347 -488 1776 -1062 215 -288 372 -622 459 -974 58 -240 70 -344 70 -640 0
                    -296 -12 -400 -70 -640 -64 -261 -182 -545 -319 -769 -369 -606 -972 -1045
                    -1666 -1216 -240 -58 -344 -70 -640 -70 -296 0 -400 12 -640 70 -261 64 -545
                    182 -769 319 -606 369 -1045 972 -1216 1666 -58 240 -70 344 -70 640 0 296 12
                    400 70 640 64 261 182 545 319 769 369 606 972 1045 1666 1216 74 18 189 40
                    255 49 66 9 134 18 150 20 76 10 525 -3 625 -18z"/>
                    <path d="M1479 3634 c-67 -28 -64 3 -64 -734 0 -551 2 -672 14 -693 30 -57 31
                    -57 746 -57 l655 0 0 750 0 750 -657 -1 c-561 0 -663 -2 -694 -15z m719 -292
                    c10 -10 80 -203 156 -428 164 -487 163 -457 24 -462 -102 -3 -105 -1 -134 111
                    l-18 67 -142 0 -142 0 -16 -67 c-27 -109 -32 -113 -128 -113 -85 0 -118 14
                    -118 49 0 9 61 198 135 421 96 290 141 410 156 423 31 25 201 25 227 -1z"/>
                    <path d="M2081 3124 c-1 -20 -63 -252 -76 -286 -6 -16 1 -18 80 -18 79 0 86 2
                    80 18 -7 18 -57 201 -73 267 -6 22 -10 31 -11 19z"/>
                    <path d="M2990 2900 l0 -751 673 3 c745 3 703 -1 732 71 23 56 23 1298 0 1354
                    -29 72 13 68 -732 71 l-673 3 0 -751z m821 440 c15 -9 19 -22 19 -65 l0 -55
                    164 0 c188 0 187 1 194 -85 6 -74 -13 -103 -69 -107 -39 -3 -42 -6 -60 -50
                    -24 -62 -89 -169 -139 -228 l-40 -48 70 -48 c38 -26 72 -55 75 -65 7 -23 -38
                    -113 -66 -133 -20 -13 -25 -13 -58 3 -20 11 -64 40 -99 65 -69 51 -74 53 -92
                    31 -24 -29 -150 -105 -174 -105 -17 0 -33 11 -49 33 -65 87 -61 108 33 171
                    l71 47 -56 71 c-35 45 -55 79 -53 92 4 26 94 86 130 86 20 0 38 -14 75 -58
                    l48 -58 41 48 c22 27 53 71 68 98 l27 50 -280 0 c-278 0 -280 0 -295 22 -10
                    13 -16 43 -16 73 0 30 6 60 16 73 15 21 21 22 180 22 l164 0 0 53 c0 29 5 58
                    12 65 15 15 132 16 159 2z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">CHET TILI SO`ZLARI</p>
                <p class="definition">Oyiga 4000+ Chet tili so`zlarini qayta-qayta takrorlash va asab buzarliklarsiz yod olishni o`rganasiz</p>
            </div>
            <div class="flex-child">
                <svg width="100px" height="100px" viewBox="0 0 202.000000 216.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M923 2009 c-214 -27 -407 -122 -558 -274 -374 -374 -374 -976 0
                    -1350 374 -374 976 -374 1350 0 374 374 374 976 0 1350 -209 210 -504 312
                    -792 274z m355 -78 c313 -91 544 -323 634 -636 20 -68 23 -103 23 -235 0 -131
                    -4 -167 -23 -233 -92 -318 -322 -548 -637 -639 -116 -33 -354 -33 -470 0 -315
                    91 -545 321 -637 639 -19 66 -23 102 -23 233 0 131 4 167 23 233 98 338 349
                    575 692 652 96 22 322 14 418 -14z"/>
                    <path d="M876 1420 c-88 -22 -164 -44 -170 -50 -8 -8 -6 -15 7 -25 16 -11 17
                    -25 13 -111 -2 -55 -8 -116 -12 -136 l-7 -38 43 0 43 0 -7 38 c-4 20 -9 80
                    -12 134 l-5 96 48 -12 c42 -11 48 -16 45 -37 -12 -105 -2 -150 47 -202 39 -43
                    80 -60 141 -60 61 0 102 17 141 60 49 52 59 96 47 203 -3 22 2 25 71 42 79 18
                    102 31 85 48 -10 10 -327 91 -349 89 -5 0 -82 -18 -169 -39z"/>
                    <path d="M803 924 c-99 -59 -134 -217 -57 -253 34 -15 574 -15 608 0 78 36 41
                    196 -58 254 -70 41 -90 35 -173 -47 l-73 -72 -73 72 c-83 82 -105 88 -174 46z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">OLIYGOH IMTIHON JAVOBLARI</p>
                <p class="definition">Oliygoh imtihon javoblarini qisqa vaqt ichida 100% aniqlik bilan yod olasiz va o`qishga kirish imkoniyatingizni 10 barobarga oshirasiz</p>
            </div>
            <div class="flex-child">
                <svg width="100px" height="100px"viewBox="0 0 202.000000 216.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M903 2029 c-214 -27 -407 -122 -558 -274 -374 -374 -374 -976 0
                    -1350 374 -374 976 -374 1350 0 374 374 374 976 0 1350 -209 210 -504 312
                    -792 274z m355 -78 c313 -91 544 -323 634 -636 20 -68 23 -103 23 -235 0 -131
                    -4 -167 -23 -233 -92 -318 -322 -548 -637 -639 -116 -33 -354 -33 -470 0 -315
                    91 -545 321 -637 639 -19 66 -23 102 -23 233 0 131 4 167 23 233 98 338 349
                    575 692 652 96 22 322 14 418 -14z"/>
                    <path d="M924 1415 c-84 -18 -138 -48 -206 -113 -65 -61 -97 -112 -123 -190
                    -37 -114 -3 -324 59 -367 17 -13 80 -15 373 -15 404 0 374 -7 412 96 28 74 36
                    163 22 239 -33 175 -180 321 -360 355 -68 13 -101 12 -177 -5z m137 -108 c15
                    -34 -4 -77 -35 -77 -29 0 -56 24 -56 50 0 47 72 69 91 27z m125 -40 c2 -7 -18
                    -79 -45 -160 -47 -139 -49 -150 -35 -172 9 -14 14 -39 12 -62 l-3 -38 -89 -3
                    c-95 -3 -106 2 -106 45 0 38 23 74 59 93 34 17 38 25 84 164 29 86 55 150 65
                    155 18 10 50 -2 58 -22z m-352 -53 c9 -8 16 -24 16 -34 0 -40 -60 -66 -88 -38
                    -15 15 -15 61 0 76 17 17 54 15 72 -4z m450 0 c32 -31 8 -84 -38 -84 -25 0
                    -46 17 -41 34 20 57 26 66 44 66 11 0 27 -7 35 -16z m-526 -246 c15 -15 15
                    -61 0 -76 -28 -28 -88 -2 -88 38 0 40 60 66 88 38z m600 0 c7 -7 12 -24 12
                    -38 0 -14 -5 -31 -12 -38 -28 -28 -88 -2 -88 38 0 40 60 66 88 38z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">DIQQAT-E`TIBOR</p>
                <p class="definition">Diqqat-e`tiboringiz va xotirangiz kuchli bo`lishi sababli har qanday soha bilimlarini 400% tezroq o`zlashtirasiz</p>
            </div>
            <div class="flex-child">
                <svg width="100px" height="100px" viewBox="0 0 202.000000 216.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M883 2089 c-214 -27 -407 -122 -558 -274 -374 -374 -374 -976 0
                    -1350 374 -374 976 -374 1350 0 374 374 374 976 0 1350 -209 210 -504 312
                    -792 274z m355 -78 c313 -91 544 -323 634 -636 20 -68 23 -103 23 -235 0 -131
                    -4 -167 -23 -233 -92 -318 -322 -548 -637 -639 -116 -33 -354 -33 -470 0 -315
                    91 -545 321 -637 639 -19 66 -23 102 -23 233 0 131 4 167 23 233 98 338 349
                    575 692 652 96 22 322 14 418 -14z"/>
                    <path d="M955 1529 c-40 -12 -58 -28 -84 -69 -19 -32 -21 -50 -21 -194 0 -178
                    11 -214 73 -251 40 -24 116 -25 151 -1 59 38 66 65 66 251 0 151 -2 174 -20
                    202 -34 57 -102 82 -165 62z"/>
                    <path d="M737 1234 c-4 -4 -7 -40 -7 -79 0 -127 72 -234 182 -271 42 -14 48
                    -19 48 -44 0 -28 -2 -29 -52 -32 -49 -3 -53 -5 -56 -30 -4 -36 12 -40 163 -36
                    l120 3 3 33 3 32 -55 0 c-55 0 -56 0 -56 30 0 26 5 31 39 40 65 17 131 69 165
                    129 25 45 30 68 34 137 4 75 3 82 -15 88 -42 13 -53 -2 -53 -73 0 -126 -73
                    -211 -188 -219 -125 -9 -203 69 -219 219 -7 64 -11 74 -28 77 -12 2 -24 0 -28
                    -4z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">NOTIQLIK SAN`ATI</p>
                <p class="definition">8 soatgacha bo`lgan nutqingizni atigi 60 daqiqada eslab qolasiz va har bir detallarigacha shpargalkasiz so`zlab berib professionalligingizni isbotlaysiz</p>
            </div>
            <div class="flex-child">
                <svg width="100px" height="100px" viewBox="0 0 202.000000 216.000000"
                    viewBox="0 0 202.000000 216.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M923 2069 c-214 -27 -407 -122 -558 -274 -374 -374 -374 -976 0
                    -1350 374 -374 976 -374 1350 0 374 374 374 976 0 1350 -209 210 -504 312
                    -792 274z m355 -78 c313 -91 544 -323 634 -636 20 -68 23 -103 23 -235 0 -131
                    -4 -167 -23 -233 -92 -318 -322 -548 -637 -639 -116 -33 -354 -33 -470 0 -315
                    91 -545 321 -637 639 -19 66 -23 102 -23 233 0 131 4 167 23 233 98 338 349
                    575 692 652 96 22 322 14 418 -14z"/>
                    <path d="M1006 1510 c-106 -32 -136 -174 -52 -248 59 -52 141 -50 198 5 79 76
                    44 213 -63 243 -39 11 -44 11 -83 0z"/>
                    <path d="M666 1205 c-13 -14 -16 -45 -16 -199 0 -131 4 -187 13 -198 8 -10 45
                    -19 111 -27 55 -6 130 -22 167 -35 38 -13 70 -21 74 -18 3 3 5 97 5 209 l0
                    204 -43 18 c-47 20 -161 46 -244 56 -39 4 -55 2 -67 -10z"/>
                    <path d="M1350 1213 c-63 -6 -182 -35 -227 -54 l-43 -18 0 -204 c0 -112 2
                    -206 6 -209 3 -3 35 5 73 17 37 13 112 29 167 36 65 8 103 17 112 27 8 11 12
                    67 12 198 0 153 -3 185 -16 198 -8 9 -23 15 -32 14 -9 0 -33 -3 -52 -5z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">KITOB O`QISH</p>
                <p class="definition">Hozirgacha o`qigan kitoblaringizdagi aksariyat ma`lumotlarni esdan chiqargan bo`lsangiz, endi esda saqlaysiz</p>
            </div>
            <div class="flex-child">
                <svg width="100px" height="100px" viewBox="0 0 202.000000 216.000000"
                    viewBox="0 0 202.000000 216.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M863 2069 c-214 -27 -407 -122 -558 -274 -374 -374 -374 -976 0
                    -1350 374 -374 976 -374 1350 0 374 374 374 976 0 1350 -209 210 -504 312
                    -792 274z m355 -78 c313 -91 544 -323 634 -636 20 -68 23 -103 23 -235 0 -131
                    -4 -167 -23 -233 -92 -318 -322 -548 -637 -639 -116 -33 -354 -33 -470 0 -315
                    91 -545 321 -637 639 -19 66 -23 102 -23 233 0 131 4 167 23 233 98 338 349
                    575 692 652 96 22 322 14 418 -14z"/>
                    <path d="M540 1363 c-49 -18 -50 -24 -50 -243 0 -198 1 -208 21 -226 20 -18
                    42 -19 451 -19 l430 0 19 24 c10 13 19 33 19 45 0 12 9 25 23 31 21 10 22 15
                    22 145 0 130 -1 135 -22 145 -14 6 -23 19 -23 31 0 12 -9 32 -19 45 l-19 24
                    -419 2 c-230 1 -425 -1 -433 -4z m800 -143 c0 -47 2 -50 25 -50 23 0 25 -3 25
                    -50 0 -47 -2 -50 -25 -50 -23 0 -25 -3 -25 -50 l0 -50 -380 0 -380 0 0 150 0
                    150 380 0 380 0 0 -50z"/>
                    <path d="M640 1120 l0 -100 320 0 320 0 0 100 0 100 -320 0 -320 0 0 -100z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">AQLIY QUVVAT</p>
                <p class="definition">Jahon chempionlari ishlatadigan kuchli usullar orqali kuniga 14 soatgacha aqliy mehnat qilishni va natijaviylikni 500% ga oshirishni o`rganasiz</p>
            </div>
            <div class="flex-child">
                <svg width="100px" height="100px" viewBox="0 0 202.000000 216.000000"
                    viewBox="0 0 202.000000 216.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M903 2009 c-214 -27 -407 -122 -558 -274 -374 -374 -374 -976 0
                    -1350 374 -374 976 -374 1350 0 374 374 374 976 0 1350 -209 210 -504 312
                    -792 274z m355 -78 c313 -91 544 -323 634 -636 20 -68 23 -103 23 -235 0 -131
                    -4 -167 -23 -233 -92 -318 -322 -548 -637 -639 -116 -33 -354 -33 -470 0 -315
                    91 -545 321 -637 639 -19 66 -23 102 -23 233 0 131 4 167 23 233 98 338 349
                    575 692 652 96 22 322 14 418 -14z"/>
                    <path d="M974 1401 c-137 -34 -169 -229 -51 -307 155 -103 338 83 234 237 -39
                    58 -115 87 -183 70z"/>
                    <path d="M644 1303 c-37 -7 -69 -50 -69 -93 0 -71 65 -113 132 -85 37 16 53
                    41 53 85 0 44 -16 69 -55 86 -19 8 -36 13 -37 13 -2 -1 -13 -4 -24 -6z"/>
                    <path d="M1344 1303 c-12 -2 -32 -15 -45 -29 -48 -51 -19 -144 49 -157 34 -7
                    87 15 101 41 14 26 14 78 0 104 -9 16 -71 52 -81 47 -2 -1 -13 -4 -24 -6z"/>
                    <path d="M594 1053 c-40 -8 -67 -49 -72 -107 -4 -47 -2 -55 19 -70 14 -10 43
                    -16 74 -16 l50 0 18 49 c10 30 32 62 57 85 22 20 40 38 40 40 0 19 -123 32
                    -186 19z"/>
                    <path d="M1295 1053 c-37 -9 -37 -21 2 -60 35 -35 48 -58 67 -115 4 -14 17
                    -18 56 -18 78 0 90 10 90 76 0 68 -12 92 -55 110 -33 13 -118 17 -160 7z"/>
                    <path d="M837 996 c-21 -8 -48 -22 -59 -33 -55 -48 -77 -177 -39 -224 l19 -24
                    255 0 c304 0 297 -2 297 102 0 72 -15 108 -60 147 -48 40 -97 49 -169 30 -50
                    -12 -71 -13 -109 -4 -81 20 -96 20 -135 6z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">YUZ VA ISMLAR</p>
                <p class="definition">Sizning kelajagingiz va muvaffaqiyatingiz uchun ta`siri bo`lishi mumkin bo`lgan insonlar yuzi va ismini eslab qolasiz va hech qachon unutmaysiz.</p>
            </div>
            <div class="flex-child">
                <svg width="100px" height="100px" viewBox="0 0 202.000000 216.000000"
                    viewBox="0 0 202.000000 216.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M883 2029 c-214 -27 -407 -122 -558 -274 -374 -374 -374 -976 0
                    -1350 374 -374 976 -374 1350 0 374 374 374 976 0 1350 -209 210 -504 312
                    -792 274z m355 -78 c313 -91 544 -323 634 -636 20 -68 23 -103 23 -235 0 -131
                    -4 -167 -23 -233 -92 -318 -322 -548 -637 -639 -116 -33 -354 -33 -470 0 -315
                    91 -545 321 -637 639 -19 66 -23 102 -23 233 0 131 4 167 23 233 98 338 349
                    575 692 652 96 22 322 14 418 -14z"/>
                    <path d="M804 1422 c-28 -18 -135 -157 -132 -171 2 -11 16 -17 46 -19 l42 -3
                    0 -230 c0 -140 4 -238 10 -250 12 -22 59 -26 78 -7 9 9 12 78 12 250 l0 238
                    34 0 c40 0 66 8 66 22 0 7 -138 178 -144 178 0 0 -6 -4 -12 -8z"/>
                    <path d="M1165 1416 c-45 -20 -67 -50 -72 -98 -5 -55 23 -103 75 -125 36 -15
                    36 -16 15 -26 -37 -16 -27 -77 12 -77 36 0 88 42 113 90 16 32 22 62 22 107 0
                    57 -3 67 -32 98 -38 41 -87 53 -133 31z m74 -95 c13 -24 -9 -57 -33 -48 -23 9
                    -31 34 -16 52 17 20 37 19 49 -4z"/>
                    <path d="M1135 1000 c-20 -39 -19 -61 5 -67 17 -4 20 -14 20 -54 0 -37 -4 -49
                    -15 -49 -24 0 -40 -45 -27 -75 11 -24 16 -25 91 -25 87 0 105 10 99 57 -2 17
                    -11 32 -25 38 -21 9 -23 16 -23 95 0 54 -5 91 -12 98 -7 7 -31 12 -55 12 -37
                    0 -44 -4 -58 -30z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">RAQAMLAR BILAN ISHLASH</p>
                <p class="definition">Agar raqamlar bilan ishlasangiz, ushbu usul ishingizni bir necha barobarga osonlashtiradi. Rossiya rekordidagi 3250 ta raqamlarni ham xuddi shu usul orqali yod olganman.</p>
            </div>
            <div class="flex-child">
                <svg width="100px" height="100px" viewBox="0 0 202.000000 216.000000"
                    viewBox="0 0 202.000000 216.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
                    fill="#E73A04" stroke="none">
                    <path d="M903 2109 c-214 -27 -407 -122 -558 -274 -374 -374 -374 -976 0
                    -1350 374 -374 976 -374 1350 0 374 374 374 976 0 1350 -209 210 -504 312
                    -792 274z m355 -78 c313 -91 544 -323 634 -636 20 -68 23 -103 23 -235 0 -131
                    -4 -167 -23 -233 -92 -318 -322 -548 -637 -639 -116 -33 -354 -33 -470 0 -315
                    91 -545 321 -637 639 -19 66 -23 102 -23 233 0 131 4 167 23 233 98 338 349
                    575 692 652 96 22 322 14 418 -14z"/>
                    <path d="M823 1551 c-44 -11 -77 -34 -110 -78 -25 -33 -28 -44 -28 -114 0 -71
                    2 -80 31 -116 46 -56 86 -76 153 -76 72 0 129 30 168 87 23 34 28 52 28 106 0
                    54 -5 72 -28 106 -45 67 -137 103 -214 85z"/>
                    <path d="M1200 1172 c-130 -51 -123 -44 -118 -121 8 -111 82 -227 173 -271 44
                    -21 44 -21 82 -2 49 26 127 109 148 158 23 55 39 138 31 167 -5 20 -23 31 -98
                    61 -51 19 -100 37 -108 40 -8 3 -58 -12 -110 -32z m183 -69 l69 -27 -6 -39
                    c-9 -55 -40 -112 -88 -157 -66 -64 -68 -61 -68 105 0 108 3 145 12 145 7 0 43
                    -12 81 -27z"/>
                    <path d="M682 1100 c-44 -10 -94 -46 -123 -88 -20 -29 -25 -50 -27 -121 -6
                    -132 -24 -125 334 -129 167 -2 294 1 294 6 0 5 -9 17 -20 27 -58 52 -120 199
                    -120 282 0 38 4 38 -82 17 -63 -15 -73 -15 -135 0 -74 18 -73 17 -121 6z"/>
                    </g>
                </svg>
                <p class="text-bold box-title">INTIZOMNI RIVOJLANTIRISH</p>
                <p class="definition">Muvaffaqiyatingiz uchun muhim bo`lgan ishlarni motivatsiya bo`lmasa ham qilasiz, chunki siz o`zingizda intizomni rivojlantirasiz</p>
            </div>
        </div>
        <br><br>
        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a>
            </p>
        </div>
        <br><br><br>
    </section>
    <section class="main coourse">
        <p class="title main-title">21 KUN, TELEFON,<br> INTERNET VA BIR JUFT <br>POYABZAL NARXIDAGI <br>SARMOYA</p>
        <p class="sub-text">Jahon Chempioni va ustozim <span class="text-bold">Andrea Muzii</span> bilan haftada bir video qo`ng`iroq orqali ko`rishamiz.
        <p class="sub-text">Jahon chempionati tayyorgarligi uchun topshiriqlar va qimmatli maslahatlar olaman.
        <p class="sub-text">20 yil avval buni imkoni bo`lmas edi.
        <p class="sub-text">Qiziqqan sohangiz bo`yicha ustozni o`z shahringizdan qidirgansiz.</p>
        <p class="sub-text">Aks holda boshqa shahar yoki davlatga borishga to`g`ri kelgan.</p>
        <p class="sub-text">Bunday imkoniyat esa hammada ham bo`lmagan.</p>
        <p class="sub-text">Siz hozirgi zamonda tug`ilganingiz va yashayotganingiz eng katta baxtingizdir.</p>
        <p class="sub-text">Hozir 90% sohani uyingizdan chiqmasdan telefon va internet orqali o`zlashtirishingiz mumkin.</p>
        <p class="sub-text">Shunga qo`shib eslab qolish sirlarini ham.</p>
        <p class="sub-text">Supermiya treningimdagi usullarini o`rganishingiz uchun sizga…</p>
        <p class="sub-text">
            <span class="symbol text-bold">>>></span> Telefon<br>
            <span class="symbol text-bold">>>></span> Internet<br>
            <span class="symbol text-bold">>>></span> Va bir juft oyoq kiyim narxidagi sarmoya kifoya.</p>
        <p class="sub-text">Lekin hozir o`z sohasi bo`yicha hech qanday tajribaga ega bo`lmagan…</p>
        <p class="sub-text">Va sizga quruq va`dadan boshqa hech narsa bera olmaydigan firibgarlar ham kam emas.</p>
        <p class="sub-text">Shuning uchun ham shubha va gumonlaringizni yo`qotish va ishonchingizga ega bo`lish maqsadida… </p>
        
        <p class="title main-title grey">O`Z KASBIM USTASI EKANLIGIMNI TASDIQLOVCHI ISBOTLARNI TAQDIM ETMOQCHIMAN</p>
        <div class="flex-video">
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">Rossiya Rekordi</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/Rossiya Rekordi.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">“G`aroyib Odamlar” Ko`rsatuvi</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/Garoyib Odamlar Korsatuvi.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">KUN.UZ</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/KUNUZ.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">“Osmondagi Bolalar”</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/Osmondagi Bolalar.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">“MTV SHOW” Milliy TV</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/MTV SHOW Milliy TV.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">“SHIRCHOY” Milliy TV</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/SHIRCHOY Milliy TV.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">M Faktor</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/M Faktor.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">“OMON-OMON” MY5 TV</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/OMON-OMON MY5 TV.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">ZO`R TV</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/ZOR TV.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div>  
                    </div> 
                </p>
            </div>
            <div class="flex-video-child">
                <p class="text-bold center grey video-title">“MODUL 5” MY5 TV</p>
                    <div class="youtube-player youtube-video" 
                         data-id="HVsKSfsOzYE" 
                         data-related="0" 
                         data-control="1" 
                         data-info="0" 
                         data-fullscreen="1" 
                         style="position: relative;cursor: pointer;overflow:hidden;margin:0 auto"> 
                         <img src="{{URL::asset('image/MODUL 5 MY5 TV.jpeg')}}" loading="lazy" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> 
                         <div class="play-btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                         </div> 
                    </div> 
                </p>
            </div>
        </div>  
        <br><br>
        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a>
            </p>
        </div>
        <br><br>
    </section>
    <section class="main course">
        <p class="title main-title">TRENINGDA O`RGANADIGAN USULLARINGIZ:</p>

        <p class="sub-text text-bold">✅ Oyiga 4000+ chet tili so`zlarini yod olish usuli <span class="symbol">(qiymati: 1,497,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Notiqlik, 8-10 soatlik nutqni eslab qolish usuli <span class="symbol">(qiymati: 1,297,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Miyaning “Defolt tizimi” ishlashini 5 qadami <span class="symbol">(qiymati: 997,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Matn bilan ishlash va 8 qadamli algoritm <span class="symbol">(qiymati: 897,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Xotirani Ishlash Prinsiplari <span class="symbol">(qiymati: 597,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ “Qarmoq” orqali ma’lumotni saqlash va foydalanish <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ “Loki” usuli orqali ma’lumotni saqlash va foydalanish <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ “Mig” texnikasi orqali yuz va ismlarni eslab qolish <span class="symbol">(qiymati: 397,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ “Pomidor” usuli, Diqqatni oshirish uchun mashqlar <span class="symbol">(qiymati: 397,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ POA metodikasi orqali raqamlarni yodlash <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        <p class="sub-text text-bold">🎁 BONUS #1: “Defolt Tizimi” video kursim <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        <p class="sub-text text-bold">🎁 BONUS #2: “Daholik Omili” video kursim <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        
        <p class="title main-title"><span>JAMI QIYMATI: 8,564,000 SO`M</p></span>
        <p class="text-price">Lekin Bugun Ro`yxatdan O`tsangiz<br>
            <span class="price">497,000 SO`M</span><br>
                Evaziga Barchasini O`rganasiz<br>
            <span class="sale">(93% dan ko`proq chegirma!)</span>
        </p>
        <br><br>
        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a><br>
                <span class="sub-wrap">Iltimos 497,000 So`m evaziga barchasini o`rganishimga ijozat bering.</span>
            </p>
        </div>
        <br><br>
    </section>
    <section class="main">
        <p class="title main-title grey">SUPERMIYA HAQIDA O`QUVCHILARIM FIKRLARI:</p>
        <div class="flex-video">
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment1.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment2.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment3.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment4.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment5.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment6.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment7.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment8.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment9.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment10.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment11.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment12.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment13.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment14.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <div class="flex-video-child-img">
                <p class="comment"><img src="{{URL::asset('image/comment15.jpeg')}}" loading="lazy" alt="Comment"></p>
            </div>
            <p class="sub-text text-bold grey">* Bu yerga sig`magan barcha fikrlarni o`qish uchun <a href="https://t.me/supermiyafeed">bu yerni bosing</a></p>
        </div>
        
        <div class="wrapper">
            <p>
                <a >🎁 BEPUL BONUSLAR </a>
            </p>
        </div>

        <p class="sub-text text-bold extra"><span class="symbol">BONUS #1:</span> MIYANING DEFOLT TIZIMI <span class="symbol">(qiymati 497,000 so`m)</span>  – 1 SOAT 15 DAQIQALIK VIDEO DARSDA MAQSADGA TEZROQ ERISHISH UCHUN UNI QANDAY QILIB MIYAGA YUKLASH VA MUHTOJLIKKA AYLANTIRISHNI O`RGANASIZ.</p>
        <p class="course-img"><img src="{{URL::asset('image/defolt-tizim.png')}}" loading="lazy" alt="defolt tizim kursi"></p>
        <p class="sub-text text-bold extra"><span class="symbol">BONUS #2</span>: DAHOLIK OMILLARI <span class="symbol">(qiymati 497,000 so`m)</span> – 50 DAQIQALIK BONUS DARSDA QANDAY QILIB MIYANGIZDA ALLAQACHON BOR, LEKIN SIZGA AYON BO`LMAGAN AJOYIB G`OYALARNI TORTIB CHIQARISHNI O`RGANASIZ.</p>
        <p class="course-img"><img src="{{URL::asset('image/daholik-omillari.png')}}" loading="lazy" alt="daholik omillari kursi"></p>
        
        <p class="title main-title grey">BUGUNOQ RO`YXATDAN O`TISHINGIZ UCHUN IKKI SABABLAR…</p>
        <p class="sub-text text-bold">Birinchisi – chegirma vaqti cheklangan.</p>
        <p class="sub-text">Ushbu treningdagi usullarni o`rganish uchun boshqalar offline treningimga kelib 2,997,000 so`m to`lashadi.
        <p class="sub-text">Shuni hisobiga jamoamdagi ko`pchilik…</p>
        <p class="sub-text">“Davron aka, online trening hech bo`lmasa 2,997,000 so`mni yarmi bo`lishi kerak!” kabi takliflar berishdi.</p>
        <p class="sub-text">Ularni fikriga qo`shilaman.</p>

        <p class="sub-text text-bold">497,000 so`m o`rganadigan metodikalaringiz uchun judayam arzon narx.
        <p class="sub-text">Yuqorida ta`kidlab o`tganimdek…</p>
        <p class="sub-text">Sizga beradigan metodikalarim va tajribalarimga erishish uchun..</p>
        <p class="sub-text">100 million so`mdan ko` proq pulimni va 8 yildan ko`proq vaqtimni sarfladim.</p>

        <p class="sub-text text-bold">Ha! Ushbu trening kamida 2,997,000 so`mni yarmi bo`lishi kerak.
        <p class="sub-text">Lekin hozir emas.</p>
        <p class="sub-text">Chunki man tez qaror qabul qiluvchi va o`z kelajagi uchun sarmoya qilishga tayyor insonlarni hurmat qilaman.</p>
        <p class="sub-text">Shuning uchun ham tez qaror qabul qiluvchi birinchi 500 nafar o`quvchilarga chegirma bilan ro`yxatdan o`tish imkoniyatini beraman.</p>
        <p class="sub-text">Birinchi 500 nafar o`quvchilar ro`yxatdan o`tishi bilanoq trening narxi qimmatlashadi.</p>
    
        <div class="banner">
            <p class="sub-text text-bold"><span class="symbol count" counter-lim="7"></span><br>
                497,000 SO`M NARXDA QOLGAN JOYLAR SONI
            </p>
        </div>

        <p class="sub-text text-bold">Yuqoridagi joylar soni tugashi bilanoq trening narxi qimmatlashadi.</p>
        <p class="sub-text">Va ushbu sayt sizni (avtomatik tarzda) boshqa sahifaga yo`naltiradi.</p>
        <p class="sub-text">U sahifa esa keyingi narx – 2,997,000 so`mni yarmi uchun mo`ljallangan bo`ladi.</p>
        <p class="sub-text">Bugunoq ro`yxatdan o`tishingiz kerakligining ikkinchi sababi – <span class="text-bold"> BEPUL BONUSLAR</span></p>

        <div class="bonus">
            <p class="sub-text text-bold">🎁 BONUS #1: “Defolt Tizimi” video kursim <span class="symbol">(qiymati: 497,000 so`m)</span></p>
            <p class="sub-text text-bold">🎁 BONUS #2: “Daholik Omili” video kursim <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        </div>

        <p class="sub-text text-bold">Agar chegirma bo`yicha joylar soni tugagunicha ro`yxatdan o`tsangiz 497,000 so`mga treningga qo`shilasiz va barcha usullarni o`rganasiz.</p>
        <p class="sub-text">Hamda 994,000 so`m qiymatga ega bonuslarni  Bepul qo`lga kiritasiz.</p>
        <p class="sub-text">Hoziroq qaror qabul qilishingizga biror narsa to`sqinlik qilishiga yo`l qo`ymang.</p>
        <p class="sub-text">Yaxshi tomonga o`zgarish keyinga qoldirilmaydi.</p>
        <p class="sub-text">Siz ham qila oladigan ishni boshqalar qilayotganini kuzatishni bas qiling.</p>
        <p class="sub-text text-bold">Hoziroq birinchi qadamni tashlang.</p>
        <p class="sub-text">Birozdan keyin kech bo`lishi mumkin.</p>
        <p class="sub-text">Hoziroq ro`yxatdan o`ting va o`z maqsadingizni himoya qiling.</p>

        <br><br>
        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a><br>
                <span class="sub-wrap">Iltimos 497,000 So`m evaziga barchasini o`rganishimga ijozat bering.</span>
            </p>
        </div>
        <br><br><br>

    </section>

    <section class="main course">
        <p class="title main-title">“BO`LISHI MUMKIN EMAS“ DEB NOMLANGAN KAFOLAT</p>
        <p class="sub-text text-bold">Supermiya treningim sizga yoqishiga 100% kafolat beraman!</p>
        <p class="sub-text">Barcha shubha va qo`rquvlaringizni o`z zimmamga olaman.</p>
        <p class="sub-text">Agar supermiya sarmoya qilgan pulingizga arzishini sezmasangiz, trening boshlangan kundan boshlab 60 kun ichida murojaat qiling…</p>
        <p class="sub-text">Va 497,000 so`m pulingizni bir og`iz so`zsiz qaytarib beraman.</p>
        <p class="sub-text">(Va`da beraman do`stligimizga putr yetmaydi.)</p>
        <p class="sub-text text-bold">Qo`rqmasdan pulingizni qaytarib berish kafolatini berishimga 2 sabab bor.</p>
        <p class="sub-text">Birinchisi, odamlar rostgo`yligiga ishonaman.</p>
        <p class="sub-text">Ikkinchisi esa eslab qolish bilan 8 yildan beri shug`ullanaman.</p>
        <p class="sub-text">Va bilimlarim sizga foyda bera olishiga ishonaman.</p>
        <p class="sub-text">Agar o`quvchilarim darslarimdan natija olishmasa inqirozga uchrashimni bilasizmi?</p>
        <p class="sub-text text-bold">Lekin ushbu taklifim davomiyligi – muvaffaqiyatim isbotidir.</p>
        <p class="sub-text">Hozir hech narsani o`ylashingiz shart emas.</p>
        <p class="sub-text">Treningga qatnashing va 30 kun o`rgatganlarimni o`zingizda sinab ko`ring.</p>
        <p class="sub-text">Agar eslab qolishingiz 10 barobarga tezlashganini sezmasangiz…</p>
        <p class="sub-text">To`lovingizni 100% to`liq holda qaytarib beraman.</p>
        <p class="sub-text">Supermiya treningimga bo`lgan ishonchimni…</p>
        <p class="sub-text text-bold">Bundanda yaxshiroq yo`l bilan isbotlay olmayman.</p>
    
        <div class="form" id="leed-form">
            <p class="title"><span>ISMINGIZ VA TELEFON RAQAMINGIZNI KIRITING</span></p>
            <p>
                <svg
                width="100px" height="100px" viewBox="0 0 262.000000 268.000000"
                preserveAspectRatio="xMidYMid meet">
               <g transform="translate(0.000000,268.000000) scale(0.100000,-0.100000)"
               fill="#E73A04" stroke="none">
               <path d="M1210 2611 c-57 -9 -85 -24 -108 -58 -16 -25 -17 -90 -22 -893 l-5
               -865 -165 170 c-189 195 -355 368 -455 472 -82 87 -134 112 -194 95 -54 -17
               -207 -176 -216 -226 -18 -91 -39 -65 563 -670 306 -307 579 -576 605 -597 42
               -33 56 -39 97 -39 41 0 55 6 97 39 26 21 298 290 604 597 597 599 579 577 564
               666 -6 34 -22 57 -93 130 -101 105 -136 121 -205 94 -29 -11 -67 -40 -112 -89
               -100 -104 -266 -277 -455 -472 l-165 -170 -5 865 c-5 805 -6 868 -23 893 -9
               15 -30 33 -46 42 -34 17 -194 27 -261 16z"/>
               </g>
               </svg>
            </p>
            <form id="leed_submit" action="" method="POST" role="form">
                <label for="name">Ism-familiyangiz</label>
                <input type="text" name="name" id="name" placeholder="Davronbek" required>
                {{-- @csrf --}}
                <label for="phone">Telefon raqamingiz</label>
                <input type="tel" name="phone" id="phone" onpaste="return false" onkeypress="javascript:return isPhone(event)" placeholder="998991234567" required>
                <input type="hidden" name="course" id="course" value="supermiya">
                <input type="submit" value="DAVOM ETISH">
            </form>
            
            <form action="{{route('checkout.create')}}" class="registration" enctype="multipart/form-data" method="POST" style="display:none">
                
                <label for="amount">Narx:</label>
                <input type="text" id="amount" value="{{$course->price}}" disabled>
                    <input type="hidden" id="discount" value="" disabled>
                
                <label for="referal">Sizni Supermiyaga kim taklif qildi?</label>
                <div class="referral">
                  <input type="text" name="referral" id="referral" placeholder="">
                  <input id="referral_check" type="button" name="referral" id="referral" value="Tekshirish">
                </div>
                <label id="discount-text" style="color: red !important"></label>

                {{-- <p class="center"><a style="color: red; text-align:center;" href="" id="link">Pay</a><br></p>    --}}

                {{-- bonus --}}
                {{-- <div class="" style="border: 2px dashed red; background-color:rgb(252, 248, 227);padding:10px;">
                  <p style="">
                  CHECK THE BOX BELOW NOW to add 48 of Gary Halbert’s most profitable ads to your master swipe file for just $7 (or pay $27 later).
                  </p>
                  <br>
                  <p style="color:green;font-size:x-large;">$7.00 <strike>$27.00</strike></p>
                  <br>
                  <p align=center>
                    <input style="width:35px" type="checkbox" name="extra_course" id="extra_course" onclick="toggleOrderBump(2,'s',1200)">
                    <span id="add-item" style="vertical-align: super;font-size: x-large;">Xaridlarga qo'shish</span>
                  </p>
                </div> --}}
                
                <style>
                  #order-summary-widget{
                    padding:10px;
                    background: ghostwhite;
                    font-size: 20px;
                    border: 1px solid #d1cfcf;
                  }
                  .product-item, .invoice-item{
                    display: flex;
                  }
                  .product-price, .invoice-amount{
                    width: 100%;
                    float:right;
                    text-align: right;
                  }
                </style>
                <div>
                  <label for="">Buyurtmalaringiz:</label>                  
                  <div id="order-summary-widget">
                    {{-- <div id="product-list" class="box"> --}}
                      <div class="product-item">
                        <div class="product-label">
                          <span id="product-item-name">{{$course->title}}</span>
                        </div>
                        <div class="product-price">
                          <span id="product-amount">{{$course->price}}</span> so'm
                        </div>
                      </div>
                      
                    <hr style="width: 95%; margin: 10px auto; height: 1px; border: none; background-color: black;">
                    <div class="invoice-item total-row">
                      <div class="invoice-label-col">
                        <span class="invoice-item-label"><strong>Jami:</strong></span>
                      </div>
                      <div class="invoice-amount">
                        <span class="invoice-item-amount" id="total">{{$course->price}}</span> so'm
                      </div>
                    </div>
                    {{-- </div> --}}
                    </div>

                </div>

                <label for="type">To'lov turi:</label>
                <div class="flex-container">
                    <p class="tab" onclick="payment('Payme')">
                        <svg width="100" height="45" viewBox="0 0 1080 315" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Canvas" transform="translate(344 689)">
                        <g id="logo_01">
                        <g id="Shape 1 copy 4">
                        <use xlink:href="#path0_fill" transform="translate(231.204 -659.226)" fill="#33CCCC"/>
                        <use xlink:href="#path0_fill" transform="translate(231.204 -659.226)" fill="url(#paint1_linear)"/>
                        </g>
                        <g id="Shape 1 copy 4">
                        <use xlink:href="#path1_fill" transform="translate(264.941 -617.556)" fill="#FFFFFF"/>
                        </g>
                        <g id="Shape 1 copy 4">
                        <use xlink:href="#path2_fill" transform="translate(-344 -689)" fill="#333333"/>
                        </g>
                        </g>
                        </g>
                        <defs>
                        <linearGradient id="paint1_linear" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-66.0999 399.226 -838.377 -138.81 671.585 69.405)">
                        <stop offset="0.47231" stop-color="#00CCCC"/>
                        <stop offset="1" stop-color="#3399FF"/>
                        </linearGradient>
                        <path id="path0_fill" fill-rule="evenodd" d="M 498.722 100.712C 506.372 111.659 507.142 128.912 499.022 142.283C 491.772 154.225 448.382 200.051 434.262 214.777C 422.022 227.568 405.502 240.377 389.242 240.377L 48.788 240.377C 2.77602 240.377 -9.27734e-06 224.777 -9.27734e-06 189.507L -9.27734e-06 46.434C -9.27734e-06 10.412 10.631 -3.66211e-06 42.052 -3.66211e-06L 389.242 -3.66211e-06C 405.502 -3.66211e-06 419.972 8.30001 436.592 25.2C 450.702 39.541 492.852 92.29 498.722 100.712Z"/>
                        <path id="path1_fill" fill-rule="evenodd" d="M 43.4426 13.6512L 43.4426 12.7092C 43.4426 8.10922 43.0566 3.56222 35.5196 3.56222L 7.06758 3.56222C 0.45458 3.56222 0.0365738 7.21921 0.0365738 12.9012L 0.0365738 50.7122C 13.8866 30.9072 29.2436 21.7052 43.4426 13.6512ZM 234.315 150.277L 234.315 148.247L 234.335 148.247L 234.335 57.2422C 234.335 19.0782 217.558 -0.00178076 184.005 0.00221924C 174.706 -0.0852213 165.566 2.41343 157.605 7.21923C 149.618 12.0332 141.944 18.7576 134.583 27.3922C 130.965 18.0089 125.509 11.0982 118.215 6.66021C 110.92 2.22221 101.468 0.00288591 89.8596 0.00221924C 76.4236 0.00221924 60.8026 4.70922 49.7306 13.8172C 47.2536 16.2982 0.0305924 53.4672 0.0305924 91.6412L 0.0305924 149.904C 0.0305924 151.757 -0.863375 158.787 7.01362 158.787L 36.6346 158.787C 45.8426 158.787 44.9436 152.757 44.9436 150.277L 44.9436 56.0452C 49.9436 49.4132 60.1596 33.0342 76.7526 33.0342C 83.1212 33.0342 87.7076 35.1895 90.5116 39.5002C 93.3156 43.8109 94.7236 51.0386 94.7356 61.1832L 94.7356 134.783L 94.7006 134.783L 94.7006 149.906C 94.7006 151.759 93.8066 158.789 101.681 158.789L 130.924 158.789C 140.138 158.789 139.239 152.759 139.239 150.279L 139.239 148.249L 139.273 148.249L 139.273 56.0492C 144.63 49.4172 155.304 33.0382 171.073 33.0382C 177.561 33.0382 182.24 35.1936 185.111 39.5042C 187.981 43.8149 189.415 51.0425 189.411 61.1872L 189.411 134.787L 189.381 134.787L 189.381 149.91C 189.381 151.763 188.491 158.793 196.371 158.793L 226.001 158.793C 235.215 158.789 234.315 152.757 234.315 150.277ZM 397.445 113.277C 386.915 141.612 361.685 157.447 330.425 157.447C 285.145 157.447 255.235 126.592 255.235 80.3152C 255.235 34.5962 286.285 1.45721 329.015 1.45721C 371.285 1.45721 399.635 30.8952 401.435 78.3152C 401.665 84.3742 399.895 89.7272 392.325 89.7272L 296.245 89.7272C 296.815 115.155 309.075 128.871 330.715 128.871C 343.915 128.871 351.735 123.18 358.545 112.027C 361.505 107.174 367.575 107.444 367.575 107.444L 392.325 107.444C 396.365 107.441 398.155 111.389 397.445 113.274L 397.445 113.277ZM 329.015 30.8772C 311.055 30.8772 298.525 43.4462 296.245 64.0272L 360.625 64.0272C 358.915 46.0252 349.225 30.8772 329.015 30.8772Z"/>
                        <path id="path2_fill" fill-rule="evenodd" d="M 176.842 31.0816C 173.036 25.0167 168.099 19.7408 162.3 15.5416C 156.501 11.4673 150.133 8.27274 143.4 6.0616C 135.922 3.62582 128.198 2.02114 120.369 1.2766C 111.412 0.395791 102.417 -0.029751 93.4177 0.00160738L 14.5477 0.00160738C 7.45567 0.00160738 0.0216698 4.65962 0.0216698 13.4436L 0.0216698 141.334C 10.0127 162.649 29.4747 185.278 51.6017 196.093L 51.6017 170.729C 51.6017 157.345 61.6807 154.355 65.8497 154.355L 89.1697 154.355C 121.292 154.355 145.809 147.609 162.721 134.118C 179.633 120.646 188.088 100.635 188.088 74.0846C 188.136 66.413 187.246 58.7643 185.439 51.3086C 183.642 44.1603 180.741 37.336 176.842 31.0816ZM 130.882 96.7626C 128.159 101.489 124.097 105.303 119.21 107.725C 113.913 110.252 108.191 111.768 102.338 112.195C 95.9637 112.763 89.3813 113.048 82.5907 113.049L 60.4297 113.049C 55.0087 113.049 51.6017 108.636 51.6017 102.126L 51.6017 49.8386C 51.6017 43.9746 55.4247 41.5146 60.0087 41.5146L 82.5907 41.5146C 89.9467 41.5146 96.845 41.7269 103.286 42.1516C 109.083 42.416 114.776 43.7905 120.056 46.2006C 124.762 48.4408 128.657 52.0861 131.204 56.6336C 133.888 61.3103 135.23 67.9103 135.232 76.4336C 135.232 85.0876 133.782 91.864 130.882 96.7626ZM 51.6017 204.358C 27.2657 194.634 10.9507 183.034 0.0216698 171.534L 0.0216698 233.274C 0.0216698 233.274 -0.878337 243.343 8.92166 243.343L 43.3307 243.343C 52.7697 243.343 51.6057 233.274 51.6057 233.274L 51.6057 204.358L 51.6017 204.358ZM 539.245 67.2806L 508.364 67.2806C 502.088 67.2806 497.953 69.9186 495.464 76.8206C 492.975 83.7226 460.243 174.885 460.243 174.885C 460.243 174.885 428.932 85.6056 426.468 78.6926C 424.004 71.7796 419.958 67.2806 412.668 67.2806L 384.293 67.2806C 374.283 67.2806 374.283 75.1436 375.524 78.2616C 376.531 80.7816 415.389 187.288 430.189 227.862C 433.679 237.442 435.057 240.324 435.165 243.873C 435.273 247.422 431.665 254.873 429.172 259.149C 428.027 261.1 426.712 262.948 425.243 264.669C 454.257 255.982 487.698 224.46 504.991 190.311C 522.091 142.72 544.641 79.8526 545.619 76.6366C 547.192 71.4276 547.176 67.2806 539.245 67.2806ZM 402.886 273.725C 400.205 273.678 397.529 273.485 394.87 273.146C 391.615 272.715 385.524 273.323 385.524 278.657L 385.524 302.501C 385.524 311.601 389.875 312.208 392.27 312.747C 399.476 314.249 406.825 314.959 414.186 314.865C 423.942 314.865 432.43 313.09 439.652 309.541C 446.944 305.932 453.442 300.902 458.763 294.746C 464.63 287.892 469.588 280.309 473.514 272.186C 477.825 263.458 481.963 253.843 485.929 243.341C 485.929 243.341 487.629 238.595 490.429 230.82C 481.911 239.419 441.763 277.49 402.886 273.725ZM 356.511 95.5856C 354.835 91.6004 352.546 87.9019 349.727 84.6246C 346.918 81.4786 343.703 78.721 340.166 76.4246C 336.349 73.9431 332.3 71.8395 328.076 70.1436C 323.762 68.4591 319.326 67.1084 314.806 66.1036C 309.667 64.9782 304.453 64.2312 299.206 63.8686C 293.539 63.4466 287.169 63.2339 280.096 63.2306C 233.314 63.2306 206.676 78.0163 200.181 107.588C 198.069 116.764 207.146 117.303 207.146 117.303L 235.925 117.303C 243.438 117.303 243.115 114.882 246.761 108.088C 248.074 104.391 250.437 101.157 253.561 98.7826C 259.084 94.5279 267.362 92.4003 278.396 92.3996C 289.012 92.3996 296.724 94.4553 301.534 98.5666C 306.343 102.678 309.173 108.923 310.025 117.303C 310.025 127.02 306.994 133.503 295.248 133.503C 266.611 132.463 235.838 135.703 218.506 145.64C 201.174 155.577 191.376 175.004 191.376 195.867C 191.376 204.377 192.897 211.828 195.941 218.221C 198.89 224.488 203.25 229.989 208.679 234.291C 214.44 238.784 221.043 242.078 228.098 243.978C 236.117 246.177 244.402 247.254 252.717 247.178C 265.172 247.178 276.176 245.616 285.729 242.492C 295.28 239.374 310.06 229.092 311.942 227.592L 311.942 233.073C 311.942 238.504 313.595 243.348 320.076 243.348L 353.542 243.348C 360.316 243.348 361.822 238.504 361.822 232.543L 361.822 129.442C 361.881 123.033 361.456 116.629 360.551 110.284C 359.833 105.233 358.475 100.294 356.511 95.5856ZM 310.876 196.672C 310.876 196.672 302.234 214.623 271.392 214.623C 262.906 214.623 256.008 212.708 250.697 208.878C 245.385 205.048 242.731 199.086 242.735 190.994C 242.735 180.484 247.052 173.065 255.688 168.738C 264.315 164.414 281.588 161.944 294.531 162.247C 307.474 162.55 310.876 170.729 310.876 176.376L 310.876 196.676L 310.876 196.672Z"/>
                        </defs>
                        </svg>
                    </p>
                    {{-- <p class="tab" onclick="payment('Apelsin')"><img width="100" height="40" src="{{URL::asset('image/apelsin.png')}}" alt="" srcset=""></p> --}}
                </div>
                <style>
                    .step2{
                      display:none;
                    }
                    .step3{
                      display:none;
                    }
                    .step4{
                      display:none;
                    }
                    .step5{
                      display:none;
                      border: 5px solid;
                      padding: 10px;
                      margin: 10px;
                    }
                    .step6{
                      display: none;
                      border: 5px solid;
                      padding: 10px;
                      margin: 10px;
                    }
                    .step5 label{
                        text-align: center;
                    }
                    input{
                      height:30px;
                      width:180px;
                      border-radius:10px; 
                      margin:5px;
                      font-size:16px;
                        /* text-align:center; */
                    }
                    input:focus{
                      outline:none;
                      border:2px solid lightblue;
                    }
                    .expiration{
                      width:60px;
                    }
                    input[type=button]{
                        height: 50px;
                        cursor: pointer;
                        margin: 0px auto;
                        color: #FFF;
                        background-color: #41d151d1;
                        margin: 5px;
                        /* width: 100px; */
                    }
                    input[type=button]:hover{
                        background-color: #67a06c;
                        /* width: 100px; */
                    }
                    #validation{
                        display: none;
                        background-color: #dd4848;
                        color: #FFF;
                        border: none;
                    }
                    #payme-phone{
                        width: 69%;
                        height: 50px;
                        font-size: 30px;
                        border-radius: 5px;
                        border:1px solid;
                    }
                    #timer{
                        width: 23%;
                        height: 50px;
                        font-size: 30px;
                        border-radius: 5px;
                        border:1px solid;
                        text-align: center;
                    }
                    input[type=button]{
                        font-size: 25px;
                        font-family: 'Barlow Semi Condensed';
                    }
                    .retry{
                        background-color: red;
                    }
                  </style>
                
                
                <div id="Payme" class="w3-container pay-type">
                    {{-- <form id="form" action="" method="post"> --}}
                        <div class="step1">
                            <input type="hidden" id="id" name="id" value="{{uniqid()}}">
                            <input type="tel" id="card_number" onpaste="return false" onkeypress="javascript:return isPhone(event)" placeholder="8600 1234 1234 1234" name="number" value="" maxlength="19">
                            <input type="tel" id="card_expire" class="expiration" maxlength='5' onkeypress="javascript:return isPhone(event)" onkeyup="formatString(event);" placeholder="00/99" name="expire" value="">
                            <input type="hidden" id="token" name="token">
                            <input type="text" id="validation" name="validation" disabled>
                            <p align="center">
                                <input type="button" id="step1" name="step1" value="Davom etish">
                            </p>
                        </div>
                        {{-- <div class="step2">
                            <input type="text" id="number" name="number" disabled>
                            <input type="text" id="expire" name="expire" disabled>
                            <input type="hidden" id="token" name="token">
                            <input type="text" id="validation" name="validation" disabled>
                            <p align="center">
                                <input type="button" class="retry" name="retry" value="Orqaga">
                                <input type="button" id="step2" name="step2" value="Davom etish">
                            </p>
                        </div> --}}
                        <div class="step3">
                            <input type="phone" name="" id="payme-phone" disabled>
                            <input type="number" name="" id="timer" disabled>
                            <input type="text" name="" placeholder="Tasdiqlash kodini kiriting" id="code">
                            <input type="text" id="validation" name="validation" disabled>
                            <p style="display: flex">
                                <input type="button" style="background-color: red" class="retry" name="retry" value="Orqaga">
                                <input type="button" id="step3" name="step3" value="Kodni tasdiqlash">
                            </p>
                        </div>
                        {{-- <div class="step4">
                            <label for="amount">Summa:</label>
                            <input type="text" name="amount" value="1000 So'm" id="amount" disabled>
                            <input type="text" id="validation" name="validation" disabled>
                            <p align="center">
                                <input type="button" class="retry" name="retry" value="Orqaga">
                                <input type="button" id="step4" name="step4" value="Davom etish">
                            </p>
                        </div>
                        <div class="step5">
                            <p align="center"><img width="200" src="{{URL::asset('image/logo.png')}}" alt=""></p>
                            <label>Tranzaksiya raqami: <span id="receipt_id"></span></label>
                            <label>Tashkilot nomi: <span id="organization"></span></label>
                            <label>Kurs nomi: {{$course->title}}</label>
                            <label>To'lov summasi:  {{$course->price}} so'm</span></label>
                            <input type="hidden" id="invoice_id" name="invoice_id">
                            <input type="hidden" id="state" name="state">
                            <input type="text" id="validation" name="validation" disabled> --}}
                            {{-- <p align="center">
                                <input type="button" id="retry" name="retry" value="Orqaga">
                                <input type="button" id="step5" name="step5" value="To'lash">
                            </p> --}}
                        {{-- </div> --}}
                        <div class="step6">
                            <input type="text" id="validation" name="validation" disabled>
                            <p align="center">
                                <input type="button" class="retry" name="retry" value="Qaytadan urinish!">
                            </p>
                        </div>
                      </div>
                    {{-- </form>  --}}
                </div>
                  
                  <div id="Apelsin" class="w3-container pay-type" style="display:none">
                    <input type="text" name="" id="" placeholder="" value="Hozirgi vaqtda mavjud emas!" disabled>
                  </div>
                  <script>
                      $("#card_number").on('keyup', function (e) {
                            if(e.target.value.length!=4&e.target.value.length!=9&e.target.value.length!=14&e.target.value.length!=19)
                                e.target.value = e.target.value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
                            e.target.value = e.target.value.replace(/[^\d ]/g,'');  
                        });
                        function formatString(e) {
                            var inputChar = String.fromCharCode(event.keyCode);
                            var code = event.keyCode;
                            var allowedKeys = [8];
                            if (allowedKeys.indexOf(code) !== -1) {
                                return;
                            }

                            event.target.value = event.target.value.replace(
                                /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
                            ).replace(
                                /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
                            ).replace(
                                /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
                            ).replace(
                                /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
                            ).replace(
                                /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
                            ).replace(
                                /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
                            ).replace(
                                /\/\//g, '/' // Prevent entering more than 1 `/`
                            );
                        }

                    function payment(type) {
                      var i;
                      var x = document.getElementsByClassName("pay-type");
                      for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                      }
                      document.getElementById(type).style.display = "block";  
                    }

                    $("#phone").on('keyup', function (e) {
                        e.target.value = e.target.value.replace(/[^\d]/g,'');
                        return false;
                    });
                    </script>
                        
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                  <script>
  

                        // click on button step1
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': "{{csrf_token()}}"
                            }
                        });

                        $("#referral_check").click(function(e){
                          e.preventDefault();
                          const code = document.getElementById('referral').value;
                          const price = '{{$course->price}}';
                          $.ajax({
                                type: 'POST',
                                url: '{{route('check.referral')}}',
                                /* send the csrf-token and the input to the controller */
                                data:{code:code},
                                success:function(data){
                                    if(data.name){
                                        document.getElementById('referral').style.border="3px solid green";
                                        document.getElementById('referral').disabled = true;
                                        // document.getElementById('referral_check').value = "Topildi";
                                        document.getElementById('referral_check').style.display = "none";
                                        document.getElementById('referral_check').disabled = true;
                                        document.getElementById('discount').value=data.discount;
                                        document.getElementById('discount-text').innerHTML="Sizga " + document.getElementById('amount').value +" - "+data.discount+"% = ";
                                        document.getElementById('product-amount').innerHTML=document.getElementById('amount').value +" - "+data.discount+"% = ";
                                        document.getElementById('amount').value=document.getElementById('amount').value.split(',').join('')*(100-data.discount)/100;
                                        document.getElementById('discount-text').innerHTML+=document.getElementById('amount').value + " so'm chegirma belgilandi!";
                                        document.getElementById('product-amount').innerHTML+=document.getElementById('amount').value;  
                                        document.getElementById('total').innerHTML=document.getElementById('amount').value;
                                        
                                        sessionStorage.setItem('referral', data.code);
                                        sessionStorage.setItem('discount', data.discount);
                                    }
                                    else{
                                        document.getElementById('referral').style.border="none";
                                        document.getElementById('amount').value=price;
                                        document.getElementById('discount-text').innerHTML="Topilmadi!";
                                        // sessionStorage.removeItem('referral');
                                        // sessionStorage.removeItem('discount');
                                    }
                                }
                              });
                        });

                        $("#step1").click(function(e){
                            e.preventDefault();
                            
                            $.ajax({
                                type: 'POST',
                                url: '{{route('transaction.create')}}',
                                data:{
                                    name: document.getElementById("name").value,
                                    phone: document.getElementById("phone").value,
                                    leed_id: document.getElementById("leed_id").value,
                                    card_number: document.getElementById("card_number").value, 
                                    card_expire: document.getElementById("card_expire").value,
                                    course_id:{{$course->id}},
                                  },
                                success:function(data){
                                    // console.log(data);
                                  if("error" in data){
                                    var validation = document.querySelectorAll("#validation")[0];
                                    validation.style.display = "block";
                                    validation.value = data.error;
                                    return;
                                  }

                                  document.querySelectorAll(".step1")[0].style.display = "none";
                                  document.querySelectorAll(".step3")[0].style.display = "block";
                                  document.getElementById("id").value=data.id;

                                  document.querySelectorAll(".step3")[0].style.display = "block";
                                  document.querySelectorAll("#validation")[2].style.display="none";
                                  document.getElementById("payme-phone").value=data.result.phone;
                                  //document.getElementById("timer").value=json.result.wait;
                                  var timeleft = 60;
                                  var downloadTimer = setInterval(function(){
                                  if(timeleft < 0){
                                    clearInterval(downloadTimer);
                                    //document.getElementById("countdown").innerHTML = "Finished";
                                  } else {
                                    document.getElementById("timer").value = timeleft;
                                  }
                                  timeleft -= 1;
                                  }, 1000);
                                }
                            }); 
                        });

                    

                      $("#step3").click(function(e){
                            e.preventDefault();
                            
                            var id = document.getElementById("id").value;
                            var code = document.getElementById("code").value;
                            var referral = document.getElementById("referral").value;
                            $.ajax({
                                type: 'POST',   
                                url: '{{route('transaction.verify')}}',
                                data:{id:id, code:code, referral:referral},
                                success:function(data){
                                //   console.log(data=="sucess");
                                  if(data=="success"){
                                    // console.log(data);
                                    document.querySelectorAll(".step3")[0].style.display = "none";
                                    sessionStorage.setItem('phone', document.getElementById("phone").value);
                                    window.location.href = "{{route('checkout.blackcube')}}";
                                    window.location.assign("{{route('checkout.blackcube')}}");
                                    return;
                                  }
                                  if("error" in data){
                                    var validation = document.querySelectorAll("#validation")[2];
                                    validation.style.display = "block";
                                    validation.value = data.error;
                                    return;
                                  }
                                }
                            }); 
                        });
                      
                      

                      $(".retry").click(function(){
                            // document.querySelectorAll(".step5")[0].style.display = "none";
                            // document.querySelectorAll(".step4")[0].style.display = "none";
                            document.querySelectorAll(".step3")[0].style.display = "none";
                            // document.querySelectorAll(".step2")[0].style.display = "none";
                            document.querySelectorAll(".step1")[0].style.display = "block";
                            document.getElementById("card_number").value="";
                            document.getElementById("card_expire").value="";
                            // document.querySelectorAll(".payment-success-popup")[0].style.display = "block";
                      });
                  </script>

                {{-- <label for="invoice">To`lovingiz chekini kiriting <span class="symbol">*</span></label>
                <input type="file" name="invoice" id="invoice"> --}}

                <input type="hidden" name="leed_id" id="leed_id" value="">
                {{-- <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}"> --}}
                
                {{-- <input type="submit" value="RO'YXATDAN O'TISH"> --}}
                <p class="sub-text white text-bold"><span class="symbol text-bold">*</span>Ro`yxatdan o`tish tugmachasini bosganingizdan so`ng keyingi sahifasiga yo`naltirilasiz. Bu internetingiz tezligiga qarab ba`zida 30 soniyagacha borishi mumkin.</p>
                
            </form>
            <script>
                $("#leed_submit").submit(function(e){
                    e.preventDefault();
                    var name = $('#name').val(),
                    phone = $('#phone').val(),
                    course = $('#course').val(),
                    token = "{{csrf_token()}}";
                    $.ajax({
                        type: "POST",
                        url: "{{route('leed.create')}}",
                        data: {name:name, phone:phone, course:course ,_token:token},
                        success: function(data) {
                            document.getElementById("leed_id").value=data;
                            document.querySelectorAll("#leed_submit")[0].style.display = "none";
                            document.querySelectorAll(".registration")[0].style.display = "block";
                        },
                        error: function(data) {
                            document.querySelectorAll("#phone")[0].style.border = "2px solid red";
                        }
                    });
                });
            </script>
            <p class="sub-text"><span class="symbol text-bold">*</span> Davom etish tugmachasini bosganingizdan so`ng to`lov sahifasiga yo`naltirilasiz. Bu internetingiz tezligiga qarab ba`zida 30 soniyagacha borishi mumkin.</p>
        </div>
        <p class="sub-text">Qimmatli vaqtingizni ajratib ushbu sahifani o`qiganingizdan minnatdorman.</p>
        <p class="sub-text">Ichkarida ko`rishguncha!</p>
        <p class="sub-text">Hurmat ila,<br>Dovranbek Turdiev</p>
        <p>
            <svg id="signature"
            width="264.000000pt" height="184.000000pt" viewBox="0 0 264.000000 184.000000"
            preserveAspectRatio="xMidYMid meet">

            <g transform="translate(0.000000,184.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M1250 1784 l-25 -15 25 8 c39 12 106 9 124 -6 39 -33 6 -117 -109
            -271 -43 -58 -89 -116 -101 -130 -12 -14 -64 -74 -114 -135 -51 -60 -93 -111
            -95 -113 -1 -1 -19 11 -40 28 -21 16 -43 30 -49 30 -6 0 3 -9 21 -20 56 -33
            58 -50 13 -110 -22 -30 -40 -57 -40 -62 0 -17 16 -5 45 35 17 22 35 41 40 41
            17 1 17 -95 0 -148 -18 -58 -191 -352 -211 -360 -21 -8 -313 -31 -319 -25 -2
            3 24 56 59 117 35 62 113 207 172 322 86 167 113 211 133 219 14 5 20 10 14
            10 -7 1 -13 6 -13 13 0 17 81 148 91 148 5 0 9 8 9 18 1 23 121 191 195 271
            33 35 80 77 104 93 25 15 41 28 36 28 -4 0 -30 -14 -57 -31 -65 -42 -153 -140
            -239 -267 -40 -57 -81 -107 -91 -110 -14 -3 -16 -7 -8 -12 9 -6 2 -26 -24 -73
            -20 -36 -43 -71 -51 -77 -8 -7 -15 -19 -15 -28 0 -28 -319 -619 -343 -634 -24
            -15 -168 16 -225 49 -68 39 -72 59 -29 145 20 40 52 96 71 123 50 70 163 182
            214 212 23 14 42 27 42 29 0 9 -77 -35 -117 -68 -58 -46 -183 -205 -223 -284
            -23 -44 -36 -61 -42 -52 -13 21 -9 65 10 116 58 151 234 312 487 444 60 32
            106 58 100 58 -17 0 -210 -105 -282 -153 -205 -137 -338 -303 -335 -415 5
            -137 8 -229 10 -249 1 -12 16 -39 34 -59 l32 -36 -22 -37 c-72 -115 -119 -301
            -78 -301 8 0 65 64 126 142 62 79 119 150 129 159 9 8 26 33 37 55 12 21 29
            41 39 42 20 5 50 -21 82 -71 28 -45 62 -61 101 -46 15 5 68 53 118 106 l91 95
            74 14 c41 7 89 13 108 13 28 1 32 -2 26 -16 -19 -45 -38 -124 -31 -131 11 -11
            45 35 77 105 32 69 38 72 165 92 32 5 125 26 207 47 81 20 149 35 152 32 3 -3
            0 -19 -6 -36 -6 -17 -9 -41 -7 -54 3 -17 9 -7 23 37 14 42 27 63 45 72 14 6
            112 40 219 73 235 75 483 161 478 167 -2 2 -62 -17 -133 -42 -174 -62 -546
            -176 -552 -170 -3 3 9 24 26 48 17 23 70 103 118 177 48 74 103 153 124 175
            21 22 62 67 92 100 l53 59 -57 -48 c-32 -27 -58 -46 -58 -43 0 8 126 233 177
            315 46 74 67 88 78 51 15 -47 -15 -129 -69 -189 l-31 -35 34 30 c65 58 100
            174 67 218 -11 14 -19 16 -33 9 -10 -6 -80 -116 -156 -244 -142 -243 -147
            -249 -236 -313 -62 -45 -106 -48 -169 -14 l-37 21 28 -22 c15 -12 27 -25 27
            -29 0 -4 -35 -24 -78 -45 -58 -26 -86 -35 -108 -30 -16 3 -49 -1 -74 -10 -51
            -17 -62 -13 -34 12 10 10 54 52 97 92 70 67 80 73 98 62 18 -12 19 -11 10 6
            -9 18 5 33 114 127 69 59 125 110 125 113 0 2 -24 -16 -52 -40 -29 -25 -91
            -75 -138 -113 -46 -37 -91 -76 -100 -85 -33 -37 -291 -262 -295 -258 -7 7 75
            172 130 264 71 117 95 146 110 134 9 -8 11 -5 8 13 -10 51 239 313 358 377 51
            27 75 34 122 35 47 0 61 -4 73 -20 39 -52 29 -103 -29 -158 l-42 -40 38 28
            c67 49 83 104 47 162 -68 112 -298 -1 -499 -244 -46 -57 -88 -103 -93 -103 -4
            0 -8 -6 -8 -13 0 -7 -25 -50 -57 -97 -31 -46 -95 -161 -143 -255 -126 -245
            -171 -324 -189 -329 -32 -10 -195 -36 -199 -32 -2 3 34 69 81 148 104 177 122
            225 114 325 l-5 73 104 125 c58 69 111 125 118 125 7 0 13 6 13 13 0 7 34 59
            77 116 129 174 154 247 100 290 -32 25 -88 27 -124 5z m530 -722 c0 -20 -194
            -312 -207 -312 -14 0 10 68 36 100 37 46 61 94 61 122 1 15 17 36 48 60 48 38
            62 45 62 30z m-145 -91 c7 -24 -7 -60 -40 -99 -52 -62 -58 -22 -7 48 l25 35
            -29 -27 -29 -27 -14 30 c-15 34 -15 34 19 48 40 16 68 13 75 -8z m-105 -57 c0
            -28 -39 -91 -75 -123 -39 -34 -62 -36 -57 -5 6 39 58 129 81 140 28 14 51 8
            51 -12z m-170 -12 c-66 -43 -140 -140 -161 -211 -7 -22 -17 -45 -23 -50 -14
            -12 -115 -30 -120 -22 -7 12 54 154 76 179 53 57 178 122 233 121 18 0 18 -2
            -5 -17z m24 -87 c-40 -69 -135 -165 -162 -165 -20 0 -22 4 -17 23 23 74 103
            178 169 218 l31 19 3 -25 c2 -13 -9 -45 -24 -70z m174 9 c7 4 12 1 12 -7 0
            -17 -20 -79 -29 -89 -8 -9 -244 -68 -249 -63 -5 5 68 95 77 95 4 0 12 -5 18
            -11 16 -16 82 23 112 67 21 30 25 32 36 18 7 -10 17 -14 23 -10z m-518 -184
            c-7 -16 -16 -30 -21 -30 -5 0 -1 16 8 35 20 42 31 38 13 -5z m-745 -110 c38
            -6 71 -13 73 -15 9 -9 -11 -25 -32 -25 -33 0 -105 -27 -148 -55 -20 -14 -44
            -22 -52 -19 -22 9 -56 85 -56 126 0 67 4 69 78 32 40 -20 95 -38 137 -44z
            m709 28 c-10 -34 -35 -81 -40 -76 -7 8 27 98 38 98 5 0 6 -10 2 -22z m-345
            -98 c-98 -110 -159 -136 -190 -78 -6 11 -29 40 -51 64 -57 61 -45 72 80 77 54
            1 125 4 160 5 l64 2 -63 -70z m-328 -9 c-40 -74 -278 -364 -292 -356 -23 15
            25 165 77 243 31 48 39 53 62 48 15 -3 21 -3 15 0 -20 9 -15 32 10 46 38 22
            81 36 110 37 24 1 26 -1 18 -18z"/>
            <path d="M1844 1428 l-19 -23 23 19 c21 18 27 26 19 26 -2 0 -12 -10 -23 -22z"/>
            <path d="M1775 1374 l-40 -36 43 32 c36 27 49 40 40 40 -2 0 -21 -16 -43 -36z"/>
            <path d="M933 1373 c9 -2 25 -2 35 0 9 3 1 5 -18 5 -19 0 -27 -2 -17 -5z"/>
            <path d="M525 1131 c-22 -11 -35 -19 -30 -19 14 -1 93 36 80 37 -5 0 -28 -8
            -50 -18z"/>
            <path d="M2375 990 c-27 -10 -43 -18 -35 -18 8 0 38 8 65 18 28 10 43 18 35
            18 -8 0 -37 -8 -65 -18z"/>
            </g>
            </svg>
        </p>
        <p class="sub-text">Sahifani to`liq o`qimasdan darrov oxiriga tushganlar uchun:</p>
        <p class="sub-text">19-sentabrdan boshlab 21 kun ichida 8 yil mobaynida o`rgangan barcha eslab qolish va shaxsiy samaradorlikni oshirish usullarini o`rgataman.</p>
        <p class="sub-text">Ushbu taklif muddati cheklangan. Chunki ushbu treningdagi eslab qolish usullarini offline treningimda o`rganish uchun odamlar 2,997,000 so`mdan 4,997,000 so`mgacha to`lashadi.</p>
        <p class="sub-text">Tez qaror qabul qiluvchi insonlarni hurmat qilganim uchun birinchi 500 nafar o`quvchilarni chegirma narxida qabul qilaman.</p>
        <p class="sub-text">Birinchi 500 nafar o`quvchilar 497,000 so`m evaziga ro`yxatdan o`tishingiz mumkin.</p>
        <p class="sub-text">Birinchi 500 nafar o`quvchilar o`z joylarini egallashganidan so`ng, trening narxi ko`tarilishiga kafolat beraman.</p>
        <div class="banner">
            <p class="sub-text text-bold"><span class="symbol count" counter-lim="7"></span><br>
                497,000 SO`M NARXDA QOLGAN JOYLAR SONI
            </p>
        </div>
        <p class="sub-text">Ushbu trening eslab qolishingizni 10 barobarga tezlashtirishiga ishonchim komil.</p>
        <p class="sub-text">Agar eslab qolishingizni 10 barobarga tezlashtirmasangiz, shunchaki murojaat qiling va to`lovingizni bir og`iz so`zsiz 100% to`liq holda qaytarib beraman.</p>
        <p class="sub-text"><a href="">Bu yerni bosing va hoziroq ro`yxatdan o`ting.</a></p>
        <p class="sub-text">Va`da beraman, afsuslanmaysiz.</p>
        <br><br>
    </section>
    
    @include('partials.footer')

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>

<script>
    $(document).ready(function() {
        var start = new Date();

        $(window).on("unload", function(e) {
            var end = new Date();
            $.ajax({ 
                url: "log.php",
                data: {'timeSpent': end - start},
                async: false
            })
        });
    });
</script>
</html>