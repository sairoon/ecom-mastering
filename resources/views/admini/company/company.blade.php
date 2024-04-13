@extends('admini.masteri')
@section('contents')
        <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">All Companies</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">companies</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleDarkModal">Add company</button>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">companies</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Company Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1 ?>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$company->company_name}}</td>
                                    <td>{{$company->status2==1?'Published':'Unpublished'}}</td>
                                    <td>
                                        @if($company->status2==1)
                                            <a href="{{route('status2',['id'=>$company->id])}}" class="btn btn-success btn-xs" title="Unpublish"><i class="bi bi-arrow-down-square"></i></a>
                                        @else
                                            <a href="{{route('status2',['id'=>$company->id])}}" class="btn btn-warning btn-xs" title="Publish"><i class="bi bi-arrow-up-square"></i></a>
                                        @endif
                                        <a href="{{route('editCompany',['id'=>$company->id])}}" class="btn btn-info btn-xs" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{route('delete2',['id'=>$company->id])}}" class="btn btn-danger btn-xs" title="Delete" Onclick="return confirm('Do you want to delete this')"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <!-- Modal -->
                        <div class="modal fade" id="exampleDarkModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark">Add company Form</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <div class="row">
                                            <div class="col-xl-9 mx-auto">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="border p-4 rounded">
                                                            <form action="{{route('new-company')}}" method="post">
                                                                @csrf
                                                                <div class="row mb-3">
                                                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">company Name</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="inputEnterYourName" name="company_name" placeholder="Enter company Name">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 col-form-label"></label>
                                                                    <div class="col-sm-9">
                                                                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

@endsection
