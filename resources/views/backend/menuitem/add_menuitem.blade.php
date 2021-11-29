@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">LITIMI</a></li>
                        <li class="breadcrumb-item"><a href="#">Restaurant</a></li>
                        <li class="breadcrumb-item active">Add Restaurant</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Menu</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{route('store.menuitem')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row"> <!-- 4th Row -->

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Restaurant <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select id="restaurant"  name="restaurant_id" required="" class="form-control restaurant">
                                                            <option value="1" selected="" disabled="">Select Restaurant</option>
                                                            @foreach($allData as $class)
                                                                <option value="{{ $class['restaurants']['id']}}">{{ $class['restaurants']['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5> Menu<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select  id="menu" name="menu_id" class="form-control menu">
                                                            <option value="">select menu</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->







                                        </div> <!-- End 1stRow -->

                                        <div class="row"> <!-- 1st Row -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Name<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" required="" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Description <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="description" class="form-control" required="" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->



                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Price<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="price" class="form-control" required="">
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                        </div> <!-- End 1stRow -->




                                        <div class="row"> <!-- 2nd Row -->








                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>image<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control" id="image" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                        </div> <!-- End 2end Row -->















                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->






    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

            $('#restaurant').change(function(){
                var state = $('#restaurant').val();


                $.ajax({
                    url:"{{route('changestatus')}}",

                    data:{'state':state,},



                    success:function(result)
                    {
                        $('#menu').html(result);

                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });


    </script>








@endsection
