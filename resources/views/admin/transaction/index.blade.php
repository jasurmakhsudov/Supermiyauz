@extends('layouts.master')

@section('title', 'All Transactions Page')

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
    }
</style>
<div class="table-wrap">
    @include('partials.alerts')
    <h1>Transactions <span style="float: right"><a class="btn btn-primary"  href="{{route('admin.export.transactions')}}">Download Transactions</a></span></h1>   
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Card Number</th>
                <th>Card Expire</th>
                <th>Token</th>
                <th>Status</th>
                <th>Invoice Id</th>
                <th>Leed</th>
                <th>Referral</th>
                <th>Amount</th>
                <th>Course</th>
                <th>Date Created</th>
                <th>Date Paid</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <form action="{{route('admin.transaction.delete',['id'=>$transaction->id])}}" method="POST">
                    <td class="id">{{$transaction->id}}</td>
                    <td class="name">{{$transaction->name}}</td>
                    <td class="phone">{{$transaction->phone}}</td>
                    <td class="card_number">{{$transaction->card_number}}</td>
                    <td class="card_expire">{{$transaction->card_expire}}</td>
                    <td class="token">{{!empty($transaction->token)?"Yes":"No"}}</td>
                    <td class="status">{{$transaction->status}}</td>
                    <td class="invoice">{{$transaction->invoice_id}}</td>
                    <td class="leed">{{!empty($transaction->leed_id)?"Yes":"No"}}</td>
                    <td class="referral">{{$transaction->referral->name??''}} {{$transaction->referral->discount??'0'}}%</td>
                    <td class="amount">{{$transaction->amount??'0'}}so'm</td>
                    <td class="course">{{$transaction->course->title}} {{$transaction->course->price}}so'm</td>
                    <td class="created">{{date('Y/m/d H:i:s',$transaction->invoice_created_time/1000)}}</td>
                    <td class="paid">{{date("Y/m/d H:i:s",$transaction->invoice_pay_time/1000)}}</td>
                    <td>
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');" type="submit">Delete</button>
                    </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> 

<script>
    $(document).ready(function() {
          $('#dataTable').DataTable({
            "order": [ 12, "desc" ],
            "pageLength": 25
          });
    });
</script>

@endsection


