<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    @include('admin.css')

    <style>
        .container{
            align-items: center;
            text-align: center;
            padding-top: 3rem;
        }
        .heading{
            padding-bottom: 3rem;
            font-size: 3rem;
        }
        .input_field{
            color: black;
        }

        .center{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid white;
        }

    </style>

  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')

      <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message') }}
            </div>
          @endif

            <div class="container">
                <h2 class="heading">Add Category</h2>
                
                <form action="{{url('/add_category')}}" method="post">
                    @csrf
                    <input type="text" class="input_field" name="category_name" placeholder="Category Name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add">
                </form>
            </div>

            <table class="center">
              <tr>
                <th>Category Name</th>
                <th>Action</th>
              </tr>

              @foreach($data as $data)
              <tr>
                <td>{{$data->category}} </td>
                <td>
                  <a onclick="return confirm('Are you sure to delete this data?') " class="btn btn-danger" href="{{url('delete_category', $data->id)}} ">Delete</a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
      </div>

      @include('admin.script')
  </body>
</html>