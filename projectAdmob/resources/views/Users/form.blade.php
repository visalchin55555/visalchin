<div class="row">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-6">
        <div class="form-group">
            <label for="username">First Name</label>
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" value="{{ $user->firstname or '' }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="username">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Lastname" value="{{ $user->lastname or '' }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ $user->username or '' }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required="" >
                @if(!empty($user->gender))
                    @if($user->gender == 'male')
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                    @else
                        <option value="male">Male</option>
                        <option value="female" selected>Female</option>
                    @endif
                @else
                    <option value="">Choose..</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                @endif

            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required="">

                <option value="">Choose..</option>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    </div>
    <div class="col-md-6">
    @if(empty($id))
        <div class="form-group">
            <label for="confirm-password">Confrim-Password</label>
            <input data-parsley-equalto="#password" type="password" class="form-control" id="confirm-password" placeholder="Confirm-Password">
        </div>
    @endif
    </div>
</div>

<button type="submit" class="btn btn-primary waves-effect waves-light">{{ empty($id) ? 'Add User' : 'Edit User' }}</button>