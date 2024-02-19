


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Profile</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Date of Birth:</th>
                                    <td>{{ $user->date_of_birth }}</td>
                                </tr>
                                <tr>
                                    <th>Profile Pic:</th>
                                    <td>
                                        @if($user->avatar)
                                            <img src="{{ asset($user->avatar) }}" alt="Profile Picture" style="max-width: 150px;">
                                        @else
                                            No Profile Picture
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
