
@php
$row = $data['row']
@endphp


<div class="p-0 table-responsive">
    <div class="text-center">
        <img width="30%" src="{{ asset($row->image) }}" alt="image">
    </div>
    <table class="table">
    <tr>
        <td class="border-top-0" style="width:25%;"><strong>{{__('Page Title')}} :</strong></td>
        <td class="border-top-0">{{$row->page_slug}}</td>
    </tr>
    @if(!empty($row->title))
    <tr>
        <td><strong>{{__('Meta Title')}} :</strong></td>
        <td>{{$row->title}}</td>
    </tr>
    @endif
    @if(!empty($row->keywords))
    <tr>
        <td><strong>{{__('Meta Keywords')}} :</strong></td>
        <td>{{$row->keywords}}</td>
    </tr>
    @endif
    @if(!empty($row->description))
    <tr>
        <td colspan="2">
            <strong>{{__('Meta Description')}} :</strong>
            <br>
            <br>
            {!! $row->description !!}
        </td> 
    </tr>
    @endif
    </table>
</div>