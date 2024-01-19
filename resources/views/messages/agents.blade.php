@extends('layout.app')
@section('content')

   <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-lg-12 col-md-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Agents</h6>
                    <table class="table table-hover" id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th>Messages Assigned</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <button class="btn btn-primary" onclick="openMessagesModal({{ $user->id }})">Messages</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->

   <!-- Modal Showing Agents All their Messages Assign to them -->
   @include('components.modals_agent_messages')
   <!-- Modal Showing Agents All their Messages Assign to them  End -->

    <script>
        function openMessagesModal(agentId) {
            $.ajax({
                // url: "{{ route('agent.messages', ['agentId' => ':agentId']) }}".replace(':agentId', agentId),
                url: "{{ url('/agent/messages/') }}/" + agentId,
                method: 'GET',
                success: function(response) {
                    $('#messagesList').html(response.messages);
                    $('#messagesModal').modal('show');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX error:', textStatus, errorThrown);
                    alert('An error occurred while fetching messages');
                }
            });
        }
    </script>
@endsection
