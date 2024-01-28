@extends('layout.app')
@section('content')

    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-lg-12 col-md-6 mt-4">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Unreplied Messages</h6>
                    <table class="table table-hover"  id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User Id</th>
                                <th scope="col">Message Body</th>
                                <th scope="col">Response</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                                <tr>
                                    <th scope="row">{{ $message->id }}</th>
                                    <td>{{ $message->user_id }}</td>
                                    <td>{{ $message->message_body }}</td>
                                    <td>
                                        @if ($messages->isEmpty())
    <p>There are no unreplied messages at the moment.</p>
@else
    @endif

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

@endsection
