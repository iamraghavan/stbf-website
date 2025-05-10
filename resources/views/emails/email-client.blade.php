<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>Thank You for Your Submission | Sri Thiruthani Foundation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f0f4f8;
        }

        .container {
            max-width: 640px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #004aad 0%, #0066cc 100%);
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 150px;
            height: auto;
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }

        .content {
            padding: 30px;
        }

        .content p {
            margin-bottom: 15px;
            font-size: 16px;
        }

        .content .details {
            background: #f8fafc;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .content .details p {
            margin: 10px 0;
            font-size: 15px;
        }

        .content .details strong {
            color: #004aad;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background: #ffcc00;
            color: #004aad;
            text-decoration: none;
            font-weight: 700;
            border-radius: 6px;
            margin: 20px 0;
            transition: background 0.3s ease;
        }

        .cta-button:hover {
            background: #e6b800;
        }

        .footer {
            background: #f8fafc;
            text-align: center;
            padding: 20px;
            font-size: 13px;
            color: #666;
            border-top: 1px solid #e2e8f0;
        }

        .footer a {
            color: #004aad;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .container {
                margin: 15px;
            }

            .header h1 {
                font-size: 24px;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('assets/r_files/logo-1.webp') }}" alt="Sri Thiruthani Foundation Logo">
            <h1>Thank You, {{ $submission['name'] }}!</h1>
        </div>
        <div class="content">
            <p>Dear {{ $submission['name'] }},</p>
            <p>We’re grateful for your message to Sri Thiruthani Foundation. Our team has received your submission and will respond to you shortly.</p>

            <div class="details">
                <p><strong>Your Submission Details:</strong></p>
                <p><strong>Phone:</strong> {{ $submission['phone'] }}</p>
                <p><strong>Address:</strong> {{ $submission['address'] }}</p>
                <p><strong>Message:</strong> {{ $submission['message'] }}</p>
            </div>

            <p>We value your interest and are committed to providing you with the best support. In the meantime, feel free to explore our initiatives or contact us for further assistance.</p>

            <a href="{{ url('/') }}" class="cta-button">Visit Our Website</a>

            <p>Best regards,<br>The Sri Thiruthani Foundation Team</p>
        </div>
        <div class="footer">
            <p>
                Sri Thiruthani Foundation<br>
                <a href="{{ url('/privacy') }}">Privacy Policy</a> |
                <a href="{{ url('/unsubscribe') }}?email={{ $submission['email'] }}">Unsubscribe</a>
            </p>
            <p>© {{ date('Y') }} Sri Thiruthani Foundation. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
