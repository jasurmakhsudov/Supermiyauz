<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
// use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;


class UsersExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings,WithColumnFormatting
{
    use Exportable;
    
    public function collection()
    {
        return User::all();
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->phone,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Phone',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'C' => "############",
        ];
    }
}