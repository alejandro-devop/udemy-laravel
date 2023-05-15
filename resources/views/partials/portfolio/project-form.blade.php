@csrf
<label>
	Título <br>
	<input type="text" name="title" value="{{old('title', $project->title)}}" />
</label><br>
<label>
	Imagen <br>
	<input type="file" name="image" value="{{old('image', $project->image)}}" />
</label><br>
<label>
	Slug <br>
	<input type="text" name="slug" value="{{old('slug', $project->slug)}}" />
</label><br>
<label>
	Descripción <br>
	<textarea type="text" name="description" >{{ old('description', $project->description) }}</textarea>
</label><br>
<button>{{ $bthText }}</button>