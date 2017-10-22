<div class="row">
    <div class="col-md-6">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="posttitle">Post Title</label>
            <input type="text" name="posttitle" class="form-control" id="posttitle" placeholder="Post Title" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required="">

                <option value="">Choose..</option>
                <option value="">News</option>
                <option value="">Facebook Video</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-b-30 m-t-0 header-title">Content</h4>
            <form method="post">
                <textarea id="elm1" name="area"></textarea>
            </form>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary waves-effect waves-light">Publish</button>
<button type="submit" class="btn btn-primary waves-effect waves-light">Save Draft</button>