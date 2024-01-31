<a href="{{ route('projects.edit', $value->id) }}" class="btn btn-sm btn-primary edit-btn">تعديل</a>
<a href="{{ route('projects.show', $value->id) }}" class="btn btn-sm btn-primary">تفاصيل</a>
@hasrole('superadmin')
<form method="post" class="form"
  action="{{ route('projects.destroy', $value->id) }}">
  @csrf
  @method('DELETE')
  <input type="hidden" value="{{ $value->id }}" name="id">
  <button class="btn btn-danger btn-sm" type="submit"
      value="مسح">مسح</button>
</form>
@endhasrole
