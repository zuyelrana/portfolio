{{--  Add Category  --}}
<div class="modal fade" id="editAbout" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">



        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ABOUT UPDATE
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <b>Title</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="title" id="title">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <b>Description</b>
                                        <div class="form-line">
                                            <textarea id="description" rows="5" name="description"
                                                class="form-control no-resize"
                                                placeholder="Please type what you want..." required
                                                autofocus></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <b>Old Image</b>
                                    <div class="form-group form-float">
                                        <img src="@if(isset($item->photo)) {{ asset('/').$item->photo }}  @endif"
                                            style="height: 100px; width: 100px" alt="">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <b>New Image</b>
                                    <div class="form-group form-float">
                                        <img src="{{ asset('/') }}backend/images/user.png"
                                            style="height: 100px; width: 100px" alt="" id="ab">
                                        <input type="file" class="custom-file-input" accept="image/*" name="photo"
                                          style="height: 100px; width: 100px" id="photo" onchange="showImage(this, 'ab')">
                                        <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary  m-l-15 waves-effect">UPDATE</button>
                                    <button type="button" class="btn btn-danger waves-effect"
                                        data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                            <input type="hidden" id="about_id" name="id" value="">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
