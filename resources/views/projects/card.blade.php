<div class="card p-5" style="height:200px">
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-500 pl-4 ">
        <a href="{{$project->path()}}">
            {{$project->title}}
        </a>
    </h3>
    <div class="text-gray-800">{{\Illuminate\Support\Str::limit($project->description, 100)}}</div>
</div>

