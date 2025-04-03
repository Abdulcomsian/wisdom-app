<?php

namespace App\Services;

use App\Models\Category;
use App\Helper\BaseQuery;
use App\Models\Testimonial;
use Illuminate\Support\Str;

class TestimonialService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()
    {
        $this->_model = new Testimonial();
    }


    public function store($data)
    {
        $store = $this->_model::create([
            'name' => $data['name'],
            'role' => $data['role'],
            'review' => $data['review'],
        ]);

        return $store;
    }


    public function update($id, $data)
    {
        $update = $this->_model::findOrFail($id);

        $update->name = $data['name'];
        $update->role = $data['role'];
        $update->review = $data['review'];
        $update->save();

        return $update;
    }


    public function destroy($id)
    {
        return $this->delete($this->_model, $id);
    }
}
