<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom styles -->
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Update Error!</h4>
            <p>There was an error updating the product.</p>
            <hr>
            <p class="mb-0">Please go back and try again.</p>
            <a href="{{ route('product.index') }}" class="mt-3 btn btn-primary"><i
                    class="mr-2 fas fa-arrow-left"></i>Back
                to Product List</a>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
