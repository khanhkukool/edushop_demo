<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
//        session()->forget('cart');
//        echo "<pre>";
//        print_r(session()->all());
//        echo "</pre>";
//        die;
        return view('cart');
    }

    public function add(Request $request, $id)
    {
        $products = Products::find($id);

        $title = $products->title;
        $avatar = $products->avatar;
        $price = $products->price;
        $old_price = $products->old_price;
        $product_items = [
            'title' => $title,
            'avatar' => $avatar,
            'price' => $price,
            'old_price' => $old_price,
            'quality' => 1,
        ];
//        echo "<pre>";
//        print_r(session()->all());
//        echo "</pre>";
//        die;
        if (!session()->has('cart')) {
            session()->put("cart.$id", $product_items);
            session()->put("cart.total", $products['price']);
//            $_SESSION['cart'][$id] = $product_items;
//            $_SESSION['cart']['total'] = $products['price'];
        } else {

            if (array_key_exists($id, session()->get('cart'))) {
                //update lại số lượng của sản phẩm đã tồn tại
//                $quality = session()->get("cart.$id.quality");
//                var_dump($quality);
////                die();
//                session()->put("cart.$id.quality", ++$quality);
//                $_SESSION['cart'][$id]['quality']++;
                session()->put('error', 'Khóa học đã được đăng ký');
                return redirect('index');

            } //
            else {
//                $_SESSION['cart'][$id] = $product_items;
//                session([
//                    "cart.$id" => $product_items
//                ]);
                session()->put("cart.$id", $product_items);
            }

            //thực hiện tính toán lại tổng giá trị đơn hàng
//            bằng việc cộng dồn tổng giá trị đơn hàng cũ với giá
//            sản phẩm mới thêm
//            session_destroy();
            $cart_total = session()->get("cart.total");
//            $_SESSION['cart']['total'] += $products['price'];
            session()->put("cart.total", $cart_total + $products['price']);
        }

//        print_r($product_items);die();
        return redirect('cart');
    }

    public function delete($id){
        $cart = Products::findOrFail($id);
        session()->put("cart.$id")->delete();
        return redirect('cart');
    }
}
