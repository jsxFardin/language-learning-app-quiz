<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-body">
          <h1 class="mt-5 mb-4 text-center">Your Score is : {{ $quiz_attempt->calculate_score() }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
