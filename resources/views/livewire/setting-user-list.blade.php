<table class="datatable-init table">
    <thead>
        <tr>
            <th>No</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->password_text }}</td>
                <td>
                <button class="btn btn-icon btn-sm btn-secondary rounded-circle" data-bs-toggle="modal" data-bs-target="#modalEditUser"><em class="icon ni ni-edit-alt"></em></button>
                <button onclick="destroyUser({{ $item->id }})" class="btn btn-icon btn-sm btn-danger rounded-circle"><em class="icon ni ni-trash"></em></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>