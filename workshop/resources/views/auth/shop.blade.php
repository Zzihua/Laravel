<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 


<section class="hero-section">
        <div class="container">
            <h1>商品</h1>
            <p>開始溝物吧~</p>
            <div class="search-box">
                <form action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="product-list">
        <div class="container">
            <div class="row">
                <!-- Replace with your dynamic product data -->
                <div class="col-md-3 product-item">
                    <div class="card">
                        <img src="{{asset('assets/images/愛戀巧克力.png')}}" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">愛戀巧克力蛋糕</h5>
                            <p class="card-text">產品介紹</p>
                            <a href="#" class="btn btn-primary">$550</a>
                        </div>
                    </div>
                </div>
                <!-- Add more products as needed -->
            </div>
        </div>
    </section>

@endsection  

