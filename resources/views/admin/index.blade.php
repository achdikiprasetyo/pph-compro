@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-4">
                <h1 class="display-4">Admin Dashboard</h1>
                <p class="lead">Total Articles: <span class="text-primary">{{ count($articles) }}</span></p>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $article->id }}">Delete</button>
                                </td>
                            </tr>

                            <!-- Modal for delete confirmation -->
                            <div class="modal fade" id="deleteModal{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $article->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $article->id }}">Confirm Deletion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this article?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <form action="{{ route('admin.articles.destroy', $article->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted">No articles yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-block">Create New Article</a></li>
                        <li class="list-group-item"><a href="{{ route('articles.index') }}" class="btn btn-primary btn-block">Halaman Artikel</a></li>
                        
                        <!-- Add more quick actions here -->
                    </ul>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
