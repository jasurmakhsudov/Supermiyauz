<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel = "icon" href = "{{ URL::asset('image/icon.png') }}" type = "image/x-icon">
    <title>Checkout - Supermiya Mnemonika Online Treningi</title>
</head>
<body> 
    <section class="hero">  
        <br><br>
        <p class="">
            <svg width="182px" height="182px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z" fill="#08bc2f"/>
            </svg>
        </p>
        <h1>SUPERMIYA ONLINE TRENINGA MA`LUMOTLARINGIZ QABUL QILINDI</h1>
    <div class="white noalign">
        <p class="sub-text text-bold">Hurmatli {{$name}},</p>
        <p class="sub-text text-bold">Bu xatni yaqinda Supermiya online dasturimga to`lov qilganingiz uchun minnatdorchilik bildirish maqsadida yozmoqdaman.</p>
        <p class="sub-text text-bold">Supermiya boshlanganidan so`ng, bir dona ham darslarni qoldirmasligingizni va vazifalarni o`z vaqtida bajarishingizni xohlayman.</p>
        <p class="sub-text text-bold">Chunki Supermiya boshqa ko`plab treninglarga o`xshab quruq gaplar yoki foydasiz ma`lumotlarni o`z ichiga olmaydi va u barcha bergan va`dalarimni oqlaydi.</p>
        <p class="sub-text text-bold">Bir narsani tushunishingizni xohlayman…</p>
        <p class="sub-text text-bold">Supermiya bilimingizga qilgan eng yaxshi sarmoyangiz bo`lishi uchun qo`limdan kelgan barchasini qilaman.</p>
        <p class="sub-text text-bold">Ko`rib turganingizdek, ushbu treningdagi ma`lumotlar mani hayotimni butkul o`zgartirdi va ular sizning ham hayotingizni o`zgartira olishiga ishonchim komil.</p>
        <p class="sub-text text-bold">Ushbu dastur uchun 8 yildan ortiq vaqtimni va mehnatimni sarfladim. Treningni yoqtirishingiz aniq.</p>
        <p class="sub-text text-bold">Agar dunyoqarashlarimiz o`xshash bo`lsa, oldin ham turli xil usullarni sinab ko`rgansiz.</p>
        <p class="sub-text text-bold">Lekin sizga <span class="underline"> va`da </span> bera olamanki… <span class="underline"> Mani usullarim ishlaydi! </span></p>
        <p class="sub-text text-bold">Supermiya sizga maksimal natija berishi uchun, dastur ichidagi xar bir usullarni takomillashtirish uchun 8 yildan ko`proq ishladim.</p>
        <p class="sub-text text-bold">Va ushbu usullar mani Rossiya rekordini o`rnatishimga va 8000 dan ziyod shogirdlarimni tezroq va ko`proq o`rganishlariga yordam berdi.</p>
        <p class="sub-text text-bold">Supermiyada siz qidirayotgan barcha ko`proq eslab qolib, kamroq unutish usullarini o`rganasiz.</p>
        <p class="sub-text text-bold">Mani fikrimcha bugungi kunda ko`plab murabbiylar pulingizni olishgan zahotiyoq siz haqingizda unutishadi.</p>
        <p class="sub-text text-bold">Lekin man emas.</p>
        <p class="sub-text text-bold">Siz manga ishonishga qaror qilib Supermiyaga ro`yxatdan o`tganingizdan chin qalbimdan minnatdorman…</p>
        <p class="sub-text text-bold">Va Supermiya bilmingizga qilgan eng yaxshi sarmoyangiz bo`lishi uchun qo`limdan kelgan barcha narsani qilaman.</p>
        <p class="sub-text text-bold">O`quvchim bo`lib o`zimni isbotlashim uchun imkon berganingiz uchun chin qalbimdan minnatdorman.
    </div>
        <h1>SUPERMIYA GURUHLARIGA 24 SOAT ICHIDA QO`SHISHIMIZ UCHUN…</h1>
    <div class="white noalign">
        <p class="sub-text text-bold">1. Ro`yxatdan o`tayotganingizda qoldirgan instagram akkauntingiz orqali <span class="green underline"> supermiya10.0</span> yopiq instagram sahifamizga obuna bo`lishga so`rov jo`nating.</p>
        <p class="sub-text text-bold">2. Ro`yxatdan o`tayotganingizda qoldirgan telegramingizni guruhga qo`sha olishimiz uchun, guruhga qo`shish ruxsatini yoqib qo`ying. (ruxsatni yoqishni quyidagi videoda o`rganishingiz mumkin)</p>
    </div>

    <video class="video-phone" controls nodownload>
        <source src="{{URL::asset("video/Telegram username va ruxsat (720p with 47fps).mp4")}}" type="video/mp4">    
    </video>
    </section>
    @include('partials.footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
</html>