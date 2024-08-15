@extends('layout.master')

@section('content')

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap" style="background-color: #F3F1EA">
            <div class="container">

                {{-- 錯誤訊息模板元件 --}}
                @include('component.errorMessage')

                <div class="row justify-content-center mb-5">

                    <div class="col-12 text-center">
                        <h3 class="h1 fw-bold mb-3">{{ $title }}</h3>
                        <p>點擊編輯、刪除可針對商品進行處理</p>
                    </div>
                    <div class="row justify-content-end mb-5">
                        <div class="col-auto">
                            <a href="/merchandise/create" class="btn btn-outline-success m-0">
                                <i class="fas fa-plus"></i> 新增商品
                            </a>
                        </div>
                    </div>

                    <div class="border rounded p-4 mb-4 h-shadow all-ts bg-white h-translatey-sm">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 5%;">編號</th>
                                        <th style="width: 15%;">商品名稱</th>
                                        <th style="width: 10%;">圖片</th>
                                        <th style="width: 10%;">狀態</th>
                                        <th style="width: 15%;">商品類型</th>
                                        <th style="width: 10%;">價格</th>
                                        <th style="width: 10%;">庫存數量</th>
                                        <th style="width: 15%;">產品說明</th>
                                        <th style="width: 5%;">編輯</th>
                                        <th style="width: 5%;">刪除</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($MerchandisePaginate as $Merchandise)
                                    <tr class="text-center" style="background-color: {{ $loop->even ? '#f9f9f9' : '#ffffff' }};">
                                        <td>{{ $Merchandise->id }}</td>
                                        <td>{{ $Merchandise->name }}</td>
                                        <td>
                                            @if ($Merchandise->photo)
                                                <img src="{{ $Merchandise->photo }}" alt="商品图片" width='100' height='100' class="img-thumbnail"/>
                                            @else
                                                <img src="default-image-path.jpg" alt="無圖片" width='100' height='100' class="img-thumbnail"/>
                                            @endif
                                        </td>
                                        <td>
                                            @if($Merchandise->status == 'S')
                                                <form action="{{ route('merchandise.updateStatus', $Merchandise->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-success btn-sm" style="font-size:15px;">銷售中</button>
                                                </form>
                                            @else
                                                <span class="badge bg-warning" style="font-size:15px;">編輯中</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($Merchandise->type == 'A商品')
                                                <span class="badge bg-info" style="font-size:15px;">超人氣排行榜</span>
                                            @elseif($Merchandise->type == 'B商品')
                                                <span class="badge bg-primary" style="font-size:15px;">2024中秋禮盒</span>
                                            @elseif($Merchandise->type == 'C商品')
                                                <span class="badge bg-success" style="font-size:15px;">涼到夏到 | 夏季新品兩件9折</span>
                                            @else
                                                <span class="badge bg-danger" style="font-size:15px;">熱銷優惠</span>
                                            @endif
                                        </td>
                                        <td>NT$ {{ $Merchandise->price }}</td>
                                        <td>{{ $Merchandise->remain_count }}</td>
                                        <td class="text-start">
                                            <span title="{{ $Merchandise->introduction }}">
                                                {{ \Illuminate\Support\Str::limit($Merchandise->introduction, 50) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="/merchandise/{{ $Merchandise->id }}/edit" class="btn btn-outline-primary btn-sm">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/merchandise/{{ $Merchandise->id }}/delete" class="btn btn-outline-danger btn-sm">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="row justify-content-center">
                    <div class="col-auto">
                        {{ $MerchandisePaginate->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #content end -->

</div><!-- #wrapper end -->

@endsection
