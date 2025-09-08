<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe Membership</title>
</head>
<body>
    <h1>Subscribe to Membership</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('membership.subscribe.post') }}">
        @csrf
        <div>
            <label for="amount">Amount</label>
            <input id="amount" name="amount" type="number" step="0.01" min="0.50" value="50.00" required>
        </div>
        <div>
            <label for="currency">Currency (3 letters)</label>
            <input id="currency" name="currency" type="text" maxlength="3" value="USD" required>
        </div>
        <div>
            <button type="submit">Pay and Subscribe</button>
        </div>
    </form>

    <p><a href="{{ route('dashboard') }}">Back to Dashboard</a></p>
</body>
\n</html>


