<a href="{{ route('admin.master.edit', $model->id) }}" class="btn btn-outline-primary btn-sm btn-pill"><i class="fadeIn animated bx bx-edit-alt"></i>Edit</a>
<meta name="csrf-token" content="{{ csrf_token() }}">
@method('DELETE')
<button type="button" class="delete btn btn-outline-danger btn-sm btn-pill"><i class="fadeIn animated bx bx-trash"></i>Delete</button>
