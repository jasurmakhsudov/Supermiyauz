<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class TransactionsExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings,WithColumnFormatting
{
    use Exportable;
    
    public function collection()
    {
        return Transaction::all();
    }

    public function map($transaction): array
    {
        return [
            $transaction->id,
            $transaction->name,
            $transaction->phone,
            $transaction->card_number,
            $transaction->card_expire,
            $transaction->amount??'0',
            $transaction->status,
            $transaction->invoice_id,
            $transaction->leed_id??'',
            $transaction->referral->name??'',
            $transaction->referral->discount??'0',
            $transaction->course->title??'',
            date("Y/m/d H:i:s",$transaction->invoice_created_time/1000),
            date("Y/m/d H:i:s",$transaction->invoice_pay_time/1000),
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Phone',
            'Card Number',
            'Card Expire',
            'Amount',
            'Status',
            'Invoice Id',
            'Leed Id',
            'Referral',
            'Discount',
            'Course',
            'Date Created',
            'Date Paid',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'C' => "############",
            'D' => "################",
            'E' => "####",
            'L' => "m/d/yyyy h:mm",
            'M' => "m/d/yyyy h:mm",
        ];
    }
}
