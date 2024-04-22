<div>
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left d-flex align-items-center">
                    <h3 class="f_s_25 f_w_700 dark_text mr_30">ແກ້ໄຂຂໍ້ມູນໃບໂອນ</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນໃບໂອນ</li>
                    </ol>
                </div>
                <!-- <a href="" target="_bank" class="white_btn3"><i class="fa fa-print"></i></a> -->
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12 QA_section">
            <div class="card QA_table ">
                <div class="card-header">
                    <b>ແກ້ໄຂຂໍ້ມູນໃບໂອນ</b>
                    <span class="float-end"> ວັນທີ :
                        <strong>{{now()}}</strong></span>
                </div>
                <div class="card-body">
                    <div class="row mb-4">

                        <div class="col-4" style="border-left-style: solid; border-left-color: #33cc99;">
                            <div class="form-group">
                                <p>ປະເພດໃບໂອນ</p>
                                <select name="type" id="type" class="form-control" wire:model="type">
                                    <option value="OSD">ໃບໂອນຕ່າງແຂວງ</option>
                                    <option value="ISD">ໃບໂອນພາຍໃນ</option>
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <p>ຈຳນວນເງິນ</p>
                                <input type="text" name="money" wire:keydown.enter="generate" id="money"
                                    class="form-control money" placeholder="ຈຳນວນເງິນ" wire:model="money">
                            </div>
                            <div class="form-group">
                                <p>ຈຳນວນເງິນຂຽນເປັນໂຕໜັງສື</p>
                                <input type="text" name="moneyname" id="moneyname" class="form-control"
                                    placeholder="ຈຳນວນເງິນຂຽນເປັນໂຕໜັງສື" wire:model="money_name">
                            </div>
                        </div>

                        <div class="col-4" style="border-left-style: solid; border-left-color: #33cc99;">
                            <div class="form-group">
                                <p>ສຳນັກງານສົ່ງ</p>
                                <input type="text" name="branch_send" id="branch_send" class="form-control"
                                    placeholder="ສຳນັກງານສົ່ງ" wire:model="branch_send">
                            </div>
                            <div class="form-group py-2">
                                <p>ຜູ້ໂອນ</p>
                                <input type="text" name="name_aon" id="name_aon"
                                    class="form-control" placeholder="ຜູ້ໂອນ" wire:model="name_aon">
                            </div>
                            <div class="form-group">
                                <p>ໜີ້ບັນຊີ</p>
                                <input type="text" name="acno_nee" id="acno_nee" class="form-control"
                                    placeholder="ເລກບັນຊີ" wire:model="acno_nee">
                            </div>
                        </div>

                        <div class="col-4" style="border-left-style: solid; border-left-color: #33cc99;">
                            <div class="form-group">
                                <p>ສຳນັກງານຮັບ</p>
                                <input type="text" name="branch_receive" id="branch_receive" class="form-control"
                                    placeholder="ສຳນັກງານຮັບ" wire:model="branch_receive">
                            </div>
                            <div class="form-group py-2">
                                <p>ຜູ້ຮັບໂອນ</p>
                                <input type="text" name="name_hub" id="name_hub"
                                    class="form-control" placeholder="ຜູ້ຮັບໂອນ" wire:model="name_hub">
                            </div>
                            <div class="form-group">
                                <p>ມີບັນຊີ</p>
                                <input type="text" name="acno_mee" id="acno_mee" class="form-control"
                                    placeholder="ມີບັນຊີ" wire:model="acno_mee">
                            </div>
                        </div>

                        <div class="col-12">
                            <br>
                            <div class="form-group">
                                <p>ລາຍລະອຽດ</p>
                                <textarea name="note" id="note" class="form-control" wire:model="note" placeholder="ລາຍລະອຽດ"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" wire:click="store">ອັຍເດດ</button>
                    <a href="{{route('bill-aon')}}" class="btn btn-danger">ກັບຄືນ</a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
$('.money').simpleMoneyFormat();
</script>
@endpush