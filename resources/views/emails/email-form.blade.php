<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>New Contact Form Submission | Sri Thiruthani Foundation</title>
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
            <h1>New Contact Form Submission</h1>
        </div>
        <div class="content">
            <p>A new contact form submission has been received by Sri Thiruthani Foundation.</p>

            <div class="details">
                <p><strong>Submission Details:</strong></p>
                <p><strong>Name:</strong> {{ $submission['name'] }}</p>
                <p><strong>Phone:</strong> {{ $submission['phone'] }}</p>
                <p><strong>Email:</strong> {{ $submission['email'] ?: 'Not provided' }}</p>
                <p><strong>Address:</strong> {{ $submission['address'] }}</p>
                <p><strong>Message:</strong> {{ $submission['message'] }}</p>
                <p><strong>Timestamp:</strong> {{ $submission['timestamp'] }}</p>
            </div>

            <p>Please review the submission and respond as needed. For more details, visit the admin panel.</p>

            <a href="{{ url('/admin/submissions') }}" class="cta-button">View in Admin Panel</a>

            <p>Best regards,<br>Sri Thiruthani Foundation Team</p>
        </div>
        <div class="footer">
            <p>
                Sri Thiruthani Foundation<br>
                <a href="{{ url('/privacy') }}">Privacy Policy</a> |
                <a href="{{ url('/contact') }}">Contact Us</a>
            </p>
            <p>© {{ date('Y') }} Sri Thiruthani Foundation. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
