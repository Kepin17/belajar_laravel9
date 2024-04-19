<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="product_name" id="product_name" placeholder="Product Name">
    <input type="text" name="product_description" id="product_description" placeholder="Product Description">
    <input type="number" name="product_price" id="product_price" placeholder="Product Price">
    <input type="number" name="product_quantity" id="product_quantity" placeholder="Product Quantity">
    <input type="file" name="product_image" id="product_image"> <br>
    <button type="submit">create</button>
  </form>
</body>
</html>