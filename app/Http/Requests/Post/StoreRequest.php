<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "categories_id" => "required",
            "title" => "required|max:255",
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            "content" => "required",
            "views" => "required|min:1",
        ];
    }

    public function messages(): array
    {
        return [
            "categories_id.required" => "Danh mục bài viết là bắt buộc",
            "title.required" => "Tiêu đề bài viết không được để trống!",
            "title.max" => "Tiêu đề bài viết không được quá 255 ký tự!",
            'img.required' => 'Vui lòng chọn một hình ảnh.',
            'img.image' => 'File tải lên phải là một hình ảnh.',
            'img.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg hoặc gif.',
            'img.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            "content.required" => "Nội dung bài viết không được để trống",
            "views.required" => "Lượt xem bài viết không được để trống",
            "views.min" => "Lượt xem bài viết phải >= 1",


        ];
    }
}
