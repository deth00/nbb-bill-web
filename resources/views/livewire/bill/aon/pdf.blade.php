<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ໃບຂໍໂອນເງິນ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'Phetsarath OT';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            src: url('fonts/PhetsarathOT.ttf') format('truetype');
        }

        * {
            font-family: 'Phetsarath OT';
        }

        /* table,
        th,
        td {
            border: 1px solid black;
        } */
    </style>
</head>

<body>
    <div class="row mb-4">
        <div class="col-12">
            <table width="100%" class="border-buttom">
                {{-- <table style="table-layout: fixed" width="100%" class="border-buttom"> --}}
                <tr>
                    <td colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 420px;padding-top: 0px;">ເລກທີ:
                            {{ $data['no'] }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 2px;" colspan="2">
                        <span
                            style="font-family: 'Times New Roman';padding-left: 292px;">{{ date('d', strtotime($data['valuedt'])) }}
                            &nbsp;&nbsp; {{ date('m', strtotime($data['valuedt'])) }} &nbsp;&nbsp;&nbsp;
                            {{ date('Y', strtotime($data['valuedt'])) }}
                        </span>
                    </td>
                </tr>
                <tr>

                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 25px;">

                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 0px;" colspan="2">
                        <span style="font-family:'Times New Roman';padding-left: 100px;">
                            # {{ number_format($data['money'], 2, '.', ',') }} #
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">

                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 18px;">
                        <span style="font-family: 'Phetsarath OT'; font-size: 16px; padding-left: 30px;">
                            {{ $data['name_hub'] }}
                        </span>
                    </td>
                    <td style="padding-top: 18px;">
                        <span style="font-family:'Times New Roman';padding-left: 30px;">
                            {{ $data['acno_mee'] }}
                        </span>
                    </td>
                </tr>
                <tr>

                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 50px;" width="330px">

            </table>

        </div>
    </div>
</body>

</html>
