@props(['roles'])

<div class="table-responsive">
  <table class="table table-hover align-middle">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($roles as $role)
        <tr>
          <td>{{ $role->title }}</td>
          <td>
            <div class="d-flex justify-content-start gap-2">
              @can('view', $role)
                <x-buttons.anchor :href="route('roles.show', $role)" content="Show" size="sm" color="primary" />
              @endcan
              @can('update', $role)
                <x-buttons.anchor :href="route('roles.edit', $role)" content="Edit" size="sm" color="warning" />
              @endcan
              @can('delete', $role)
                <x-buttons.form :action="route('roles.destroy', $role)" content="Delete" size="sm" color="danger" />
              @endcan
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@if ($roles->hasPages())
  <div class="d-flex justify-content-center mt-4">
    {{ $roles->links() }}
  </div>
@endif
