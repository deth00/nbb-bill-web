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
                    <td width="30%" rowspan="11">
                        <table >
                            <tr class="text-center" >
                                <td class="timenewroman-font" style="padding-left: 60px;">
                                    {{number_format($data->san,0,'.',',')}}</td>
                            </tr>
                            <tr class="text-center">
                                <td class="timenewroman-font " style="padding-left: 60px; ">
                                    {{number_format($data->has,0,'.',',')}}</td>
                            </tr>
                            <tr class="text-center">
                                <td class="timenewroman-font " style="padding-left: 60px">
                                    {{number_format($data->sow,0,'.',',')}}</td>
                            </tr>
                            <tr class="text-center">
                                <td class="timenewroman-font " style="padding-left: 60px">
                                    {{number_format($data->sip,0,'.',',')}}</td>
                            </tr>
                            <tr class="text-center">
                                <td class="timenewroman-font " style="padding-left: 60px">
                                    {{number_format($data->har,0,'.',',')}}</td>
                            </tr>
                            <tr class="text-center">
                                <td class="timenewroman-font " style="padding-left: 60px">
                                    {{number_format($data->sng,0,'.',',')}}</td>
                            </tr>
                            <tr class="text-center">
                                <td class="timenewroman-font " style="padding-left: 60px">
                                    {{number_format($data->nug,0,'.',',')}}</td>
                            </tr>
                            <tr class="text-center">
                                <td class="timenewroman-font " style="padding-left: 60px">
                                    {{number_format($data->hal,0,'.',',')}}</td>
                            </tr>
                            <tr class="text-center">
                                <td class="timenewroman-font " style="padding-left: 60px">
                                    {{number_format($data->san + $data->has + $data->sow + $data->sip + $data->har + $data->sng + $data->nug +$data->hal,0,'.',',')}}
                                </td>
                            </tr>
                        </table>

                    </td>
                    <td width="70%" style="padding-top: 85px;" >
                        <span
                            style="font-family: 'Times New Roman';padding-left: 375px; font-size: 14px;line-height:0px">{{ date('d', strtotime($data['valuedt'])) }}
                            &nbsp;&nbsp;&nbsp; {{ date('m', strtotime($data['valuedt'])) }}&nbsp;&nbsp;&nbsp;
                            {{ date('Y', strtotime($data['valuedt'])) }}</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 10px; margin-top: 2px;line-height:15px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 30px; font-size: 14px;">
                            {{ $data['acname'] }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 10px;line-height:20px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 10px; font-size: 14px;">
                            {{ $data['acno'] }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 20px; margin-top: 2px;line-height:20px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 10px; font-size: 14px;">
                            {{ $data['crc'] }}
                        </span>
                        <span style="font-family:'Phetsarath OT';padding-left: 120px; font-size: 14px;">
                            {{ $data['money'] }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 10px; margin-top: 2px;line-height:px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 110px; font-size: 14px;">
                            {{ $data['money_name'] }}
                        </span>
                    </td>
                </tr>
                <br>
                <tr>
                    <td style="padding-top: 10px; margin-top: 2px;line-height:px" colspan="2">
                        <span style="font-family:'Phetsarath OT';padding-left: 10px; font-size: 14px;">
                            {{ $data['acno2'] }}
                        </span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
