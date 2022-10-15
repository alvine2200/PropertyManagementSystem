<!doctype html>
<html lang="en">
  <head>
  	<title>Roles and Permissions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="main/css/style.css">
  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="order-last" class="img" style="background-image: url(main/images/bg_1.jpg);">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
        <div class="">
		  		<h1><a href="{{url('')}}" class="logo"> Welcome Back </a></h1>
	        <ul class="list-unstyled components mb-5">
              <li class="active">
	            <a href="{{url('')}}"><span class="fa fa-plus mr-3"></span> Add Properties</a>
	          </li>
	          <li>
	            <a href="{{url('view_properties')}}"><span class="fa fa-eye-slash mr-3"></span>View Properties</a>
	          </li>
	        </ul>	       

	      </div>

    	</nav>

      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Property Present </h2>
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Property Name</th>
                <th scope="col">Location</th>
                <th scope="col">Pricing</th>
                <th scope="col">Lease Status</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
                @foreach($property as $prop)
                    <tr>
                        <td>{{$prop?->name}}</td>
                        <td>{{$prop?->lease_status}}</td>
                        <td>{{$prop?->location}}</td>
                        <td>{{$prop?->pricing}}</td>
                        <td>{{$prop?->start_date}}</td>
                        <td>{{$prop?->end_date}}</td>
                        <td>
                        <a class="btn btn-success" href="{{url('prop_roles_permissions',$prop->id)}}">Roles & Permissions</a>                   
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
         </table>
      </div>

	</div>

    <script src="main/js/jquery.min.js"></script>
    <script src="main/js/popper.js"></script>
    <script src="main/js/bootstrap.min.js"></script>
    <script src="main/js/main.js"></script>
  </body>
</html>
