<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Product;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $productIds = Product::pluck('id')->take(3); // Lấy 3 sản phẩm đầu tiên (bạn có thể sửa)

        foreach ($productIds as $productId) {
            Comment::create([
                'product_id' => $productId,
                'guest_name' => 'Nguyễn Văn A',
                'content' => 'Sản phẩm mã ' . $productId . ' dùng rất tốt!',
                'status' => 1,
            ]);

            Comment::create([
                'product_id' => $productId,
                'guest_name' => 'Lê Thị B',
                'content' => 'Sản phẩm mã ' . $productId . ' giao nhanh, đáng tiền.',
                'status' => 1,
            ]);
        }

        // Tạo thêm 1 bình luận bị ẩn để test
        Comment::create([
            'product_id' => $productIds[0] ?? 1,
            'guest_name' => 'Ẩn danh',
            'content' => 'Không nên hiển thị bình luận này.',
            'status' => 0,
        ]);
    }
}
