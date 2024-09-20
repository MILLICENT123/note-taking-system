<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Created</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
       
        <div class="card">
            <div class="card-header text-white bg-pink text-center" style="background-color: #f793d9;">
                <h1>New User Created</h1>
            </div>

            
            <div class="card-body">
                <p>Hello dear</p>
                <p>You've added a new user in Millie's Note system. Below are the details:</p>

                
                <div class="bg-light p-3 rounded mb-3">
                    <p><strong>First Name:</strong> {{ $user->firstname }}</p>
                    <p><strong>Last Name:</strong> {{ $user->lastname }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
                </div>

                <p>If you have any questions, feel free to contact us.</p>

               
                <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-primary">View User</a>
                </div>

           
            <div class="card-footer text-center text-muted">
                <p>Thank you for using our system!</p>
                <p>&copy; {{ date('Y') }} Millie's Note App!. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>

