@extends('admini.masteri')
@section('contents')
    <main class="page-content">

        <hr/>
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name:</label>
                                    <div class="col-sm-9">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Please Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Company Name:</label>
                                    <div class="col-sm-9">
                                        <select name="company_id" id="" class="form-control">
                                            <option value="">Please Select Company</option>
                                            @foreach($companies as $company)
                                                <option value="{{$company->id}}">{{$company->company_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Subsidiary Name:</label>
                                    <div class="col-sm-9">
                                        <select name="subsidiary_id" id="" class="form-control">
                                            <option value="">Please Select Subsidiary</option>
                                            @foreach($subsidiaries as $subsidiary)
                                                <option value="{{$subsidiary->id}}">{{$subsidiary->subsidiary_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEnterYourName" name="product_name" placeholder="Enter Product Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Price:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="price" name="product_price" placeholder="Enter Product Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Discount Percent:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" onkeyup="discountPrice();" value="" id="discount" name="discount_percent" placeholder="Enter Discount in Percent">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Discounted Price:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="" id="total" name="discounted_price" placeholder="Enter Discount Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Discription:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEnterYourName" name="description" placeholder="Discription">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="CategoryName" class="col-sm-3 col-form-label">Image:</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                </div>
                            <div class="row mb-3">
                                <label style="margin-top: 8px;" for="publicationStatus" class="col-sm-3 control-label">Product Area :</label>
                                <div class="col-sm-9" style="margin-top: 9px;">
                                    <input type="checkbox" name="product_area" value="1"> Featured  	&nbsp; 	&nbsp; 	&nbsp;
                                    <input type="checkbox" name="product_area" value="2"> Coming Soon            &nbsp; 	&nbsp; 	&nbsp;
                                    <input type="checkbox" name="product_area" value="3"> On Sale<br>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label style="margin-top: 8px;" for="publicationStatus" class="col-sm-3 control-label">Publication Status :</label>
                                <div class="col-sm-9" style="margin-top: 9px;">
                                    <input type="radio" name="statusProduct" value="1"> Published  	&nbsp; 	&nbsp; 	&nbsp;
                                    <input type="radio" name="statusProduct" value="0" checked> Unpublished<br>
                                </div>
                            </div>

                            <hr>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Save Info</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
         function discountPrice(){
            var numVal1 = document.getElementById("price").value;
             var numVal2 = document.getElementById("discount").value;
             if(numVal1 > -1) {
                 if (numVal1 == 0 || numVal2 == 100) {
                     document.getElementById("total").value = "FREE";
                 } else if (numVal2 >= 0 && numVal2 <= 100) {
                     document.getElementById("total").value = numVal1-numVal1*numVal2/100;
                 } else {
                     alert("Sorry!! Discount isn't possible")
                 }
             } else {
                 alert("Negative price isn't possible")
             }
        }
    </script>
@endsection
