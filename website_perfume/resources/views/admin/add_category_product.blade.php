@extends('admin_layout');
@section('admin_content');
<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">THÊM SẢN PHẨM MỚI</h3></div>
                                    <div class="card-body">
                                       
                                        <form action="{{URL::to('/LuuSP')}}"method="post">
                                            {{csrf_field()}} 
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Tên Sản phẩm</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Nhập mã sản phẩm" name="category_product_name" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputDescribe">Mô tả sản phẩm</label>
                                                <textarea style ="resize:none;size:5 "class="form-control py-4"id ="category_product_describe"></textarea></div>

                                               
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                               
                                                <button class="btn btn-primary" type="submit">Thêm mới</button>
                                            </div>
                                        </form>
                                    </div>                                   
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               @endsection;