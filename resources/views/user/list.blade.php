@extends('admin.dashboard_admin')

@section('content')
<div class="col-xl-12 col-lg-7">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Liste des utilisateurs</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-responsive-md">
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Classe</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->classe }}</td>
                        @cannot('delete')
                             <td>{{ $user->role }}</td>
                        @endcannot
                       
                        <td><a href="{{ url('user/delete')}}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
