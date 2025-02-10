<?php

namespace App\Services;

use App\Models\Category;
use App\Helper\BaseQuery;
use Illuminate\Support\Str;

class CategoryService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()
    {
        $this->_model = new Category();
    }


    public function index()
    {
        return $this->get_all($this->_model);
    }


    public function store($data)
    {
        $store = $this->_model::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name'])
        ]);

        return $store;
    }


    public function show($id)
    {
        return $this->get_by_id($this->_model, $id);
    }


    public function update($id, $data)
    {
        $update = $this->_model::findOrFail($id);

        $update->name = $data['name'];
        $update->slug = Str::slug($data['name']);
        $update->save();

        return $update;
    }

    public function updateSource($data)
    {
        $updateSource = $this->_model::findOrFail($data['category_id']);
        $updateSource->source = 'ai';
        $updateSource->save();

        return $updateSource;
    }


    public function destroy($id)
    {
        return $this->delete($this->_model, $id);
    }
}
