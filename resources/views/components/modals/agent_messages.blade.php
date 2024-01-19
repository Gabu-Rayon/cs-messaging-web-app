
    <!-- Modal Start -->
    <div class="modal fade" id="messagesModal" tabindex="-1" aria-labelledby="messagesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messagesModalLabel">Messages Assigned to Agent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="messagesList">
                            @forelse($messages as $message)
                                <li class="list-group-item">
                                    <strong>Message ID:</strong> {{ $message->id }}<br>
                                    <strong>Message Body:</strong> {{ $message->message_body }}<br>
                                    <strong>Response:</strong> {{ $message->response ?? 'Not responded yet' }}<br>
                                    <a href="{{ route('reply.message', ['messageId' => $message->id]) }}" class="btn btn-primary">Reply</a>
                                </li>
                            @empty
                                <li class="list-group-item">No messages assigned to this agent.</li>
                            @endforelse
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->