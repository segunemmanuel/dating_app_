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
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
<table class="table table-hover">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Post title</th>
            <th>Posts content</th>            
            <th>Author</th>
            <th>Date</th>

        </tr>
    </thead>
    <tbody>
@php($i=1)
        @foreach($posts as $post)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$post->post_title}}</td>
            <td>{{$post->post_content}}</td>
            <td>{{$post->post_author}}</td>
            <td>{{$post->created_at}}</td>

        </tr>
        @endforeach
    </tbody>
</table>



                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



row




    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/js/bootstrap.min.js"></script>

</body>

</html>
