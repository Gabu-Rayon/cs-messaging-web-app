@extends('layout.app')
@section('content')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-lg-12 col-md-6">
            <div class="bg-light rounded h-100 p-4">

                <h4>Messages Assigned to {{ $agent->name }}</h4>

                @if (count($agent->assignedMessages) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Message ID</th>
                                <th>Message Body</th>
                                <th>Urgent</th>
                                <th>Response</th>
                                <th>Reply</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agent->assignedMessages as $message)
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td>{{ $message->message_body }}</td>
                                    <td>
                                        @if ($message->priority)
                                            <span class="text-danger">YES</span>
                                        @else
                                            <span class="text-success">NO</span>
                                        @endif
                                    </td>
                                    <td>{{ $message->response ?? 'Not responded yet' }}</td>
                                    <td>
                                        <a href="{{ route('reply.message', ['messageId' => $message->id]) }}" class="btn btn-primary">Reply</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No messages assigned to this agent.</p>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
