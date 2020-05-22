@extends('layouts.admintemplate')

@section('content')

<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ configuration table ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                    @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                                        <div class="card-header">
                                            <h5>Users</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table id="zero-configuration" class="display table nowrap table-striped table-hover" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Mobile</th>
                                                            <th>Email</th>
                                                            <th>Address</th>
                                                            <th>Zip Code</th>
                                                            <th>Created At</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($users as $user) { ?>
      <tr>
          <td><?php echo $user->name; ?></td>
          <td><?php echo $user->mobile; ?></td>
          <td><?php echo $user->email; ?></td>
          <td><?php echo $user->address; ?></td>
          <td><?php echo $user->zipcode; ?></td>
          <td><?php echo $user->created_at; ?></td>
          <td>
          <a href="{{ url('admin/updateuser/'.$user->hash_key)}}">Update</a>
          
          
          </td>
          
          
      </tr>
       </tr>
    <?php } ?>
                                                    </tbody>
                                                </table>
                                                 {{ $users->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
