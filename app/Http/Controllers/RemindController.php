<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Remind;

class RemindController extends Controller
{
    // public function detail (Request $request)
    // {
    // 設定中
    // }
    
    public function add ()
    {
      return view('reminder.create');
    }
    
    
//     public function create(Request $request)
        // {
      
//       // Varidation
//       $this->validate($request, Remind::$rules);

//       $remind = new Remind;
//       $form = $request->all();

//       // フォームから画像が送信されてきたら保存、$remind->image_path に画像のパスを保存する
//       if (isset($form['image'])) {
//         $path = $request->file('image')->store('public/image');
//         $remind->image_path = basename($path);
//       } else {
//           $remind->image_path = null;
//       }

//       // フォームから送信されてきた_tokenを削除
//       unset($form['_token']);
//       // フォームから送信されてきたimageを削除
//       unset($form['image']);

//       // データベースに保存する
//       $remind->fill($form);
//       $remind->save();

//       return redirect('/create');
// }

}

