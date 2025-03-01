<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part Sums Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Part Sums Calculator</h2>

        <form action="{{ route('partsums.calculate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="numbers" class="form-label">Enter numbers (comma-separated):</label>
                <input type="text" name="numbers" id="numbers" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        @if(isset($result))
            <div class="mt-4">
                <h4>Input Array: [{{ implode(', ', $numbers) }}]</h4>
                <h4>Part Sums Result:</h4>
                <p>[{{ implode(', ', $result) }}]</p>
            </div>
        @endif
    </div>
</body>
</html>
