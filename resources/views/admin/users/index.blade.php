@extends('admin.layouts.main')
@section('section')

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Permission</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->email }}</td>
                                <td>----------</td>
                                <td>----------</td>
                                <td>
                                    <form action="{{ route('post.delete', ['post' => $post]) }}" method="post">
                                  <span>
                                      <a href="{{ route('post.edit', ['post'=>$post]) }}" class="text-info"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                  </span>
                                        @csrf
                                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                            <i class="fas fa-trash  text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
