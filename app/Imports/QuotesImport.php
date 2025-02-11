<?php

namespace App\Imports;

use App\Models\Quote;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class QuotesImport implements ToModel
{
    use Importable;
    protected $category_id;

    public function __construct($category_id)
    {
        $this->category_id = $category_id;
    }

    public function model(array $row)
    {
        static $isFirstRow = true;

        if ($isFirstRow) {
            $isFirstRow = false;
            return null;
        }

        $exists = Quote::where('category_id', $this->category_id)
            ->where('quote', $row[0])
            ->exists();

        if ($exists) {
            return null;
        }

        return new Quote([
            'category_id' => $this->category_id,
            'quote' => $row[0],
        ]);
    }
}
