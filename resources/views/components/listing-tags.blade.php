@props(['tagsCsv'])

@php
$tags = explode(',',$tagsCsv);

@endphp


<ul class="flex p-0 m-0">
    @foreach($tags as $tag)
<li class="d-inline">
    <a href="/?tag={{$tag}}" class="bg-dark badge badge-primary">{{$tag}}</a>
</li>
    @endforeach
</ul>