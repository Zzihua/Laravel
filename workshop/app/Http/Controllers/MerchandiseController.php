<?php

namespace App\Http\Controllers;
use App\Shop\Entity\Merchandise;
use Validator;
use Image;

use App\Http\Controllers\Controller;

class MerchandiseController extends Controller
{
    // public function MerchandiseItemPage($merchandise_id)
    // {
    //     return view( 'merchandise.create');
    // }

    public function MerchandiseCreate(){
        
        // 建立商品基本資訊
        $merchandise_data = [
            'status'          => 'C',   // 建立中
            'name'            => '',    // 商品名稱
            'name_en'         => '',    // 商品英文名稱
            'introduction'    => '',    // 商品介紹
            'introduction_en' => '',    // 商品英文介紹
            'photo'           => null,  // 商品照片
            'price'           => 0,     // 價格
            'remain_count'    => 0,     // 商品剩餘數量
        ];
        $Merchandise = Merchandise::create($merchandise_data);
        // dd($Merchandise);
        
        // 重新導向至商品編輯頁
        return redirect('/merchandise/' . $Merchandise->id . '/edit');
    }

    public function MerchandiseEdit($merchandise_id){

        $Merchandise = Merchandise::where('id', $merchandise_id)->First();
        // dd($Merchandise);s
        $binding = [
            'title' => '編輯商品',
            'Merchandise'=> $Merchandise,
        ];

        return view('merchandise.edit',$binding);
      
    }

    public function MerchandiseEditProcess($merchandise_id)
    {
        // 撈取商品資料
        $Merchandise = Merchandise::findOrFail($merchandise_id);
        // 接收輸入資料
        $input = request()->all();
        // dd($input);
        
        
    
        // // 驗證資料
        // $validator = Validator::make($input, $rules);
    
        // if ($validator->fails()) {
        //     // 資料驗證錯誤
        //     return redirect('/merchandise/' . $Merchandise->id . '/edit')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        
        
        if (isset($input['photo'])){
            // 有上傳圖片
            $photo = $input['photo'];
            // 檔案副檔名
            $file_extension = $photo->getClientOriginalExtension();
            // 產生自訂隨機檔案名稱
            $file_name = uniqid() . '.' . $file_extension;
            // 檔案相對路徑
            $file_relative_path = 'assets/images/merchandise/' . $file_name;
            // 檔案存放目錄為對外公開 public 目錄下的相對位置
            $file_path = public_path($file_relative_path);
            // 裁切圖片
            $photo->move($file_path, $file_name);
            // 設定圖片檔案相對位置
            $input['photo'] = $file_relative_path;
        }
    
        // 商品資料更新
        $Merchandise->update($input);
        
        // 重新導向到商品編輯頁
        return redirect('/merchandise/' . $Merchandise->id . '/edit');
    }

    // 商品管理清單檢視
    public function merchandiseManage()
    {
        // 每頁資料量
        $row_per_page = 10;
        // 撈取商品分頁資料
        $MerchandisePaginate = Merchandise::OrderBy('created_at', 'desc')
            ->paginate($row_per_page);
    
        // 設定商品圖片網址
        foreach ($MerchandisePaginate as &$Merchandise) {
            if (!is_null($Merchandise->photo)) {
                // 設定商品照片網址
                $Merchandise->photo = url($Merchandise->photo);
            }
        }
        
        $binding = [
            'title' => trans('shop.merchandise.manage'),
            'MerchandisePaginate'=> $MerchandisePaginate,
        ];
        
        return view('merchandise.manageMerchandise', $binding);
    }
}
