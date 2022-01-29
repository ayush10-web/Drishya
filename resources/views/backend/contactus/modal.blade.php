<!-- Modal -->
<div class="modal fade" id="exampleModal{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="width: 350px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="content">
              <div class="row">
                  <div class="col-md-6">
                    <h5>Name:</h5> {{$contact->name}}
                  </div>
                  <div class="col-md-6">
                    <h5>Email:</h5> {{$contact->email}}
                  </div>
                  <br><br>
              </div>
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-6">
                    <h5>Contact:</h5> {{$contact->contact_number}}
                  </div>
                  <div class="col-md-6">
                    <h5>Status:</h5> {{($contact->status)?'Unseen':'Seen'}}
                  </div>
                  <br><br>
              </div>
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-12">
                    <h5>Message:</h5> {{$contact->message}}
                  </div>
              </div>
          </div>
      
      </div>
      <div class="modal-footer">
        <a href="{{route('contact.markSeenUnseen',$contact->id)}}" class="btn btn-primary">Mark as {{($contact->status)?'Seen':'Unseen'}}</a>
        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>