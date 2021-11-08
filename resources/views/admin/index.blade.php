@extends('admin.template')


@section('title', 'B7Bio - Home')

@section('content')

<header>
<h2>Suas páginas</h2>
</header>

<table>
    <thead>
<tr>
<th>Título</th>
<th width="20">Ações</th>
</tr>
<tbody>
    @foreach ($pages as $page)
    <tr>
        <td>{{$page->op_title}} ({{$page->slug}})</td>
        <td>
            <a href="{{url('/'.$page->slug)}}" target="_blank">Abrir</a>
            <a href="{{('/admin/'.$page->slug.'/links')}}">Links</a>
            <a href="{{('/admin/'.$page->slug.'/design')}}">Aparência</a>
            <a href="{{('/admin/'.$page->slug.'/stats')}}">Estatísticas</a>
        </td>
    </tr>
        
    @endforeach

</tbody>
    </thead>
</table>
    
@endsection