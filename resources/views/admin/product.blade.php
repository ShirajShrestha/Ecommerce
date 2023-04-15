<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    @include('admin.css')

    <style>
        .div_center{
            text-align: center;
            padding-top: 3rem;
        }
        .header{
            font-size: 3rem;
            padding-bottom: 3rem;
        }
        .product_detail{
            color: black;
            padding-bottom: 1rem;
        }
        label{
            display: inline-block;
            width: 6rem;
            
        }
        .block{
            padding-bottom: 1rem;
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

                <div class="div_center">
                    <h1 class="header">Add Products</h1>

                    <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        <div class="block">
                            <label for="Product">Name</label>
                            <input class="product_detail" type="text" name="title" placeholder="Enter Product Name" required>
                        </div>
                        <div class="block">
                            <label for="Product">Description</label>
                            <input class="product_detail" type="text" name="description" placeholder="Enter Product Description" required>
                        </div>
                        <div class="block">
                            <label for="Product">Quantity</label>
                            <input class="product_detail" type="number" min="0" name="quantity" placeholder="Enter Product Quantity" required>
                        </div>
                        <div class="block">
                            <label for="Product">Price</label>
                            <input class="product_detail" type="number" name="price" placeholder="Enter Product Price" required>
                        </div>
                        <div class="block">
                            <label for="Product">Discount</label>
                            <input class="product_detail" type="number" name="discount_price" placeholder="Enter Price if allowed">
                        </div>
                        <div class="block">
                            <label for="Product">Category</label>
                            <select class="product_detail" name="category" required>
                                <option value="" selected>Select a category</option>
                                @foreach($categorys as $item)
                                <option >{{$item->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="block">
                            <label for="Product">Image</label>
                            <input class="product_detail" type="file" name="image" placeholder="Enter Product Name" required>
                        </div>
                        <div class="block">
                            <input type="submit" value="Add Product" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    @include('admin.script')
  </body>
</html>