<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ໃບໂອນບັນຊີເງິນ</title>

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
        </style>
</head>

<body>
    <div class="row mb-4">
        <div class="col-12">
            <table width="100%" class="border-buttom">
                <tr>
                    <td colspan="2" style="padding-top: 10px;"><span style="font-family: 'Phetsarath OT';padding-left: 100px;">
                            {{$data['branch_send']}}</span></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 25px;"><span style="font-family: 'Times New Roman';padding-left: 202px;">{{date('d',strtotime($data['valuedt']))}}</span>
                             <span style="font-family: 'Times New Roman';padding-left: 65px;">{{date('m',strtotime($data['valuedt']))}}  <span style="font-family: 'Times New Roman';padding-left: 35px;">{{date('Y',strtotime($data['valuedt']))}}</span></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 60px;"><span style="font-family: 'Times New Roman';padding-left: 50px;">{{$data['acno_nee']}}</span>
                             <span style="font-family: 'Times New Roman';padding-left: 190px;">#{{number_format($data['money'], 2, '.', ',')}}# </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 10px;"><span style="font-family: 'Times New Roman';padding-left: 50px;">{{$data['acno_mee']}}</span>
                             <span style="font-family: 'Times New Roman';padding-left: 190px;"> </td>
                </tr>
                <tr>
                    <td style="padding-top: 5px;" width="350px" height="140px"><span style="font-family: 'Phetsarath OT'; padding-left: 10px;">{{$data['note']}}</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="padding-top: 65px;" width="350px"><span style="font-family: 'Phetsarath OT'; padding-left: 10px;">({{$data['money_name']}})</span></td>
                    <td></td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>