@extends('admin.layouts.master')

@section('contents')
    <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Admin Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Profile</a></div>
              <div class="breadcrumb-item">Profile Update</div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Profile</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.profile.update' ) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')

                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Avatar</label>
                                    <div id="image-preview" class="image-preview avatar-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="avatar" id="image-upload" />
                                        <input type="hidden" name="old_avatar" value="{{ $user->avatar }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Banner</label>
                                    <div id="image-preview-2" class="image-preview banner-preview">
                                        <label for="image-upload-2" id="image-label-2">Choose File</label>
                                        <input type="file" name="banner" id="image-upload-2" />
                                        <input type="hidden" name="old_banner" value="{{ $user->banner }}" />
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="email" value="{{ $user->email }}" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" value="{{ $user->phone }}" id="phone" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address <span class="text-danger">*</span></label>
                                    <input type="text" name="address" value="{{ $user->address }}" id="address" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about">About <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="about" id="about" required>{!! $user->about !!}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" value="{{ $user->website }}" id="website" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" name="fb_link" value="{{ $user->fb_link }}" id="facebook" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="x">X</label>
                                    <input type="text" name="x_link" value="{{ $user->x_link }}" id="x" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="text" name="in_link" value="{{ $user->in_link }}" id="linkedin" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp</label>
                                    <input type="text" name="wa_link" value="{{ $user->wa_link }}" id="whatsapp" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" name="insta_link" value="{{ $user->insta_link }}" id="instagram" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

              <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Password</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.profile-password.update') }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')

                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password"  id="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="c_password">Confirm Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password_confirmation"  id="c_password" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Update Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection

@push('scripts')
<script>

    $(document).ready(function(){
        $('.avatar-preview').css({
            'background-image': 'url({{ asset($user->avatar) }})',
            'background-size': 'cover',
            'background-position': 'center center'
        });

        $('.banner-preview').css({
            'background-image': 'url({{ asset($user->banner) }})',
            'background-size': 'cover',
            'background-position': 'center center'
        });
    })


    $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false,                // Default: false
    success_callback: null          // Default: null
    });

    $.uploadPreview({
    input_field: "#image-upload-2",   // Default: .image-upload
    preview_box: "#image-preview-2",  // Default: .image-preview
    label_field: "#image-label-2",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false,                // Default: false
    success_callback: null          // Default: null
    });
  </script>
@endpush
