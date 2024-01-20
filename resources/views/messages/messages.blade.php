@extends('layout.app')
@section('content')  
<!-- Table Start -->

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-lg-12 col-sm-8">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table"  id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User Id</th>
                                            <th scope="col">Message Body</th>
                                            <th scope="col">Response</th>
                                            <th scope="col">Urgent</th>
                                            <th scope="col">Assign to</th>
                                            {{-- <th scope="col">Reply</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                            <tr>
                                                <th scope="row">{{ $message->id }}</th>
                                                <td>{{ $message->user_id }}</td>
                                                <td>{{ $message->message_body }}</td>
                                                <td>
                                                    @if(empty($message->response))
                                                        Not responded yet
                                                    @else
                                                        {{ $message->response }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <form id="urgentForm-{{ $message->id }}">
                                                        @csrf
                                                        <input type="hidden" name="messageID" value="{{ $message->id }}" />
                                                        <button type="button" class="btn btn-{{ $message->priority ? 'danger' : 'success' }}" onclick="markAsUrgent({{ $message->id }})">
                                                            {{ $message->priority ? 'Yes' : 'No' }}
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                     {{-- <button type="button" class="btn btn-success" onclick="openAssignModal({{ $message->id }})">Assign</button> --}}
                                                   <button type="button" class="btn btn-success assign-btn" data-message-id="{{ $message->id }}" onclick="openAssignModal({{ $message->id }})">
                                                        @if($message->agent_id)
                                                            <span class="badge bg-success">{{ $message->assignedUser->name }}</span>
                                                        @else
                                                            Assign
                                                        @endif
                                                    </button>
                                                </td>
                                                
                                                
                                                
                                                {{-- <td>
                                                   <p class="btn-holder"><a href="{{ route('reply.message', ['messageId' => $message->id]) }}" class="btn btn-primary">Reply</a> </p>                                        
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
            <!-- Modal Start -->
<div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="assignModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignModalLabel">Assign to Agent</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="assignForm">
                    @csrf
                    <input type="hidden" id="messageIdInput" name="messageID" value="" />
                    <label for="agentSelect" class="form-label">Select Agent:</label>
                    <select class="form-select" id="agentSelect" name="agent_id">
                        @if(count($users) > 0)
                            @foreach($users as $agent)
                                <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                            @endforeach
                        @else
                            <option value="" disabled>No users available</option>
                        @endif
                    </select>                    
                    <button type="button" class="btn btn-success mt-3" onclick="assignAgent()">Assign</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->


@endsection
@section('scripts')
    <script>
        // Ajax JQuery script to make message as Urgent

        function markAsUrgent(messageId) {
            var form = $('#urgentForm-' + messageId);

            $.ajax({
                url: "{{ url('/urgent') }}/" + messageId,
                method: 'POST',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.message) {
                        alert(response.message);
                        form.find('button').text(response.priority ? 'Yes' : 'No');
                        form.find('button').toggleClass('btn-success btn-danger');
                    } else {
                        alert('Error updating priority');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX error:', textStatus, errorThrown);
                    alert('An error occurred while updating priority');
                }
            });
        }

    </script>
@parent
<script>
    function openAssignModal(messageId) {
        $('#messageIdInput').val(messageId);
        $('#assignModal').modal('show');
    }

    function assignAgent() {
    var form = $('#assignForm');
    var messageId = $('#messageIdInput').val();

    $.ajax({
        url: "{{ url('/assign') }}/" + messageId,
        method: 'POST',
        data: form.serialize(),
        success: function(response) {
            if (response.success) {
                alert('Agent assigned successfully');
                var buttonText = '<span class="badge bg-success">' + response.agent_name + '</span>';
                
                // Update the button text without requiring a page reload
                $('[data-message-id="' + messageId + '"]').html(buttonText);
                
                $('#assignModal').modal('hide');
            } else {
                alert('Error assigning agent');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX error:', textStatus, errorThrown);
            alert('An error occurred while assigning agent');
        }
    });
}

</script>
@endsection

