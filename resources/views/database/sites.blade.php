<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Form Example</title>
    <!-- Add Bootstrap CSS link here -->
    <!-- For example: -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
          
            <h2 class="text-center mb-4">Site Information Form</h2>
            
            <form>
                <div class="form-group">
                    <label for="siteTitle">Site Title:</label>
                    <input type="text" class="form-control" id="siteTitle" name="siteTitle" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="siteUrl">Site URL:</label>
                    <input type="url" class="form-control" id="siteUrl" name="siteUrl" required>
                </div>
                <div class="form-group">
                    <label for="adminEmail">Admin Email:</label>
                    <input type="email" class="form-control" id="adminEmail" name="adminEmail" required>
                </div>
                <div class="form-group">
                    <label for="adminPassword">Admin Password:</label>
                    <input type="password" class="form-control" id="adminPassword" name="adminPassword" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
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
