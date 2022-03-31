<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Create Post</h2></div>
                <div class="card-body">
                    <form method="post" action="{{route('post')}}">
                        <div class="form-group">
                            @csrf
                            <h5>Post Title:- <br></h5>
                            <input type="text" name="title" class="form-control" required/>
                        </div>

                        <div class="form-group">
                            <h5>Post Body:- <br></h5>
                            <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                        </div><br>
{{--                        @include('comment')--}}
                        <div class="form-group">
                            <input type="submit" value="submit post" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
