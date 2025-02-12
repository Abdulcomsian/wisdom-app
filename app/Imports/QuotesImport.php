<?php

namespace App\Imports;

use App\Models\Quote;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\Importable;

class QuotesImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    use Importable;

    protected $category_id;

    public function __construct($category_id)
    {
        $this->category_id = $category_id;
    }

    public function model(array $row)
    {
        info('data: ' . json_encode($row));

        // Ensure the 'quotes' field is not null or empty
        if (empty($row['quotes'])) {
            // Skip this row if the 'quotes' value is null or empty
            return null;
        }

        $exists = Quote::where('category_id', $this->category_id)
            ->where('quote', $row['quotes'])
            ->exists();

        // If the quote already exists, return null to skip this row
        if ($exists) {
            return null;
        }

        return new Quote([
            'category_id' => $this->category_id,
            'quote' => $row['quotes'],
        ]);
    }


    public function chunkSize(): int
    {
        return 500;
    }
}
