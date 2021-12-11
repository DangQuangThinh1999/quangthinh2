 @extends('admin_layout');
@section('admin_content');
     <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DANH SÁCH NHÂN VIÊN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{URL::to('admin/')}}">Trang chủ Admin</a></li>
                            <li class="breadcrumb-item active">Thống kê nhân viên</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Thống kê danh sách nhân viên của cửa hàng                             
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Thống kê danh sách nhân viên
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Mô tả sản phẩm</th>
                                              </tr>
                                        </thead>
                                   
                                        <tbody>
                                            @foreach($view_category_product as $key => $cate_pro)
                                            <tr>
                                                <td>{{$cate_pro->category_id}}</td>
                                                <td>{{$cate_pro->category_name}}</td>
                                                <td>{{$cate_pro->category_describe}}</td>
                                                <td>
                                                    <a href="{{URL::to('SuaSP/'.$cate_pro->category_id)}}">Sửa</a>
                                                    <a href="{{URL::to('XoaP/'.$cate_pro->category_id)}}">Xóa  </a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               @endsection