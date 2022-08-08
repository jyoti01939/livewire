@section('content')
<div class="col-md-9 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create User</h4>
        <form class="form-sample" wire:submit.prevent="submit">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" wire:model="full_name" placeholder="Enter your Name"/>
                  @error('full_name')
                  <div class="valid-feedback msg" style="display: block;color:red;background:white;">
                    {{ $message }}
                </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">User Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" wire:model="user_name" placeholder="Enter your User Name"/>
                  @error('user_name')
                  <div class="valid-feedback msg" style="display: block;color:red;background:white;">
                    {{ $message }}
                </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" wire:model="email" placeholder="Enter your Email"/>
                  @error('email')
                  <div class="valid-feedback msg" style="display: block;color:red;background:white;">
                    {{ $message }}
                </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input class="form-control" wire:model="password" placeholder="Enter your password"/>
                  @error('password')
                  <div class="valid-feedback msg" style="display: block;color:red;background:white;">
                    {{ $message }}
                </div>
                 @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mobile</label>
                <div class="col-sm-9">
                  <input class="form-control" wire:model="mobile" placeholder="Enter your Mobile no"/>
                  @error('mobile')
                  <div class="valid-feedback msg" style="display: block;color:red;background:white;">
                    {{ $message }}
                </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Role</label>
                <div class="col-sm-9">
                <select  class="form-control" wire:model="role">
                  <option value="">----Select----</option>
                  {{--  @php
                      dd($roles);
                  @endphp  --}}
                  @foreach ($roles as $role)
                  <option value="{{ $role->id }}">{{ $role->name }}</option>
                  @endforeach
                  @error('role')
                  <div class="valid-feedback msg" style="display: block;color:red;background:white;">
                    {{ $message }}
                </div>
                  @enderror
                </select>
              </div>
            </div>
          </div>
          </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">User Details</h4>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td>{{ '1' }}</td>
                    <td>{{ 'Jyoti' }}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm font-weight-bold">Edit</a>
                        <a href="" class="btn btn-danger btn-sm font-weight-bold">Danger</a>
                    </td>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

