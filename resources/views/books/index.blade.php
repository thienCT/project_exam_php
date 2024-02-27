{{-- resources/views/books/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Books</h2>

        @if ($books->isEmpty())
            <p>No books found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>ISBN</th>
                        <th>Publication Year</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->authorid }}</td>
                            <td>{{ $book->ISBN }}</td>
                            <td>{{ $book->pub_year }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection