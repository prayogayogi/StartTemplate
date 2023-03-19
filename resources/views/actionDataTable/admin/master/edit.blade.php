<a href="{{ route('admin.master.edit', $model->id) }}" class="btn btn-outline-primary btn-sm btn-pill">Edit</a>
<form id="logout-form" action="{{ route('admin.master.destroy', $model->id) }}" method="post" style=" float:left; margin-right:8px;">
    @csrf
    @method("DELETE")
<button type="submit" class="btn btn-outline-danger btn-sm btn-pill">Delete</button>
</form>
