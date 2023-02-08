<h6 class="card-title">Section 4</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 1</label>
                                    <input type="text" name="section4_title1" value="{{$dt_home->section4_title1}}" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="col-form-label">Title 2</label>
                                    <input type="text" name="section4_title2" value="{{$dt_home->section4_title2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Image</label>
                                    <input type="file" class="form-control" name="section4_image" id="">
                                    <input type="hidden" name="section4_image_old" value="{{$dt_home->section4_image}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">List 1</label>
                                    <textarea class="form-control" name="section4_list1" id="" rows="2">{{$dt_home->section4_list1}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 2</label>
                                    <textarea class="form-control" name="section4_list2" id="" rows="2">{{$dt_home->section4_list2}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 3</label>
                                    <textarea class="form-control" name="section4_list3" id="" rows="2">{{$dt_home->section4_list3}}</textarea>
                                </div>
                                
                            </div>
                        </div>