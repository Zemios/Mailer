<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Nuevo mensaje desde el formulario de contacto</h2>

        <div class="content">
            <p><strong>Nombre:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Mensaje:</strong></p>
            <p>{{ $content }}</p>
        </div>

        <!-- Footer estilo tabla similar al ejemplo -->
        <table cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background-color:#fff;font-family:'Open Sans', Arial, sans-serif;font-size:14px;color:#2f3337;border:1px solid #e0e0e0;border-radius:8px;overflow:hidden;margin-top:40px;">
          <tr>
            <td style="padding:20px;vertical-align:top;">
              <table cellpadding="0" cellspacing="0" style="width:100%;">
                <tr>
                  <td style="width:90px;vertical-align:top;padding-right:20px;">
                    <img src="cid:logo-email.png" alt="Logo Zemios" width="80" height="80" style="display:block;"/>
                  </td>
                  <td style="vertical-align:top;">
                    <h2 style="margin:0;color:#0d1216;font-size:32px;">Zemios</h2>
                    <p style="margin:4px 0 8px;color:#555;">Construimos el futuro</p>
                    <p style="margin:4px 0;"><strong>📞</strong> <a href="tel:+34640845365" style="color:#2a6de8;text-decoration:none;">+34 640 84 53 65</a></p>
                    <p style="margin:4px 0;"><strong>📧</strong> <a href="mailto:info@zemios.com" style="color:#2a6de8;text-decoration:none;">info@zemios.com</a></p>
                    <p style="margin:4px 0;"><strong>🌐</strong> <a href="https://zemios.com" style="color:#2a6de8;text-decoration:none;">www.zemios.com</a></p>
                    <div style="margin-top:10px;">
                      <a href="https://www.linkedin.com/company/zemios/" style="display:inline-block;margin-right:10px;">
                        <img src="https://cdn-icons-png.flaticon.com/24/174/174857.png" alt="LinkedIn" style="vertical-align:middle;" />
                      </a>
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="height:1px;background-color:#eeeeef;"></td>
          </tr>
          <tr>
            <td style="padding:16px 20px;text-align:center;background-color:#f5f7fa;font-size:12px;color:#999;">
              Este mensaje es confidencial y está destinado solo para su destinatario. Si lo ha recibido por error, por favor notifíquelo al remitente.
            </td>
          </tr>
        </table>
    </div>
</body>
</html>
