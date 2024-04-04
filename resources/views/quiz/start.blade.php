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
  <h1 class="mt-5 mb-4 text-center">{{ $quiz->name ?? '' }}</h1>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('quiz.submit') }}" method="POST">
            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
            @csrf
            @if ($quiz->questions->count() > 0)
            
                @foreach ($quiz->questions as $key => $item)
                    <div class="mb-3">
                        <label for="question1" class="form-label">Question {{ ++$key }}: {{ $item->question->name }}</label>                        
                        @if ($item->question->options->count() > 0)
                            @foreach ($item->question->options as $index => $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question[{{ $item->question->id }}]" value="{{ $option->id }}" id="option{{ $index }}" value="{{ $option->question_id }}">
                                    <label class="form-check-label" for="option{{ $index }}">
                                        {{ $option->name }}
                                    </label>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endforeach


                <button type="submit" class="btn btn-primary">Submit</button>
            @endif

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
