@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Mission</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Mission</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-md-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Mission
                                <a class="btn btn-success float-right btn-sm" href="{{route('missions.view')}}">
                                    <i class="fa fa-list"></i>  Mission  Lists</a>
                            </h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="post" action="{{route('missions.store')}}" id="myForm"  enctype ="multipart/form-data">
                        
                        
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <textarea name="title" rows="12" class="from-control"></textarea>
                                </div>
        
                                <div class="form-group col-md-4">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="from-control" id="image">
                                </div>

                                <div class="form-group col-md-2">
                                    <img id="showImage" src="{{url('public/upload/no_img.png')}}"
                                     style="width: 150px; height:160px; border:1px solid #000;">
                                </div>


                                <div class="form-group col-md-6" style="padding-top: 30px;">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                         </div>

                        </form>
                    </div> <!-- /.card-body-->
            </div>
            <!-- /.card -->
    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.contentainer-fluid-->
</section>

<!-- /.content-->
</div>
<!-- /.content-wrapper -->

@endsection