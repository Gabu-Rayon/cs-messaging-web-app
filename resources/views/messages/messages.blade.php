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
                                            <th scope="col">Argent</th>
                                            <th scope="col">Assign to</th>
                                            <th scope="col">Reply</th>
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
                                                    <form method="POST" action="/mark">
                                                        @csrf
                                                        <button type="button" class="btn btn-secondary m-2">Mark Urgent</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form method="POST" action="/mark">
                                                        @csrf
                                                        <button type="button" class="btn btn-secondary m-2">Assign Agents</button>
                                                    </form>
                                                </td>
                                                <td>
                                                   <p class="btn-holder"><a href="{{ route('reply.message', ['messageId' => $message->id]) }}" class="btn btn-primary">Reply</a> </p>                                        
                                                </td>
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

@endsection