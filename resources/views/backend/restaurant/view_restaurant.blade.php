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
                        <li class="breadcrumb-item active">Restaurant List</li>
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

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>mobile</th>
                                    <th>opening_time</th>
                                    <th>closing_time</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>

                                @foreach($allData as $key => $value )
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td> {{ $value->name }}</td>
                                        <td> {{ $value->address }}</td>
                                        <td> {{ $value->mobile }}</td>
                                        <td> {{ $value->opening_time }}  </td>
                                        <td> {{ $value->closing_time }}  </td>
                                        <td>
                                            <img src="{{ (!empty($value->image))? url('upload/restaurant_images/'.$value->image):url('upload/no_image.jpg') }}" style="width: 60px; width: 60px;">
                                        </td>

                                        <td>
                                            <a title="Edit" href="" class="btn btn-info"> <i class="fa fa-edit"></i> </a>

                                            <a title="delete" href="" class="btn btn-primary" ><i class="fa fa-check"></i></a>

                                            <a target="_blank" title="Details" href="" class="btn btn-danger"  ><i class="fa fa-eye"></i></a>

                                        </td>

                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>

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
