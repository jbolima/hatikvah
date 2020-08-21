@extends('master')
@section('content')
    <h2>Your Messages</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <th>From</th>
            <th>To</th>
            <th>Message</th>
            <th>Created at</th>
            <th>Actions</th>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->email_from }}</td>
                    <td>{{ $message->email_to }}</td>
                    <td>{!! $message->message !!}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>
                        <a class="replayTo" data-incoming="{{ $message->incoming }}"
                           data-email-from="{{ $message->email_from }}" data-email-to="{{ $message->email_to }}"
                           href="#">
                            replay<i class="glyphicon glyphicon-send"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('inc.contactus-form')
@endsection
@section('scripts')
    <script>
        $(function () {
            $('.replayTo').on('click', function () {
                $('#email').val(!$(this).data('incoming') ? $(this).data('email-from') : $(this).data('email-to'));
            });
        });
    </script>
@endsection
