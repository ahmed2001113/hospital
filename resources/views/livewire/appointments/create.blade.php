<div>
    @if($message === true)
        <script>
            alert("{{trans('appointment.1')}}")
            location.reload()
        </script>
    @endif
    @if($message2 === true)
    <script>
        alert("{{trans('appointment.2')}}")
        location.reload()
    </script>
@endif
    @if($message3 === true)
    <script>
        alert("{{trans('appointment.12')}}")
        location.reload()
    </script>
@endif
    <form wire:submit.prevent="store">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="text" name="username" wire:model="name" placeholder="{{trans('appointment.3')}}" required="">
                <span class="icon fa fa-user"></span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="email" name="email" wire:model="email" placeholder="{{trans('appointment.4')}}" required="">
                <span class="icon fa fa-envelope"></span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="exampleFormControlSelect1">{{trans('appointment.5')}}</label>
                <select name="doctor" wire:model="doctor" class="form-select" id="exampleFormControlSelect1">
                    <option value="1">{{trans('appointment.6')}}</option>
                    @foreach($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="exampleFormControlSelect1">{{trans('appointment.7')}}</label>
                <select class="form-select" name="section" wire:model="section" id="exampleFormControlSelect1">
                    <option>{{trans('appointment.6')}}</option>
                    @if (App::getLocale() == 'ar')
                    @foreach($sections as $section)
                    <option value="{{$section->id}}">{{$section->name}}</option>
                    @endforeach
                    @else
                    @foreach($sections as $section)
                    <option value="{{$section->id}}">{{$section->name_en}}</option>
                    @endforeach
                        @endif
                        

                </select>
            </div>

            <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                <input type="tel" name="phone" wire:model="phone" placeholder="{{trans('appointment.8')}}" required="">
                <span class="icon fas fa-phone"></span>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                <label for="exampleFormControlSelect1">{{trans('appointment.9')}}</label>
                <input type="date" name="appointment_patient" wire:model="appointment_patient" required
                       class="form-control">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <textarea name="notes" wire:model="notes" placeholder="{{trans('appointment.10')}}"></textarea>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                    <span class="txt">{{trans('appointment.11')}}</span></button>
            </div>
        </div>
    </form>
</div>