<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6f6;
            padding: 20px;
            margin: 0;
        }
        .container {
            background: white;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        h2 {
            color: #333;
        }
        .content p {
            margin-bottom: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
            color: #777;
            font-size: 12px;
        }
        .signature {
            text-align: center;
            margin-top: 40px;
        }
        .signature img {
            width: 80px;
            margin-bottom: 10px;
        }
        .signature a {
            display: block;
            color: #1a73e8;
            text-decoration: none;
            margin: 2px 0;
            font-size: 14px;
        }
        .signature .title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .signature .subtitle {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }
        .social-icons img {
            height: 24px;
            margin: 0 5px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Nuevo mensaje desde el formulario de contacto</h2>

        <div class="content">
            <p><strong>Nombre:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Mensaje:</strong></p>
            <p>{{ $message }}</p>
        </div>

        <div class="signature">
            <img src="{{ $logo }}" alt="Logo Zemios" style="width: 80px; margin-bottom: 10px;">
            <div class="title">Zemios</div>
            <div class="subtitle">Construimos el futuro</div>
            <a href="tel:+34640845365">📞 +34 640 84 53 65</a>
            <a href="mailto:info@zemios.com">✉ info@zemios.com</a>
            <a href="https://www.zemios.com">🌐 www.zemios.com</a>
            <div class="social-icons">
                <a href="https://linkedin.com/company/zemios">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn">
                </a>
            </div>
        </div>

        <div class="footer">
            Este mensaje es confidencial y está destinado solo para su destinatario. Si lo ha recibido por error,
            por favor notifíquelo al remitente.
        </div>
    </div>
</body>
</html>
