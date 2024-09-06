@extends('layouts.admin')
{{-- @extends('layouts.app') --}}

@section('content')
<div class="row">
    <div class="col"> 
        <a href="/{{$lang}}/admin/add-project" class="button">
            <span class="plus-icon"></span> Add
        </a>
        <div class="searchBar d-flex align-items-center">
            <input type="text" class="search-input" placeholder="Search..." name=""> 
           <a href="#"><i class="fa-solid fa-magnifying-glass"></i> </a> 
        </div>
       
    </div>
    </div>
        <table class="table table-no-border-between-columns">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                    <th>Id</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolio as $i)
                <tr>
                    <td>{{$i['title_tm']}}</td>
                    <td>{{$i['when']}}</td>
                    <td><a href="/{{$lang}}/admin/edit-project/{{$i['id']}}" class="no-line"><i class="fa fa-edit" style="font-size: 1.6rem "></i></a></td>
                    <td>{{$i['id']}}</td>
                    <td>
                        <i class="fa fa-remove" style="color: #c51616; font-size: 1.6rem; margin-left: 20px; text-align: center; cursor: pointer;"
                           onclick="deleteProject('{{$i['id']}}', '{{$lang}}');"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<div class="d-flex justify-content-center">
{{$portfolio->links()}}
</div>
@endsection
