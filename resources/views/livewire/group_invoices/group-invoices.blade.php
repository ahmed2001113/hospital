<div >

    @if ($InvoiceSaved)
        <div class="alert alert-info">{{trans('invoices.save_done')}}</div>
    @endif

    @if ($InvoiceUpdated)
        <div class="alert alert-info">{{trans('invoices.edit_done')}}</div>
    @endif

    @if($show_table)
        @include('livewire.group_invoices.Table')
    @else
        <form wire:submit.prevent="store" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col">
                    <label>{{trans('invoices.patient_name')}}</label>
                    <select wire:model="patient_id" class="form-control" required>
                        <option value=""  >-- {{trans('invoices.choose')}} --</option>
                        @foreach($Patients as $Patient)
                            <option value="{{$Patient->id}}">{{$Patient->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col">
                    <label>{{trans('invoices.doctor_name')}}</label>
                    <select wire:model="doctor_id"  wire:change="get_section" class="form-control"  id="exampleFormControlSelect1" required>
                        <option value="" >-- {{trans('invoices.choose')}} --</option>
                        @foreach($Doctors as $Doctor)
                            <option value="{{$Doctor->id}}">{{$Doctor->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col">
                    <label>{{trans('invoices.section')}}</label>
                    @if (App::getLocale() == 'ar')
                    <input wire:model="section_id" type="text" class="form-control" readonly >
                    @else 
                    <input wire:model="section_id2" type="text" class="form-control" readonly >
                    @endif
                </div>

                <div class="col">
                    <label>{{trans('invoices.type')}}</label>
                    <select wire:model="type" class="form-control" {{$updateMode == true ? 'disabled':''}}>
                        <option value="" >-- {{trans('invoices.choose')}} --</option>
                        @if (App::getLocale() == 'ar')
                        <option value="1">نقدي</option>
                        <option value="2">اجل</option>
                        @else
                        <option value="1">Cash</option>
                        <option value="2">Deferred</option>
                        @endif
                    </select>
                </div>


            </div><br>

            <div class="row row-sm">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-0"></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped mg-b-0 text-md-nowrap" style="text-align: center">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{trans('invoices.name')}}</th>
                                        <th>{{trans('invoices.price')}}</th>
                                        <th>{{trans('invoices.discount')}}</th>
                                        <th>{{trans('invoices.tax_rate')}}</th>
                                        <th>{{trans('invoices.tax')}}</th>
                                        <th>{{trans('invoices.total_with_tax')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <select wire:model="Group_id" class="form-control" wire:change="get_price" id="exampleFormControlSelect1">
                                                <option value="">-- {{trans('invoices.choose')}} --</option>
                                                @foreach($Groups as $Group)
                                                @if (App::getLocale() == 'ar')
                                                    <option value="{{$Group->id}}">{{$Group->name}}</option>
                                                    @else
                                                    <option value="{{$Group->id}}">{{$Group->name_en}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input wire:model="price" type="text" class="form-control" readonly></td>
                                        <td><input wire:model="discount_value" type="text" class="form-control" readonly></td>
                                        <th><input wire:model="tax_rate" type="text" class="form-control" readonly ></th>
                                        <td><input type="text" class="form-control" value="{{$tax_value}}" readonly  ></td>
                                        <td><input type="text" class="form-control" readonly value="{{$subtotal + $tax_value }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- bd -->
                        </div><!-- bd -->
                    </div><!-- bd -->
                </div>
            </div>
            <input class="btn btn-outline-success" type="submit" value="{{trans('invoices.save')}}">
        </form>
    @endif

</div>

