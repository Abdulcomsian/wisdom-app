<?php

namespace App\Services;

use App\Models\Quote;
use App\Models\Category;
use App\Helper\BaseQuery;
use App\Imports\QuotesImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
            $type = $data['quote_type'];
            $category = Category::findOrFail($id);
            $category->source = $type;
            $category->save();

            if (isset($data['custom_excel'])) {
                $file = $data['custom_excel'];
                Excel::queueImport(new QuotesImport($id), $file);
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
            Log::info('Error Occured: ' . $e->getMessage());
            DB::rollBack();
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
