@extends('layouts.master')

@section('title', 'Kursni Sotib Olish')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style>
/* .flex-container{        
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin:0px 10px;
}

.flex-child{
    width: 400px;
    margin: 30px 0px;
    border: 5px solid #3ca9e2;
    border-radius: 50px;
    text-align: center;
    height: 100%;
} */

/* @if($token)
       #Payme{
           display: none;
       } 
@else
    #step4{
           display: none;
       }
@endif */


.container{
  padding: 10px !important;
}

#payme-phone, #timer{
  font-size: inherit !important;
}

</style>


<div class="container">
    <h1 class="text-center"><img style="border-radius: 50px" class="border border-secondary" width="100" src="{{URL::asset($course->photo)}}" id="output"/></h1>
    <h1 class="text-center">{{$course->title}}</h1>
    <p class="text-center">{!!$course->definition!!}</p>    
        
        <input type="text" class="form-control col-sm-4 mx-auto" id="amount" value="{{$course->price}}" disabled>
        
        <div id="accordion">
          <div class="card col-sm-4 mx-auto p-0">
            <div class="" id="headingOne">
                <button class="btn btn-light w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Voucher
                </button>
            </div>
            <div id="collapseOne" class="collapse p-1" aria-labelledby="headingOne" data-parent="#accordion">
                <input type="text" class="form-control m-0" name="referral" id="referral" placeholder="Kim taklif qildi?">
                <input type="hidden" id="discount" value="" disabled>
                <label class="d-block mx-auto text-center" id="discount-text" style="color: red !important"></label>
                <input class="form-control btn-success col-sm-6 mx-auto" id="referral_check" type="button" name="referral" id="referral" value="Tekshirish">
            </div>
          </div>
        </div>

        <div id="Payme" class="w3-container pay-type">
            <div class="step1">
              <input type="hidden" id="id" name="id" value="{{uniqid()}}">
              <div class="col-sm-4 mx-auto d-flex p-0">
                <input type="text" class="form-control w-auto" id="card_number" placeholder="8600 1234 1234 1234" name="number" value="">
                <input class="expiration form-control" type="text" id="card_expire" placeholder="00/99" name="expire" value="">
              </div>
              {{-- <input type="hidden" id="token" name="token"> --}}
              <input type="text" class="form-control col-sm-4 mx-auto" id="validation" name="validation" disabled>
              <p align="center">
                  <input type="button" id="step1" class="form-control col-sm-2 btn btn-success" name="step1" value="Davom etish">
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
                <div class="col-sm-4 mx-auto d-flex p-0">
                  <input type="phone" class="form-control" name="" id="payme-phone" disabled>
                  <input type="number" class="form-control" name="" id="timer" disabled>
                </div>
                  <input type="text" class="form-control col-sm-4 mx-auto" name="" placeholder="Tasdiqlash kodini kiriting" id="code">
                  <input type="text" class="form-control col-sm-4 mx-auto" id="validation" name="validation" disabled>
                <p align="center">
                    <input type="button" class="form-control col-sm-2 btn btn-danger" class="retry" name="retry" value="Orqaga">
                    <input type="button" class="form-control col-sm-2 btn btn-success" id="step3" name="step3" value="Kodni tasdiqlash">
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

        {{-- <center>
            <input type="button" class="retry btn btn-danger" id="step4" name="step4" value="Sotib olish ">
        </center> --}}
    

        <script>
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
                              document.getElementById('referral_check').style.display = "none";
                              document.getElementById('referral_check').disabled = true;
                              document.getElementById('discount').value=data.discount;
                              document.getElementById('discount-text').innerHTML="Sizga " + document.getElementById('amount').value +" - "+data.discount+"% = ";
                              // document.getElementById('product-amount').innerHTML=document.getElementById('amount').value +" - "+data.discount+"% = ";
                              document.getElementById('amount').value=document.getElementById('amount').value.split(',').join('')*(100-data.discount)/100;
                              document.getElementById('discount-text').innerHTML+=document.getElementById('amount').value + " so'm chegirma belgilandi!";
                              // document.getElementById('product-amount').innerHTML+=document.getElementById('amount').value;  
                              // document.getElementById('total').innerHTML=document.getElementById('amount').value;
                              
                              // sessionStorage.setItem('referral', source.value);
                              // sessionStorage.setItem('discount', json.discount);
                          }
                          else{
                              // document.getElementById('referral').style.border="none";
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
                                    // name: document.getElementById("name").value,
                                    // phone: document.getElementById("phone").value,
                                    // leed_id: document.getElementById("leed_id").value,
                                    card_number: document.getElementById("card_number").value, 
                                    card_expire: document.getElementById("card_expire").value,
                                    course_id:{{$course->id}},
                                  },
                                success:function(data){
                                  console.log(data);
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
                                  if(data=="success"){
                                    // console.log(data);
                                    document.querySelectorAll(".step3")[0].style.display = "none";
                                    window.location.href = "{{route('user.course.index')}}";
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
          /* height:30px; */
          /* width:180px; */
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
          width:72px;
        }
        /* input[type=button]{
            height: 50px;
            cursor: pointer;
            margin: 0px auto;
            color: #FFF;
            background-color: #41d151d1;
        }
        input[type=button]:hover{
            background-color: #67a06c;
        } */
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
            width: 23%;
            height: 50px;
            font-size: 30px;
        }
      </style>

      
      <script></script>
            



        {{-- <label for="invoice">To`lovingiz chekini kiriting <span class="symbol">*</span></label>
        <input type="file" name="invoice" id="invoice"> --}}

        <input type="hidden" name="leed_id" id="leed_id" value="">
        <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}">
        

    {{-- <div class="flex-container"> --}}
</div>

@endsection