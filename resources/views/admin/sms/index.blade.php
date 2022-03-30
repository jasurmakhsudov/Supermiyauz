@extends('layouts.master')

@section('title', 'All Sms Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
    @include('partials.alerts')
    <h1>Sms <span style="float: right"><a class="btn btn-success" href="{{route('admin.sms.create')}}">Send message</a></span></h1>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Phone</th>
                <th>Operator</th>
                <th>Country</th>
                <th>Message</th>
                <th>Status</th>
                <th>Date</th>
                <th>Resend</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{dd($messages)}} --}}
            @foreach ($messages as $rows)
                @foreach ($rows as $message)
            <tr>
                <form action="{{route('admin.sms.send')}}" method="POST">
                    @csrf
                    <th class="id align-middle">{{$message->id}}</th>
                    <td class="to align-middle" name="phone" id="phone">{{$message->to}}</td>
                    <td class="operator align-middle text-center">{{$message->operator}}</td>
                    <td class="country_code align-middle text-center">{{$message->country_code}}</td>
                    <td class="message align-middle" name="message" id="message">{{$message->content}}</td>
                    <td class="status align-middle 
                        @if($message->status=="UNDELIV")
                            btn-danger
                        @elseif($message->status=="DELIVRD")
                            btn-success
                        @elseif($message->status=="TRANSMTD")
                            btn-warning
                        @elseif($message->status=="REJECTD")
                            btn-danger
                        @else
                            btn-secondary
                        @endif
                        ">
                        @if($message->status=="UNDELIV")
                            Yetkazilmadi
                        @elseif($message->status=="DELIVRD")
                            Yetkazildi
                        @elseif($message->status=="TRANSMTD")
                            Uzatildi
                        @elseif($message->status=="REJECTD")
                            Bekor qilindi
                        @else
                            Unknown
                        @endif
                    </td>
                    <td class="date align-middle">{{$message->created_at}}</td>
                    <td class="resend align-middle"> <input class="btn btn-secondary" type="submit" value="Resend"></td>
                </form>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</div> 

<script>
    $(document).ready(function() {
          $('#dataTable').DataTable({
            "order": [[ 6, "desc" ]]
          });
    });
</script>

@endsection


