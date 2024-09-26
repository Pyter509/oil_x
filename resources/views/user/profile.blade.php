@extends('user.sidebar')
@section('x-slot')

<div class="main_content_iner overly_inner">
    <div class="container-fluid p-0">

        <!-- Welcome Section -->
        <div class="row">
            <div class="col-12">
                <div class="main-title mb_30">
                    <h3 class="m-0" style="font-family: 'Roboto', sans-serif;">Welcome Back, Maria Pascle</h3>
                </div>
            </div>

            <!-- User Profile Card -->
            <div class="col-lg-6">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_body">
                        <div class="d-flex mb_30 border_bottom_1px pb-3">
                            <div class="flex-shrink-0">
                                <img class="me-3 rounded-circle" src="img/transfer/4.png" alt width="60" height="60">
                            </div>
                            <div class="flex-grow-1">
                                <span>Hello</span>
                                <h4 class="mb-2" style="font-family: 'Roboto', sans-serif;">Jiue Anderson</h4>
                                <p class="mb-1"><span><i class="fa fa-phone me-2 text-primary"></i></span> +1 235 5547</p>
                                <p class="mb-1"><span><i class="fa fa-envelope me-2 text-primary"></i></span>
                                    <a href="#" class="__cf_email__">[email&#160;protected]</a>
                                </p>
                            </div>
                        </div>
                        <ul class="card-profile__info">
                            <li>
                                <h5 class="me-4">Address</h5>
                                <span class="text-muted">House 14, Road 9, Gulshan, Dhaka</span>
                            </li>
                            <li class="mb-1">
                                <h5 class="me-4">Total Log</h5>
                                <span>103 Time (Today 5 Times)</span>
                            </li>
                            <li>
                                <h5 class="text-danger me-4">Last Log</h5>
                                <span class="text-danger">3 February, 2019, 10:00 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Withdraw Section -->
            <div class="col-lg-6">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="white_box_tittle">
                            <h4 style="font-family: 'Roboto', sans-serif;">Withdraw</h4>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="form-label">Amount</label>
                                <div class="common_input mb_20">
                                    <input type="text" placeholder="$500">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label">Bank</label>
                                <select class="nice_Select2 nice_Select_line wide mb_20">
                                    <option value="1">bank 0001</option>
                                    <option value="2">bank 0002</option>
                                    <option value="3">bank 0003</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <a href="#" class="btn_1 w-100">SEND</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
