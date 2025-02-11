<?php

namespace App\Services;

use App\Models\Quote;
use App\Models\Category;
use App\Helper\BaseQuery;
use App\Imports\QuotesImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class QuoteService
{
    use BaseQuery;

    private $_model = null;


    public function __construct()
    {
        $this->_model = new Quote();
    }


    public function index()
    {
        return $this->get_all($this->_model);
    }


    public function storeCustomQuote($data, $id)
    {
        DB::beginTransaction();

        try {
            // Update category source type
            $type = $data['quote_type'];
            $category = Category::findOrFail($id);
            $category->source = $type;
            $category->save();

            // Process Excel File if uploaded
            if (isset($data['custom_excel'])) {
                $file = $data['custom_excel'];
                Excel::import(new QuotesImport($id), $file);
            }

            // Save custom quote if provided
            // if (isset($data['custom_quote'])) {
            //     $exists = $this->_model::where('category_id', $id)
            //         ->where('quote', $data['custom_quote'])
            //         ->exists();

            //     if ($exists) {
            //         return null;
            //     }

            //     $this->_model::create([
            //         'category_id' => $id,
            //         'quote' => $data['custom_quote'],
            //     ]);
            // }

            DB::commit(); // Commit the transaction
            return true;
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack(); // Rollback in case of an error
            return false;
        }
    }


    public function show($id)
    {
        return $this->get_by_id($this->_model, $id);
    }


    public function update($id, $data)
    {
        return $this->get_by_id($this->_model, $id)->update($data);
    }


    public function destroy($id)
    {
        return $this->delete($this->_model, $id);
    }
}
