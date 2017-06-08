<html>
<head>
    <title>BOREAL</title>
</head>
<body>
    <div style='width: 100%;' align='center'>
    <table width='700' height='300' align='center' bgcolor='#000000' cellpadding='0' cellspacing='0' style='border:1px solid #f6f6f6;'>
    <tbody>
        <tr>
        <td align='left' bgcolor='#000000' style='text-align:center;'>
            <table width='700' height='300' bgcolor='#000' cellpadding='0' cellspacing='0'>
                <tbody>
                <tr height='100'><td bgcolor='#d0332a' style='color:#000000;font-size:large' colspan='3'>BOREAL</td></tr>
                <tr height='400'>
                    <td bgcolor='#fff' style='border-left:1px solid #d0332a;border-right:1px solid #d0332a;'>
                    <table style='font-family:sans-serif, Arial, Helvetica'>
                        <tbody>
                        <tr>
                        <td width='10'></td>
                        <td style='text-align:left'>
                            <p>A quien corresponda:</p>
                            <p><b>Nombre:</b> {{ Input::get('nombre') }} </p>
                            <p><b>Email:</b>  {{ Input::get('email') }} </p>
                            <p><b>Teléfono:</b>  {{ Input::get('tel') }} </p>
                            <p><b>Comentario:</b>  {{ Input::get('comentario') }} </p>
                        </td>
                        <td width='10'></td>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                <tr bgcolor='#d0332a'>
                    <td colspan='3'>
                    <p style='font-family:Arial, Helvetica, sans-serif, Trebuchet MS;font-size:x-small;color:#000000;'>
                        AVISO DE CONFIDENCIALIDAD: Este mensaje es confidencial y/o puede contener informaci&oacute;n privilegiada.
                        Si usted no es el destinatario o no es alguna persona autorizada por &eacute;ste para recibir el mensaje,
                        usted no deber&aacute; utilizar, copiar, revelar o tomar ninguna acci&oacute;n basada en este mensaje o
                        cualquier otra informaci&oacute;n incluida en &eacute;l. Si recibe este mensaje por error, por favor
                        notif&iacute;quelo de inmediato al remitente y b&oacute;rrelo de su computadora.<br>
                    </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
        </tr>
    </tbody>
    </table>
    </div>
</body>
</html>