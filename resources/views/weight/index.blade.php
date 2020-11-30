@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>
                    <div class="card-body">
                        @if (session('alert'))
                            <div class="alert alert-{{ session('alert')['alert'] }}" role="alert">
                                {{ session('alert')['message'] }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Max</th>
                                <th>Min</th>
                                <th>Perbedeaan</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items->data as $item)
                                <tr>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->max }}</td>
                                    <td>{{ $item->min }}</td>
                                    <td>{{ $item->different }}</td>
                                    <td>
                                        <a href="{{ route('weight.show', $item) }}">Show</a> |
                                        <a href="{{ route('weight.edit', $item) }}">Edit</a> |
                                        <a href="{{ route('weight.destroy', $item) }}" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $item->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('weight.destroy', $item) }}"
                                              method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td>Rata-rata</td>
                                <td>{{ $items->average_max }}</td>
                                <td>{{ $items->average_min }}</td>
                                <td>{{ $items->average_difference }}</td>
                                <td></td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="form-group row ">
                            <div class="col-md-7" style="text-align: right">
                                <a href="{{ route('weight.create') }}" class="btn btn-primary"
                                   style="text-align: right">
                                    {{ __('Tambah Data') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
