<div class="nk-block">
  <div class="card">
    <div class="nk-ecwg nk-ecwg6">
        <div class="card-inner">
          <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalCreateNewUser"><em class="icon ni ni-plus-circle"></em></em><span>Create New User</span> </button>
          
          <table class="datatable-init table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userList as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->password_text }}</td>
                        <td>
                          @if ($item->role == 'admin')
                            <span class="badge badge-dim rounded-pill bg-success">{{ $item->role }}</span>
                          @else
                            <span class="badge badge-dim rounded-pill bg-danger">{{ $item->role }}</span>
                          @endif
                        </td>
                        <td>
                          <button class="btn btn-icon btn-sm btn-secondary rounded-circle edit-button" data-id="{{$item->id}}"><em class="icon ni ni-edit-alt"></em></button>
                          
                          <button onclick="destroyUser({{$item->id}})" class="btn btn-icon btn-sm btn-danger rounded-circle"><em class="icon ni ni-trash"></em></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>