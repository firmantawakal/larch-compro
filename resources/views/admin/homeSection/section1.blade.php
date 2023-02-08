<h6 class="card-title">Section 1</h6>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="col-form-label">Title</label>
            <input type="text" name="section1_title" value="{{$dt_home->section1_title}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Subtitle 1</label>
            <input type="text" name="section1_subtitle1" value="{{$dt_home->section1_subtitle1}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Content 1</label>
            <textarea class="form-control" name="section1_content1" id="" rows="2">{{$dt_home->section1_content1}}</textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="col-form-label">Subtitle 2</label>
            <input type="text" name="section1_subtitle2" value="{{$dt_home->section1_subtitle2}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Content 2</label>
            <textarea class="form-control" name="section1_content2" id="" rows="2">{{$dt_home->section1_content2}}</textarea>
        </div>
        <div class="mb-3">
            <label class="col-form-label">Image</label>
            <input type="file" class="form-control" name="section1_image" id="">
            <input type="hidden" name="section1_image_old" value="{{$dt_home->section1_image}}">
        </div>
    </div>
</div>