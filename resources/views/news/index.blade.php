@extends('layout')
<link rel="stylesheet" href="{{ asset('assets/css/news/index.css') }}">
@section('content')
    <div class="news">
        <div class="news-decs">
            <div class="decs-intro">
                <div class="intro-card">
                    <div class="card-body card-text">
                        <h1 class="card-title">Ưu đãi cực sốc</h1>
                        <h3 class="card-text">Tặng Voucher trị giá 200k khi mua đơn hàng từ 1 triệu đồng</h3>
                        <h2 class="card-text"><small class="text-muted">Thời hạn chỉ còn ... ngày</small></h2>
                    </div>

                </div>
                <div class="intro-button">
                    <button type="button" class="button btn-primary" disabled>Kiến thức</button>
                    <button type="button" class="button btn-secondary" disabled>Xu hướng </button>
                    <button type="button" class="button btn-outline-primary" disabled>Sale-Off</button>
                    <button type="button" class="button btn-outline-secondary" disabled>Blog</button>

                </div>
            </div>
            <div class="news-content">
                <div class="main-content">
                    <div class="content-hot">
                        <div class="card" style="width: 16rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">GenZ</h5>
                                <p class="card-text">Khám phá gu thời trang năng động của thế hệ GenZ.</p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Xem thêm</a>

                            </div>
                        </div>
                        <div class="card" style="width: 16rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Outfits</h5>
                                <p class="card-text">Những Outfits không thể thiếu trong tủ đồ của bạn</p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Xem thêm</a>

                            </div>
                        </div>
                        <div class="card" style="width: 16rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unisex</h5>
                                <p class="card-text">Phá cách thu hút mọi ánh nhìn cùng với phong cách
                                    Unisex phi giới tính </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link">Xem thêm</a>

                            </div>
                        </div>

                    </div>
                    <div class="content-hot">
                        <div class="card" style="width: 16rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blog</h5>
                                <p class="card-text">Kiến thức thời trang</br>
                                    xu hướng thời trang</p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Xem thêm</a>

                            </div>
                        </div>
                        <div class="card" style="width: 16rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the
                                    card's content.</p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Xem thêm</a>

                            </div>
                        </div>
                        <div class="card" style="width: 16rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the
                                    card's content.</p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Xem thêm</a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="content-extra">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Free Shipping</h5>
                                    <p class="card-text">Với chi tiêu ₱0 phút, người dùng được giảm giá lên đến ₱80
                                    </p>
                                    <p class="card-text"><small class="text-muted">có hiệu lực đến : 18.02.2023</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">

                                    <p class="card-text">Có giá trị trong 90 ngày kể từ ngày cấp.
                                    </p>
                                    <p class="card-text"><small class="text-muted">có hiệu lực đến : 18.02.2023</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">

                                    <p class="card-text">Có giá trị trên các cửa hàng Mall, Preferred,Crossborder,Priority
                                        và Managed
                                    </p>
                                    <p class="card-text"><small class="text-muted">có hiệu lực đến : 18.02.2023</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    @endsection
