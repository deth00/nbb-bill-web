<div>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນໃບຖອນເງິນສົດ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນໃບຖອນເງິນສົດ</h4>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-12 QA_section">
            <div class="card QA_table ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <b>ຂໍ້ມູນໃບຖອນເງິນສົດ</b>
                        </div>
                        <div class="col-6 text-right">
                            <span> ວັນທີ :
                                <strong>{{now()}}</strong></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">

                        <div class="col-4" style="border-left-style: solid; border-left-color: #33cc99;">
                            <div class="form-group">
                                <p>ລະຫັດລູກຄ້າ</p>
                                <div class="input-group">
                                    <input type="text" id="example-input3-group2" name="example-input3-group2"
                                        class="form-control" placeholder="ລະຫັດລູກຄ້າ" wire:model="searchCus"
                                        wire:keydown.enter="searchCusData">
                                    <span class="input-group-append">
                                        <button type="button" class="btn waves-effect waves-light btn-primary"
                                            wire:click="searchCusData"><i class="fa fa-search"></i>
                                            ຄົ້ນຫາ</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <p>ໝາຍເລກບັນຊີ</p>
                                <input type="text" name="acno_fak" id="acno_fak" class="form-control"
                                    placeholder="ໝາຍເລກບັນຊີ" wire:model="acno_fak">
                            </div>
                            <div class="form-group py-2">
                                <p>ຊື່ບັນຊີ</p>
                                <input type="text" name="name_mop" id="name_mop" class="form-control"
                                    placeholder="ຊື່ບັນຊີ" wire:model="name_mop">
                            </div>
                        </div>

                        <div class="col-4" style="border-left-style: solid; border-left-color: #33cc99;">

                            <div class="form-group">
                                <p>ຈຳນວນເງິນ</p>
                                <div class="input-group">
                                    <input type="text" id="example-input3-group2" name="example-input3-group2"
                                        class="form-control" placeholder="ຈຳນວນເງິນ" value="{{number_format($money)}}"
                                        wire:keydown.enter="addMoney" disabled>
                                    <span class="input-group-append">
                                        <button type="button" class="btn waves-effect waves-light btn-primary"
                                            wire:click="addMoney"><i class="fas fa-money-bill"></i>
                                            ເພີ່ມເງິນ</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <p>ຈຳວນເງິນຕົວໜັງສື</p>
                                <input type="text" name="money_name" id="money_name" class="form-control"
                                    placeholder="ຈຳວນເງິນຕົວໜັງສື" wire:model="money_name">
                            </div>
                            <div class="form-group py-2">
                                <p>ສະກຸນເງິນ</p>
                                <input type="text" name="crc" id="crc" class="form-control" placeholder="ສະກຸນເງິນ"
                                    wire:model="crc">
                            </div>
                            
                        </div>

                        <div class="col-4" style="border-left-style: solid; border-left-color: #33cc99;">

                            <div class="form-group">
                                <p>ຄ່າທຳນຽມ</p>
                                <input type="text" name="fees" id="fees" class="form-control money"
                                    placeholder="ຄ່າທຳນຽມ" wire:model="fees">
                            </div>
                            <div class="form-group py-2">
                                <p>ເລກບັນຊີ</p>
                                <input type="text" name="acno2" id="acno2" class="form-control" placeholder="ເລກບັນຊີ"
                                    wire:model="acno2">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" wire:click="store">ບັນທຶກ</button>
                    <a href="{{route('bill-thon')}}" class="btn btn-danger">ກັບຄືນ</a>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self id="addmoney-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">ເພີ່ມຂໍ້ມູນເງິນສົດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ໃບ 100,000</label>
                                <input type="text" wire:model="san" class="form-control money" placeholder="ໃບ 100,000" wire:keydown.enter="storeMoney">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ໃບ 50,000</label>
                                <input type="text" wire:model="has" class="form-control money" placeholder="ໃບ 50,000" wire:keydown.enter="storeMoney">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ໃບ 20,000</label>
                                <input type="text" wire:model="sow" class="form-control money" placeholder="ໃບ 20,000" wire:keydown.enter="storeMoney">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ໃບ 10,000</label>
                                <input type="text" wire:model="sip" class="form-control money" placeholder="ໃບ 10,000" wire:keydown.enter="storeMoney">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ໃບ 5,000</label>
                                <input type="text" wire:model="har" class="form-control money" placeholder="ໃບ 5,000" wire:keydown.enter="storeMoney">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ໃບ 2,000</label>
                                <input type="text" wire:model="sng" class="form-control money" placeholder="ໃບ 2,000" wire:keydown.enter="storeMoney">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ໃບ 1,000</label>
                                <input type="text" wire:model="nug" class="form-control money" placeholder="ໃບ 1,000" wire:keydown.enter="storeMoney">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ໃບ 500</label>
                                <input type="text" wire:model="hal" class="form-control money" placeholder="ໃບ 500" wire:keydown.enter="storeMoney">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">ປິດ</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light"
                        wire:click="storeMoney">ບັນທຶກ</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

@push('scripts')
<script>
$('.money').simpleMoneyFormat();
window.addEventListener('show-addmoney', event => {
    $('#addmoney-modal').modal('show');
})
window.addEventListener('hide-addmoney', event => {
    $('#addmoney-modal').modal('hide');
})
</script>
@endpush