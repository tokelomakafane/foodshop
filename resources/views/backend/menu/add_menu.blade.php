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

                            <form method="post" action="{{ route('store.menu') }} " enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                         <div class="col-12">
                                        <div class="add_item">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Restaurant<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="restaurant_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Restaurant</option>
                                                        @foreach($resta as $class)
                                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> <!-- // end form group -->
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Restaurant menu <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control" >
                                                        </div>
                                                    </div>
                                            </div><!-- End col-md-5 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>menu Image <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control" id="image" >
                                                    </div>
                                                </div>
                                            </div><!-- End col-md-5 -->



                                            </div> <!-- end Row -->

                                        </div>	<!-- // End add_item -->

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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














    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row">




                        <div class="row"> <!-- 1st Row -->

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Restaurant Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="restaurant_id[]" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Restuarant</option>
                                            @foreach($resta as $restaurant)
                                                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div> <!-- End Col md 4 -->


                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Restaurant menu name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name[]" class="form-control" required="" >
                                    </div>
                                </div>

                            </div> <!-- End Col md 4 -->




                    <div class="col-md-4" style="padding-top: 25px;">
                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                        <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                    </div><!-- End col-md-2 -->





            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function(){
            var counter = 0;
            $(document).on("click",".addeventmore",function(){
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click",'.removeeventmore',function(event){
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1
            });

        });
    </script>



@endsection
