@extends ('layouts.mains')
<body>
    <div id="wrapper">
        <!-- Navigation -->
      @include('layouts.partials.nav')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Add a new blog post
                        </h1>
                       @if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> {{ session('success')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

                       <!--  <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->

<div class="row">
 
 <form action="{{ route('add_new_posts')}}" method="POST" role="form">
 @csrf
   <div class="form-group">
     <label for="">Title</label>
     <input type="text" class="form-control" id="" name="post_title" placeholder="Input field">
   </div>
@error('post_title')
<span class="text-danger"> {{$message}}</span>
@enderror


     <div class="form-group">
     <label for="">Author</label>
     <input type="text" name="post_author" class="form-control" id="" placeholder="Input field">
   </div>

   @error('post_author')
<span class="text-danger"> {{$message}}</span>
@enderror

<!-- <div class="form-group">
     <label for="">Image</label>
     <input type="file" name="post_image" class="form-control" id="" placeholder="Input field">
   </div>  -->


  <div class="form-group">
     <label for="">Content</label>
     <textarea class="form-control" htmlentities()  name="post_content" id="ckeditor" name="ckeditor"></textarea>
   </div>


   @error('post_content')
<span class="text-danger"> {{$message}}</span>
@enderror
 
   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
</div>


            </div>
            <!-- /.container-fluid -->
            




        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
// CKEDITOR.replace( 'ckeditor' );
</script

</body>

</html>
