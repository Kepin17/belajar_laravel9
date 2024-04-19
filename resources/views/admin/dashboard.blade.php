<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin dashboard</title>
</head>
<body>
  admin
  @foreach ($products as $product)
    <p>e</p>
  @endforeach
  <a href="{{ route('admin.product.create') }}">Create Product</a>
</body>
</html>