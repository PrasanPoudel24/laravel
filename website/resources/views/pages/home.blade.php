@extends('layout.layout')

@section('body')

<x-banner.banner/>	
<x-blog.blog :services="$services"/>
<x-About.About :sample='$sample'/>
<x-statistic.statistic/>
<x-immi.immi :immidata='$immidata'/>
<x-brand.brandcountry :brandcountry='$brandcountry'/>
<x-brand.brand :branddata='$branddata'/>
			
@endsection

