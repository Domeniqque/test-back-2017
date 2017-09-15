<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Appointment Success</title>
    <meta http-equiv="Content-Type" content="text/html; image/png; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            border-color: #fff;
            color: #292F33
        }

        .logo-brand {
            font-weight: 700;
            font-size: 24px;
            margin-top: 40px;
            margin-left: 30px;
            color: #034b81;
            font-family: 'Asap', sans-serif;
            letter-spacing: -1px;
        }

        .logo {
            font-family: 'Pacifico', cursive;
            font-weight: 400;
            text-transform: lowercase;
            color: #9bb649;
        }

        .appointment p {
            font-size: 16px;
            width: 350px;
            margin-left: 30px;
            line-height: 22px;
            margin-bottom: 20px
        }

        .divider {
            border-bottom: 1px solid #ccc;
            width: 94%;
            margin: 20px auto
        }
    </style>
</head>
<body>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="table">
        <tr align="center" id="head" >
            <td>
                <a href="http://192.168.10.10/" style="text-decoration: none;">
                    <h1 class="logo-brand">WEALTH.<span class="logo">LIFE</span></h1>
                </a>

                <div class="divider"></div>
            </td>
        </tr>
        <tr>
            <td align="left">
                <h2 style="margin-left: 30px; margin-bottom: 40px; margin-top: 40px;">Appointment</h2>
            </td>
        </tr>
        <tr>
            <td align="left">
                <p style="margin-left: 30px;">
                    A new appointment is marked in day <b>{{ $appointment->created_at }}</b>
                </p>
            </td>
        </tr>
        <tr>
            <td align="left" class="appointment">
                <p>
                    <b>Name: </b>{{ $appointment->name }}
                </p>

                <p>
                    <b>Phone: </b>{{ $appointment->phone }}
                </p>

                <p>
                    <b>Email: </b>{{ $appointment->email }}
                </p>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3" height="100">
                <div class="divider"></div>
                <small style="font-size: 10px; margin-top: 30px; ">
                    © Copyright 2014. All Rights Reserved by <a href="http://192.168.10.10/" style="text-decoration: none;">Wealth.life</a>
                </small>
            </td>
        </tr>
    </table>
</body>
</html>
