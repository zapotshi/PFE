@props(['organizations'])

@if ($organizations->isEmpty())

  <div class="pt-3 pb-2">
    <h4 class="text-muted">No organizations found.</h4>
  </div>
@else
  <div class="table-responsive">
    <table class="table table-hover table-striped align-middle">
      <thead>
        <tr>
          <th>Name</th>
          <th>Website</th>
          <th>Address</th>
          <th>Projects count</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($organizations as $organization)
          <tr>
            <td>{{ $organization->name }}</td>
            <td><a href="{{ $organization->website }}" class="text-decoration-none">{{ $organization->website }}</a></td>
            <td>{{ $organization->address }}</td>
            <td>{{ $organization->projects_count }}</td>
            <td>
              <div class="d-flex gap-1">
                @can('view', $organization)
                  <x-buttons.anchor :href="route('organizations.show', $organization)" content="Show" size="sm" color="primary" />
                @endcan
                @can('update', $organization)
                  <x-buttons.anchor :href="route('organizations.edit', $organization)" content="Edit" size="sm" color="warning" />
                @endcan
                @can('delete', $organization)
                  <x-buttons.form :action="route('organizations.destroy', $organization)" content="Delete" size="sm" color="danger" />
                @endcan
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="mt-3">
    {{ $organizations->links() }}
  </div>
@endif