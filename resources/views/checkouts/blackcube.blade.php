<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Supermiya Mnemonika Online Treningi</title>
    <link rel = "icon" href = "{{ URL::asset('image/icon.png') }}" type = "image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/video.js@6.6.3/dist/video-js.css">
    <script src="https://cdn.jsdelivr.net/npm/video.js@6.6.3/dist/video.min.js"></script>
    <link href="//players.brightcove.net/videojs-live-dvrux/1/videojs-live-dvrux.min.css" rel="stylesheet">
    <script src="//players.brightcove.net/videojs-live-dvrux/1/videojs-live-dvrux.min.js"></script>
    <link href="//players.brightcove.net/videojs-quality-menu/1/videojs-quality-menu.css" rel="stylesheet">
    <script src="//players.brightcove.net/videojs-quality-menu/1/videojs-quality-menu.min.js"></script>
    <script src="https://cdn.streamroot.io/videojs-hlsjs-plugin/1/stable/videojs-hlsjs-plugin.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/video.css') }}">
    <style>
        .video-js .vjs-tech {
            position: inherit !important;
        }
    </style>
</head> 

                
<body> 
    <section class="main">  
        <p class="title">⚠️ DIQQAT: MUVAFFAQIYATLI RO`YXATDAN O`TISH UCHUN QUYIDAGI VIDEONI OXIRIGACHA KO`RING!</p>
        
        <div class="meter">
            <span>80%</span>
        </div>  
        <div class="flex-container">
            <div class="flex-child">
                <video id="video0" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" poster="https://vz-e119da89-d8b.b-cdn.net/642d13fe-1a30-4d24-9085-b0e8f0113d0e/thumbnail.jpg">
                    <source src="https://vz-e119da89-d8b.b-cdn.net/642d13fe-1a30-4d24-9085-b0e8f0113d0e/playlist.m3u8" type="application/x-mpegURL">
                </video>
            </div>  
        </div>
        <script>
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
                var player = videojs('video0',options);
                player.qualityMenu();
                player.dvrux();
                player.src({ src: 'https://vz-e119da89-d8b.b-cdn.net/642d13fe-1a30-4d24-9085-b0e8f0113d0e/playlist.m3u8' });
                var interval = setInterval(() => {
                    if(player.currentTime()>360){
                        document.getElementsByClassName('body')[0].style.display='block';
                        clearInterval(interval);
                    }
                    console.log('true');
                }, 1000);
        </script>
    <div class="body" style="display: none">
    <section>
        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">KURSGA EGA BO`LISH</a>
            </p>
        </div>

        <div class="wrapper ignore">
            <p>
                <a href="{{route('thankyou',['name'=>$name,'course_id'=>1])}}" role="button">YO`Q - Afsuski bu taklifni qabul qila olmayman.</a>
            </p>
        </div>

        <p class="sub-text text-bold">Hurmatli {{$name?$name:""}},</p>
        <p class="sub-text text-bold">Insonni hayotda o`z o`rnini topa olmasligining asl sababi nima qilishni bilmaslikda emas…</p>
        <p class="sub-text text-bold">Qilishi kerak bo`lgan narsani uzoq vaqt muntazam ravishda qila olmasligida.</p>
        <p class="sub-text text-bold">Hozir Superkompyuter va kosmik kemalar davrida yashashimizga qaramasdan, o`rganish uslubimiz ta`lim tizimi yaralganidan beri o`zgargani yo`q.</p>
        <p class="sub-text text-bold">99% Murabbiylar uni qil, buni qil, buni bajar deyishadi.</p>
        <p class="sub-text text-bold">Lekin deyarli hech kim hozirgi asrning eng katta va yovuz dushmani bo`lgan chalg`ituvchi omillar va dangasalikka qarshi kurashishni o`rgatmaydi.</p>
        <p class="sub-text text-bold">Man sizga eslab qolish bo`yicha Jahon chempionlari ishlatadigan usullarni o`rgatganim bilan, dangasalik qilib mashqlarni o`z vaqtida bajarmasangiz, afsuski sizda natija bo`lmaydi.</p>
        <p class="sub-text text-bold">Lekin dangasaligingiz mutlaqo sizning aybingiz emas.</p>
        <p class="sub-text text-bold">Sizga shunchaki qanday qilib intizomli bo`lish va dangasalikni yengishni o`rgatishmagan.</p>
        <p class="sub-text text-bold">Mani o`zim ham 2014-yili mnemonikani boshlaganimda dangasalik bilan har kuni kurashganman.</p>
        <p class="sub-text text-bold">Ba`zi kunlari g`olib bo`lsam, boshqa kunlari dangasalik ustun kelar edi.</p>
        <p class="sub-text text-bold">Bunday davom etib uzoqqa bora olmasligimni tushundim va…</p>
        <p class="sub-text text-bold">Fan orqali qanday qilib buyuk insonlar kuniga 10-14 soat ishlay olishi sababini qidira boshladim.</p>
        <p class="sub-text text-bold">Mani hayron qoldirgan ma`lumotlardan biri shu bo`ldiki: <span class="underline">Inson o`z dangasaligini o`zini majburlash, ya`ni iroda orqali yenga olmas ekan.</span></p>
        <p class="sub-text text-bold">Har safar irodangizni ishlatib o`zingizni majburlay boshlaganingizda, miyangizdagi aqliy benzinni sarflay boshlaysiz…</p>
        <p class="sub-text text-bold">Va benzin ma`lum bir vaqt o`tgandan keyin tugashni boshlaydi.</p>
        <p class="sub-text text-bold">Bu esa sizni yotib telefon o`ynab dam olishga olib keladi.</p>
        <p class="sub-text text-bold">8 yil izlanishlarim orqali shuni tushunib yetdimki…</p>
        <p class="sub-text text-bold">Dangasalikni o`zingizni majburlash orqali yenga olmas ekansiz.</p>
        <p class="sub-text text-bold">Lekin dangasalikni aldash orqali kuniga 10 soatlab ishlashga muvaffaq bo`lish mumkin ekan.</p>
        <p class="sub-text text-bold">Shuning uchun ham ushbu kursni</p>
        <p class="sub-text text-bold">
            <span class="symbol">>>></span> O`z dangasaligingizni aldashingiz<br>
            <span class="symbol">>>></span> Kuniga hozirgidan 4-5 barobar ko`proq ishlashingiz<br>
            <span class="symbol">>>></span> Va maqsadlaringizga ertaroq erishishingizga yordam berish maqsadida yaratdim.
        </p>
    </section>
    <section class="main course">
        <p class="title main-title">Dangasalikni yengishning ajoyib sirlari kursimda siz:</p>
        <p class="sub-text text-bold">✅ Miyadan chalg`ituvchi faktorlarni toazalash uchun Leonard Mlodinovning “Tozalovchi Qarmoqlar” metodikasi <span class="symbol">(qiymati: 1,550,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Diqqat-e`tiborni kamida 5 baravarga kuchaytirish uchun “Nuqta” metodikasi <span class="symbol">(qiymati: 597,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Maqsadga erishishni tezlashtirish uchun uni “Topshiriqqa aylantirish”, va “Topshiriqni to`g`ri yozish” metodikasi <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Maqsadingiz yo`lida topshiriq tanlashda xato qilmasligingiz uchun “Maykl Linenberger” tizimi <span class="symbol">(qiymati: 1,775,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Taleb Nikolas Nasimning loyihalarni amalga oshirish uchun “Ratsional Rejalashtirish” metodikasi <span class="symbol">(qiymati: 597,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Ish jarayonidagi samaradorlikni maksimal darajaga olib chiqish uchun Franchesko Chirilloning “Pomidor” metodikasi <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Muhim uchrashuvlarga kech qolishni unuting. Vaqt taqsimlash bo`yicha Eliyaxu Goldretning “Cheklovlar Nazariyasi” <span class="symbol">(qiymati: 597,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Potensiali katta g`oyalaringizni to`g`ri joyda saqlash, loyihalarga aylantirish va haqiqatga aylantirish metodikasi <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        <p class="sub-text text-bold">✅ Dangasalik paydo bo`lish sabablari, dangasalik turlari va ularni osongina yengish metodikasi <span class="symbol">(qiymati: 497,000 so`m)</span></p>
        <p class="sub-text text-bold">🎁 BONUS #1: Qanday qilib aqliy mehnat bilan kuniga 4-7 soat charchamasdan shug`ullanish metodikasi <span class="symbol">(qiymati: 397,000 so`m)</span></p>
        <p class="sub-text text-bold">🎁 BONUS#2: Dunyo miqyosidagi marketolog Dag Hollning kreativlikni kuchaytirish metodikalari <span class="symbol">(qiymati: 994,000 so`m)</span></p>
        <p class="sub-text text-bold">🎁 BONU3#2: Miyaning “Defolt Mode Network” tizimi bo`yicha videodars <span class="symbol">(qiymati: 397,000 so`m)</span></p>
        
        <p class="title main-title"><span>JAMI QIYMATI: 8,892,000 SO`M</p></span>
        <p class="text-price">Lekin Bugun Ro`yxatdan O`tsangiz<br>
            <span class="price">{{$course->price}} SO`M</span><br>
                Evaziga Barchasini O`rganasiz<br>
            <span class="sale">(97% dan ko`proq chegirma!)</span>
        </p>
        <br><br>
        {{-- <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a><br>
                <span class="sub-wrap">Iltimos 497,000 So`m evaziga barchasini o`rganishimga ijozat bering.</span>
            </p>
        </div> --}}
        <br><br>
        <div class="form" id="leed-form">
            <p class="title"><span>RO`YXATDAN O`TISH</span></p>
            
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
                #validation{
                    display: none;
                    background-color: #dd4848;
                    color: #FFF;
                    border: none;
                }
            </style>
            <p align="center">
                <div style="width:90%;margin:0px auto">
                    <h2 for="">Buyurtmalaringiz:</h2>
                    <div id="order-summary-widget">
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
                    </div>
                  </div>
                <input type="hidden" id="amount" value="{{$course->price}}">
                <input type="hidden" id="id" name="id" value="{{uniqid()}}">
                <input type="text" id="validation" name="validation" disabled>
                <input type="button" id="buy" name="buy" value="Sotib olish ">
            </p>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <script>
                if(sessionStorage.getItem('referral')){
                    document.getElementById('product-amount').innerHTML=document.getElementById('amount').value +" - "+sessionStorage.getItem('discount')+"% = ";
                    document.getElementById('amount').value=document.getElementById('amount').value.split(',').join('')*(100-sessionStorage.getItem('discount'))/100;
                    // document.getElementById('discount-text').innerHTML+=document.getElementById('amount').value + " so'm chegirma belgilandi!";
                    document.getElementById('product-amount').innerHTML+=document.getElementById('amount').value;  
                    document.getElementById('total').innerHTML=document.getElementById('amount').value;
                }
                $("#buy").click(function(e){
                    e.preventDefault();
                    const course = '{{$course->id}}';
                    $.ajax({
                        type: 'POST',
                        url: '{{route('transaction.direct')}}',
                        /* send the csrf-token and the input to the controller */
                        data:{code:sessionStorage.getItem('referral'),course_id:course,phone:sessionStorage.getItem('phone')},
                        success:function(data){
                            sessionStorage.clear();
                            window.location.href = "{{route('thankyou')}}";
                            window.location.assign("{{route('thankyou')}}");
                        }
                        });
                });
            </script>
                    
            <p class="sub-text"><span class="symbol text-bold">*</span> Kursga ega bo`lish tugmachasini bosganingizdan so`ng keyingi sahifasiga yo`naltirilasiz. Bu internetingiz tezligiga qarab ba`zida 30 soniyagacha borishi mumkin.</p>

            <div class="wrapper ignore">
                <p>
                    <a href="{{route('thankyou',['name'=>$name,'course_id'=>1])}}" role="button">YO`Q - Afsuski bu taklifni qabul qila olmayman.</a>
                </p>
            </div>
        </div>
        <p class="sub-text text-bold">Yuqoridagi usullarni</p>
        <p class="sub-text text-bold">
            …O`rganib<br>
            …Ishlamaydiganini chiqarib<br>
            …Ishlaydiganini qoldirib<br>
            …Takomillashtirib sizga berishim uchun…</p>
        <p class="sub-text text-bold">8 yildan ko`p vaqtimni va 9 million so`mdan ko`proq pullarimni sarfladim.</p>
        <p class="sub-text text-bold">Lekin siz buncha ko`p pul va vaqt sarflashingiz shart emas.</p>
        <p class="sub-text text-bold">Blackcube.uz saytimiz orqali ushbu kursni boshqalar 497,000 so`m evaziga sotib olishadi.</p>
        <p class="sub-text text-bold">Lekin siz emas.</p>
        <p class="sub-text text-bold">Siz allaqachon supermiyaga to`lov qilib, o`z bilmingizga sarmoya kiritib o`zingizni isbotladingiz.</p>
        <p class="sub-text text-bold">Shuning uchun ham yuqoridagi barcha darslarni sizga bir martalik maxsus 50% chegirma orqali {{$course->price}} so`m evaziga taqdim etaman.</p>

        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a><br>
                <span class="sub-wrap">Iltimos {{$course->price}} So`m evaziga barchasini o`rganishimga ijozat bering.</span>
            </p>
        </div>

        <p class="sub-text text-bold underline">Ushbu chegirmadagi taklif faqatgina hozir va shu yerda mavjud.</p>
        <p class="sub-text">Ushbu sahifani tark etishingiz bilanoq 50% chegirmangiz yo`qoladi…</p>
        <p class="sub-text">Va keyinchalik xarid qilmoqchi bo`lsangiz, blackcube.uz saytimga kirib 497,000 so`m to`lashingizga to`g`ri keladi.</p>
        <p class="sub-text">Ushbu kursda ham Supermiyadagi kabi…</p>

        <p class="title">“BO`LISHI MUMKIN EMAS” DEB NOMLANGAN TO`LOVINGIZNI 100% QAYTARIB BERISH KAFOLATI BOR.</p>
        <p class="sub-text">Agar kurs orqali dangasaligingizni yenga olmasangiz yoki kurs sizga yoqmasa…</p>
        <p class="sub-text"><span class="underline">60 kun ichida murojaat qiling va to`lovingizni 100% to`liq holda qaytarib beraman.</span> (do`stligimizga ham putr yetmaydi.)</p>
        <p class="sub-text">Mani maqsadim siz hayotdagi maqsadingizga tezroq erishib o`z o`rningizni topishingizga yordam berish.</p>
        <p class="sub-text">Agar sizga yordam bera olmasam, to`lovingiz kerak emas.</p>
        <p class="sub-text">Kurs online bo`lib, barcha videolar va tarqatma materiallar google diskda joylashgan bo`ladi.</p>
        <p class="sub-text">To`lovni amalga oshirganingizdan so`ng 6 soat ichida siz qoldirgan elektron manzilingizga kurslarga ega bo`lish uchun dustup beriladi.</p>
        <p class="sub-text">Kursni <span class="underline">xohlagan vaqtingiz</span> telefoningizda google disk ilovasi orqali yoki kompyuter orqali google disk saytida ko`rishingiz mumkin bo`ladi.</p>

        <p class="course-img resize-img"><img src="{{URL::asset("image/Blackcube-desktop.png")}}" alt="Blackcube desktop"></p>
        <p class="sub-text center"><span class="symbol">* Kompyuterdagi ko`rinishi</span></p>
        <p class="comment"><img src="{{URL::asset("image/bcmobile.jpeg")}}" alt="Blackcube mobile"></p>
        <p class="sub-text center"><span class="symbol">* Telefondagi ko`rinishi</span></p>

        <p class="sub-text">Agar ro`yxatdan o`tishda muammo tug`ilsa, <a href="https://t.me/xayotsharapov">ushbu tugmani bosib</a> telegramdan murojaat qiling va xodimlarimiz sizga albatta yordam berishadi.
        <p class="sub-text">Eslatib o`taman, ushbu imkoniyat faqatgina hozir va shu yerda mavjud.</p>
        <p class="sub-text">Ushbu sahifani tark etishingiz bilanoq bu imkoniyatni qo`ldan boy berasiz.</p>
        <p class="sub-text">Hoziroq qaror qabul qilishingizga biror narsa to`sqinlik qilishiga yo`l qo`ymang.</p>
        <p class="sub-text">O`sish va rivojlanish keying qoldirilmaydi.</p>
        <p class="sub-text">Siz ham qila oladigan ishlaringizni boshqalar qilayotganini kuzatishni bas qiling.</p>
        <p class="sub-text">Hoziroq birinchi qadamni tashlang.</p>
        <p class="sub-text">Birozdan keyin kech bo`lishi mumkin.</p>
        <p class="sub-text">Hoziroq quyidagi anketani to`ldiring va o`z maqsadingiz uchun kurashni boshlang.</p>

        <div class="wrapper">
            <p>
                <a href="#leed-form" role="button">O`RGANISHGA TAYYORMAN</a><br>
                <span class="sub-wrap">Iltimos {{$course->price}} So`m evaziga barchasini o`rganishimga ijozat bering.</span>
            </p>
        </div>

        <div class="wrapper ignore">
            <p>
                <a href="{{route('thankyou',['name'=>$name,'course_id'=>1])}}" role="button">YO`Q - Afsuski bu taklifni qabul qila olmayman.</a>
            </p>
        </div>
    </section>
    @include('partials.footer')
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
</html>