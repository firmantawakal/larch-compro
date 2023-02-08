<h6 class="card-title">Section 2</h6>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="col-form-label">Title 1</label>
            <input type="text" name="section2_title1" value="{{$dt_home->section2_title1}}" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="col-form-label">Subtitle 1</label>
            <input type="text" name="section2_subtitle1" value="{{$dt_home->section2_subtitle1}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Content 1</label>
            <textarea class="form-control" name="section2_content1" id="" rows="2">{{$dt_home->section2_content1}}</textarea>
        </div>
        <div class="mb-3">
            <label class="col-form-label">Image 1</label>
            <input type="file" class="form-control" name="section2_image1" id="">
            <input type="hidden" name="section2_image1_old" value="{{$dt_home->section2_image1}}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="col-form-label">Title 2</label>
            <input type="text" name="section2_title2" value="{{$dt_home->section2_title2}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Subtitle 2</label>
            <input type="text" name="section2_subtitle2" value="{{$dt_home->section2_subtitle2}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Content 2</label>
            <textarea class="form-control" name="section2_content2" id="" rows="2">{{$dt_home->section2_content2}}</textarea>
        </div>
        <div class="mb-3">
            <label class="col-form-label">Image 2</label>
            <input type="file" class="form-control" name="section2_image2" id="">
            <input type="hidden" name="section2_image2_old" value="{{$dt_home->section2_image2}}">
        </div>
    </div>
</div>