@extends('layouts.admin')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">Approve/Disapprove User</div>
                <div class="panel-heading">Name: - <?php echo $user->firstname.' '.$user->lastname; ?></div>

                <div class="panel-body">

                <form method="post" action="{{url('/admin/approve/'.$user->hash_key)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                  <input type="hidden" value="{{$user->hash_key }}" name="id" id="id" />

                  @if ($user->isapproved == 1)
                    
                    <input type="submit" class="btn btn-success" value="Disapprove" />
                    @else
                    <input type="submit" class="btn btn-success" value="Approve" />
                    @endif
                <a class="btn btn-success" href="{{url('/admin/users')}}">Back to Users</a>
                </form>
               
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
