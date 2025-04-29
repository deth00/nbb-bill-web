<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ໃບມອບເງິນສົດ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    @font-face {
        font-family: 'Phetsarath OT';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url('fonts/phetsarath_ot.ttf') format('truetype');
    }

    * {
        font-family: 'Phetsarath OT';
    }
    </style>
</head>

<body>
    <div class="row mb-4">
        <div class="col-12">
            <table width="100%" class="border-buttom">
                <tr>
                    <td style="padding-top: 50px;" colspan="2">
                        <span
                            style="font-family: 'Times New Roman';padding-left: 575px; font-size: 14px;line-height:0px">{{date('d',strtotime($data['valuedt']))}}
                            &nbsp;&nbsp;&nbsp; {{date('m',strtotime($data['valuedt']))}}&nbsp;&nbsp;&nbsp;
                            {{date('Y',strtotime($data['valuedt']))}}</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 0px; margin-top: 2px;line-height:15px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 200px; font-size: 14px;">
                            {{$data['name_mop']}}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 0px;line-height:20px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 200px; font-size: 14px;">
                            {{$data['address']}}
                        </span>
                        <span style="font-family: 'Times New Roman';padding-left: 50px; font-size: 14px;">
                            {{$data['tel']}}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 0px; margin-top: 2px;line-height:20px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 220px; font-size: 14px;">
                            {{$data['detail']}}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 0px; margin-top: 2px;line-height:px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 220px; font-size: 14px;">
                            {{$data['detail']}}
                        </span>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>