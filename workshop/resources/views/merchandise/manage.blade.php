<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 


<div class="container">
        <h1>{{ $title }}</h1>

        {{-- 錯誤訊息模板元件 --}}
        @include('component.loginAlert')

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>商品id</th>
                        <th>商品名稱</th>
                        <th>圖片</th>
                        <th>介紹</th>
                        <th>價格</th>
                        <th>庫存</th>
                        <th>編輯</th>
                    </tr>
                    @foreach($MerchandisePaginate as $Merchandise)
                        <tr>
                            <td> {{ $Merchandise->id }}</td>
                            <td> {{ $Merchandise->name }}</td>
                            <td>
                                <img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                            </td>
                            <td>
                                @if($Merchandise->status == 'C')
                                    <span class="label label-default">
                                        建立中
                                    </span>
                                @else
                                    <span class="label label-success">
                                        銷售中
                                    </span>
                                @endif
                            </td>
                            <td> {{ $Merchandise->price }}</td>
                            <td> {{ $Merchandise->remain_count }}</td>
                            <td>
                                <a href="/merchandise/{{ $Merchandise->id }}/edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{-- 分頁頁數按鈕 --}}
                {{ $MerchandisePaginate->links() }}
            </div>
        </div>
    </div>
@endsection