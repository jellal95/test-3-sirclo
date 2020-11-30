@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>{{ __('Tanggal') }}</th>
                                <td>{{ $item->date }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Max') }}</th>
                                <td>{{ $item->max }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Min') }}</th>
                                <td>{{ $item->min }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Perbedaan') }}</th>
                                <td>{{ $item->different }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('weight.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
