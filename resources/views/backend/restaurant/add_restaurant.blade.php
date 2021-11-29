@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <h4 class="page-title">Add Restaurant</h4>
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

                            <form method="post" action="{{route('store.restaurant')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">






                                        <div class="row"> <!-- 1st Row -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Restaurant Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" required="" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Restaurant Address <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="address" class="form-control" required="" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->



                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>mobile<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" class="form-control" required="">
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                        </div> <!-- End 1stRow -->




                                        <div class="row"> <!-- 2nd Row -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>opening time <span class="text-danger">*</span></h5>
                                                    <div  class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                        <input type="text" name="opening_time"  class="form-control" value="08:00">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>closing time <span class="text-danger">*</span></h5>
                                                    <div  class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                        <input type="text" name="closing_time" class="form-control" value="09:00">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->



                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>image<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control" id="image" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                        </div> <!-- End 2end Row -->
                                        <div class="row"> <!-- 3rd row Row -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5> Description<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="description" class="form-control" required="" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Estimate time of delivery <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="delivery_est" id="gender" required="" class="form-control">
                                                            <option value="" selected="" disabled="">Select EST delivery time</option>
                                                            <option value="20 min">20 MIN</option>
                                                            <option value="35 min">35 MIN</option>
                                                            <option value="45 min">45 MIN</option>
                                                            <option value="60 min ">60 MIN</option>


                                                        </select>
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->



                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                        </div> <!-- End 3rd Row -->


                                        <div class="row"> <!-- 4th Row -->

                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <h5>email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="email" class="form-control" required="" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <h5> bank name<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="bank_name" class="form-control" required="" >
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->



                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <h5>Account name<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="account_name" class="form-control" required="">
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->
                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <h5>Account number<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="account_no" class="form-control" required="">
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                        </div> <!-- End 1stRow -->











                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
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



@endsection
