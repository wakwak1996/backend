@extends('backend.layouts.main')

@section('content')
<br/>
    <strong> Here u will enter new post </strong><br/>
    <form class="form-inline" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="sr-only" for="title"> Add Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
        </div><br/>
        <div class="form-group">
            <label class="sr-only" for="content"> Add Title</label>
            <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter Content"></textarea>
        </div><br/>
        <div class="form-group">
            <label class="sr-only" for="exampleInputFile"> File photo</label>
            <input type="file" id="photo" name="photo">
        </div><br/>

        <button type="submit" class="btn btn-default">Save</button>
    </form>

@endsection
