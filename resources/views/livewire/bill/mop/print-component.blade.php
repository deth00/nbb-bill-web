<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນໃບມອບເງິນສົດ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນໃບມອບເງິນສົດ</h4>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-12 QA_section">
            <div class="card QA_table ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-3">
                            <a href="{{ route('bill-morp') }}" class="btn btn-danger float-end">ກັບຄືນ</a>
                            @if ($data['del'] != 0)
                                <a href="{{ route('pdf-mop', $hidId) }}" target="_bank"
                                    class="btn btn-primary float-end mx-2">ພິມບິນ</a>
                            @endif
                        </div>
                        <div class="col-9 text-right">
                            ວັນທີ :
                            <strong>{{ date('d/m/Y H:i:s', strtotime($data['created_at'])) }}</strong>
                            <span class="float-end"> <strong>ສະຖານະ:</strong> <span class="text-danger">
                                    @if ($data['del'] == 1)
                                        ລໍຖ້າປິ່ນ
                                    @elseif($data['del'] == 2)
                                        ປິ່ນສຳເລັດ
                                    @elseif ($data['del'] == 0)
                                        ຍົກເລີກ
                                    @endif
                                </span></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-12">

                            <table width="100%">
                                <tr>
                                    <td colspan="2"><span
                                            style="font-size:28px;padding-left: 700px;"><b>ໃບມອບເງິນສົດ</b></span> <span
                                            class="text-right" style="font-size:14px;padding-left: 550px;"><b>ເລກທີ /
                                                Bill No ...............</b></span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><span><b class="timenewroman-font"
                                                style="font-size:20px;padding-left: 700px;">CASH DEPOSIT</b></span>
                                        <span class="text-right"><b class="text-right"
                                                style="font-size:14px;padding-left: 550px;">ວັນທີ / Date
                                                {{ date('d / m / Y', strtotime($data->valuedt)) }}</b></span>
                                    </td>
                                </tr>
                            </table> <br>
                            <table width="100%">
                                <tr>
                                    <td width="30%" rowspan="11">
                                        <table border="1" width="100%">
                                            <tr>
                                                <td class="td-border1 text-center py-2" colspan="2">
                                                    ລາຍລະອຽດ / Details
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="py-2">
                                                    ປະເພດໃບ <br> Deno
                                                </td>
                                                <td class="py-2">
                                                    ຈຳນວນເງິນ <br> Amount
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="timenewroman-font py-2">100,000</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->san, 0, '.', ',') }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="timenewroman-font py-2">50,000</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->has, 0, '.', ',') }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="timenewroman-font py-2">20,000</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->sow, 0, '.', ',') }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="timenewroman-font py-2">10,000</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->sip, 0, '.', ',') }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="timenewroman-font py-2">5,000</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->har, 0, '.', ',') }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="timenewroman-font py-2">2,000</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->sng, 0, '.', ',') }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="timenewroman-font py-2">1,000</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->nung, 0, '.', ',') }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="timenewroman-font py-2">500</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->hal, 0, '.', ',') }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="py-2">ລວມ / Total</td>
                                                <td class="timenewroman-font py-2">
                                                    {{ number_format($data->san + $data->has + $data->sow + $data->sip + $data->har + $data->sng + $data->nung + $data->hal, 0, '.', ',') }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="70%">
                                        <table>
                                            <tr>
                                                <td>
                                                    <p style="line-height:5px">ຊື່ຜູ້ມອບ</p>
                                                    <p style="line-height:0px">Deposit By</p>
                                                </td>
                                                <td class="text-center" width="92%">
                                                    <p style="line-height:5px; color: red;">{{ $data->name_mop }}</p>
                                                    <p style="line-height:0px">
                                                        <hr>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td width="60%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ທີ່ຢູ່</p>
                                                                <p style="line-height:0px">Address</p>
                                                            </td>
                                                            <td class="text-center" width="100%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->address }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="40%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ເບີໂທ</p>
                                                                <p style="line-height:0px">Tel</p>
                                                            </td>
                                                            <td class="text-center" width="90%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->tel }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>
                                                    <p style="line-height:5px">ຊື່ບັນຊີ</p>
                                                    <p style="line-height:0px">Name of A/C</p>
                                                </td>
                                                <td class="text-center" width="90.5%">
                                                    <p style="line-height:5px; color: red;">
                                                        {{ $data->detail }}</p>
                                                    <p style="line-height:0px">
                                                        <hr>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td width="10%">
                                                    <p style="line-height:5px">ເລກບັນຊີ</p>
                                                    <p style="line-height:0px" class="timenewroman-font">Account No
                                                    </p>
                                                </td>
                                                <td class="td-border1">
                                                    <p style="line-height:0px;padding-left: 200px;padding-top:15px;color:red;"
                                                        class="timenewroman-font">{{ $data->acno_fak }} </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td width="10%">
                                                    <p style="line-height:5px;padding-top: 5px;">ສະກຸນເງິນ</p>
                                                    <p style="line-height:0px" class="timenewroman-font">Currency Code
                                                    </p>
                                                </td>
                                                <td width="20%" class="td-border1">
                                                    <p style="line-height:0px;padding-left: 50px;padding-top:15px;">
                                                        {{ $data->acno_kou }} </p>
                                                </td>
                                                <td width="10%">
                                                    <p style="line-height:5px;padding-left: 10px;padding-top: 5px;">
                                                        ຈຳນວນເງິນ</p>
                                                    <p style="line-height:0px;padding-left: 10px;"
                                                        class="timenewroman-font">Amount</p>
                                                </td>
                                                <td class="td-border1">
                                                    <p style="line-height:0px;padding-left: 200px;padding-top:15px;color:red;"
                                                        class="timenewroman-font">#{{ number_format($data->money) }}#
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td width="20%">
                                                    <p style="line-height:5px; padding-top: 5px;">
                                                        ຈຳນວນເງິນຂຽນເປັນຕົວໜັງສື</p>
                                                    <p style="line-height:0px" class="timenewroman-font">Anount in
                                                        words
                                                    </p>
                                                </td>
                                                <td class="td-border1">
                                                    <p
                                                        style="line-height:0px;padding-left: 200px;padding-top:15px;color:red;">
                                                        ({{ $data->money_name }})</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td class="td-border1 py-2">
                                                    <p style="line-height:0px;padding-left: 200px;"
                                                        class="timenewroman-font"> </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td>
                                        <p style="line-height:5px;">ກໍລະນີມອບເພື່ອໂອນ</p>
                                        <p style="line-height:0px;" class="timenewroman-font">To
                                            deposit for transfer</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td width="60%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ຜູ້ຮັບເງິນ</p>
                                                                <p style="line-height:0px">Beneficiary</p>
                                                            </td>
                                                            <td class="text-center" width="90.5%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->name_hub }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="40%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ທີ່ຢູ່</p>
                                                                <p style="line-height:0px">Address</p>
                                                            </td>
                                                            <td class="text-center" width="90.5%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->address_hub }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td width="33%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ເບີໂທ</p>
                                                                <p style="line-height:0px">Tel</p>
                                                            </td>
                                                            <td class="text-center" width="90.5%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->tel_hub }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="33%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ເລກບັດ</p>
                                                                <p style="line-height:0px">ID No</p>
                                                            </td>
                                                            <td class="text-center" width="87%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->card_no }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="33%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ສຳມະໂນຄົວ</p>
                                                                <p style="line-height:0px">Family registration No</p>
                                                            </td>
                                                            <td class="text-center" width="55%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->card_type }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td width="30%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ສາຂາ</p>
                                                                <p style="line-height:0px">Branch</p>
                                                            </td>
                                                            <td class="text-center" width="90%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->branch_name }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="30%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ໜ່ວຍບໍລິການ</p>
                                                                <p style="line-height:0px">Unit Service</p>
                                                            </td>
                                                            <td class="text-center" width="70%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->unit }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="40%">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ເລກບັນຊີ</p>
                                                                <p style="line-height:0px">A/C No</p>
                                                            </td>
                                                            <td class="text-center" width="87%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->acno_hub }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%">
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ຜູ້ຮັບເງິນ</p>
                                                                <p style="line-height:0px">Beneficiary</p>
                                                            </td>
                                                            <td width="100%" class="text-center">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->name_hub }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p style="line-height:5px">ທີ່ຢູ່</p>
                                                                <p style="line-height:0px">Address</p>
                                                            </td>
                                                            <td class="text-center" width="100%">
                                                                <p style="line-height:5px; color: red;">
                                                                    {{ $data->address_hub }}</p>
                                                                <p style="line-height:0px">
                                                                    <hr>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
