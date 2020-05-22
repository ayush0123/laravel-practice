@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Entries
                <a class="btn btn-success btn-sm float-right" href="{{url('/admin/users')}}">Back to Users</a>
                </div>
                <div class="float-none"></div>
                <div class="card-body">
                @if (Session::has('entryapprove'))
                  <div class="alert alert-success">{{ Session::get('entryapprove') }}</div>
                @endif
                <table class="table">
    <thead>
      <tr>
        <th>Type</th>
        <th>Alav jalaye jane wale stahano ki sankhya </th>
        <th>Number of blankets distribution</th>
        <th>Distributed blankets by N.G.O.</th>

        <th>Total number of distributed blankets</th>
        <th>Number of shelter homes</th>
        <th>Deaths in winter</th>
        <th>Approved</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($entries as $entry) { ?>
      <tr>
        <td><?php echo $distributions[$entry->distribution_id]; ?></td>
        <td><?php echo $entry->no_of_places; ?></td>
        <td><?php echo $entry->no_of_distribution; ?></td>
        <td><?php echo $entry->distributed_blankets; ?></td>

        <td><?php echo $entry->total_distributes_blankets; ?></td>
        <td><?php echo $entry->no_of_homes; ?></td>
        <td><?php echo $entry->deaths_in_winter; ?></td>
        <td>
        @if ($entry->is_approved == 1)
        Yes
        @else
        No
        @endif
        </td>
        <td>
        <!-- <a href="{{url('/admin/approveentry/'.$entry->hash_key)}}">
        @if ($entry->is_approved == 1)
        Disapprove
        @else
        Approve
        @endif
        </a> -->

        <a class="dropdown-item" href="{{url('/admin/approveentry/'.$entry->hash_key)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('{{$entry->hash_key}}').submit();">
                                        @if ($entry->is_approved == 1)
        Disapprove
        @else
        Approve
        @endif
                                    </a>

                                    <form id="{{$entry->hash_key}}" action="{{url('/admin/approveentry/'.$entry->hash_key)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  {{ $entries->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
