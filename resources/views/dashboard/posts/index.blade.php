@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive col-lg-8">
        @if ($user->contact_number && $user->education && $user->city && $user->province && $user->address)
            <a href="/dashboard/posts/create" class="mb-3 btn btn-primary"> Create New Post</a>
        @else
            <a href="/dashboard/posts" class="mb-3 btn btn-primary" disabled> Create New Post</a>
            <p class="mb-3 text-danger">
                <div class="alert alert-danger" role="alert">
                    Isi data diri lengkap kamu di "My Profile" sebelum mengunggah, klik <a href="/dashboard/profile" class="alert-link">di sini</a>
                </div>
            </p>
        @endif
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a class="badge bg-info" href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye"
                                    class="align-text-bottom"></a>
                            <a class="badge bg-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><span
                                    data-feather="edit" class="align-text-bottom"></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0 badge bg-danger" onclick="return confirm('are you sure ?')"><span
                                        data-feather="trash-2" class="align-text-bottom"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
