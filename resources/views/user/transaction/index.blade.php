@extends('layouts.master')

@section('title', 'To\'lovlar tarixi')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<style>
    .table-wrap{
        overflow-x:scroll;
        width:100%;
        /* height:100vh; */
    }
</style>
<div class="table-wrap">
    @include('partials.alerts')
    <h1>To'lovlar tarixi</h1>
        <table class="table">
        <thead>
            <tr>
                <th>Ism</th>
                <th>Telefon</th>
                <th>Taklif qildi</th>
                <th>Karta raqami</th>
                <th>Muddati</th>
                <th>Kurs</th>
                <th>Summa</th>
                <th>To'langan sana</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transactions as $transaction)
            <tr>
                <td class="name">{{$transaction->name}}</td>
                <td class="phone">{{$transaction->phone}}</td>
                <td class="referral">{{$transaction->referral->name??""}}</td>
                <td class="card_number">{{$transaction->card_number}}</td>
                <td class="card_expire">{{$transaction->card_expire}}</td>
                <td class="course">{{$transaction->course->title}}</td>
                <td class="amount">{{$transaction->amount}} so'm</td>
                <td class="created">{{date('Y/m/d H:i:s',$transaction->invoice_created_time/1000)}}</td>
            </tr>
            @empty
                <td colspan="8" align="center">
                    Sizning to'lov tarixingiz topilmadi!
                </td>
            @endforelse
        </tbody>
    </table>
</div> 

<script>
    $(document).ready(function() {
          $('#dataTable').DataTable({
            "order": [[ 8, "desc" ]],
            "pageLength": 25
          });
    });
</script>

@endsection


