<!doctype html>
<html lang="en">
  <head>
    <base href="/public">
  	<title>Property Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="main/css/style.css">
    
    <style>
        .form select{
            border: 1px solid grey;
            width: 75%;
            margin-left: 90px;
        }
        .form input{
            border: 1px solid grey;
            width: 75%;
            margin-left: 90px;
        }
        .form label{
            margin-left: 90px;
            margin-bottom: 12px;
        }
        
    </style>

  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="order-last" class="img" style="background-image: url(main/images/bg_1.jpg);">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	                </button>
        </div>
        <div class="">
		 <h1><a href="{{url('')}}" class="logo">Welcome Back </a></h1>
	        <ul class="list-unstyled components mb-5">
              <li class="active">
	            <a href="{{url('')}}"><span class="fa fa-plus mr-3"></span> Add Properties</a>
	          </li>
	          <li class="active">
	            <a href="{{url('view_properties')}}"><span class="fa fa-eye-slash mr-3"></span> View Property</a>
	          </li>
            </ul>
	      </div>
    	</nav>

        
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 style="margin-left: 100px;" class="mb-4"> Edit A Property </h2>
        @include('property.alerts')

        {{-- form begins here --}}
        <div class="form">
            <form action="{{url('update_property',$props->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Property Name</label>
                    <input  type="text" value="{{$props->name}}" name="name" class="form-control"  placeholder="Enter the Property Name">
                </div>
                <div class="form-group">
                    <label for="property_type"> Property Type </label>
                    <select  multple name="property_type" class="form-control">
                        <option  value="{{$props->property_type}}">{{$props->property_type}}</option>
                        <option  value="Residential">Residential</option>
                        <option value="Commercial">Commercial</option>
                        <option value="More">More</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="location"> Location </label>
                    <input  type="text" name="location" value="{{$props->location}}" class="form-control"  placeholder="Location of the Property">
                </div>
                <div class="form-group">
                    <label for="lease_type">Lease Type</label>
                    <select  name="lease_type" class="form-control">
                        <option  value="{{$props->lease_type}}">{{$props->lease_type}}</option>
                        <option  value="Monthly">Monthly</option>
                        <option value="Daily">Daily</option>
                        <option value="Hourly">Hourly</option>
                    </select>
                </div>
                <div class="btn">
                    <input  type="submit" class="btn btn-primary" >
                </div>                
            </form>
        </div>

        {{-- form ends --}}       
        

      </div>

	</div>

    <script src="main/js/jquery.min.js"></script>
    <script src="main/js/popper.js"></script>
    <script src="main/js/bootstrap.min.js"></script>
    <script src="main/js/main.js"></script>
  </body>
</html>
