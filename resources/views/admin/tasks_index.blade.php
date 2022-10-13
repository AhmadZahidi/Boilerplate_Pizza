@extends('admin.layouts.master')

@section('title', 'Tasks')

@section('content')

    @component('admin.components.navbar')
        @slot('title', 'Product')
        @slot('right_comp')
            <a href="{{ route('admin.tasks.create') }}" class="btn btn-primary btn-sm">Add Product</a>
        @endslot
    @endcomponent

    <div class="container">

        <table class="table">
            <tr>
                <th width="25px">
                    #
                </th>
                <th>
                    Item
                </th>
            </tr>

            @php
                $a = 0;
            @endphp

            @foreach ($tasks as $task)
                <tr>

                    <td>{{ $a = $a + 1 }}</td>
                    <td>
                        <img height="100px" width="100px" src="{{ asset('images/' . $task->image) }}">
                    </td>
                    <td>
                        {{ $task->title }}<br />
                        {{ $task->description }}<br />
                        RM:{{ $task->price }}
                    </td>
                    <td>
                        <form action="{{ route('admin.tasks.edit', $task->id) }}" method="HEAD">
                            @csrf
                            <input type="submit" value="Update" class="btn btn-primary" style="margin:4px;">
                        </form>
                        <form action="{{ route('admin.tasks.destroy', $task->id) }}" method="POST" style="margin:4px;>
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-primary">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
