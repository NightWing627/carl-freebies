@extends('layouts.admin')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
                    <div class="panel-actions">
                        <a href="/dashboard/home" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                        <a href="/dashboard/home" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="/dashboard/home" class="btn-close"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table bootstrap-datatable countries">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Birth</th>
                                <th>Posted</th>
                                <th>Is Admin</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (count($users)> 0)
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->first_name.' '.$user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->birth }}</td>
                                <td>{{ $user->freebies_count }}</td>
                                <td>{{ $user->is_admin ? 'YES' : 'NO' }}</td>
                                <td><a href="#"><i class="fa fa-eye text-success"></i></a></td>
                                <td>
                                    <form action="{{ route('admin.user.delete', ['id' => $user->id]) }}" method="POST" >
                                    @csrf
                                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                    </form>
                                </td> 
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </section>
</section>
@endsection