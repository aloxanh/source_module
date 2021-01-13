<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <i class="ace-icon fa fa-home home-icon"></i>

        @include('layouts.breadcrumb_child',['menuparent'=>$menucurr->parents()->get()->first()])

        <li>

            @if($menucurr->parents()!=null && $menucurr->parents()->get()->first()!=null)
            <a href="{{$menucurr->parents()->get()->first()->link}}">{{$menucurr->parents()->get()->first()->title}}</a>
            @endif
        </li>
        <li class="active">{{$menucurr->title}}</li>
    </ul><!-- /.breadcrumb -->

</div>