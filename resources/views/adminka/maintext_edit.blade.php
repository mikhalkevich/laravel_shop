<x-app-layout>
    <h2><a href="{{asset('/adminka/maintext')}}">Maintext Admin</a> {{$maintext->name}}</h2>
    <form action="{{asset('adminka/maintext/'.$maintext->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{$maintext->name}}">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{$maintext->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</x-app-layout>
