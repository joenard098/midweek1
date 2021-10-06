@extends('base')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>verification App</title>
</head>
<body>
<style>
    body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
    }

    @keyframes gradient {
	    0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
      
    </style>  
  <div class="container">

    <div class="mb-1 float-end">
      <a href="{{url('dashboard/create')}}" class="btn btn-succes p-3">
        Add Item
      </a>
    </div>
  <h1 class="text-blue">LIST OF ITEMS</h1>
  <table class="table table-sm table-dark">
      <thead class="bg-danger text-white" style="font-size: 1.1em;">
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>&nbsp;</th>
      </thead>
      <tbody>
          @foreach($items as $i)
          <tr>
              <td>{{$i->name}}</td>
              <td>{{$i->description}}</td>
              <td>{{$i->price}}</td>
              <td>{{$i->quantity}}</td>
              <td style="width: 150px;">
                  <a href="{{ url('dashboard/edit/' . $i->id) }}" style="margin-right: 5px;" class="btn btn-secondary btn-sm d-inline">
                      Edit
                  </a>
                  <a href="{{ url('dashboard/delete/' . $i->id) }}" class="btn btn-danger btn-sm" type="submit">
                      Delete
                  </a>
              </td>
          </tr>
  
          @endforeach
      </tbody>
  </table>
  </div> 

@endsection