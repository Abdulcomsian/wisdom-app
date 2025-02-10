<!DOCTYPE html>
<html>
<head>
    <title>Your Scheduled Quote</title>
</head>
<body>
    <h2>Hello, {{ $user->name }}!</h2>
    <p>Here is your inspirational quote:</p>
    <blockquote>
        <em>{{ $quote->quote }}</em>
    </blockquote>
    <p>Your next quote will be sent on <strong>{{ $nextQuoteDate }}</strong>.</p>
    <br>
    <p>Best Regards,<br>Quote Team</p>
</body>
</html>
