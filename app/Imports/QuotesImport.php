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

    protected $user_id;

    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    public function model(array $row)
    {
        info('data: ' . json_encode($row));

        if (empty($row['quotes'])) {
            return null;
        }

        return new Quote([
            'user_id' => $this->user_id,
            'quote' => $row['quotes'],
        ]);
    }


    public function chunkSize(): int
    {
        return 500;
    }
}
