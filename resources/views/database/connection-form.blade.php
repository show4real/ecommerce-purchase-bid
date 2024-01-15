<!-- resources/views/database/connection-form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Database Connection Form</title>
    <!-- Add Bootstrap CSS link here -->
    <!-- For example: -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center mb-4">Database Connection Form</h2>
            
            <form action="/database-connection" method="post">
                @csrf
                <div class="form-group">
                    <label for="host">Host:</label>
                    <input type="text" name="host" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dbname">Database Name:</label>
                    <input type="text" name="dbname" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Check Connection</button>
            </form>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS and Popper.js script tags here if needed -->
<!-- For example: -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
