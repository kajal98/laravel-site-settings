@extends('layouts.admin')
@section('title','Site Settings')
@section('content')
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Site Settings</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home</a>
      </li>
      <li class="breadcrumb-item active">Site Settings</li>
    </ol>
    <div class="page-header-actions">
      <a href="#" class="btn btn-lg btn-icon btn-round"
        data-bgcolor="#0d2934" data-toggle="tooltip" data-original-title="Back">
        <img width="18" height="18" src="{!! asset('/images/icons/white/back.svg') !!}">
      </a>
    </div>
  </div>
  <div class="page-content container-fluid">
    @include('shared.flash')
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-md-12">
            <div class="example-wrap">
              <h4 class="example-title"></h4>
              <div class="example">
                {!! Former::vertical_open()->action( URL::route("site-settings") )->method('post') !!}
                @csrf
                <div class="form-group row">
                  <div class="col-md-6">
                    <label class="form-control-label" for="inputBasicFirstName">Title</label>
                    {!! Former::text('title')->label(false)->class('form-control')->id("inputBasicFirstName")->placeholder('Title') !!}
                  </div>
                  <div class="col-md-6">
                    <label class="form-control-label" for="inputBasicEmail">Email</label>
                    {!! Former::text('email')->label(false)->class('form-control')->id("inputBasicEmail")->placeholder('Email') !!}
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label class="form-control-label" for="inputBasicCopyright">Copyright</label>
                    {!! Former::text('copy_right')->label(false)->class('form-control')->id("inputBasicCopyright")->placeholder('Copyright') !!}
                  </div>
                  <div class="col-md-6">
                    <label class="form-control-label" for="inputBasicFacebook">Facebook</label>
                    {!! Former::text('facebook')->label(false)->class('form-control')->id("inputBasicFacebook")->placeholder('Facebook') !!}
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label class="form-control-label" for="inputBasicInstagram">Instagram</label>
                    {!! Former::text('instagram')->label(false)->class('form-control')->id("inputBasicInstagram")->placeholder('Instagram') !!}
                  </div>
                  <div class="col-md-6">
                    <label class="form-control-label" for="inputBasicTwitter">Twitter</label>
                    {!! Former::text('twitter')->label(false)->class('form-control')->id("inputBasicTwitter")->placeholder('Twitter') !!}
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label class="form-control-label" for="inputBasicYoutube">Youtube</label>
                    {!! Former::text('youtube')->label(false)->class('form-control')->id("inputBasicYoutube")->placeholder('Youtube') !!}
                  </div>
                  <div class="col-md-6">
                    <label class="form-control-label" for="inputBasicLinkedin">Linked In</label>
                    {!! Former::number('linkedin')->label(false)->class('form-control')->id("inputBasicLinkedin")->placeholder('Post Limit Per Month')->min(1) !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="animation-example">
                    <input type="submit" value="Save" name="save" class="btn btn-lg ml-15" data-color="#fff" data-bgcolor="#0d2934">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection