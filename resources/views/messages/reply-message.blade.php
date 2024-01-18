@extends('layout.app')
@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
 <!-- Form Start -->
 <div class="col-lg-12 col-sm-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Reply Message For USER  ID : {{ $message->user_id }} </h6>
        <form method="POST" action="{{ route('reply.store', ['messageId' => $message->id]) }}">

            @csrf
            
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;" name="message_body">{{ $message->message_body }}</textarea>
            <label for="floatingTextarea">Message</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;" name="message_response">{{ $message->response ?? 'Not responded yet' }}</textarea>
            <label for="floatingTextarea">Reply</label>
        </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" name="reply_now">Send Reply</button>
            </div>
        </form>
    </div>
</div>

</div>

</div>
<!-- Form End -->


@endsection

