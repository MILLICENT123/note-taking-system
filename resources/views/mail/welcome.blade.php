<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Service</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h1>Welcome, {{ $user->firstname }}!</h1>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Dear {{ $user->firstname }},</p>
                        <p class="card-text">We are thrilled to have you join our community! Thank you for signing up and becoming part of our service. We are committed to providing you with the best experience possible.</p>
                        <p class="card-text">To get started, we encourage you to log in and explore all the features we offer. If you have any questions or need assistance, feel free to reach out to our support team.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
