@extends('layout.layout')

@section('body')
<x-blog.blog :sample='$sample'/>
<x-service.service :data="$data"/>

@endsection