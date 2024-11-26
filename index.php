<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Real-Time Chat</h2>
                <div class="card">
                    <div class="card-body">
                        <div id="chat-box" class="mb-3" style="height: 300px; overflow-y: auto;">
                            <!-- Messages will appear here -->
                        </div>
                        <form id="chat-form">
                            <div class="input-group">
                                <input type="text" id="message" class="form-control" placeholder="Enter your message" required>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
