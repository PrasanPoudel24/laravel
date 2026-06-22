@extends('adminlayout.adminlayout')
@section('body')

<style>
    .blog-container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .blog-title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        border-bottom: 3px solid #007bff;
        padding-bottom: 10px;
    }

    .blog-description {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
        margin-bottom: 20px;
        text-align: justify;
    }

    .blog-image-wrapper {
        text-align: center;
        margin-top: 20px;
    }

    .blog-image-wrapper img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
</style>

<div class="blog-container">
    <div class="blog-title">{{ $blog->title }}</div>
    <div class="blog-description">{{ $blog->desc }}</div>
    <div class="blog-image-wrapper">
        <img src="{{ asset($blog->img) }}" alt="Blog Image" class="img-fluid">
    </div>
</div>
@endsection