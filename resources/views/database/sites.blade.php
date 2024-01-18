<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Site Setup</title>
    <!-- Add Bootstrap CSS link here -->
    <!-- For example: -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
          
            <h2 class="text-center mb-4">Site Information Form</h2>
            
            <form action="/site-settings" method="post">
                <div class="form-group">
                    <label for="siteTitle">Site Title:</label>
                    <input type="text" class="form-control" id="siteTitle" name="site_title" required>
                </div>
               
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                 <div class="form-group">
                    <label for="firstname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                 <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="siteUrl">Site URL:</label>
                    <input type="url" class="form-control" id="siteUrl" name="site_url" required>
                </div>
                 <div class="form-group">
                    <label for="siteName">Site Name:</label>
                    <input type="text" class="form-control" id="siteUrl" name="site_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Admin Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Admin Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
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
