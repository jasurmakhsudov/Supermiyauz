<?php

namespace App\Exports;

use App\Models\Leeds;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class LeedsExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings,WithColumnFormatting
{
    use Exportable;
    
    public function collection()
    {
        return Leeds::all();
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->phone,
            $user->course,
            $user->created_at,
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
