@extends('layout.layout')

@section('body')
<x-contact.map/>
<x-contact.form/>
<x-contact.call/>
<x-service.service :data='$product'/>	
@endsection