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
                            View All Users
                        </h1>
                        <b> Total users 

<span style="color:red"> {{ count($users)}}</span>
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

<div class="container">
<div class="row">
    <table class="table table-hover">
  <thead>
       <tr>
         <th scope="col">S/N</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created at</th>
      <th scope="col">Delete user</th>


    </tr>
  </thead>
  <tbody>

@php($i=1)
@foreach($users as $user)

    <tr>
         <th scope="row">{{ $i++ }}</th>
      <!-- <td>{{ $user->name}}</td> -->

      <td>{{ $user->name}}</td>

         <td>{{ $user->email}}</td>
         <td>{{ $user->created_at->diffForHumans() }}</td>
         <td> <button type="button" class="btn btn-danger">Delete</button></td>


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



    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/js/bootstrap.min.js"></script>

</body>

</html>
