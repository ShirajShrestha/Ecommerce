<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    @include('admin.css')

    <style>
        .table_position{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 2rem;
        }
        table, tr, th, td{
            border: 2px solid white;
        }

        .title{
            font-size: 2rem;
            text-align: center;
            padding-top: 1rem;
        }

        .img_block{
            width: 200px;
            height: 100px;
            object-fit: cover;
        }

        .headings{
            background-color: #8F5FE8;
        }

        .table_position tr th{
            padding: 1rem;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')

        <div class="main-panel">
            <div class="content-wrapper">
               
                <h2 class="title">All Products</h2>
                <table class="table_position">
                    <tr class="headings">
                        <th>Product title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Product Image</th>
                    </tr>

                    @foreach($productData as $product)
                    <tr>
                        <td>{{$product->title}} </td>
                        <td>{{$product->description}} </td>
                        <td>{{$product->quantity}} </td>
                        <td>{{$product->category}} </td>
                        <td>{{$product->price}} </td>
                        <td>{{$product->discount_price}} </td>
                        <td><img class="img_block" src="/products/{{$product->image}}" alt=""></td>
                        
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>


    @include('admin.script')
  </body>
</html>