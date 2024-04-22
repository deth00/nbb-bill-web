<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ໃບຂໍໂອນເງິນ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="row mb-4">
        <div class="col-12">
            <table width="100%" class="border-buttom">
                <tr>
                    <td colspan="2"><span style="font-family: 'DejaVu Sans','Phetsarath OT';padding-left: 420px;">ເລກທີ:
                            {{$data['no']}}</span></td>
                </tr>
                <tr>
                    <td style="padding-top: 20px;" colspan="2">
                        <span style="font-family: 'Times New Roman';padding-left: 292px;">{{date('d',strtotime($data['valuedt']))}}
                            &nbsp;&nbsp; {{date('m',strtotime($data['valuedt']))}} &nbsp;&nbsp;&nbsp; {{date('Y',strtotime($data['valuedt']))}}</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 23px;" colspan="2">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';padding-left: 100px;">
                        {{$data['branch_send']}}</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 35px;">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';padding-left: 70px;">
                            {{$data['name_aon']}}</span>
                    </td>
                    <td style="padding-top: 35px;">
                        <span style="font-family: 'Times New Roman';padding-left: 40px;">
                            {{$data['acno_nee']}}</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 15px;" colspan="2">
                        <span style="font-family:'Times New Roman';padding-left: 100px;">
                            #{{number_format($data['money'],2,',','.')}}#</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';padding-left: 100px;">
                            #{{$data['money_name']}}#</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 35px;">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';padding-left: 70px;">
                            {{$data['name_hub']}}</span>
                    </td>
                    <td style="padding-top: 35px;">
                        <span style="font-family:'Times New Roman';padding-left: 40px;">
                            {{$data['acno_mee']}}</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 22px;" colspan="2">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';padding-left: 100px;">
                            {{$data['branch_receive']}}</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 56px;" width="330px">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';padding-left: 0px;">
                            {{$data['note']}} </span>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>