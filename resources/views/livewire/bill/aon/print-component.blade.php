<div>
<div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນໃບໂອນ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນໃບໂອນ</h4>
            </div>
        </div>
    </div>
    
    <div class="row ">
        <div class="col-12 QA_section">
            <div class="card QA_table ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-3">
                            <a href="{{route('bill-aon')}}" class="btn btn-danger float-end">ກັບຄືນ</a>
                            <a href="{{route('pdf-aon',$hidId)}}" target="_bank"
                                class="btn btn-primary float-end mx-2">ພິມບິນ</a>
                        </div>
                        <div class="col-9 text-right">
                            ວັນທີ :
                            <strong>{{date('d/m/Y H:i:s', strtotime($data['created_at']))}}</strong>
                            <span class="float-end"> <strong>ສະຖານະ:</strong> <span class="text-danger">@if($data['del']
                                    == 1)
                                    ລໍຖ້າປິ່ນ @elseif($data['del'] == 2) ປິ່ນສຳເລັດ @else ຍົກເລີກ @endif</span></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-12">

                            <table width="100%" class="border-buttom">
                                <tr height="98.26px">
                                    <td colspan="2" width="627.4px">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="{{asset('backend/img/logo-nbb.png')}}" alt width="100px">
                                            </div>
                                            <div class="col-4 text-center ">
                                                <h3><b class="colorblack">ທະນາຄານ ນະໂຍບາຍ</b></h3>
                                                <h3 class="timenewroman colorblack"><b>NAYOBY BANK</b></h3>
                                                <h4 class="colorblack">ວັນທີ {{date('d/m/Y', strtotime($data['valuedt']))}}</h4>
                                            </div>
                                            <div class="col-4">
                                            </div>
                                        </div>
                                    </td>
                                    <td width="147.4px" class="text-center td-border2">
                                        <p class="font20 colorblack">ໃບຂໍໂອນເງິນ</p>
                                        <p class="colorblack">ສະບັບທີ 1</p>
                                        <p class="colorblack">ຫຼັກຖານການຈົດໜີ້</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="627.4px" class="td-border2">
                                        <h5 class="colorblack">ສຳນັກງານສົ່ງ : {{$data['branch_send']}}</h5>
                                    </td>
                                    <td width="147.4px" class="text-center td-border2">
                                        <p class="colorblack">ສຳລັບພະນັກງານທະນາຄານ</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="415.7px" class="td-border2">
                                        <h5 class="colorblack">ຜູ້ໂອນ:</h5>
                                        <h5 class="colorblack text-center">{{$data['name_aon']}}</h5>
                                    </td>
                                    <td width="192.7px" class="td-border2">
                                        <h5 class="colorblack">ໜີ້ <span class="font12">ບັນຊີ:</span></h5>
                                        <h5 class="colorblack text-center">{{$data['acno_nee']}}</h5>
                                    </td>
                                    <td width="147.4px" rowspan="2" class="td-border2 text-center"
                                        style="vertical-align: baseline">
                                        <h5 class="colorblack">ຜູ້ລົງບັນຊີ</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="627.4px" class="td-border2">
                                        <h5 class="colorblack">ຈຳນວນເງິນ : #{{number_format($data['money'],2,',','.')}}#
                                        </h5>
                                        <h5 class="colorblack">(ຂຽນເປັນໂຕໜັງສື) &emsp; <span
                                                class="text-center">#{{$data['money_name']}}#</span></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="415.7px" class="td-border2">
                                        <h5 class="colorblack">ຜູ້ຮັບໂອນ:</h5>
                                        <h5 class="colorblack text-center">{{$data['name_hub']}}</h5>
                                    </td>
                                    <td width="192.7px" class="td-border2">
                                        <h5 class="colorblack">ມີ <span class="font12">ບັນຊີ:</span></h5>
                                        <h5 class="colorblack text-center">{{$data['acno_mee']}}</h5>
                                    </td>
                                    <td width="147.4px" rowspan="2" class="td-border2 text-center"
                                        style="vertical-align: baseline">
                                        <h5 class="colorblack">ຜູ້ກວດກາບັນຊີ</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="627.4px" class="td-border2">
                                        <h5 class="colorblack">ສຳນັກງານຮັບ : {{$data['branch_receive']}}</h5>
                                    </td>
                                </tr>
                                <tr height="117.1px">
                                    <td width="415.7px" class="td-border2">
                                        <h5 class="colorblack">ເນື້ອໃນການໂອນເງິນ:</h5>
                                        <h5 class="colorblack text-center">{{$data['note']}}</h5>
                                    </td>
                                    <td width="192.7px" class="td-border2 text-center" style="vertical-align: bottom">
                                        <h5 class="colorblack mb-0">
                                            <hr>
                                        </h5>
                                        <h5 class="colorblack mb-0">ລາຍເຊັນຜູ້ສະເໜີໂອນເງິນ</h5>
                                    </td>
                                    <td width="147.4px" class="td-border2 text-center" style="vertical-align: bottom">
                                        <h5 class="colorblack mb-0">
                                            <hr>
                                        </h5>
                                        <h5 class="colorblack mb-0">ຜູ້ຖືກມອບອຳນາດ</h5>
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