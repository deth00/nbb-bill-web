<div>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນລູກຄ້າ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນລູກຄ້າ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <!-- <div class="col-2">
                        <div class="form-group">
                            <div wire:ignore>
                                <div class="input-group">
                                    <select class="form-control" name="branch_id" id="branch_id" wire:model="branch_id">
                                        <option value="">ກະລຸນາເລືອກສາຂາກ່ອນ</option>
                                        <option value="0201">ສຳນັກງານໃຫຍ່</option>
                                        <option value="0301">ສາຂາອຸດົມໄຊ</option>
                                        <option value="0401">ສາຂາຊຽງຂວາງ</option>
                                        <option value="0501">ສາຂາຫຼວງພະບາງ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-2">
                        <div class="form-group">
                            <div>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ວັນທີ</button>
                                    </span>
                                    <input type="date" name="start" id="start"
                                        class="form-control @error('start') is-invalid @enderror" wire:model="start">
                                    @error('start') <span style="color: red"
                                        class="error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <div>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ຫາ</button>
                                    </span>
                                    <input type="date" name="end" id="end"
                                        class="form-control @error('end') is-invalid @enderror" wire:model="end">
                                    @error('end') <span style="color: red" class="error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <button class="btn btn-info phetsarath-font" wire:click="searchData"><i
                                class="mdi mdi-file-search-outline"></i>
                            ຄົ້ນຫາ</button>
                        <button class="btn btn-primary phetsarath-font" wire:click="showPrint">
                            ພິມ</button>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
                {{$data2}}
                <div class="row">
                    <div class="col-lg-12">
                        <table border="1" width="100%">

                            <thead>
                                <tr class="text-center">
                                    <th class="p-2"> <div class="btn-switch btn-switch-success">
                                            <input type="checkbox" id="input-btn-switch-primary99"  wire:click="$toggle('selected')" onclick="toggle(this)">
                                            <label for="input-btn-switch-primary99"
                                                class="btn btn-rounded btn-success waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ທັງໝົດ </strong>
                                            </label>
                                        </div> </th>
                                    <th class="p-2"> ລຳດັບ </th>
                                    <th class="p-2"> ເລກບັນຊີ </th>
                                    <th class="p-2"> ຊື່ ແລະ ນາມສະກຸນ </th>
                                    <th class="p-2"> ເບິໂທ </th>
                                    <th class="p-2"> ທີ່ຢູ່ </th>
                                    <th class="p-2"> ສາຂາ </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; $i = 1; @endphp
                                @if($data)
                                @forelse ($data['data'] as $key => $item)
                                <tr class="text-center">
                                    <td class="p-2">
                                        <div class="btn-switch btn-switch-primary">
                                            <input type="checkbox" id="input-btn-switch-primary{{$key}}" wire:model="selectedIds" value="{{$key}}" @if($selected !== false) checked @endif>
                                            <label for="input-btn-switch-primary{{$key}}"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເລືອກ</strong>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="p-2">{{$no++}}</td>
                                    <td class="p-2">{{$item['acno']}}</td>
                                    <td class="p-2">{{$item['firstnamela']}} {{$item['lastnamela']}}</td>
                                    <td class="p-2">{{$item['mphone']['HP']}}</td>
                                    <td class="p-2">{{$item['address']}}</td>
                                    <td class="p-2">{{$item['branch_name']}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="p-2 text-center">
                                        ບໍ່ມີຂໍ້ມູນລາຍການ</td>
                                </tr>
                                @endforelse
                                @else
                                <tr>
                                    <td colspan="7" class="p-2 text-center">
                                        ບໍ່ມີຂໍ້ມູນລາຍການ</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // $('#select-all').click(function(event) {   
        //     if(this.checked) {
        //         // Iterate each checkbox
        //         $(':checkbox').each(function() {
        //             this.checked = true;                        
        //         });
        //     } else {
        //         $(':checkbox').each(function() {
        //             this.checked = false;                       
        //         });
        //     }
        // });

        function toggle(source) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] != source)
                    checkboxes[i].checked = source.checked;
            }
        }
    </script>

<script>
var isAllCheck = false;
function togglecheckboxes(cn){

    var cbarray = document.getElementsByName(cn);
    for(var i = 0; i < cbarray.length; i++){

        if( isAllCheck == false ){
            cbarray[i].checked = true;
        }else{ 
            cbarray[i].checked = false;
        }
}   
isAllCheck = !isAllCheck;   
}
</script>

</script>
@endpush