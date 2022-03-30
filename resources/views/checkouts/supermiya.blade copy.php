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
                <input type="text" name="phone" id="phone" pattern="[0-9()#&+*-=.]+" placeholder="+998 99 1234567" value="{{$phone?$phone:""}}">
                
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
                <div class="" style="border: 2px dashed red; background-color:rgb(252, 248, 227);padding:10px;">
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
                </div>
                <script>
                  function toggleOrderBump(course_id,title,price)
                  {
                    function newElement() {
                      var li = document.createElement("li");
                      var inputValue = document.getElementById("myInput").value;
                      var t = document.createTextNode(inputValue);
                      li.appendChild(t);
                      if (inputValue === '') {
                        alert("You must write something!");
                      } else {
                        document.getElementById("myUL").appendChild(li);
                      }
                      document.getElementById("myInput").value = "";

                      var span = document.createElement("SPAN");
                      var txt = document.createTextNode("\u00D7");
                      span.className = "close";
                      span.appendChild(txt);
                      li.appendChild(span);

                      for (i = 0; i < close.length; i++) {
                        close[i].onclick = function() {
                          var div = this.parentElement;
                          div.style.display = "none";
                        }
                      }
                    }
                    if (document.getElementById('extra_course').checked)
                    {
                      var order_widget = document.getElementById('order-summary-widget');
                      var i;
                      for (i = 0; i < order_widget.length; i++) {
                        var span = document.createElement("SPAN");
                        var txt = document.createTextNode("\u00D7");
                        span.className = "close";
                        span.appendChild(txt);
                        order_widget[i].appendChild(span);
                      }

                        var order_widget = document.getElementById('order-summary-widget');
                        var product_item = document.createElement('div');
                            product_item.classList.add('product-item');
                            // product_item.value = title;
                        var product_label = document.createElement('div');
                            product_label.classList.add('product-label');
                            product_label.innerHTML = title;
                        var product_price = document.createElement('div');
                            product_price.classList.add('product-price');
                            product_price.innerHTML = price;
                        
                            // product_item.innerHTML = data;
                            product_item.appendChild(product_label);
                            product_item.appendChild(product_price);
                            order_widget.appendChild(product_item);
                    } else {
                        // calculate();
                    }
                  }
                </script>
                <style>
                  #order-summary-widget{
                    /* border: 1px solid white; */
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
                          <span class="product-item-name">{{$course->title}}</span>
                        </div>
                        <div class="product-price">
                          <span class="unit-amount">{{$course->price}}</span> so'm
                        </div>
                      </div>
                      
                    {{-- </div> --}}
                    {{-- <div id="summary-totals" class="box">
                    <div class="invoice-item subtotal-row ng-hide" ng-show="checkoutContext.order.invoice.subtotal !== checkoutContext.order.invoice.total">
                    <div class="invoice-label-col">
                    <span class="invoice-item-label">Subtotal:</span>
                    </div>
                    <div class="invoice-amount-col float-right text-right">
                    <span class="invoice-item-amount ng-binding">$7.00</span>
                    </div>
                    </div>
                    <div class="invoice-item tax-row ng-hide" ng-show="checkoutContext.order.invoice.tax !== 0">
                    <div class="invoice-label-col">
                    <span class="invoice-item-label">Tax:</span>
                    </div>
                    <div class="invoice-amount-col float-right text-right">
                    <span class="invoice-item-amount ng-binding">$0.00</span>
                    </div>
                    </div>
                    <div class="invoice-item shipping-row ng-hide" ng-show="checkoutContext.order.invoice.shipping !== 0">
                    <div class="invoice-label-col">
                    <span class="invoice-item-label">Shipping:</span>
                    </div>
                    <div class="invoice-amount-col float-right text-right">
                    <span class="invoice-item-amount ng-binding">$0.00</span>
                    </div>
                    </div>
                    <div class="invoice-item discount-row ng-hide" ng-show="checkoutContext.order.invoice.discount !== 0">
                    <div class="invoice-label-col">
                    <span class="invoice-item-label">Discounts:</span>
                    </div>
                    <div class="invoice-amount-col float-right text-right">
                    <span class="invoice-item-amount ng-binding">-$0.00</span>
                    </div>
                    </div> --}}
                    <br>
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
                        width: 70%;
                        height: 50px;
                        font-size: 30px;
                    }
                    #timer{
                        width: 21%;
                        height: 50px;
                        font-size: 30px;
                    }
                  </style>
                
                
                <div id="Payme" class="w3-container pay-type">
                    {{-- <form id="form" action="" method="post"> --}}
                        <div class="step1">
                            <input type="hidden" id="id" name="id" value="{{uniqid()}}">
                            <input type="text" id="card_number" placeholder="8600 1234 1234 1234" name="number" value="8600490468491923">
                            <input class="expiration" type="text" id="card_expire" placeholder="00/99" name="card_expire" value="0726">
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
                            <style>
.page--popup{
  /* position: fixed;s */
  /* width: 100%; */
  /* max-width: 400px; */
  padding: 48px 30px;
  background-color: #fff;
  border-radius: 5px;
  margin: 7px;
  /* top: 50%; */
  /* left: 50%; */
  /* transform: translate3d(-50%,-50%,0); */
  text-align: center;
  transition: 0.3s all ease;
  }
  .popup--title{
    color: #4994FC;
    font-weight: bold;
    line-height: 32px;
    margin-top: 0;
    margin-bottom: 8px;
    }
  .popup--subtitle{
    color: #4994FC;
    line-height: 24px;
    margin-top: 0;
    margin-bottom: 24px;
    }
  .popup--note{
    font-size: 12px;
    line-height: 18px;
  }    
  a.btn.button{
    display: inline-block;
    line-height: 40px;
    height: 40px;
    text-transform: none;
    font-weight: normal;
    }
    .payment-success-popup{
        display: none;
    }
                            </style>
                            <div class="payment-success-popup page--popup" id="payment-success">
                                <svg width="64px" height="64px" viewBox="0 0 64 64">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Get-Started" transform="translate(-688.000000, -621.000000)">
                                            <g id="Group-11" transform="translate(470.000000, 573.000000)">
                                                <g id="Group-2" transform="translate(218.000000, 48.000000)">
                                                    <path d="M54.625,9.375 C48.374968,3.124968 40.833376,0 32,0 C23.166624,0 15.625032,3.124968 9.375,9.375 C3.1249688,15.625032 0,23.166624 0,32 C0,40.833376 3.1249688,48.374968 9.375,54.625 C15.625032,60.8750312 23.166624,64 32,64 C40.833376,64 48.374968,60.8750312 54.625,54.625 C60.875032,48.374968 64,40.833376 64,32 C64,23.166624 60.875032,15.625032 54.625,9.375 Z M51.75,51.875 C46.333304,57.2916936 39.770872,60 32.062496,60 C24.354128,60 17.750024,57.2708608 12.25,51.812496 C6.7499728,46.354136 4,39.75004 4,32 C4,24.24996 6.7499728,17.645864 12.25,12.187504 C17.750024,6.729136 24.354128,4 32.062496,4 C39.770872,4 46.354136,6.729136 51.812496,12.187504 C57.270864,17.645864 60,24.24996 60,32 C60,39.75004 57.250024,46.374976 51.75,51.875 Z" id="Page-1" fill="#ECF6FF"></path>
                                                    <path d="M47.25,21 C47.083336,20.25 46.687504,19.666672 46.062496,19.25 C45.437496,18.833328 44.75,18.708336 44,18.875 C43.25,19.041664 42.625,19.458328 42.125,20.125 L28.625,40.75 L22.25,34.75 C21.666664,34.25 20.979168,34 20.187504,34 C19.395832,34 18.75,34.291664 18.25,34.875 C17.75,35.458336 17.520832,36.145832 17.562496,36.937504 C17.604168,37.729168 17.875,38.375 18.375,38.875 L27.375,47.125 C27.375,47.125 27.395832,47.145832 27.437504,47.187504 C27.479168,47.229168 27.520832,47.270832 27.562496,47.312496 C27.604168,47.354168 27.625,47.375 27.625,47.375 C27.708336,47.375 27.791664,47.395832 27.875,47.437504 C27.958336,47.479168 28,47.5 28,47.5 C28.25,47.583336 28.416664,47.666664 28.5,47.75 C28.666664,47.75 28.833336,47.75 29,47.75 C29.25,47.833336 29.458336,47.833336 29.625,47.75 C29.708336,47.75 29.791664,47.75 29.875,47.75 C30.208336,47.666664 30.5,47.541664 30.75,47.375 C30.75,47.375 30.791664,47.333336 30.875,47.25 C31.125,47.083336 31.270832,46.979168 31.312496,46.937504 C31.354168,46.895832 31.395832,46.833336 31.437504,46.75 C31.479168,46.666664 31.5,46.625 31.5,46.625 L46.875,23.125 C47.291672,22.458328 47.416664,21.75 47.25,21 Z" id="Path" fill="#7ED321"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <h2 class="popup--title">To'lovingiz uchun raxmat!</h2>
                                <p class="popup--subtitle">To'lovingiz muvaffaqiyatli yakunlandi.</p>
                                <p class="popup--note">You will receive an email to comfirm your order shortly.</p>
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

                    <script>
                        const source = document.getElementById('referral');
                        const price = '{{$course->price}}';
                        const inputHandler = function(e) {
                            //  if(source.value.length==9||source.value.length==12)
                            {
                                var url = "{{route('check.referral')}}";
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", url);
                                xhr.setRequestHeader("Accept", "application/json");
                                xhr.setRequestHeader("Content-Type", "application/json");
                                xhr.setRequestHeader("X-CSRF-TOKEN", "{{csrf_token()}}");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4) {
                                        var json = JSON.parse(xhr.responseText);
                                        if(json.name){
                                            document.getElementById('referral').style.border="3px solid green";
                                            document.getElementById('discount').value=json.discount;
                                            document.getElementById('discount-text').innerHTML="Sizga  " + document.getElementById('amount').value +" - "+json.discount+"% = ";
                                            document.getElementById('amount').value=document.getElementById('amount').value.split(',').join('')*(100-json.discount)/100;
                                            document.getElementById('discount-text').innerHTML+=document.getElementById('amount').value + " so'm chegirma belgilandi!";
                                            sessionStorage.setItem('referral', source.value);
                                            sessionStorage.setItem('discount', json.discount);
                                        }
                                        else{
                                            document.getElementById('referral').style.border="none";
                                            document.getElementById('amount').value=price;
                                            document.getElementById('discount-text').innerHTML="";
                                            sessionStorage.removeItem('referral');
                                            sessionStorage.removeItem('discount');
                                        }
                                    }
                                }

                                var data = `{
                                    "code": "${source.value}"
                                }`;
                                console.log(data);
                                xhr.send(data);
                            }
                        };

                        // source.addEventListener('input', inputHandler);
                        // source.addEventListener('propertychange', inputHandler); 

                        
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
                                            document.getElementById('amount').value=document.getElementById('amount').value.split(',').join('')*(100-data.discount)/100;
                                            document.getElementById('discount-text').innerHTML+=document.getElementById('amount').value + " so'm chegirma belgilandi!";
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
                      // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $("#step1").click(function(e){
                            e.preventDefault();
                            
                            // var name = document.getElementById("name").value;
                            // var phone = document.getElementById("phone").value;
                            // var leed_id = document.getElementById("leed_id").value;  
                            // var card_number = document.getElementById("card_number").value;
                            // var expire = document.getElementById("card_expire").value;
                            // var validation = document.getElementById("validation").value;

                            $.ajax({
                                /* the route pointing to the post function */
                                type: 'POST',
                                url: '{{route('transaction.create')}}',
                                /* send the csrf-token and the input to the controller */
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
                                    // alert();
                                    return;
                                  }
                                  // console.log(data);
                                  // var validation = document.querySelectorAll("#validation")[1];
                                  // validation.style.display = "block";
                                  // validation.style.backgroundColor = "#aaa";
                                  // validation.value = "Mavjud karta";
                                  document.querySelectorAll(".step1")[0].style.display = "none";
                                  document.querySelectorAll(".step3")[0].style.display = "block";
                                  // var elements = document.querySelectorAll(".step1");
                                  // for(var i=0; i<elements.length; i++){
                                  //     elements[i].style.display = "none";
                                  // }
                                  // var elements = document.querySelectorAll(".step2");
                                  // for(var i=0; i<elements.length; i++){
                                  //     elements[i].style.display = "block";
                                  // }
                                  // document.getElementById("number").value=data.result.phone;
                                  // document.getElementById("expire").value=json.result.card.expire;
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

                    $("#step2").click(function(){
                        var url = "{{route('transaction.create')}}";

                        // var url = "https://checkout.paycom.uz/api";
                        var number = document.getElementById("card_number").value;
                        var expire = document.getElementById("card_expire").value;
                        var validation = document.getElementById("validation").value;
                        
                        var id = document.getElementById("id").value;
                        
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", url);
                        // xhr.setRequestHeader("Accept", "application/json");
                        // xhr.setRequestHeader("X-Auth", "61407fc428b8a10c3657ba9d");
                        // xhr.setRequestHeader("Content-Type", "application/json");
                  
                        xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4) {
                            console.log(xhr.responseText);
                            var json = JSON.parse(xhr.responseText);
                            console.log(xhr.responseText);
                            if("error" in json){
                                var validation = document.querySelectorAll("#validation")[0];
                                validation.style.display = "block";
                                if(!json.error.message.localeCompare("Invalid Params."))
                                    validation.value = "Xato ma'lumot kiritildi!";
                                else if(!json.error.message.localeCompare("Неверный номер карты"))
                                    validation.value = "Xato karta raqami kiritildi!";
                                else{
                                    validation.value = json.error.message;
                                }
                            //   console.log(json.error.message);
                              return;
                            }
                            var validation = document.querySelectorAll("#validation")[1];
                            validation.style.display = "block";
                            validation.style.backgroundColor = "#aaa";
                            validation.value = "Mavjud karta";
                            document.querySelectorAll(".step1")[0].style.display = "none";
                            document.querySelectorAll(".step3")[0].style.display = "block";
                            // var elements = document.querySelectorAll(".step1");
                            // for(var i=0; i<elements.length; i++){
                            //     elements[i].style.display = "none";
                            // }
                            // var elements = document.querySelectorAll(".step2");
                            // for(var i=0; i<elements.length; i++){
                            //     elements[i].style.display = "block";
                            // }
                            document.getElementById("number").value=json.result.card.number;
                            document.getElementById("expire").value=json.result.card.expire;
                            document.getElementById("token").value=json.result.card.token;
                            step2();
                        }};
                  
                        var data = `{
                            "id": "${id}",
                            "method": "cards.create",
                            "params": {
                              "card": { "number": "${number}", "expire": "${expire}"},
                              "save": true
                            }
                        }`;
                        xhr.send("sd");
                  
                      });
                  
                  
                  
                    //   $("#step2").click(function(){
                    //     step2();
                    //   });
                  
                      function step2(){
                        var url = "https://checkout.paycom.uz/api";
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", url);
                        xhr.setRequestHeader("Accept", "application/json");
                        xhr.setRequestHeader("X-Auth", "61407fc428b8a10c3657ba9d");
                        xhr.setRequestHeader("Content-Type", "application/json");
                  
                        xhr.onreadystatechange = function () {
                          if (xhr.readyState === 4) {
                            console.log(xhr.responseText);
                              var json = JSON.parse(xhr.responseText);
                            //   if("error" in json){
                            //     var validation = document.querySelectorAll("#validation")[1];
                            //     validation.style.display = "block";
                            //     // alert(json.error.message);
                            //     return;
                            //   }
                            //   var elements = document.querySelectorAll(".step2");
                            //   for(var i=0; i<elements.length; i++){
                            //     elements[i].style.display = "none";
                            //   }
                            //   var elements = document.querySelectorAll(".step3");
                            //   for(var i=0; i<elements.length; i++){
                            //       elements[i].style.display = "block";
                            //   }
                            //   document.querySelectorAll(".step2")[0].style.display = "none";
                              document.querySelectorAll(".step3")[0].style.display = "block";
                              document.querySelectorAll("#validation")[2].style.display="none";
                              document.getElementById("payme-phone").value=json.result.phone;
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
                              //console.log(json);
                          }};
                          var id = document.getElementById("id").value;
                          var token = document.getElementById("token").value;
                          var data = `{
                              "id": "${id}",
                              "method": "cards.get_verify_code",
                              "params": {
                                "token": "${token}"
                              }
                          }`;
                          xhr.send(data);
                      
                      }

                      $("#step3").click(function(e){
                            e.preventDefault();
                            
                            var id = document.getElementById("id").value;
                            var code = document.getElementById("code").value;
                            var referral = document.getElementById("referral").value;
                            // var data = `{
                            //     "id": "${id}",
                            //     "method": "cards.verify",
                            //     "params": {
                            //       "token": "${token}",
                            //       "code": "${code}"
                            //     }
                            // }`;
                            // console.log(id);
                            // console.log(code);
                            $.ajax({
                                /* the route pointing to the post function */
                                type: 'POST',   
                                url: '{{route('transaction.verify')}}',
                                /* send the csrf-token and the input to the controller */
                                data:{id:id, code:code, referral:referral},
                                success:function(data){
                                  if(data=="success"){
                                    // console.log(data);
                                    document.querySelectorAll(".step3")[0].style.display = "none";
                                    window.location.href = "{{route('checkout.index',['course'=>'blackcube','name'=>$name,'phone'=>$phone,'leed_id'=>$leed_id])}}";
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
                      
                      $("#step4").click(function(){
                        var url = "https://checkout.paycom.uz/api";
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", url);
                        xhr.setRequestHeader("Accept", "application/json");
                        xhr.setRequestHeader("X-Auth", "61407fc428b8a10c3657ba9d");
                        xhr.setRequestHeader("Content-Type", "application/json");
                  
                        xhr.onreadystatechange = function () {
                          if (xhr.readyState === 4) {
                              console.log(xhr.responseText);
                              var json = JSON.parse(xhr.responseText);
                              if("error" in json){
                                var validation = document.querySelectorAll("#validation")[2];
                                validation.style.display = "block";
                                validation.value = json.error.message;
                                if(!json.error.message.localeCompare("Invalid Params."))
                                    validation.value = "Xato kod kiritildi!";
                                else if(!json.error.message.localeCompare("Введен неверный код."))
                                    validation.value = "Xato kod kiritildi!";
                                else if(!json.error.message.localeCompare("Количество попыток ввода кода превышено. Запросите новый код."))
                                    validation.value = "Takrorlanishlar soni tugadi! Qaytadan urinib ko'ring!";
                                else if(!json.error.message.localeCompare("Время жизни кода истекло. Запросите новый код."))
                                    validation.value = "Takrorlanishlar soni tugadi! Qaytadan urinib ko'ring!";
                                else{
                                    validation.value = json.error.message;
                                }
                                // alert(json.error.message);
                                return;
                              }
                            //   var elements = document.querySelectorAll(".step3");
                            //   for(var i=0; i<elements.length; i++){
                            //     elements[i].style.display = "none";
                            //   }
                            //   var elements = document.querySelectorAll(".step4");
                            //   for(var i=0; i<elements.length; i++){
                            //       elements[i].style.display = "block";
                            //   }
                              document.querySelectorAll(".step3")[0].style.display = "none";
                            //   document.querySelectorAll(".step5")[0].style.display = "block";
                              step4();
                              //console.log(json);
                          }};
                          var id = document.getElementById("id").value;
                          var token = document.getElementById("token").value;
                          var code = document.getElementById("code").value;
                          var data = `{
                              "id": "${id}",
                              "method": "cards.verify",
                              "params": {
                                "token": "${token}",
                                "code": "${code}"
                              }
                          }`;
                          xhr.send(data);
                      });
                      
                    //   $("#step4").click(function(){
                        
                    //   });   
                  
                      function step4(){
                        var url = "https://checkout.paycom.uz/api";
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", url);
                        xhr.setRequestHeader("Accept", "application/json");
                        xhr.setRequestHeader("X-Auth", "61407fc428b8a10c3657ba9d:aNph025NFrMewSccnVZHmxwFCVxgHg#y12HU");
                        xhr.setRequestHeader("Content-Type", "application/json");
                  
                        xhr.onreadystatechange = function () {
                          if (xhr.readyState === 4) {
                              console.log(xhr.responseText);
                              var json = JSON.parse(xhr.responseText);
                            //   if("error" in json){
                            //     var validation = document.querySelectorAll("#validation")[3];
                            //     validation.style.display = "block";
                            //     validation.value = json.error.message;
                            //     // alert(json.error.message);
                            //     return;
                            //   }
                            //   var elements = document.querySelectorAll(".step4");
                            //   for(var i=0; i<elements.length; i++){
                            //     elements[i].style.display = "none";
                            //   }
                            //   var elements = document.querySelectorAll(".step5");
                            //   for(var i=0; i<elements.length; i++){
                            //       elements[i].style.display = "block";
                            //   }
                            //   document.querySelectorAll(".step4")[0].style.display = "none";
                            //   document.querySelectorAll(".step5")[0].style.display = "block";
                              document.getElementById("invoice_id").value=json.result.receipt._id;
                              document.getElementById("receipt_id").innerHTML=json.result.receipt._id;
                              document.getElementById("organization").innerHTML=json.result.receipt.merchant.organization;
                              step5();
                              //console.log(json);
                          }};
                          var id = document.getElementById("id").value;
                          var token = document.getElementById("token").value;
                          var amount = document.getElementById("amount").value.split(',').join('');
                          var discount = document.getElementById("discount").value;
                          if(discount!=''){
                              console.log("discount");
                          }
                          var data = `{
                              "id": "${id}",
                              "method": "receipts.create",
                              "params": {
                                "amount": ${amount}00,
                                "description": "{{$course->title}}",
                                "account": {
                                    "order_id": 106
                                }
                              }
                          }`;
                          console.log(data);
                          xhr.send(data);
                      }
                  
                    //   $("#step5").click(function(){ 
                        function step5(){
                        var url = "https://checkout.paycom.uz/api";
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", url);
                        xhr.setRequestHeader("Accept", "application/json");
                        xhr.setRequestHeader("X-Auth", "61407fc428b8a10c3657ba9d:aNph025NFrMewSccnVZHmxwFCVxgHg#y12HU");
                        xhr.setRequestHeader("Content-Type", "application/json");
                        
                        xhr.onreadystatechange = function () {
                          if (xhr.readyState === 4) {
                              console.log(xhr.responseText);
                              var json = JSON.parse(xhr.responseText);
                              if("error" in json){
                                var validation = document.querySelectorAll("#validation")[5];
                                validation.style.display = "block";
                                if(!json.error.message.localeCompare("Invalid Params."))
                                    validation.value = "Xatolik yuz berdi!";
                                else if(!json.error.message.localeCompare("Недостаточно средств на карте")){
                                    validation.value = "Hisobingizda mablag' yetarli emas!";
                                    document.querySelectorAll(".step6")[0].style.display = "block";
                                    //  
                                }
                                else if(!json.error.message.localeCompare("Карта не найдена."))
                                    validation.value = "Karta topilmadi!";
                                else{
                                    validation.value = json.error.message;
                                }
                                // alert(json.error.message);
                                return;
                              }
                  
                                document.getElementById("state").value=json.result.receipt.state;
                                if(json.result.receipt.state==4){
                                // var elements = document.querySelectorAll(".step5");
                                // for(var i=0; i<elements.length; i++){
                                //   elements[i].style.display = "none";
                                // }
                                // document.querySelectorAll(".step5")[0].style.display = "none";
                                // document.querySelectorAll(".payment-success-popup")[0].style.display = "block";
                                send(json);
                              }
                              // var json = JSON.parse(xhr.responseText);
                              // for(var i=0; i<elements.length; i++){
                              //     elements[i].style.display = "inline-block";
                              // }
                              //console.log(json);
                            //   alert("success");
                            
                           
                                
                          }};
                  
                          // var check_id = document.getElementById("invoice_id").value=json.result.receipt._id;
                          var id = document.getElementById("id").value;
                          var invoice_id = document.getElementById("invoice_id").value;
                          var token = document.getElementById("token").value;
                          
                          var data = `{
                              "id": "${id}",
                              "method": "receipts.pay",
                              "params": {
                                  "id": "${invoice_id}",
                                  "token": "${token}",
                                  "payer": {
                                      
                                  }
                              }
                          }`;
                          
                          xhr.send(data);
                      };

                      function send(info){  
                        var url = "{{route('transaction.store')}}";
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", url);
                        xhr.setRequestHeader("Accept", "application/json");
                        xhr.setRequestHeader("Content-Type", "application/json");
                        xhr.setRequestHeader("X-CSRF-TOKEN", "{{csrf_token()}}");
                        xhr.onreadystatechange = function () {
                          if (xhr.readyState === 4) {
                              console.log(xhr.responseText);
                            
                              var json = JSON.parse(xhr.responseText);
                            //   window.setTimeout(() => {  
                            sessionStorage.setItem('paytoken', document.getElementById("token").value);
                            window.location.href = "{{route('checkout.index',['course'=>'blackcube','name'=>$name,'phone'=>$phone,'leed_id'=>$leed_id])}}";
                            //   }, 3000);
                          }};       
                  
                          var id = document.getElementById("id").value;
                          var invoice_id = document.getElementById("invoice_id").value;
                          var token = document.getElementById("token").value;
                          var name = document.getElementById("name").value;
                          var phone = document.getElementById("phone").value;
                          var leed_id = document.getElementById("leed_id").value;
                          var referral = document.getElementById("referral").value;
                          var number = document.getElementById("card_number").value;
                          var expire = document.getElementById("card_expire").value;
                        //   console.error(expire);
                          var data = `{
                              "id": "${id}",
                              "token": "${token}",    
                              "invoice_id":"${invoice_id}", 
                              "name":"${name}",
                              "phone":"${phone}",
                              "leed_id":"${leed_id}",
                              "referral":"${referral}",
                              "card_number":"${number}",
                              "expire":"${expire}",
                              "course_id":"{{$course->id}}",
                              "method": "receipts.pay",
                              "amount": "${info.result.receipt.amount}",
                              "created_time": "${info.result.receipt.create_time}",
                              "pay_time": "${info.result.receipt.pay_time}"
                          }`;
                        //   $.ajax({
                        //     /* the route pointing to the post function */
                        //     url: '{{route('transaction.store')}}',
                        //     type: 'POST',
                        //     /* send the csrf-token and the input to the controller */
                        //     data: {_token: "{{csrf_token()}}", message:"asd"},
                        //     dataType: 'JSON',
                        //     /* remind that 'data' is the response of the AjaxController */
                        //     success: function (data) { 
                        //         console.log(data.msg); 
                        //     }
                        //   }); 
                          console.error(data);
                          xhr.send(data);
                      }

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
                <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}">
                
                {{-- <input type="submit" value="RO'YXATDAN O'TISH"> --}}
                <p class="sub-text white text-bold"><span class="symbol text-bold">*</span>Ro`yxatdan o`tish tugmachasini bosganingizdan so`ng keyingi sahifasiga yo`naltirilasiz. Bu internetingiz tezligiga qarab ba`zida 30 soniyagacha borishi mumkin.</p>
                
            </form>
                
                
                <div id="popup"><iframe id="popupiframe"></iframe></div>
                <div id="popupdarkbg"></div>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
            <script>

                // var verify = document.getElementById('verify');
                // var iframe = document.getElementById("invoice");
                // verify.addEventListener("click", function() {
                //     console.log(iframe.contentWindow.document.getElementsByClassName('description')[0].innerHTML);
                //     if(iframe.contentWindow.document.querySelector('.info_').children[2]){
                        
                //     }else{console.log("false");}
                // });
                
                // document.querySelector('.confirm-box').children[2].children[0].onclick = function hello() {
                //     alert('Hello');
                // };
                
                var phone = document.getElementsByName("phone").value;
                
                var leed_id = document.getElementById('leed_id').value;
                var course_id = document.getElementById('course_id').value;
                
                // var redirectUrl = document.getElementById('redirectUrl').value;
                
                var course = document.getElementById('course').value;
                var amount = document.getElementById('amount').value;
                
                var encrypted;
//U2FsdGVkX18ZUVvShFSES21qHsQEqZXMxQ9zgHy+bu0=

                // document.getElementById("link").onclick = function(e) {
                //         e.preventDefault();
                //         name = document.getElementById("name").value;
                //         // console.log(name);
                //         phone = document.getElementById("phone").value;
                //         referral = document.getElementById('referral').value?document.getElementById('referral').value:"null";
                //         encrypted = CryptoJS.MD5(amount);
                //         // redirectUrl = redirectUrl+"/"+course+"/"+name+"/"+phone+"/"+encrypted;
                //         // redirectUrl = redirectUrl;
                //         console.log(redirectUrl);
                //         // console.log(phone);
                //         document.getElementById("popupdarkbg").style.display = "block";
                //         document.getElementById("popup").style.display = "block";
                //         if(!document.getElementById('popupiframe').src){
                //             document.getElementById('popupiframe').src="https://oplata.kapitalbank.uz?cash=e46c15bde03346a3ba14dbb6f47f7423&description=Supermiya%20kursi&amount="+amount+"&redirectUrl="+redirectUrl+"&name="+name+"&phone="+phone+"&referral="+referral+"&leed_id="+leed_id+"&course_id="+course_id+"&URL=supermozg.uz/checkout";
                //         }
                //         document.getElementById('popupdarkbg').onclick = function() {
                //             document.getElementById("popup").style.display = "none";
                //             document.getElementById("popupdarkbg").style.display = "none";
                //         };
                //     return false;
                // }   

                window.onkeydown = function(e) {
                    if (e.keyCode == 27) {
                    document.getElementById("popup").style.display = "none";
                    document.getElementById("popupdarkbg").style.display = "none";
                    e.preventDefault();
                    return;
                    }
                }
            </script>
            <style>
                #popup { display: none; position: fixed; top: 12%; 
                    right:50%; 
    margin-right:-250px; 
    width:500px;
                    height: 75%; background-color: white; z-index: 10; }
                #popup iframe { width: 500px; margin: 0px auto; height: 100%; border: 0; }
                #popupdarkbg { position: fixed; z-index: 5; left: 0; top: 0; width: 100%; height: 100%; overflow: hidden; background-color: rgba(0,0,0,.75); display: none; }
            </style>
    </section>
    @include('partials.footer')
</body>
<script>

// document.getElementsByClassName('success_')[0].innerHTML //Платеж успешно проведен
// document.getElementsByClassName('description')[0].innerHTML//Supermiya kursi

// document.getElementsByClassName('details-child-text')[0].innerHTML //Пункт обслуживания
// document.getElementsByClassName('details-child-text')[1].innerHTML //90490021563

// document.getElementsByClassName('details-child-text')[2].innerHTML //Терминал
// document.getElementsByClassName('details-child-text')[3].innerHTML //91103270

// document.getElementsByClassName('details-child-text')[4].innerHTML //Номер транзакции
// document.getElementsByClassName('details-child-text')[5].innerHTML //012191173205

// document.getElementsByClassName('details-child-text')[6].innerHTML //Время оплаты
// document.getElementsByClassName('details-child-text')[7].innerHTML //27.08.2021 16:36:38

// document.getElementsByClassName('details-child-text')[8].innerHTML //Карта
// document.getElementsByClassName('details-child-text')[9].innerHTML //8600 49** **** 1923

// document.getElementsByClassName('details-child-text')[10].innerHTML //Сумма платежа
// document.getElementsByClassName('details-child-text')[11].innerHTML //1,000.00 сум



</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
</html>