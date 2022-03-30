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

class PaidLeedsExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings,WithColumnFormatting
{
    use Exportable;
    public function collection()
    {
        return Transaction::whereNotNull('leed_id')->whereNotNull('invoice_pay_time')->get()->unique('leed_id');
    }

    public function map($transaction): array
    {
        return [
            $transaction->leed->id,
            $transaction->leed->name,
            $transaction->leed->phone,
            $transaction->leed->course,
            $transaction->leed->created_at,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Phone',
            'Course',
            'Date',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'C' => "############",
            'E' => "m/d/yyyy h:mm",
        ];
    }
}
