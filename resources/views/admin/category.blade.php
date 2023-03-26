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

    </style>

  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')

      <div class="main-panel">
          <div class="content-wrapper">
            <div class="container">
                <h2 class="heading">Add Category</h2>
                
                <form action="">
                    <input type="text" class="input_field" name="name" placeholder="Category Name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add">
                </form>
            </div>
          </div>
      </div>

      @include('admin.script')
  </body>
</html>