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
        <h1 class="top">8.464.000 SO`M TEJAB QOLISH UCHUN HOZIROQ RO`YXATDAN O`TING</h1>
        
            <h1 class="relative">
                <div class="strike strike1"></div>
                <div class="strike strike2"></div>
                9,655,000 So`m
            </h1>

            <p class="text-price">
                <span class="price">{{$course->price}} SO`M</span>
            </p>
            <p>
                <svg width="100px" height="100px" viewBox="0 0 262.000000 268.000000" preserveAspectRatio="xMidYMid meet">
               <g transform="translate(0.000000,268.000000) scale(0.100000,-0.100000)" fill="#E73A04" stroke="none">
               <path d="M1210 2611 c-57 -9 -85 -24 -108 -58 -16 -25 -17 -90 -22 -893 l-5
               -865 -165 170 c-189 195 -355 368 -455 472 -82 87 -134 112 -194 95 -54 -17
               -207 -176 -216 -226 -18 -91 -39 -65 563 -670 306 -307 579 -576 605 -597 42
               -33 56 -39 97 -39 41 0 55 6 97 39 26 21 298 290 604 597 597 599 579 577 564
               666 -6 34 -22 57 -93 130 -101 105 -136 121 -205 94 -29 -11 -67 -40 -112 -89
               -100 -104 -266 -277 -455 -472 l-165 -170 -5 865 c-5 805 -6 868 -23 893 -9
               15 -30 33 -46 42 -34 17 -194 27 -261 16z"></path>
               </g>
               </svg>
            </p>

            <form action="{{route('checkout.create')}}" class="registration" enctype="multipart/form-data" method="POST">
                <label for="name">Ism-familiyangiz <span class="symbol">*</span></label>
                <input type="text" name="name" id="name" placeholder="Dovranbek Turdiev" value="{{$name?$name:""}}">
                @csrf
                <label for="phone">Telefon raqamingiz <span class="symbol">*</span></label>
                <input type="text" name="phone" id="phone" pattern="[0-9()#&+*-=.]+" onkeypress="javascript:return isPhone(event)" placeholder="998991234567" value="{{$phone?$phone:""}}">
                
                <input type="hidden" id="course" value="{{$course->title}}"/>
                
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
                        width: 67%;
                        height: 50px;
                        font-size: 30px;
                    }
                    #timer{
                        width: 23%;
                        height: 50px;
                        font-size: 30px;
                    }
                  </style>
                
                
                <div id="Payme" class="w3-container pay-type">
                    {{-- <form id="form" action="" method="post"> --}}
                        <div class="step1">
                            <input type="hidden" id="id" name="id" value="{{uniqid()}}">
                            <input type="text" id="card_number" placeholder="8600 1234 1234 1234" name="number" value="">
                            <input class="expiration" type="text" id="card_expire" placeholder="00/99" name="expire" value="">
                            <input type="hidden" id="token" name="token">
                            <input type="text" id="validation" name="validation" disabled>
                            <p align="center">
                                <input type="button" id="step1" name="step1" value="Davom etish">
                            </p>
                        </div>
                        <div class="step2">
                            <input type="text" id="number" name="number" disabled>
                            <input type="text" id="expire" name="expire" disabled>
                            <input type="hidden" id="token" name="token">
                            <input type="text" id="validation" name="validation" disabled>
                            <p align="center">
                                <input type="button" class="retry" name="retry" value="Orqaga">
                                <input type="button" id="step2" name="step2" value="Davom etish">
                            </p>
                        </div>
                        <div class="step3">
                            <input type="phone" name="" id="payme-phone" disabled>
                            <input type="number" name="" id="timer" disabled>
                            <input type="text" name="" placeholder="Tasdiqlash kodini kiriting" id="code">
                            <input type="text" id="validation" name="validation" disabled>
                            <p align="center">
                                <input type="button" class="retry" name="retry" value="Orqaga">
                                <input type="button" id="step3" name="step3" value="Kodni tasdiqlash">
                            </p>
                        </div>
                        <div class="step4">
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
                            <input type="text" id="validation" name="validation" disabled>
                            {{-- <p align="center">
                                <input type="button" id="retry" name="retry" value="Orqaga">
                                <input type="button" id="step5" name="step5" value="To'lash">
                            </p> --}}
                        </div>
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
                    function payment(type) {
                      var i;
                      var x = document.getElementsByClassName("pay-type");
                      for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                      }
                      document.getElementById(type).style.display = "block";  
                    }
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
                                            
                                            // sessionStorage.setItem('referral', source.value);
                                            // sessionStorage.setItem('discount', json.discount);
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
                                  if("error" in data){
                                    var validation = document.querySelectorAll("#validation")[0];
                                    validation.style.display = "block";
                                    validation.value = data.error;
                                    return;
                                  }
                                  // console.log(data);

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
                                  console.log(data=="sucess");
                                  if(data=="success"){
                                    // console.log(data);
                                    document.querySelectorAll(".step3")[0].style.display = "none";
                                    window.location.href = "{{route('checkout.index',['course'=>'blackcube','name'=>$name,'phone'=>$phone,'leed_id'=>$leed_id])}}";
                                    window.location.assign("{{route('checkout.index',['course'=>'blackcube','name'=>$name,'phone'=>$phone,'leed_id'=>$leed_id])}}");
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
                            document.querySelectorAll(".step5")[0].style.display = "none";
                            document.querySelectorAll(".step4")[0].style.display = "none";
                            document.querySelectorAll(".step3")[0].style.display = "none";
                            document.querySelectorAll(".step2")[0].style.display = "none";
                            document.querySelectorAll(".step1")[0].style.display = "block";
                            document.getElementById("card_number").value="";
                            document.getElementById("card_expire").value="";
                            // document.querySelectorAll(".payment-success-popup")[0].style.display = "block";
                      });
                  </script>

                {{-- <label for="invoice">To`lovingiz chekini kiriting <span class="symbol">*</span></label>
                <input type="file" name="invoice" id="invoice"> --}}

                <input type="hidden" name="leed_id" id="leed_id" value="{{$leed_id?$leed_id:"null"}}">
                {{-- <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}"> --}}
                
                {{-- <input type="submit" value="RO'YXATDAN O'TISH"> --}}
                <p class="sub-text white text-bold"><span class="symbol text-bold">*</span>Ro`yxatdan o`tish tugmachasini bosganingizdan so`ng keyingi sahifasiga yo`naltirilasiz. Bu internetingiz tezligiga qarab ba`zida 30 soniyagacha borishi mumkin.</p>
                
            </form>
                
    </section>
    @include('partials.footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
</html>