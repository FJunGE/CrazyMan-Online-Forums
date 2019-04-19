<?php
namespace App\Handlers;

use Illuminate\Support\Str;

class ImageUploadHandler
{
    protected $allowed_ext = ['jpeg', 'jpg', 'png'];

    public function save($file, $folder, $file_prefix)
    {
        // 获取图片后缀，从剪贴板粘贴过来，后缀可能会为空，后缀需要一直保存
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'jpg';
        if (!in_array($extension,$this->allowed_ext)){
            return false;
        }

        // 构建存储结构路径
        $folder_name = "uploads/images/$folder" . date('Ym/d');

        // 文件具体物理地址路径
        $upload_path = public_path() . '/' .$folder_name;

        // 拼接图像名
        $filename = $file_prefix . '_' . time() . '_' . Str::random(10) . '.' . $extension;

        // 移动图像，并更改图像名
        $file->move($upload_path, $filename);

        return [
            'path' => '/'. $folder_name . '/' . $filename
        ];
    }
}