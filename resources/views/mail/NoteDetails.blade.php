<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Note Created</title>
   
</head>
<body style="background-color: #f8f9fa; font-family: Arial, sans-serif;">
    <div class="container my-5">
        <div class="card mx-auto shadow-sm" style="max-width: 600px; border-radius: 8px;">
            <div class="card-body">
                <h2 class="text-center text-success mb-4">🎉 Hurray! A New Note Has Been Created! 🎊</h2>
                <p>We are excited to inform you that a new note has been added to your collection. Below are the details of the newly created note:</p>

                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h4 class="card-title mb-0">Note Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Field</th>
                                    <th scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Title</strong></td>
                                    <td>{{ $note->title }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Content</strong></td>
                                    <td>{{ $note->content }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Category</strong></td>
                                    <td>{{ ucfirst($note->category) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('notes.show', $note->id) }}" class="btn btn-success btn-lg">View This Note</a>
                </div>

                <p class="mt-4 text-center">Thank you for using our service!</p>
            </div>
        </div>
    </div>

</body>
</html>
