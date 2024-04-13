@extends('admini.Masteri')
@section('contents')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h5 class="mb-md text-success text-center">{{session('message')}}</h5>
            <div class="breadcrumb-title pe-3">Manage-products</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <h4 class="text-center">{{Session::get('message')}}</h4>

                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage-products</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Manage all products</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Category id</th>
                            <th>Company id</th>
                            <th>Subsidiary id</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Discount Percent</th>
                            <th>Discounted Price</th>
                            <th>Description</th>
                            <th>Product Area</th>
                            <th>image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; ?>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->company_id }}</td>
                                <td>{{ $product->subsidiary_id }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->discount_percent }}</td>
                                <td>{{ $product->discounted_price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->product_area }}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" style="height: 50px;width: 50px">
                                </td>
                                <td>{{$product->statusProduct==1?'Published':'Unpublished'}}</td>
                                <td>
                                    @if($product->statusProduct==1)
                                        <a href="{{route('status-product',['id'=>$product->id])}}" class="btn btn-success btn-xs" title="Unpublished"><i class="bi bi-arrow-down-square"></i></a>
                                    @else
                                        <a href="{{route('status-product',['id'=>$product->id])}}" class="btn btn-warning btn-xs" title="Published"><i class="bi bi-arrow-up-square"></i></a>
                                    @endif
                                    {{-- <a href="{{route('editCompany',['id'=>$product->id])}}" class="btn btn-info btn-xs" title="Edit"><i class="bi bi-pencil-square"></i></a>--}}
                                    <a href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger btn-xs" title="Delete" Onclick="return confirm('Do you want to delete this')"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <?php $i++?>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!--end page main-->
@endsection

