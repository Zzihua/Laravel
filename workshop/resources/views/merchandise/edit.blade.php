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
                <form action="/merchandise/{{ $Merchandise->id }}"
                      method="post"
                      enctype="multipart/form-data"
                >
                    {{-- 隱藏方法欄位 --}}
                    {{ method_field('PUT') }}


					<div class="col-12">
						<div class="card bg-light">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6 form-group">
										<label for="type"><b>狀態欄</b><small class="text-danger">*</small></label>
										<select class="form-control"
												name="status"
												id="status"
										>
											<option value="C"
													@if(old('status', $Merchandise->status)=='C') selected @endif
											>
												建立中
											</option>
											<option value="S"
													@if(old('status', $Merchandise->status)=='S') selected @endif
											>
											銷售中
											</option>
										</select>
									</div>
									<div class="col-md-6 form-group">
										<label for="name"><b>商品名稱</b><small class="text-danger">*</small></label>
										<input type="text"
											class="form-control"
											id="name"
											name="name"
											placeholder="{{ trans('shop.merchandise.fields.name') }}"
											value="{{ old('name', $Merchandise->name) }}"
										>
									</div>
									<div class="col-6 form-group">
										<label for="name_en"><b>商品英文名稱</b><small class="text-danger">*</small></label>
										<input type="text"
											class="form-control"
											id="name_en"
											name="name_en"
											placeholder="{{ trans('shop.merchandise.fields.name-en') }}"
											value="{{ old('name_en', $Merchandise->name_en) }}"
										>
									</div>
									<div class="col-6 form-group">
										<label for="introduction"><b>介紹</b><small class="text-danger">*</small></label>
										<input type="text"
											class="form-control"
											id="introduction"
											name="introduction"
											placeholder="介紹"
											value="{{ old('introduction', $Merchandise->introduction) }}"
										>
									</div>
									<div class="col-6 form-group">
										<label for="introduction_en"><b>英文介紹</b><small class="text-danger">*</small></label>
										<input type="text"
											class="form-control"
											id="introduction_en"
											name="introduction_en"
											placeholder="英文介紹"
											value="{{ old('introduction_en', $Merchandise->introduction_en) }}"
										>
									</div>
									<div class="col-6 form-group">
										<label for="photo"><b>商品照片</b><small class="text-danger">*</small></label>
										<input type="file"
											class="form-control"
											id="photo"
											name="photo"
											placeholder="商品照片"
										>
										<img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
									</div>
									<div class="col-6 form-group">
										<label for="price"><b>價格</b><small class="text-danger">*</small></label>
										<input type="text"
											class="form-control"
											id="price"
											name="price"
											placeholder="價格"
											value="{{ old('price', $Merchandise->price) }}"
										>
									</div>
									<div class="col-6 form-group">
										<label for="remain_count"><b>庫存</b><small class="text-danger">*</small></label>
										<input type="text"
											class="form-control"
											id="remain_count"
											name="remain_count"
											placeholder="庫存"
											value="{{ old('remain_count', $Merchandise->remain_count) }}"
										>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <!-- <div class="form-group">
                        <label for="type">狀態欄</label>
                        <select class="form-control"
                                name="status"
                                id="status"
                        >
                            <option value="C"
                                    @if(old('status', $Merchandise->status)=='C') selected @endif
                            >
                                建立中
                            </option>
                            <option value="S"
                                    @if(old('status', $Merchandise->status)=='S') selected @endif
                            >
                               銷售中
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">商品名稱</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               placeholder="{{ trans('shop.merchandise.fields.name') }}"
                               value="{{ old('name', $Merchandise->name) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="name_en">商品英文名稱</label>
                        <input type="text"
                               class="form-control"
                               id="name_en"
                               name="name_en"
                               placeholder="{{ trans('shop.merchandise.fields.name-en') }}"
                               value="{{ old('name_en', $Merchandise->name_en) }}"
                        >
                    </div> -->
                    <!-- <div class="form-group">
                        <label for="introduction">介紹</label>
                        <input type="text"
                               class="form-control"
                               id="introduction"
                               name="introduction"
                               placeholder="介紹"
                               value="{{ old('introduction', $Merchandise->introduction) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="introduction_en">英文介紹</label>
                        <input type="text"
                               class="form-control"
                               id="introduction_en"
                               name="introduction_en"
                               placeholder="英文介紹"
                               value="{{ old('introduction_en', $Merchandise->introduction_en) }}"
                        >
                    </div> -->
                    <!-- <div class="form-group">
                        <label for="photo">商品照片</label>
                        <input type="file"
                               class="form-control"
                               id="photo"
                               name="photo"
                               placeholder="商品照片"
                        >
                        <img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                    </div>

                    <div class="form-group">
                        <label for="price">價格</label>
                        <input type="text"
                               class="form-control"
                               id="price"
                               name="price"
                               placeholder="價格"
                               value="{{ old('price', $Merchandise->price) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="remain_count">庫存</label>
                        <input type="text"
                               class="form-control"
                               id="remain_count"
                               name="remain_count"
                               placeholder="庫存"
                               value="{{ old('remain_count', $Merchandise->remain_count) }}"
                        >
                    </div> -->
					<div class="input-group mx-auto">
						<button type="button" id="calories-trigger" class="btn btn-secondary">取消</button>
						<button type="submit" name="fitness-form-submit" class="btn btn-success ms-2">更新</button>
					</div>
                    <!-- <button type="button" id="calories-trigger" class="btn btn-secondary">取消</button>
					<button type="submit" name="fitness-form-submit" class="btn btn-success ms-2">更新</button> -->
                    {{-- CSRF 欄位--}}
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection