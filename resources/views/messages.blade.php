@extends('layout')

@section('content')
    <h1>{{ __('views.messages.title') }}</h1>

    <div class="row">
        <div class="col col-md-8">
            <div class="border p-3">
                <h2>{{ __('views.messages.queued') }}</h2>

                <table class="table table-bordered">
                    @foreach ($queuedMessages as $queuedMessage)
                        <tr>
                            <td>{{ json_decode($queuedMessage)->uuid }}</td>
                        </tr>
                    @endforeach
                </table>

                <h2>{{ __('views.messages.failed') }}</h2>

                <table class="table table-bordered">
                    @foreach ($failedMessages as $failedMessage)
                        <tr>
                            <td>{{ $failedMessage->uuid }}</td>
                            <td class="text-center">
                                <form method="POST" action="{{ route('release', $failedMessage->uuid) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">{{ __('views.messages.release') }}</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form method="POST" action="{{ route('forget', $failedMessage->uuid) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">{{ __('views.messages.forget') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="col col-md-4">
            <div class="border p-3">
                <h2>{{ __('views.messages.new') }}</h2>

                <form method="POST" action="{{ route('add') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="text">{{ __('views.messages.text') }}:</label>
                        <textarea class="form-control @error('text') is-invalid @enderror" id="text" name="text"></textarea>

                        @error('text')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('views.messages.add') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
