<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:3|unique:products',
            'cate_id' => 'required'
        ];
    }
    public  function  messages()
    {
       return [
         'name.required'=>'Bạn chưa nhập tên sản phẩm',
         'name.max'=>'Tên không vượt quá 255 ký tự',
         'name.min'=>'Tên không ngắn hơn 3 ký tự',
           'name.unique' => 'Tên sản phẩm đã tồn tại',
           'cate_id.required' => 'Bạn chưa chọn danh mục sản phẩm'
       ];
    }
}
