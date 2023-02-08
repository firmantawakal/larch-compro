<h6 class="card-title">Section 3</h6>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="col-form-label">Title</label>
            <input type="text" name="section3_title" value="{{$dt_home->section3_title}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Content</label>
            <textarea class="form-control" name="section3_content" id="" rows="2">{{$dt_home->section3_content}}</textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="col-form-label">Image</label>
            <input type="file" class="form-control" name="section3_image" id="">
            <input type="hidden" name="section3_image_old" value="{{$dt_home->section3_image}}">
        </div>
    </div>
</div>