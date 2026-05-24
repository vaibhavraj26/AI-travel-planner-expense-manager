<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectLine }}</title>
</head>
<body style="margin:0;background:#f4f7fb;font-family:Arial,Helvetica,sans-serif;color:#0f172a;">
    <div style="max-width:640px;margin:0 auto;padding:32px 16px;">
        <div style="background:#ffffff;border-radius:24px;padding:32px;border:1px solid #e2e8f0;box-shadow:0 10px 30px rgba(15,23,42,.08);">
            <p style="margin:0 0 12px;font-size:12px;letter-spacing:.18em;text-transform:uppercase;color:#f97316;font-weight:700;">{{ config('app.name') }}</p>
            <h1 style="margin:0 0 16px;font-size:28px;line-height:1.2;">{{ $heading }}</h1>
            <p style="margin:0 0 24px;font-size:16px;line-height:1.7;color:#334155;">{{ $body }}</p>

            @if($code)
                <div style="background:#fff7ed;border:1px dashed #fb923c;border-radius:18px;padding:18px 20px;margin:0 0 24px;text-align:center;">
                    <p style="margin:0 0 8px;font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#c2410c;">OTP Code</p>
                    <div style="font-size:34px;letter-spacing:.18em;font-weight:800;color:#9a3412;">{{ $code }}</div>
                </div>
            @endif

            @if($actionLabel && $actionUrl)
                <div style="margin:0 0 8px;">
                    <a href="{{ $actionUrl }}" style="display:inline-block;background:#f97316;color:#ffffff;text-decoration:none;font-weight:700;border-radius:14px;padding:14px 22px;">{{ $actionLabel }}</a>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
