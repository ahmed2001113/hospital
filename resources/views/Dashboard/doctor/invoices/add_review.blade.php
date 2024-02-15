 <!-- Modal -->
<div class="modal fade" id="add_review{{$invoice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('doctor/sidebar.select_review')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('add_review')}}" method="POST">
            @csrf
            <div class="modal-body">

                <input type="hidden" name="invoice_id" value="{{$invoice->id}}">
                <input type="hidden" name="patient_id" value="{{$invoice->patient_id}}">
                <input type="hidden" name="doctor_id" value="{{$invoice->doctor_id}}">

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">{{trans('doctor/sidebar.diagnosiss')}}</label>
                    <textarea class="form-control" name="diagnosis" rows="6"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">{{trans('doctor/sidebar.medication')}}</label>
                    <textarea class="form-control" name="medicine" rows="6"></textarea>
                </div>


                <div class="form-group" style="position:relative;">
                    <label>{{trans('doctor/sidebar.review_date')}}</label>
                    <input class="form-control fc-datepicker" id="review_date" name="review_date" type="text" required>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('doctor/sidebar.close')}}</button>
                <button type="submit" class="btn btn-primary">{{trans('doctor/sidebar.submit')}}</button>
            </div>
            </form>
        </div>
    </div>
</div> 
<!-- Modal -->
